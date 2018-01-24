<?php

function get_top_seckill_goods()
{
	$date_begin = local_strtotime(local_date('Ymd'));
	$sql = 'SELECT sg.*,g.goods_name, g.shop_price, g.sales_volume, g.goods_thumb, g.goods_id FROM ' . $GLOBALS['ecs']->table('seckill_goods') . ' sg ' . ' LEFT JOIN ' . $GLOBALS['ecs']->table('seckill') . ' AS s ON s.sec_id = sg.sec_id ' . ' LEFT JOIN ' . $GLOBALS['ecs']->table('seckill_time_bucket') . ' AS stb ON sg.tb_id = stb.id ' . ' LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' g ON sg.goods_id = g.goods_id WHERE acti_time >= ' . $date_begin . ' AND g.goods_id <> \'\' LIMIT 5 ';
	$look_top_list = $GLOBALS['db']->getAll($sql);

	foreach ($look_top_list as $key => $look_top) {
		$look_top['goods_thumb'] = get_image_path($look_top['goods_id'], $look_top['goods_thumb'], true);
		$look_top['url'] = build_uri('seckill', array('act' => 'view', 'secid' => $look_top['id']), $look_top['goods_name']);
		$look_top_list_1[] = $look_top;
	}

	return $look_top_list_1;
}

