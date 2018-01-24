<?php

/**
 * ECSHOP 购物流程相关语言


 * $Author: liubo $
 * $Id: shopping_flow.php 17217 2011-01-19 06:29:08Z liubo $
*/

$_LANG['flow_surplus_pay'] = "The shopping process of balance payment order";

$_LANG['bt_noll_impower'] = "Sorry,you have no authorized to use BaiTiao installment!";
$_LANG['bt_noll_balance'] = "Sorry,You BaiTiao balance is insufficient!";
$_LANG['bt_go_refund'] = "Make payment";
$_LANG['bt_forbid_pay'] = "You have overdue installments have not been clear, and you have been prohibited from placing orders, please make payment!";
$_LANG['bt_overdue'] = "You have overdue BaiTIao installment have not been clear,and you have been prohibited from placing orders, please make payment!";

$_LANG['order_placed_sms'] = 'You have new order，Consignee：%s Phone no.：%s'; //互亿短信

//ecmoban模板堂 --zhuo start
$_LANG['group_stock_insufficiency'] = "Very sorry，Your selected item %s package quantity balance %d unit，You can only buy %d unit。";
//ecmoban模板堂 --zhuo end

$_LANG['flow_login_register']['username_not_null'] = 'Please enter your username';
$_LANG['flow_login_register']['username_invalid'] = 'Invalid username';
$_LANG['flow_login_register']['password_not_null'] = 'Please enter your password';
$_LANG['flow_login_register']['email_not_null'] = "Please enter your email address";
$_LANG['flow_login_register']['email_invalid'] = "Invalid email address";
$_LANG['flow_login_register']['password_not_same'] = 'The password you had entered does not match.';
$_LANG['flow_login_register']['password_lt_six'] = 'Login password must be at least 6 characters.';

$_LANG['regist_success'] = "Congratulations，%s registration successful!";
$_LANG['login_success'] = 'Congratulations！You have been successfully logged in to our website！';

/* 购物车 */
$_LANG['update_cart'] = "Update shopping cart";
$_LANG['back_to_cart'] = "Back to shopping cart";
$_LANG['update_cart_notice'] = "Update shopping cart has been successful，Please select your gift again.";
$_LANG['direct_shopping'] = 'No login, buy directly';
$_LANG['goods_not_exists'] = "Sorry，the specified item does not exists";
$_LANG['drop_goods_confirm'] = "Are you sure you want to remove this iten from your shopping cart?";
$_LANG['goods_number_not_int'] = "Please enter a valid quantity for this item";
$_LANG['stock_insufficiency'] = "Very Sorry，Your selected item %s quantity stock balance %d，You can only buy %d unit.";
$_LANG['package_stock_insufficiency'] = 'Very sorry，The number of gift packages you have selected is already out of stock. Please reduce the quantity or contact seller.';
$_LANG['shopping_flow'] = "Shopping process";
$_LANG['username_exists'] = 'Your entered username has already exists,please try another one.';
$_LANG['email_exists'] = "Your entered email address has already exists,please try another one.";
$_LANG['surplus_not_enough'] = 'Your transfer amount cannot exceed your current available balance.';
$_LANG['integral_not_enough'] = 'Your redeemed point cannot exceed your current available points';
$_LANG['integral_too_much'] = "The point you redeemed cannot exceed %d";
$_LANG['invalid_bonus'] = "Your selected bonus does not exists.";
$_LANG['invalid_value_card'] = "Your selected value card does not exists.";
$_LANG['not_submit_order'] = "Your participated group purchase item has been submitted, please do not repeat again！";
$_LANG['pay_success'] = 'Your payment has been successfully processed, We will deliver the order as soon as possible.';
$_LANG['pay_fail'] = 'Your payment has been failed, please do not hesitate to contact us.';
$_LANG['pay_disabled'] = 'The payment method that you selected has been disable.';
$_LANG['pay_invalid'] = 'You have selected an invalid payment method, payment method does not exist or has been disabled. Please contact us immediately.';
$_LANG['flow_no_shipping'] = 'You must select a distribution method.';
$_LANG['flow_no_payment'] = 'You must select a payment method.';
$_LANG['pay_not_exist'] = 'Youe selected payment method does not exists.';
$_LANG['storage_short'] = 'Insufficient inventory.';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['accessories'] = 'Accessories';
$_LANG['largess'] = 'Gift';
$_LANG['shopping_money'] = "%s";
$_LANG['than_market_price'] = 'Compare to market price %s saved %s (%s)';
$_LANG['your_discount'] = 'According to discount activity <a href="activity.php"><font color=red>%s</font></a>，You able to enjoy discount %s';
$_LANG['no'] = 'No';
$_LANG['not_support_virtual_goods'] = "There are non-physical goods in the shopping cart, we do not support anonymous purchase, please login to purchase.";
$_LANG['not_support_insure'] = 'Not support insurance';
$_LANG['clear_cart'] = "Clear shopping cart";
$_LANG['drop_to_collect'] = 'Drop to colllection';
$_LANG['password_js']['show_div_text'] = "Click to update shopping cart button";
$_LANG['password_js']['show_div_exit'] = 'Close';
$_LANG['goods_fittings'] = "Item related accessories";
$_LANG['parent_name'] = "Related item：";
$_LANG['remark_package'] = 'Super value gift package';

