<?php

function get_payment($code)
{
	$sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('payment') . ' WHERE pay_code = \'' . $code . '\' AND enabled = \'1\'';
	$payment = $GLOBALS['db']->getRow($sql);

	if ($payment) {
		$config_list = unserialize($payment['pay_config']);

		foreach ($config_list as $config) {
			$payment[$config['name']] = $config['value'];
		}
	}

	return $payment;
}

function order_paid($log_id, $pay_status = PS_PAYED, $note = '', $module_name = '')
{
	$module_path = BASE_PATH . 'Http/' . $module_name;
	if (!empty($module_name) && is_dir($module_path)) {
		$handler = 'order_paid_' . $module_name;

		if (require_cache($module_path . '/Helpers/' . $handler . '.php')) {
			return $handler($log_id, $pay_status = PS_PAYED, $note = '');
		}
	}

	$log_id = intval($log_id);

	if (0 < $log_id) {
		$sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('pay_log') . ' WHERE log_id = \'' . $log_id . '\'';
		$pay_log = $GLOBALS['db']->getRow($sql);
		if ($pay_log && ($pay_log['is_paid'] == 0)) {
			$sql = 'UPDATE ' . $GLOBALS['ecs']->table('pay_log') . ' SET is_paid = \'1\' WHERE log_id = \'' . $log_id . '\'';
			$GLOBALS['db']->query($sql);

			if ($pay_log['order_type'] == PAY_ORDER) {
				if (is_dir(APP_TEAM_PATH)) {
					$sql = 'SELECT main_order_id, order_id, user_id, order_sn, consignee, address, tel, mobile, shipping_id, pay_status, extension_code, extension_id, goods_amount, is_zc_order, zc_goods_id,team_id,team_parent_id,team_user_id, ' . 'shipping_fee, insure_fee, pay_fee, tax, pack_fee, card_fee, surplus, money_paid, integral_money, bonus, order_amount, discount ' . 'FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE order_id = \'' . $pay_log['order_id'] . '\'';
				}
				else {
					$sql = 'SELECT main_order_id, order_id, user_id, order_sn, consignee, address, tel, mobile, shipping_id, pay_status, extension_code, extension_id, goods_amount, is_zc_order, zc_goods_id, ' . 'shipping_fee, insure_fee, pay_fee, tax, pack_fee, card_fee, surplus, money_paid, integral_money, bonus, order_amount, discount ' . 'FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE order_id = \'' . $pay_log['order_id'] . '\'';
				}

				$order = $GLOBALS['db']->getRow($sql);
				$main_order_id = $order['main_order_id'];
				$order_id = $order['order_id'];
				$order_sn = $order['order_sn'];
				$is_zc_order = $order['is_zc_order'];
				$zc_goods_id = $order['zc_goods_id'];
				$user_id = $order['zc_goods_id'];
				if (($is_zc_order == 1) && (0 < $user_id)) {
					$sql = ' select * from ' . $GLOBALS['ecs']->table('zc_goods') . ' where id = \'' . $zc_goods_id . '\' ';
					$zc_goods_info = $GLOBALS['db']->getRow($sql);
					$pid = $zc_goods_info['pid'];
					$goods_price = $zc_goods_info['price'];
					$sql = ' UPDATE ' . $GLOBALS['ecs']->table('zc_goods') . ' SET backer_num = backer_num+1 WHERE id = \'' . $zc_goods_id . '\' ';
					$GLOBALS['db']->query($sql);
					$sql = 'SELECT backer_list FROM ' . $GLOBALS['ecs']->table('zc_goods') . ' WHERE id = \'' . $zc_goods_id . '\'';
					$backer_list = $GLOBALS['db']->getOne($sql);

					if (empty($backer_list)) {
						$backer_list = $user_id;
					}
					else {
						$backer_list = $backer_list . ',' . $user_id;
					}

					$sql = 'UPDATE ' . $GLOBALS['ecs']->table('zc_goods') . ' SET backer_list=\'' . $backer_list . '\' WHERE id = \'' . $zc_goods_id . '\'';
					$GLOBALS['db']->query($sql);
					$sql = 'UPDATE ' . $GLOBALS['ecs']->table('zc_project') . ' SET join_num=join_num+1, join_money=join_money+' . $goods_price . ' WHERE id = \'' . $pid . '\'';
					$GLOBALS['db']->query($sql);
				}

				if ($order['extension_code'] == 'presale') {
					$money_paid = $order['money_paid'] + $order['order_amount'];

					if ($order['pay_status'] == 0) {
						$order_amount = ($order['goods_amount'] + $order['shipping_fee'] + $order['insure_fee'] + $order['pay_fee'] + $order['tax']) - $order['money_paid'] - $order['order_amount'];
						$sql = 'UPDATE ' . $GLOBALS['ecs']->table('order_info') . ' SET order_status = \'' . OS_CONFIRMED . '\', ' . ' confirm_time = \'' . gmtime() . '\', ' . ' pay_status = \'' . PS_PAYED_PART . '\', ' . ' pay_time = \'' . gmtime() . '\', ' . ' money_paid = \'' . $money_paid . '\',' . ' order_amount = \'' . $order_amount . '\' ' . 'WHERE order_id = \'' . $order_id . '\'';
						$GLOBALS['db']->query($sql);
						$is_update_sale = is_update_sale($order['order_id']);
						if ((C('shop.sales_volume_time') == SALES_PAY) && ($is_update_sale == 0)) {
							get_goods_sale($order['order_id']);
						}

						order_action($order_sn, OS_CONFIRMED, SS_UNSHIPPED, PS_PAYED_PART, $note, L('buyer'));
						update_pay_log($order_id);
					}
					else {
						$sql = 'UPDATE ' . $GLOBALS['ecs']->table('order_info') . ' SET pay_status = \'' . PS_PAYED . '\', ' . ' pay_time = \'' . gmtime() . '\', ' . ' money_paid = \'' . $money_paid . '\',' . ' order_amount = 0 ' . 'WHERE order_id = \'' . $order_id . '\'';
						$GLOBALS['db']->query($sql);
						order_action($order_sn, OS_CONFIRMED, SS_UNSHIPPED, PS_PAYED, $note, L('buyer'));
					}
				}
				else {
					$sql = 'UPDATE ' . $GLOBALS['ecs']->table('order_info') . ' SET order_status = \'' . OS_CONFIRMED . '\', ' . ' confirm_time = \'' . gmtime() . '\', ' . ' pay_status = \'' . $pay_status . '\', ' . ' pay_time = \'' . gmtime() . '\', ' . ' money_paid = order_amount,' . ' order_amount = 0 ' . 'WHERE order_id = \'' . $order_id . '\'';
					$GLOBALS['db']->query($sql);
					$is_update_sale = is_update_sale($order['order_id']);
					if ((C('shop.sales_volume_time') == SALES_PAY) && ($is_update_sale == 0)) {
						get_goods_sale($order['order_id']);
					}

					create_snapshot($order_id);
					order_action($order_sn, OS_CONFIRMED, SS_UNSHIPPED, $pay_status, $note, L('buyer'));
				}

				$sql = 'SELECT order_id FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE main_order_id = \'' . $order_id . '\'';
				$child_order_id_arr = $GLOBALS['db']->getAll($sql);
				if (($main_order_id == 0) && (0 < count($child_order_id_arr))) {
					$sql = 'UPDATE ' . $GLOBALS['ecs']->table('order_info') . ' SET order_status = \'' . OS_CONFIRMED . '\', ' . ' confirm_time = \'' . gmtime() . '\', ' . ' pay_status = \'' . $pay_status . '\', ' . ' pay_time = \'' . gmtime() . '\', ' . ' money_paid = order_amount,' . ' order_amount = 0 ' . 'WHERE main_order_id = \'' . $order_id . '\'';
					$GLOBALS['db']->query($sql);
					$sql = 'SELECT order_sn ' . 'FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE main_order_id = \'' . $order_id . '\'';
					$order_res = $GLOBALS['db']->getAll($sql);

					foreach ($order_res as $row) {
						order_action($row['order_sn'], OS_CONFIRMED, SS_UNSHIPPED, $pay_status, $note, L('buyer'));
					}
				}

				$sql = 'SELECT ru_id FROM ' . $GLOBALS['ecs']->table('order_goods') . ' WHERE order_id = \'' . $order_id . '\' LIMIT 1';
				$ru_id = $GLOBALS['db']->getOne($sql);

				if ($ru_id == 0) {
					$sms_shop_mobile = $GLOBALS['_CFG']['sms_shop_mobile'];
				}
				else {
					$sql = 'SELECT mobile FROM ' . $GLOBALS['ecs']->table('seller_shopinfo') . ' WHERE ru_id = \'' . $ru_id . '\'';
					$sms_shop_mobile = $GLOBALS['db']->getOne($sql);
				}

				if (($GLOBALS['_CFG']['sms_order_payed'] == '1') && ($sms_shop_mobile != '')) {
					$message = array('consignee' => $order['consignee'], 'order_mobile' => $order['mobile']);
					send_sms($sms_shop_mobile, 'sms_order_payed', $message);
				}

				if (is_dir(APP_WECHAT_PATH)) {
					$pushData = array(
						'keyword1' => array('value' => $order_sn, 'color' => '#173177'),
						'keyword2' => array('value' => '已付款', 'color' => '#173177'),
						'keyword3' => array('value' => date('Y-m-d', gmtime()), 'color' => '#173177'),
						'keyword4' => array('value' => $GLOBALS['_CFG']['shop_name'], 'color' => '#173177'),
						'keyword5' => array('value' => number_format($pay_log['order_amount'], 2, '.', ''), 'color' => '#173177')
						);
					$order_url = __HOST__ . url('user/order/detail', array('order_id' => $order_id));
					$replace_host = array('public/notify/wxpay.php', 'public/notify/alipay.php');
					$url = str_replace($replace_host, 'index.php', $order_url);
					push_template('OPENTM204987032', $pushData, $url, $order['user_id']);
				}

				$team_id = $order['team_id'];

				if (0 < $team_id) {
					$sql = 'select g.goods_id,g.team_price,g.limit_num, g.team_num,g.validity_time,og.goods_name from ' . $GLOBALS['ecs']->table('team_log') . ' as tl LEFT JOIN ' . $GLOBALS['ecs']->table('team_goods') . ' as g ON tl.goods_id = g.goods_id LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' as og ON tl.goods_id = og.goods_id  where tl.team_id =' . $team_id . ' ';
					$res = $GLOBALS['db']->getRow($sql);
					$sql = 'SELECT count(order_id) as num  FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE team_id = \'' . $team_id . '\' AND extension_code = \'team_buy\'  and pay_status = \'' . PS_PAYED . '\' ';
					$team_count = $GLOBALS['db']->getRow($sql);

					if ($res['team_num'] <= $team_count['num']) {
						$sql = 'UPDATE ' . $GLOBALS['ecs']->table('team_log') . ' SET status = \'1\' ' . ' WHERE team_id = \'' . $team_id . '\' ';
						$GLOBALS['db']->query($sql);

						if (is_dir(APP_WECHAT_PATH)) {
							$sql = 'SELECT order_sn,user_id FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE team_id = \'' . $team_id . '\' AND extension_code = \'team_buy\'  and pay_status = \'' . PS_PAYED . '\' ';
							$team_order = $GLOBALS['db']->query($sql);

							foreach ($team_order as $key => $vo) {
								$pushData = array(
									'keyword1' => array('value' => $vo['order_sn'], 'color' => '#173177'),
									'keyword2' => array('value' => $res['goods_name'], 'color' => '#173177')
									);
								$order_url = __HOST__ . url('team/goods/teamwait', array('team_id' => $team_id));
								$replace_host = array('public/notify/wxpay.php', 'public/notify/alipay.php');
								$url = str_replace($replace_host, 'index.php', $order_url);
								push_template('OPENTM407456411', $pushData, $url, $vo['user_id']);
							}
						}
					}

					$limit_num = $res['limit_num'] + 1;
					$sql = 'UPDATE ' . $GLOBALS['ecs']->table('team_goods') . ' SET limit_num = \'' . $limit_num . '\' ' . ' WHERE goods_id = \'' . $res['goods_id'] . '\' ';
					$GLOBALS['db']->query($sql);

					if (is_dir(APP_WECHAT_PATH)) {
						if (0 < $order['team_parent_id']) {
							$pushData = array(
								'keyword1' => array('value' => $res['goods_name'], 'color' => '#173177'),
								'keyword2' => array('value' => $res['team_price'] . '元', 'color' => '#173177'),
								'keyword3' => array('value' => $res['team_num'], 'color' => '#173177'),
								'keyword4' => array('value' => '普通', 'color' => '#173177'),
								'keyword5' => array('value' => $res['validity_time'] . '小时', 'color' => '#173177')
								);
							$order_url = __HOST__ . url('team/goods/teamwait', array('team_id' => $team_id));
							$replace_host = array('public/notify/wxpay.php', 'public/notify/alipay.php');
							$url = str_replace($replace_host, 'index.php', $order_url);
							push_template('OPENTM407307456', $pushData, $url, $order['user_id']);
						}
						else {
							$pushData = array(
								'first'    => array('value' => '您好，您已参团成功'),
								'keyword1' => array('value' => $res['goods_name'], 'color' => '#173177'),
								'keyword2' => array('value' => $res['team_price'] . '元', 'color' => '#173177'),
								'keyword3' => array('value' => $res['validity_time'] . '小时', 'color' => '#173177')
								);
							$order_url = __HOST__ . url('team/goods/teamwait', array('team_id' => $team_id));
							$replace_host = array('public/notify/wxpay.php', 'public/notify/alipay.php');
							$url = str_replace($replace_host, 'index.php', $order_url);
							push_template('OPENTM400048581', $pushData, $url, $order['user_id']);
						}
					}
				}

				$virtual_goods = get_virtual_goods($order_id);

				if (!empty($virtual_goods)) {
					$msg = '';

					if (!virtual_goods_ship($virtual_goods, $msg, $order_sn, true)) {
						$pay_success = L('pay_success');
						$pay_success .= '<div style="color:red;">' . $msg . '</div>' . L('virtual_goods_ship_fail');
					}

					if ($order['shipping_id'] == -1) {
						$sql = 'UPDATE ' . $GLOBALS['ecs']->table('order_info') . ' SET shipping_status = \'' . SS_SHIPPED . '\', shipping_time = \'' . gmtime() . '\'' . ' WHERE order_id = \'' . $order_id . '\'';
						$GLOBALS['db']->query($sql);
						order_action($order_sn, OS_CONFIRMED, SS_SHIPPED, $pay_status, $note, L('buyer'));
						$integral = integral_to_give($order);
						log_account_change($order['user_id'], 0, 0, intval($integral['rank_points']), intval($integral['custom_points']), sprintf(L('order_gift_integral'), $order['order_sn']));
					}
				}
			}
			else if ($pay_log['order_type'] == PAY_SURPLUS) {
				$sql = 'SELECT `id` FROM ' . $GLOBALS['ecs']->table('user_account') . ' WHERE `id` = \'' . $pay_log['order_id'] . '\' AND `is_paid` = 1  LIMIT 1';
				$res_id = $GLOBALS['db']->getOne($sql);

				if (empty($res_id)) {
					$sql = 'UPDATE ' . $GLOBALS['ecs']->table('user_account') . ' SET paid_time = \'' . gmtime() . '\', is_paid = 1' . ' WHERE id = \'' . $pay_log['order_id'] . '\' LIMIT 1';
					$GLOBALS['db']->query($sql);
					$sql = 'SELECT user_id, amount FROM ' . $GLOBALS['ecs']->table('user_account') . ' WHERE id = \'' . $pay_log['order_id'] . '\'';
					$arr = $GLOBALS['db']->getRow($sql);
					$_LANG = array();
					include_once LANG_PATH . $GLOBALS['_CFG']['lang'] . '/user.php';
					log_account_change($arr['user_id'], $arr['amount'], 0, 0, 0, $_LANG['surplus_type_0'], ACT_SAVING);
				}
			}
			else if ($pay_log['order_type'] == PAY_REGISTERED) {
				$sql = 'SELECT id FROM ' . $GLOBALS['ecs']->table('drp_shop') . ' WHERE user_id=\'' . $pay_log['order_id'] . '\' AND `isbuy` = 1  LIMIT 1';
				$res_id = $GLOBALS['db']->getOne($sql);
				$sql = 'SELECT value FROM ' . $GLOBALS['ecs']->table('drp_config') . ' WHERE code=\'ischeck\'';
				$ischeck = $GLOBALS['db']->getOne($sql);

				if ($ischeck == 1) {
					$audit = 0;
				}
				else {
					$audit = 1;
				}

				if (empty($res_id)) {
					$time = gmtime();
					$sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('drp_shop') . '(user_id,create_time, isbuy, audit ,status) VALUES ' . '(\'' . $pay_log[order_id] . '\',\'' . $time . '\', \'1\', \'' . $audit . '\', \'1\')';
					$GLOBALS['db']->query($sql);
				}
			}
		}
		else {
			$post_virtual_goods = get_virtual_goods($pay_log['order_id'], true);

			if (!empty($post_virtual_goods)) {
				$msg = '';
				$sql = 'SELECT pay_time, order_sn FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE order_id = \'' . $pay_log['order_id'] . '\'';
				$row = $GLOBALS['db']->getRow($sql);
				$intval_time = gmtime() - $row['pay_time'];
				if ((0 <= $intval_time) && ($intval_time < (3600 * 12))) {
					$virtual_card = array();

					foreach ($post_virtual_goods as $code => $goods_list) {
						if ($code == 'virtual_card') {
							foreach ($goods_list as $goods) {
								if ($info = virtual_card_result($row['order_sn'], $goods)) {
									$virtual_card[] = array('goods_id' => $goods['goods_id'], 'goods_name' => $goods['goods_name'], 'info' => $info);
								}
							}

							$GLOBALS['smarty']->assign('virtual_card', $virtual_card);
						}
					}
				}
				else {
					$msg = '<div>' . L('please_view_order_detail') . '</div>';
				}

				$pay_success = L('pay_success');
				$pay_success .= $msg;
			}

			$virtual_goods = get_virtual_goods($pay_log['order_id'], false);

			if (!empty($virtual_goods)) {
				$pay_success = L('pay_success');
				$pay_success .= '<br />' . L('virtual_goods_ship_fail');
			}
		}
	}
}