function get_merchant_seckill_goods($sec_goods_id, $ru_id)
{
	$date_begin = local_strtotime(local_date('Ymd'));
	$sql = 'SELECT sg.id, sg.sec_price, g.goods_name, g.goods_thumb, g.sales_volume FROM ' . $GLOBALS['ecs']->table('seckill_goods') . ' sg ' . ' LEFT JOIN ' . $GLOBALS['ecs']->table('seckill') . ' AS s ON sg.sec_id = s.sec_id ' . ' LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' g ON sg.goods_id = g.goods_id ' . ' LEFT JOIN ' . $GLOBALS['ecs']->table('seckill_time_bucket') . ' AS stb ON sg.tb_id = stb.id ' . ' WHERE g.user_id = \'' . $ru_id . '\' AND acti_time >= ' . $date_begin . ' AND g.goods_id <> \'\' LIMIT 4 ';
	$merchant_seckill = $GLOBALS['db']->getAll($sql);

	foreach ($merchant_seckill as $key => $row) {
		$merchant_seckill[$key]['shop_price'] = price_format($row['sec_price'], false);
		$merchant_seckill[$key]['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
		$merchant_seckill[$key]['url'] = build_uri('seckill', array('act' => 'view', 'secid' => $row['id']), $row['goods_name']);
	}

	return $merchant_seckill;
}

define('IN_ECS', true);
require dirname(__FILE__) . '/includes/init.php';
require ROOT_PATH . 'includes/lib_area.php';
$area_info = get_area_info($province_id);
$area_id = $area_info['region_id'];
$where = 'regionId = \'' . $province_id . '\'';
$date = array('parent_id');
$region_id = get_table_date('region_warehouse', $where, $date, 2);
$keywords = (!empty($_REQUEST['keywords']) ? htmlspecialchars(trim($_REQUEST['keywords'])) : '');

if (isset($_REQUEST['keywords'])) {
	clear_all_files();
}

if ((DEBUG_MODE & 2) != 2) {
	$smarty->caching = true;
}

$user_id = (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0);
$cat_id = (isset($_REQUEST['cat_id']) && !empty($_REQUEST['cat_id']) ? intval($_REQUEST['cat_id']) : 0);
$template = 'seckill_list';

if (empty($_REQUEST['act'])) {
	if (defined('THEME_EXTENSION')) {
		$template = 'seckill';
	}

	$_REQUEST['act'] = 'list';
}

if ($_REQUEST['act'] == 'list') {
	assign_template();
	$position = assign_ur_here('seckill');
	$smarty->assign('page_title', $position['title']);
	$smarty->assign('ur_here', $position['ur_here']);
	$smarty->assign('helps', get_shop_help());
	$categories_pro = get_top_category_tree();
	$smarty->assign('categories_pro', $categories_pro);
	$seckill_list = seckill_goods_list();

	foreach ($seckill_list as $k => $v) {
		$seckill_list[$k]['begin_time_formated'] = local_date('Y-m-d H:i:s', $v['begin_time']);
		$seckill_list[$k]['end_time_formated'] = local_date('Y-m-d H:i:s', $v['end_time']);

		if ($v['status'] == true) {
			$guess_goods = $v['goods'];
		}

		if ($v['soon'] == true) {
			$will_begin = $v['goods'];
		}
	}

	if ($guess_goods) {
		foreach ($guess_goods as $uniqid => $row) {
			foreach ($row as $key => $value) {
				$arrSort[$key][$uniqid] = $value;
			}
		}

		array_multisort($arrSort['percent'], SORT_DESC, $guess_goods);
	}

	$smarty->assign('seckill_list', $seckill_list);

	if ($cat_id) {
		$cat_info = get_cat_info($cat_id, array('cat_alias_name'));
		$smarty->assign('cat_alias_name', $cat_info['cat_alias_name']);
		$smarty->assign('will_begin', $will_begin);
		$smarty->display('seckill_cat_list.dwt');
	}
	else {
		for ($i = 1; $i <= $_CFG['auction_ad']; $i++) {
			$seckill_top_ad .= '\'seckill_top_ad' . $i . ',';
		}

		$smarty->assign('seckill_top_ad', $seckill_top_ad);
		$smarty->assign('guess_goods', $guess_goods);
		$smarty->display('seckill_list.dwt');
	}
}
else if ($_REQUEST['act'] == 'view') {
	$seckill_id = (isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0);

	if ($seckill_id <= 0) {
		ecs_header("Location: ./\n");
		exit();
	}

	assign_template();
	$seckill = seckill_info($seckill_id);
	$goods_id = $seckill['goods_id'];
	if ($seckill['is_end'] && !$seckill['status']) {
		$Location = build_uri('goods', array('gid' => $seckill['goods_id']), $seckill['goods_name']);
		ecs_header('Location: ' . $Location . "\n");
	}

	if (!$seckill) {
		show_message($_LANG['now_not_snatch']);
	}

	$first_month_day = local_mktime(0, 0, 0, date('m'), 1, date('Y'));
	$last_month_day = (local_mktime(0, 0, 0, date('m'), date('t'), date('Y')) + (24 * 60 * 60)) - 1;
	$start_date = local_strtotime($seckill['begin_time']);
	$end_date = local_strtotime($seckill['end_time']);
	$position = assign_ur_here($seckill['cat_id'], $seckill['goods_name'], array(), '', $seckill['user_id']);
	$properties = get_goods_properties($goods_id, $region_id, $area_id);
	$comment_all = get_comments_percent($goods_id);
	$order_goods = get_for_purchasing_goods($start_date, $end_date, $goods_id, $_SESSION['user_id']);
	$smarty->assign('look_top', get_top_seckill_goods('click_count'));

	if ($area_info['region_id'] == NULL) {
		$area_info['region_id'] = 0;
	}

	$sql = 'select province, city, kf_type, kf_ww, kf_qq, shop_name from ' . $ecs->table('seller_shopinfo') . ' where ru_id=\'' . $goods['user_id'] . '\'';
	$basic_info = $db->getRow($sql);
	$basic_date = array('region_name');
	$basic_info['province'] = get_table_date('region', 'region_id = \'' . $basic_info['province'] . '\'', $basic_date, 2);
	$basic_info['city'] = get_table_date('region', 'region_id= \'' . $basic_info['city'] . '\'', $basic_date, 2) . '市';

	if ($basic_info['kf_ww']) {
		$kf_ww = array_filter(preg_split('/\\s+/', $basic_info['kf_ww']));
		$kf_ww = explode('|', $kf_ww[0]);

		if (!empty($kf_ww[1])) {
			$basic_info['kf_ww'] = $kf_ww[1];
		}
		else {
			$basic_info['kf_ww'] = '';
		}
	}
	else {
		$basic_info['kf_ww'] = '';
	}

	if ($basic_info['kf_qq']) {
		$kf_qq = array_filter(preg_split('/\\s+/', $basic_info['kf_qq']));
		$kf_qq = explode('|', $kf_qq[0]);

		if (!empty($kf_qq[1])) {
			$basic_info['kf_qq'] = $kf_qq[1];
		}
		else {
			$basic_info['kf_qq'] = '';
		}
	}
	else {
		$basic_info['kf_qq'] = '';
	}

	$merchant_seckill = get_merchant_seckill_goods($seckill['id'], $goods['user_id']);
	$smarty->assign('merchant_seckill_goods', $merchant_seckill);
	$goods_info = goods_info($goods_id);

	if ($GLOBALS['_CFG']['customer_service'] == 0) {
		$goods_info['user_id'] = 0;
	}

	$shop_information = get_shop_name($goods_info['user_id']);

	if ($goods_info['user_id'] == 0) {
		if ($db->getOne('SELECT kf_im_switch FROM ' . $ecs->table('seller_shopinfo') . 'WHERE ru_id = 0')) {
			$shop_information['is_dsc'] = true;
		}
		else {
			$shop_information['is_dsc'] = false;
		}
	}
	else {
		$shop_information['is_dsc'] = false;
	}

	$shop_information['goods_id'] = $goods_id;
	$smarty->assign('shop_information', $shop_information);
	$area = array('region_id' => $region_id, 'province_id' => $province_id, 'city_id' => $city_id, 'district_id' => $district_id, 'goods_id' => $goods_id, 'user_id' => $user_id, 'area_id' => $area_info['region_id'], 'merchant_id' => $seckill['user_id']);
	$properties = get_goods_properties($goods_id, $region_id, $area_info['region_id']);
	$smarty->assign('cfg', $_CFG);
	$smarty->assign('properties', $properties['pro']);
	$smarty->assign('specification', $properties['spe']);
	$region = array(1, $province_id, $city_id, $district_id);
	$shippingFee = goodsShippingFee($goods_id, $region_id, $region, $seckill['sec_price']);
	$smarty->assign('shippingFee', $shippingFee);
	$smarty->assign('ur_here', $position['ur_here']);

	if (defined('THEME_EXTENSION')) {
		$categories_pro = get_category_tree_leve_one();
		$smarty->assign('categories_pro', $categories_pro);
	}

	$smarty->assign('id', $seckill['goods_id']);
	$smarty->assign('area', $area);
	$smarty->assign('orderG_number', $order_goods['goods_number']);
	$smarty->assign('comment_all', $comment_all);
	$smarty->assign('properties', $properties['pro']);
	$smarty->assign('goods', $seckill);
	$smarty->assign('page_title', $position['title']);
	$smarty->assign('pictures', get_goods_gallery($goods_id));
	$smarty->assign('comment_percent', comment_percent($goods_id));
	$smarty->assign('basic_info', $basic_info);
	$smarty->assign('region_id', $region_id);
	$smarty->assign('area_id', $area_id);
	$smarty->assign('extend_info', get_goods_extend_info($goods_id));
	$smarty->assign('helps', get_shop_help());
	$smarty->display('seckill_goods.dwt');
}
else if ($_REQUEST['act'] == 'price') {
	include 'includes/cls_json.php';
	$json = new JSON();
	$res = array('err_msg' => '', 'err_no' => 0, 'result' => '', 'qty' => 1);
	$goods_id = (isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0);
	$attr_id = (isset($_REQUEST['attr']) ? explode(',', $_REQUEST['attr']) : array());
	$number = (isset($_REQUEST['number']) ? intval($_REQUEST['number']) : 1);
	$warehouse_id = (isset($_REQUEST['warehouse_id']) ? intval($_REQUEST['warehouse_id']) : 0);
	$area_id = (isset($_REQUEST['area_id']) ? intval($_REQUEST['area_id']) : 0);
	$onload = (isset($_REQUEST['onload']) ? trim($_REQUEST['onload']) : '');
	$goods = seckill_info($goods_id);

	if ($goods_id == 0) {
		$res['err_msg'] = $_LANG['err_change_attr'];
		$res['err_no'] = 1;
	}
	else {
		if ($number == 0) {
			$res['qty'] = $number = 1;
		}
		else {
			$res['qty'] = $number;
		}

		$res['attr_number'] = $goods['sec_num'];
	}

	exit($json->encode($res));
}
else if ($_REQUEST['act'] == 'buy') {
	if ($_SESSION['user_id'] <= 0) {
		show_message($_LANG['gb_error_login'], '', '', 'error');
	}

	$warehouse_id = (isset($_REQUEST['warehouse_id']) ? intval($_REQUEST['warehouse_id']) : 0);
	$area_id = (isset($_REQUEST['area_id']) ? intval($_REQUEST['area_id']) : 0);
	$sec_goods_id = (isset($_POST['sec_goods_id']) ? intval($_POST['sec_goods_id']) : 0);

	if ($sec_goods_id <= 0) {
		ecs_header("Location: ./\n");
		exit();
	}

	$number = (isset($_POST['number']) ? intval($_POST['number']) : 1);
	$number = ($number < 1 ? 1 : $number);
	$seckill = seckill_info($sec_goods_id, $number);

	if (empty($seckill)) {
		ecs_header("Location: ./\n");
		exit();
	}

	if (!$seckill['status']) {
		show_message($_LANG['gb_error_status'], '', '', 'error');
	}

	$specs = (isset($_POST['goods_spec']) ? htmlspecialchars(trim($_POST['goods_spec'])) : '');
	$attr_list = array();
	$sql = 'SELECT a.attr_name, g.attr_value ' . 'FROM ' . $ecs->table('goods_attr') . ' AS g, ' . $ecs->table('attribute') . ' AS a ' . 'WHERE g.attr_id = a.attr_id ' . 'AND g.goods_attr_id ' . db_create_in($specs) . ' ORDER BY a.sort_order, a.attr_id, g.goods_attr_id';
	$res = $db->query($sql);

	while ($row = $db->fetchRow($res)) {
		$attr_list[] = $row['attr_name'] . ': ' . $row['attr_value'];
	}

	$goods_attr = join(chr(13) . chr(10), $attr_list);
	$start_date = $seckill['begin_date'];
	$end_date = $seckill['end_date'];
	$order_goods = get_for_purchasing_goods($start_date, $end_date, $seckill['goods_id'], $_SESSION['user_id']);
	$restrict_amount = $number + $order_goods['goods_number'];
	include_once ROOT_PATH . 'includes/lib_order.php';

	if (!empty($_SESSION['user_id'])) {
		$sess = '';
	}
	else {
		$sess = real_cart_mac_ip();
	}

	include_once ROOT_PATH . 'includes/lib_order.php';
	clear_cart(CART_SECKILL_GOODS);
	$goods_price = (0 < isset($seckill['sec_price']) ? $seckill['sec_price'] : $seckill['shop_price']);
	$cart = array('user_id' => $_SESSION['user_id'], 'session_id' => $sess, 'goods_id' => $seckill['goods_id'], 'product_id' => $product_info['product_id'], 'goods_sn' => addslashes($seckill['goods_sn']), 'goods_name' => addslashes($seckill['goods_name']), 'market_price' => $seckill['market_price'], 'goods_price' => $goods_price, 'goods_number' => $number, 'goods_attr' => addslashes($goods_attr), 'goods_attr_id' => $specs, 'ru_id' => $seckill['user_id'], 'warehouse_id' => $region_id, 'area_id' => $area_id, 'is_real' => $seckill['is_real'], 'extension_code' => 'seckill' . $seckill['id'], 'parent_id' => 0, 'rec_type' => CART_SECKILL_GOODS, 'is_gift' => 0);
	$db->autoExecute($ecs->table('cart'), $cart, 'INSERT');
	$_SESSION['flow_type'] = CART_SECKILL_GOODS;
	$_SESSION['extension_code'] = 'seckill';
	$_SESSION['extension_id'] = $sec_goods_id;
	$_SESSION['browse_trace'] = 'seckill';
	ecs_header("Location: ./flow.php?step=checkout\n");
	exit();
}

?>
