<?php
defined('IN_ECTOUCH') or die('Deny Access');

$_LANG['flow_login_register']['username_not_null'] = 'Please enter your username';
$_LANG['flow_login_register']['username_invalid'] = 'Invalid username';
$_LANG['flow_login_register']['password_not_null'] = 'Please enter your password';
$_LANG['flow_login_register']['email_not_null'] = 'Please enter your email address';
$_LANG['flow_login_register']['email_invalid'] = 'Invalid email address';
$_LANG['flow_login_register']['password_not_same'] = 'Password does not match.';
$_LANG['flow_login_register']['password_lt_six'] = 'Password must be at least 6 characters.';

$_LANG['regist_success'] = "Congratulations，%s registration successful!";
$_LANG['login_success'] = 'Congratulations！Successfully logged in to our website!';

/* 购物车 */
$_LANG['update_cart'] = 'Update shopping cart';
$_LANG['back_to_cart'] = 'Back to shopping cart';
$_LANG['update_cart_notice'] = 'Update shopping cart successful，Please select your gift again.';
$_LANG['direct_shopping'] = 'Buy without login';
$_LANG['goods_not_exists'] = 'Sorry，we cannot find your product';
$_LANG['drop_goods_confirm'] = 'Are you sure you want to remove this item from your shopping cart?';
$_LANG['goods_number_not_int'] = 'Please enter a valid quantity';
$_LANG['stock_insufficiency'] = 'Sorry，your selected product %s balance quantity %d，max. purchase %d unit.';
$_LANG['package_stock_insufficiency'] = 'Sorry，No. of gift packages you have selected is already out of stock. Please reduce the quantity or contact seller.';
$_LANG['shopping_flow'] = 'Shopping process';
$_LANG['username_exists'] = 'This username already exists,please try another one.';
$_LANG['email_exists'] = 'This email address already exists,please try another one。';
$_LANG['surplus_not_enough'] = 'Your transfer amount cannot exceed your current available balance.';
$_LANG['integral_not_enough'] = 'Your redeemed point cannot exceed your current available points';
$_LANG['integral_too_much'] = "Your used point cannot exceed %d";
$_LANG['invalid_bonus'] = "Your selected bonus does not exists.";
$_LANG['no_goods_in_cart'] = 'Your cart is empty!';
$_LANG['not_submit_order'] = 'Your participated group purchase order has been submitted, please do not repeat this request again!';
$_LANG['pay_success'] = 'Your transaction is successful, we will ship the order ASAP.';
$_LANG['pay_fail'] = 'Your transaction is failed，please contact us ASAP';
$_LANG['pay_disabled'] = 'The payment method that you selected has been disable.';
$_LANG['pay_invalid'] = 'You have selected an invalid payment method, payment method does not exist or has been disabled. Please contact us immediately.';
$_LANG['flow_no_shipping'] = 'You must select a shipping method.';
$_LANG['flow_no_payment'] = 'You must select a payment method.';
$_LANG['pay_not_exist'] = 'Youe selected payment method does not exists.';
$_LANG['storage_short'] = 'Out of stock';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['accessories'] = 'Accessories';
$_LANG['no_accessories'] = 'No related item';
$_LANG['largess'] = 'Gift';
$_LANG['shopping_money'] = 'Subtotal amount %s';
$_LANG['than_market_price'] = 'Compare to market price %s saved  %s (%s)';
$_LANG['your_discount'] = 'According to promotion activity <a href="activity.php"><font color=red>%s</font></a>，You able to enjoy discount %s';
$_LANG['no'] = '无';
$_LANG['not_support_virtual_goods'] = 'There is(are) virtual product(s), please login before purchasing.';
$_LANG['not_support_insure'] = 'Not support insurance';
$_LANG['clear_cart'] = 'Clear shopping cart';
$_LANG['drop_to_collect'] = 'Add to favorite';
$_LANG['password_js']['show_div_text'] = 'Click to update shopping cart';
$_LANG['password_js']['show_div_exit'] = 'Close';
$_LANG['goods_fittings'] = 'Product related accessories';
$_LANG['parent_name'] = 'Related product：';
$_LANG['remark_package'] = 'Package';