class paypal
{
	private $API_UserName = '';
	private $API_Password = '';
	private $API_Signature = '';
	private $API_Endpoint = '';
	private $PAYPAL_URL = '';
	private $version = '65.1';
	private $nvpHeader = '';

	public function __construct()
	{
		include_once BASE_PATH . 'helpers/payment_helper.php';
		$payment = get_payment('paypal');
		$this->API_UserName = 'service-facilitator_api1.giggleday.com';
		$this->API_Password = 'AN4U2HZ5BCPHFQA4';
		$this->API_Signature = 'A5iODrqHuFsOLjaOMamc1met2hvmA4sM1klGLm4j9FKLOPcwYpqI3pti';

		if ($payment['paypal_sandbox'] == 1) {
			$this->API_Endpoint = 'https://api-3t.paypal.com/nvp';
			$this->PAYPAL_URL = 'https://www.paypal.com/cgi-bin/webscr&cmd=_express-checkout&useraction=commit&token=';
		}
		else {
			$this->API_Endpoint = 'https://api-3t.sandbox.paypal.com/nvp';
			$this->PAYPAL_URL = 'https://www.sandbox.paypal.com/cgi-bin/webscr&cmd=_express-checkout&useraction=commit&token=';
		}

		$this->nvpHeader = '&VERSION=' . urlencode($this->version) . '&PWD=' . urlencode($this->API_Password) . '&USER=' . urlencode($this->API_UserName) . '&SIGNATURE=' . urlencode($this->API_Signature);
	}