/* 优惠活动 */
$_LANG['favourable_name'] = 'Activity name：';
$_LANG['favourable_period'] = 'Discount period：';
$_LANG['favourable_range'] = 'Discount range：';
$_LANG['far_ext'][FAR_ALL] = 'All products';
$_LANG['far_ext'][FAR_BRAND] = 'Following brand';
$_LANG['far_ext'][FAR_CATEGORY] = 'Following categories';
$_LANG['far_ext'][FAR_GOODS] = 'Following item';
$_LANG['favourable_amount'] = 'Amount range：';
$_LANG['favourable_type'] = 'Discount type：';
$_LANG['fat_ext'][FAT_DISCOUNT] = 'Enjoy %d%% discounts';
$_LANG['fat_ext'][FAT_GOODS] = 'From the following gift（special offer item）choose %d Unit（0 indicates that is unlimited quantity）';
$_LANG['fat_ext'][FAT_PRICE] = 'Direct deduct from cash %d';

$_LANG['favourable_not_exist'] = "The discount acticity that you want added into shopping cart does not exists.";
$_LANG['favourable_not_available'] = 'You cannot enjoy this discount';
$_LANG['favourable_used'] = "This discount activity has already added into shopping cart.";
$_LANG['pls_select_gift'] = 'Please select gift（special offer item）';
$_LANG['gift_count_exceed'] = 'The gift（special offer item） that you selected has already exceed quantity limit';
$_LANG['gift_in_cart'] = "The gift（special offer item） that you selected has already added into shopping cart：%s";
$_LANG['label_favourable'] = 'Discount activity';
$_LANG['label_collection'] = 'My collection';
$_LANG['collect_to_flow'] = 'Buy Now';

/* 登录注册 */
$_LANG['forthwith_login'] = 'Login';
$_LANG['forthwith_register'] = 'Register a new username';
$_LANG['signin_failed'] = 'Sorry，login failed，please check your username and passsword.';
$_LANG['gift_remainder'] = "Note：After you log in or register, please go to the shopping cart page to re-select the gift.";

/* 收货人信息 */
$_LANG['flow_js']['consignee_not_null'] = 'Consignee name cannot be empty!';
$_LANG['flow_js']['country_not_null'] = 'Please select consignee loacated county!';
$_LANG['flow_js']['province_not_null'] = 'Please select consignee loacated province!';
$_LANG['flow_js']['city_not_null'] = 'Please select consignee loacated city!';
$_LANG['flow_js']['district_not_null'] = 'Please select consignee loacated district!';
$_LANG['flow_js']['invalid_email'] = 'Invalid email address!';
$_LANG['flow_js']['address_not_null'] = 'Consignee address detail cannot be empty!';
$_LANG['flow_js']['tele_not_null'] = 'Mobile no. or telephone no. cannot be empty!';
$_LANG['flow_js']['shipping_not_null'] = 'Please select your distribution method！';
$_LANG['flow_js']['payment_not_null'] = 'Please select your payment mehtod!';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = 'Invalid telephone no.';
$_LANG['flow_js']['zip_not_num'] = 'Postal code can only fill in numbers';
$_LANG['flow_js']['mobile_invaild'] = 'Invalid mobile no.';

