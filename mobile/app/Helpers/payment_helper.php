<?php
 
function return_url($code)
{
	return __URL__ . '/respond.php?code=' . $code;
}

function notify_url($code)
{
	return __URL__ . '/public/notify/' . $code . '.php';
}


function get_order_id_by_sn($order_sn, $voucher = 'false')
{
	if ($voucher == 'true') {
		if (is_numeric($order_sn)) {
			return $GLOBALS['db']->getOne('SELECT log_id FROM ' . $GLOBALS['ecs']->table('pay_log') . ' WHERE order_id=' . $order_sn . ' AND order_type=1');
		}
		else {
			return '';
		}
	}
	else {
		if (is_numeric($order_sn)) {
			$sql = 'SELECT order_id FROM ' . $GLOBALS['ecs']->table('order_info') . ' WHERE order_sn = \'' . $order_sn . '\'';
			$order_id = $GLOBALS['db']->getOne($sql);
		}

		if (!empty($order_id)) {
			$pay_log_id = $GLOBALS['db']->getOne('SELECT log_id FROM ' . $GLOBALS['ecs']->table('pay_log') . ' WHERE order_id=\'' . $order_id . '\'');
			return $pay_log_id;
		}
		else {
			return '';
		}
	}
}

function get_goods_name_by_id($order_id)
{
	$sql = 'SELECT goods_name FROM ' . $GLOBALS['ecs']->table('order_goods') . ' WHERE order_id = \'' . $order_id . '\'';
	$goods_name = $GLOBALS['db']->getCol($sql);
	return implode(',', $goods_name);
}

function check_money($log_id, $money)
{
	if (is_numeric($log_id)) {
		$sql = 'SELECT order_amount FROM ' . $GLOBALS['ecs']->table('pay_log') . ' WHERE log_id = \'' . $log_id . '\'';
		$amount = $GLOBALS['db']->getOne($sql);
	}
	else {
		return false;
	}

	if ($money == $amount) {
		return true;
	}
	else {
		return false;
	}
}



?>