	public function get_code($order, $payment)
	{
		$token = '';
		$serverName = $_SERVER['SERVER_NAME'];
		$serverPort = $_SERVER['SERVER_PORT'];
		$url = dirname('http://' . $serverName . ':' . $serverPort . $_SERVER['REQUEST_URI']);
		$nvpstr = '';
		$paymentAmount = $order['order_amount'];
		$currencyCodeType = $payment['paypal_currency'];
		$paymentType = 'Sale';
		$data_order_id = $order['log_id'];
		$nvpstr .= '&PAYMENTREQUEST_0_AMT=' . $paymentAmount;
		$nvpstr .= '&PAYMENTREQUEST_0_PAYMENTACTION=' . $paymentType;
		$nvpstr .= '&PAYMENTREQUEST_0_CURRENCYCODE=' . $currencyCodeType;
		$nvpstr .= '&PAYMENTREQUEST_0_INVNUM=' . $data_order_id;
		$nvpstr .= '&ButtonSource=ECTouch';
		$nvpstr .= '&NOSHIPPING=1';
		$returnURL = urlencode($url . '/respond.php?code=paypal');
		$cancelURL = urlencode($url . '/respond.php?code=paypal');
		$nvpstr .= '&ReturnUrl=' . $returnURL;
		$nvpstr .= '&CANCELURL=' . $cancelURL;
		$nvpstr .= '&SolutionType=Sole';
		$nvpstr .= '&LandingPage=Billing';
		$resArray = $this->hash_call('SetExpressCheckout', $nvpstr);
		$_SESSION['reshash'] = $resArray;

		if (isset($resArray['ACK'])) {
			$ack = strtoupper($resArray['ACK']);
		}

		if (isset($resArray['TOKEN'])) {
			$token = urldecode($resArray['TOKEN']);
		}

		$payPalURL = $this->PAYPAL_URL . $token;
		$button = '<a type="button" class="box-flex btn-submit" onclick="window.open(\'' . "http://www.morecool.net/mobile/index.php?m=article&a=detail&id=68" . '\')">Pay Now</a>';
		return $button;
	}