$_LANG['new_consignee_address'] = 'New Address';
$_LANG['consignee_address'] = 'Address';
$_LANG['consignee_name'] = 'Consignee';
$_LANG['country_province'] = 'Distibute province';
$_LANG['please_select'] = 'Please select';
$_LANG['city_district'] = 'City/District';
$_LANG['email_address'] = "Email Address";
$_LANG['detailed_address'] = 'Detailed address';
$_LANG['postalcode'] = 'Postal code';
$_LANG['phone'] = 'Phone';
$_LANG['mobile'] = 'Mobile';
$_LANG['backup_phone'] = 'Mobile';
$_LANG['sign_building'] = 'Address alias';
$_LANG['deliver_goods_time'] = 'Best deliver time';
$_LANG['default'] = 'Default';
$_LANG['default_address'] = 'Default address';
$_LANG['confirm_submit'] = 'Confirm submit';
$_LANG['confirm_edit'] = 'Confirm edit';
$_LANG['country'] = 'Country';
$_LANG['province'] = 'State';
$_LANG['city'] = 'City';
$_LANG['area'] = 'Area';
$_LANG['consignee_add'] = 'Add Address';
$_LANG['shipping_address'] = 'Shipping to this Address ';
$_LANG['address_amount'] = 'Your shipping address can only be only up to three';
$_LANG['not_fount_consignee'] = 'Sorry，your selected shipping address does not exists.';

/*------------------------------------------------------ */
//-- 订单提交
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = "The item you purchased does not reach the minimum purchase amount of the stote %s ，order cannot be submitted.";
$_LANG['balance_not_enough'] = 'Your balance is not enough to pay for the entire order，please select others payment method.';
$_LANG['select_shipping'] = 'Select your shipping method';
$_LANG['select_payment'] = 'Select youe payment method';
$_LANG['order_amount'] = 'Your payment amount';
$_LANG['go_pay'] = 'Check Out';
$_LANG['remember_order_number'] = "Thank you for shopping! Your order has been submitted successfully, please remember your order number.";
$_LANG['back_home'] = '<a href="index.php"> Back to Home </a>';
$_LANG['goto_user_center'] = '<a href="user.php">User centre</a>';
$_LANG['order_submit_back'] = 'You can %s or go %s';

$_LANG['sms_paid'] = 'Already paid';

$_LANG['notice_gb_order_amount'] = '（Remark：If group purchase required deposit,  you only need to pay the deposit and the corresponding payment fee for the first time';

$_LANG['pay_order'] = 'Pay order %s';
$_LANG['validate_bonus'] = 'Verify bonus';
$_LANG['input_bonus_no'] = 'or enter bonus password';
$_LANG['select_bonus'] = 'Select an existing bonus';
$_LANG['bonus_sn_error'] = 'This bonus no. is invalid';
$_LANG['bonus_min_amount_error'] = "Order item amount does not reach the minimum amount of the bonus %s";
$_LANG['bonus_is_ok'] = 'This bonus no. can be use，can discount for %s';
$_LANG['select_value_card'] = 'Select binded value card';
$_LANG['input_value_card_no'] = 'or enter value card password to bind your value card';
$_LANG['bind_value_card'] = 'bind your value card';


$_LANG['shopping_myship'] = 'My shipping';
$_LANG['shopping_activity'] = 'Activity list';
$_LANG['shopping_package'] = 'Super value gift package';

/*门店 by kong 20160722*/
$_LANG['stock_store_shortage'] = "Very sorry，Your seleced item %s quantity stock balance %d，You can only buy %d unit.";
$_LANG['shop_store'] = "Store";
?>