/* 优惠活动 */
$_LANG['favourable_name'] = 'Activity name：';
$_LANG['favourable_period'] = 'Promotion period：';
$_LANG['favourable_range'] = 'Promotion price range：';
$_LANG['far_ext'][FAR_ALL] = 'All product';
$_LANG['far_ext'][FAR_BRAND] = 'Brand';
$_LANG['far_ext'][FAR_CATEGORY] = 'Categories';
$_LANG['far_ext'][FAR_GOODS] = 'Product';
$_LANG['favourable_amount'] = 'Price Range：';
$_LANG['favourable_type'] = 'Promotion method：';
$_LANG['fat_ext'][FAT_DISCOUNT] = 'Enjoy %d%% off';
$_LANG['fat_ext'][FAT_GOODS] = 'Please select below special gift %d unit（0 represent no limit on quantity）';
$_LANG['fat_ext'][FAT_PRICE] = 'Direct deduct from account %d';

$_LANG['favourable_not_exist'] = 'The promotion activity that you want added into shopping cart does not exists.';
$_LANG['favourable_not_available'] = 'You cannot enjoy this promotion';
$_LANG['favourable_used'] = 'This promotion activity has already added into shopping cart';
$_LANG['pls_select_gift'] = 'Please select gift';
$_LANG['gift_count_exceed'] = 'You have exceeded the gift quantity limit.';
$_LANG['gift_in_cart'] = 'The gift has already added into shopping cart：%s';
$_LANG['label_favourable'] = 'Promotion activity';
$_LANG['label_collection'] = 'my favorite';
$_LANG['collect_to_flow'] = 'Buy Now';

/* 登录注册 */
$_LANG['forthwith_login'] = 'Sign in';
$_LANG['forthwith_register'] = 'Register';
$_LANG['signin_failed'] = 'Sorry，login failed，please check your username and passsword';
$_LANG['gift_remainder'] = 'Notes：After login, please go to the shopping cart page to re-select the gift';

/* 收货人信息 */
$_LANG['flow_js']['consignee_not_null'] = 'Consignee name cannot be empty！';
$_LANG['flow_js']['country_not_null'] = 'Please select county！';
$_LANG['flow_js']['province_not_null'] = 'Please select state！';
$_LANG['flow_js']['city_not_null'] = 'Please select city！';
$_LANG['flow_js']['district_not_null'] = 'Please select area！';
$_LANG['flow_js']['invalid_email'] = 'Invalid email address';
$_LANG['flow_js']['address_not_null'] = 'Consignee detailed address cannot be empty!';
$_LANG['flow_js']['tele_not_null'] = 'Phone no. cannot be empty！';
$_LANG['flow_js']['shipping_not_null'] = 'Please select your shipping method！';
$_LANG['flow_js']['payment_not_null'] = 'Please select your payment mehtod！';
$_LANG['flow_js']['goodsattr_style'] = 1;
$_LANG['flow_js']['tele_invaild'] = 'Invalid phone no.';
$_LANG['flow_js']['zip_not_num'] = 'Postal code must be numberic';
$_LANG['flow_js']['mobile_invaild'] = 'Invalid mobile no.';