	public function callback($data)
	{
		return $this->notify();
	}

	public function notify($data)
	{
		$token = urlencode($_REQUEST['token']);
		$nvpstr = '&TOKEN=' . $token;
		$resArray = $this->hash_call('GetExpressCheckoutDetails', $nvpstr);
		$_SESSION['reshash'] = $resArray;
		$ack = strtoupper($resArray['ACK']);

		if ($ack == 'SUCCESS') {
			$payerID = urlencode($resArray['PAYERID']);
			$currCodeType = urlencode($resArray['PAYMENTREQUEST_0_CURRENCYCODE']);
			$paymentType = urlencode($resArray['PAYMENTREQUEST_0_PAYMENTACTION']);
			$paymentAmount = urlencode($resArray['PAYMENTREQUEST_0_AMT']);
			$order_sn = urlencode($resArray['PAYMENTREQUEST_0_INVNUM']);
			$serverName = urlencode($_SERVER['SERVER_NAME']);
			$nvpstr = '&TOKEN=' . $token;
			$nvpstr .= '&PAYERID=' . $payerID;
			$nvpstr .= '&PAYMENTREQUEST_0_PAYMENTACTION=' . $paymentType;
			$nvpstr .= '&PAYMENTREQUEST_0_AMT=' . $paymentAmount;
			$nvpstr .= '&PAYMENTREQUEST_0_CURRENCYCODE=' . $currCodeType;
			$nvpstr .= '&PAYMENTREQUEST_0_INVNUM=' . $order_sn;
			$nvpstr .= '&IPADDRESS=' . $serverName;
			$nvpstr .= '&ButtonSource=';
			$resArray = $this->hash_call('DoExpressCheckoutPayment', $nvpstr);
			$ack = strtoupper($resArray['ACK']);
			if (($ack != 'SUCCESS') && ($ack != 'SUCCESSWITHWARNING')) {
				return false;
			}
			else {
				model('Payment')->order_paid($order_sn, 2);
				return true;
			}
		}
		else {
			return false;
		}
	}

	private function hash_call($methodName, $nvpStr)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->API_Endpoint);
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		$nvpreq = 'METHOD=' . urlencode($methodName) . $this->nvpHeader . $nvpStr;
		curl_setopt($ch, CURLOPT_POSTFIELDS, $nvpreq);
		$response = curl_exec($ch);
		$nvpResArray = $this->deformatNVP($response);
		$nvpReqArray = $this->deformatNVP($nvpreq);
		$_SESSION['nvpReqArray'] = $nvpReqArray;

		if (curl_errno($ch)) {
			$_SESSION['curl_error_no'] = curl_errno($ch);
			$_SESSION['curl_error_msg'] = curl_error($ch);
		}
		else {
			curl_close($ch);
		}

		return $nvpResArray;
	}

	private function deformatNVP($nvpstr)
	{
		$intial = 0;
		$nvpArray = array();

		while (strlen($nvpstr)) {
			$keypos = strpos($nvpstr, '=');
			$valuepos = (strpos($nvpstr, '&') ? strpos($nvpstr, '&') : strlen($nvpstr));
			$keyval = substr($nvpstr, $intial, $keypos);
			$valval = substr($nvpstr, $keypos + 1, $valuepos - $keypos - 1);
			$nvpArray[urldecode($keyval)] = urldecode($valval);
			$nvpstr = substr($nvpstr, $valuepos + 1, strlen($nvpstr));
		}

		return $nvpArray;
	}
}

defined('IN_ECTOUCH') || exit('Deny Access');

?>