$_LANG['new_consignee_address'] = 'New shipping address';
$_LANG['consignee_address'] = 'Shipping address';
$_LANG['consignee_name'] = 'Consignee';
$_LANG['country_province'] = 'Shipping region';
$_LANG['please_select'] = 'Please select';
$_LANG['city_district'] = 'City/district';
$_LANG['email_address'] = 'Email address';
$_LANG['detailed_address'] = 'Detailed address';
$_LANG['postalcode'] = 'Postal code';
$_LANG['phone'] = 'Phone no.';
$_LANG['mobile'] = 'Mobile no.';
$_LANG['backup_phone'] = 'Mobile no.';
$_LANG['sign_building'] = 'Building Sign';
$_LANG['deliver_goods_time'] = 'Best delivery time';
$_LANG['default'] = 'Default';
$_LANG['default_address'] = 'Default Address';
$_LANG['confirm_submit'] = 'Confirm submit';
$_LANG['confirm_edit'] = 'Confirm edit';
$_LANG['country'] = 'Country';
$_LANG['province'] = 'State';
$_LANG['city'] = 'City';
$_LANG['area'] = 'Area';
$_LANG['consignee_add'] = 'Add new address';
$_LANG['shipping_address'] = 'Ship to address';
$_LANG['address_amount'] = 'Max. of 3 address can be added';
$_LANG['not_fount_consignee'] = 'Sorry, the selected address does not exists';

/*------------------------------------------------------ */
//-- 订单提交
/*------------------------------------------------------ */

$_LANG['goods_amount_not_enough'] = 'The item you purchased does not reach the min. purchase amount of the stote %s ，order cannot be submitted.';
$_LANG['balance_not_enough'] = 'Your balance is not enough to pay for the order，please select others payment method.';
$_LANG['select_shipping'] = 'Select shipping method';
$_LANG['select_payment'] = 'Select payment method';
$_LANG['order_amount'] = 'Total amount';
$_LANG['remember_order_number'] = 'Thank you for shopping! Your order has been submitted successfully, please remember your order number.';
$_LANG['back_home'] = ' Back to home';
$_LANG['goto_user_center'] = 'User center';
$_LANG['order_submit_back'] = 'You can  %s or go %s';

$_LANG['order_placed_sms'] = 'You have new order，Consignee：%s Phone：%s'; //互亿短信
$_LANG['ali_order_placed_sms'] = 'You have new order，Consignee：%s Shipping address：%s Phone：%s'; //阿里大鱼短信

$_LANG['sms_paid'] = 'Already paid';

$_LANG['notice_gb_order_amount'] = '（Remark：If group purchase deposit is required ,  you only need to pay the deposit and the corresponding payment fee for the first time）';

$_LANG['pay_order'] = 'Pay order %s';
$_LANG['validate_bonus'] = 'Verify bonus';
$_LANG['input_bonus_no'] = 'Enter bonus no.';
$_LANG['select_bonus'] = 'Select an existing bonus';
$_LANG['bonus_sn_error'] = 'Invalid bonus no.';
$_LANG['bonus_min_amount_error'] = 'Order amount did not reach the bonus min. spending amount %s';
$_LANG['bonus_is_ok'] = 'This bonus no. can be used，discount %s';

$_LANG['msg_unfilled_or_receive'] = 'Not shipped or order received';

$_LANG['shopping_myship'] = 'My shipping';
$_LANG['shopping_activity'] = 'Activity list';
$_LANG['shopping_package'] = 'Super value package list';

$_LANG['order_success'] = 'Order successful';
$_LANG['receiving_address'] = 'Shipping address';
$_LANG['msg_receiving_notnull'] = 'Consignee cannot be empty';
$_LANG['msg_contact_way_notnull'] = 'Contact method cannot be empty';
$_LANG['msg_mobile_format_error'] = 'Invalid mobile no.';
$_LANG['msg_area_notnull'] = 'Area cannot be empty';
$_LANG['msg_address_notnull'] = 'Detailed address cannot be empty';
$_LANG['msg_save_address'] = 'Max. can only save %s address';
$_LANG['add_address'] = 'Add new address';
$_LANG['address_select'] = 'Select Address';
$_LANG['not_exist_address'] = 'No shipping address';
$_LANG['edit_address'] = 'Edit address';
$_LANG['success_address'] = 'Add new address successful';
$_LANG['error_address'] = 'Add address failed';
$_LANG['no_address']= 'No address';
$_LANG['stock_store_shortage'] = "Sorry，Your selected product %s balance quantity %d，max. purchase %d unit。";
$_LANG['business_hours']= 'Business Hours';
$_LANG['location']= 'Location';
return $_LANG;
