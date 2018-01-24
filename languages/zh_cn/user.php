<?php

/**
 * ECSHOP 用户中心语言项
 * ============================================================================
 * ============================================================================
 * $Author: liubo $
 * $Id: user.php 17217 2011-01-19 06:29:08Z liubo $
*/
$_LANG['progress'] = "Progress";
$_LANG['use_limit'] = "Limit %s can be used";
$_LANG['user_surplus_pay'] = "Member center order balance payment";

$_LANG['bind_login'] = 'Bind your account';
$_LANG['shop_reg_closed'] = 'Very sorry，currently no open registration module.';

//@author guan start
$_LANG['to_paid'] = 'Top Up';
$_LANG['label_single_sun'] = 'Comments/reviews';
$_LANG['single_success'] = 'Your reviews has been successfully submitted，it will be display on the review page after approval by administrator.';
$_LANG['single_list_lnk'] = 'Back to reviews page';
$_LANG['is_single'] = 'This order has been reviewed, please select again';
$_LANG['order_sun_single'] = 'Comments/reviews';
$_LANG['back_page_up'] = 'Back to previous page';
$_LANG['back_page_list'] = 'Go to reviews page list';
$_LANG['invalid_img_url'] = 'Invalid item image format in the album!';
$_LANG['invalid_goods_img'] = 'Invalid item image format！'; 
$_LANG['invalid_goods_thumb'] = 'Invalid item thumbnail format！';
$_LANG['invalid_img_url'] = 'Invalid item image format in the album!';
$_LANG['goods_img_too_big'] = 'The item image file size is too big to upload';
$_LANG['goods_thumb_too_big'] = 'The item thumbnail file size is too big to upload';
$_LANG['img_url_too_big'] = 'In the album, item No. %s image file size is too big to upload';
$_LANG['order_single'] = 'Order does not exists';
$_LANG['single_error'] = 'Upload failed.Please check to fill in the correct information';
$_LANG['comm_success'] = 'You have published your comments,Thank you for your support';
$_LANG['comm_error'] = 'Comments failed';
$_LANG['comm_content'] = 'Comments contents can not be empty';
$_LANG['comm_is_user'] = 'Cannot add a review for your own.';
//@author guan end

$_LANG['invalid_apply']     = 'Your have not manage your application, please come back again after the application has been completed！';

//退换货 start
$_LANG['return'] = 'Request Repair/Return';
$_LANG['return_apply'] = 'Request After Sale';
$_LANG['user_return'] ='Return by user';
$_LANG['get_goods'] = 'Returned items has already been received';
$_LANG['send_alone'] = 'Replacement item has already been sent【Separate order】';
$_LANG['send'] = 'Replacement item has already been sent';
$_LANG['refound'] = 'Refunded';
$_LANG['no_refound'] = 'Not refunded';
$_LANG['complete'] = 'Completed';
$_LANG['label_return'] = 'Return order';

$_LANG['edit_shipping_success'] = 'Your return shipping information has been successfully updated!';
$_LANG['return_info'] = 'Back to return information';
$_LANG['return_list_lnk'] = 'My return list';
$_LANG['return_exist'] = 'This order does not exists!';
$_LANG['return_not_unconfirmed'] = 'Currently order status is not "Return by user".';
$_LANG['current_os_already_receive'] ='Seller has already received the return item.';
$_LANG['already_out_goods'] ='Seller has already sent out the replacement item';
$_LANG['have_refound'] = "Seller has already refunded.";

$_LANG['rf'][RF_APPLICATION] = 'Return by buyer';
$_LANG['rf'][RF_RECEIVE] =  'Return received';
$_LANG['rf'][RF_SWAPPED_OUT_SINGLE] =  'Replacement item has been sent 【Separate order】';
$_LANG['rf'][RF_SWAPPED_OUT] =  'Replacement item has been sent';
$_LANG['rf'][RF_COMPLETE] =  'Complete';   
$_LANG['rf'][REFUSE_APPLY] =  'Application rejected';
$_LANG['ff'][FF_REFOUND] = 'Refunded';
$_LANG['ff'][FF_NOREFOUND] = 'Not refund';
$_LANG['ff'][FF_NOMAINTENANCE] =  'Not repair';
$_LANG['ff'][FF_MAINTENANCE] =  'Repaired';
$_LANG['ff'][FF_NOEXCHANGE] =  'Not replaced';
$_LANG['ff'][FF_EXCHANGE] =  'Replaced';
$_LANG['return_info'] = "Return request has already submmitted";
$_LANG['only_return_money'] = 'Only refund';
//退换货 end

//ecmoban模板堂 --zhuo start
$_LANG['cs'][OS_UNCONFIRMED] = 'Awaiting Confirmation';
$_LANG['cs'][CS_AWAIT_PAY] = 'Awaiting Payment';
$_LANG['cs'][CS_AWAIT_SHIP] = 'Awaiting Delivery';
$_LANG['cs'][CS_TO_CONFIRM] = 'Awaiting Received';
$_LANG['cs'][CS_FINISHED] = 'Completed';
$_LANG['cs'][PS_PAYING] = 'Payment is processing';
$_LANG['cs'][OS_CANCELED] = 'Cancel';
$_LANG['cs'][OS_INVALID] = 'Invalid';
$_LANG['cs'][OS_RETURNED] = 'Returned';
$_LANG['cs'][OS_SHIPPED_PART] = 'Partial shipment';
//ecmoban模板堂 --zhuo end

$_LANG['require_login'] = 'Illegal entry。<br />must login to complete the process.';

$_LANG['no_records'] = 'No record';
$_LANG['shot_message'] = "Short message";

/* 用户菜单 */
$_LANG['label_welcome'] = "My profile";
$_LANG['label_profile'] = 'User information';
$_LANG['label_order'] = 'My order';
$_LANG['label_address'] = 'Delivery address';
$_LANG['label_message'] = 'My Comments';
$_LANG['label_tag'] = 'My label tag';
$_LANG['label_collection'] = 'My favorite';
$_LANG['label_bonus'] = 'My bonus';
$_LANG['label_coupons'] = 'My coupons';
$_LANG['label_value_card'] = 'My stored value card';
$_LANG['label_comment'] = 'My comments';
$_LANG['label_affiliate'] = 'My affiliate';
$_LANG['label_group_buy'] = 'My group purchase';
$_LANG['label_booking'] = 'Booking product';
$_LANG['label_user_surplus'] = 'Manage my fund';
$_LANG['label_track_packages'] = 'Tracking my parcel';
$_LANG['label_transform_points'] = 'Point redemption';
$_LANG['label_auction'] = 'Auction activity';
$_LANG['label_snatch'] = 'Snatch';
$_LANG['label_logout'] = 'Logout';

/* 会员余额(预付款) */
$_LANG['add_surplus_log'] = 'View account details';
$_LANG['view_application'] = 'View application record';
$_LANG['surplus_pro_type'] = 'Type';
$_LANG['repay_money'] = 'Withdrawal cash';
$_LANG['money'] = 'Amount';
$_LANG['surplus_type_0'] = 'Top up';
$_LANG['surplus_type_1'] = 'Withdrawal';
$_LANG['deposit_money'] = 'Top up amount';
$_LANG['process_notic'] = 'User remark';
$_LANG['admin_notic'] = 'Admin remark';
$_LANG['submit_request'] = 'Submit request';
$_LANG['process_time'] = 'Operate time';
$_LANG['use_time'] = 'Use time';
$_LANG['is_paid'] = 'Status';
$_LANG['is_confirmed'] = 'Completed';
$_LANG['un_confirmed'] = 'Not confirm';
$_LANG['pay'] = 'Make payment';
$_LANG['is_cancel'] = 'Cancel';
$_LANG['account_inc'] = 'Add';
$_LANG['account_dec'] = 'Minus';
$_LANG['change_desc'] = 'Remark';
$_LANG['surplus_amount'] = 'Your top up amount：';
$_LANG['payment_name'] = 'Your selected payment method：';
$_LANG['payment_fee'] = 'Payment fees：';
$_LANG['payment_desc'] = 'Payment method description：';
$_LANG['current_surplus'] = 'Your available balance：';
$_LANG['unit_yuan'] = 'Yuan';
$_LANG['for_free'] = 'Free gift';
$_LANG['surplus_amount_error'] = 'Your withdraw amount is more than your available balance,this process cannot be done!';
$_LANG['surplus_appl_submit'] = 'Your withdraw amount has been successfully submitted，Please wait for the administrator to review!';
$_LANG['process_false'] = 'Process failed, please go back to try again！';
$_LANG['confirm_remove_account'] = 'Are you sure you want to delete this record?';
$_LANG['back_page_up'] = 'Back to previous page';
$_LANG['back_account_log'] = 'Back to account detail list';
$_LANG['amount_gt_zero'] = 'Please enter “Amount” must be greater than zero';
$_LANG['select_payment_pls'] = 'Please select payment method';

//JS语言项
$_LANG['account_js']['surplus_amount_empty'] = 'Please enter amount you want to process!';
$_LANG['account_js']['surplus_amount_error'] = 'Invalid amount format!';
$_LANG['account_js']['process_desc'] = 'Please enter your process description!';
$_LANG['account_js']['payment_empty'] = 'Pleases select payment method!';

/* 缺货登记 */
$_LANG['oos_booking'] = 'Booking product';
$_LANG['booking_goods_name'] = 'Product name';
$_LANG['booking_amount'] = 'Quantity';
$_LANG['booking_time'] = 'Booking time';
$_LANG['process_desc'] = 'Process description';
$_LANG['describe'] = 'Description';
$_LANG['contact_username'] = 'Contact person';
$_LANG['contact_phone'] = 'Contact no.';
$_LANG['submit_booking_goods'] = 'Submit';
$_LANG['booking_success'] = 'Your booking product has been successfully summited!';
$_LANG['booking_rec_exist'] = 'This item had already recorded in your booking product!';
$_LANG['back_booking_list'] = 'Back to booking product list';
$_LANG['not_dispose'] = 'Not process';
$_LANG['no_goods_id'] = 'Please specify the product ID';

//JS语言项
$_LANG['booking_js']['booking_amount_empty'] = 'Please enter the booking quantity!';
$_LANG['booking_js']['booking_amount_error'] = 'Invalid booking quantity format!';
$_LANG['booking_js']['describe_empty'] = 'Pleasae enter your booking description!';
$_LANG['booking_js']['contact_username_empty'] = 'Please enter the contact person!';
$_LANG['booking_js']['email_empty'] = 'Please enter contact person email address!';
$_LANG['booking_js']['email_error'] = 'Invalid email address format!';
$_LANG['booking_js']['contact_phone_empty'] = 'Please enter contact no.!';

/* 个人资料 */
$_LANG['confirm_submit'] = '　Confirm';
$_LANG['member_rank'] = 'Member ranking';
$_LANG['member_discount'] = 'Member discount';
$_LANG['rank_integral'] = 'Ranking point';
$_LANG['consume_integral'] = 'Consume point';
$_LANG['account_balance'] = 'Account balance';
$_LANG['user_bonus'] = 'User bonus';
$_LANG['user_bonus_info'] = 'Total %d unit,Value %s';
$_LANG['not_bonus'] = 'No bonus';
$_LANG['add_user_bonus'] = 'Add bonus';
$_LANG['bonus_number'] = 'Bonus no. ';
$_LANG['old_password'] = 'Old password';
$_LANG['new_password'] = 'New password';
$_LANG['confirm_password'] = 'Confirm password';
$_LANG['bonus_sn_exist'] = 'This bonus no. has already exists!';
$_LANG['bonus_sn_not_exist'] = 'This bonus no. does not exists!';
$_LANG['add_bonus_sucess'] = 'Add new bonus successful!';
$_LANG['add_bonus_false'] = 'Add new bonus failed!';
$_LANG['not_login'] = 'User no login. This process cannot be complete.';
$_LANG['profile_lnk'] = 'View my profile';
$_LANG['edit_email_failed'] = 'Edit email address failed!';
$_LANG['edit_profile_success'] = 'Your profile has been successfully edited!';
$_LANG['edit_profile_failed'] = 'Edit profile failed!';
$_LANG['oldpassword_error'] = 'Incorrect old password! please try again!';

//JS语言项
$_LANG['profile_js']['bonus_sn_empty'] = 'Please enter bonus number that you wish to add!';
$_LANG['profile_js']['bonus_sn_error'] = 'nvalid bonus number format!';

$_LANG['profile_js']['email_empty'] = 'Please enter your email address!';
$_LANG['profile_js']['email_error'] = 'Invalid email address format!';
$_LANG['profile_js']['old_password_empty'] = 'Please enter your old password!';
$_LANG['profile_js']['new_password_empty'] = 'Please enter your new password!';
$_LANG['profile_js']['confirm_password_empty'] = 'Please enter your confirm password!';
$_LANG['profile_js']['both_password_error'] = 'The two password you entered does not match!';
$_LANG['profile_js']['msg_blank'] = 'Cannot be empty';
$_LANG['profile_js']['no_select_question'] = '- You did not complete the password prompt question';
$_LANG['profile_js']['phone_empty'] = 'Please enter your phone no.!';
$_LANG['profile_js']['phone_error'] = 'Invalid phone no. format!';

/* 支付方式 */
$_LANG['pay_name'] = 'Name';
$_LANG['pay_desc'] = 'Description';
$_LANG['pay_fee'] = 'Handling fee';

/* 收货地址 */
$_LANG['consignee_name'] = 'Consignee name';
$_LANG['country_province'] = 'Shipping area';
$_LANG['please_select'] = 'Please select';
$_LANG['city_district'] = 'City/region';
$_LANG['email_address'] = 'Email';
$_LANG['detailed_address'] = 'Detailed address';
$_LANG['postalcode'] = 'Postal code';
$_LANG['phone'] = 'Telephone no.';
$_LANG['mobile'] = 'Mobile no.';
$_LANG['backup_phone'] = 'Mobile no.';
$_LANG['sign_building'] = 'Address alias';
$_LANG['deliver_goods_time'] = 'Best delivery time';
$_LANG['default'] = 'Default';
$_LANG['default_address'] = 'Default address';
$_LANG['yes'] = 'Yes';
$_LANG['no'] = 'No';
$_LANG['country'] = 'Country';
$_LANG['province'] = 'Province';
$_LANG['city'] = 'City';
$_LANG['area'] = 'Area';

$_LANG['search_ship'] = 'Search support of delivery method';

$_LANG['del_address_false'] = 'Delete shipping address failed!';
$_LANG['add_address_success'] = 'Add shipping address successful!';
$_LANG['edit_address_success'] = 'Edit shipping address successful!';
$_LANG['address_list_lnk'] = 'Back to adress list';
$_LANG['add_address'] = 'Add shipping address';
$_LANG['confirm_edit'] = 'Confirm edit';

$_LANG['confirm_drop_address'] = 'Are you sure you want to delete this shipping address?';

/* 会员密码找回 */
$_LANG['username_and_email'] = 'Please enter the username and email address that has been used to register on our site';
$_LANG['enter_new_password'] = 'Please enter your new password';
$_LANG['username_no_email'] = 'The account name and email address you entered does not match, please try again!';
$_LANG['fail_send_password'] = 'Email sent failed，please contact admin！';
$_LANG['send_success'] = 'Reset password has been sent to your email address：';
$_LANG['parm_error'] = 'Error，Please back！';
$_LANG['edit_password_failure'] = 'Old password your entered is incorrect!';
$_LANG['edit_password_success'] = 'New password has been successfully created!';
$_LANG['username_not_match_email'] = 'Username and email address does not match, please try again!';
$_LANG['get_question_username'] = 'Please enter your registered username to get your password prompt questions.';
$_LANG['no_passwd_question'] = 'You have not set a password question, we cannot retrieve the password in this way.';
$_LANG['input_answer'] = 'Please enter the answer of password question that you set when you register.';
$_LANG['wrong_passwd_answer'] = 'Password answer and username you entered does not match, please try again!';

//JS语言项
$_LANG['password_js']['user_name_empty'] = 'Please enter your username!';
$_LANG['password_js']['email_address_empty'] = 'Please enter your email address!';
$_LANG['password_js']['phone_address_empty'] = 'Please enter your contact number!';
$_LANG['password_js']['phone_address_empty_11'] = 'Please enter the correct 11 digit of phone number!';
$_LANG['password_js']['phone_address_empty_bzq'] = 'Invalid phone number!';
$_LANG['password_js']['wenti_address_empty'] = 'Please enter your register problem!';
$_LANG['password_js']['email_address_error'] = 'Invalid email address format!!';
$_LANG['password_js']['new_password_empty'] = 'Please enter your new password!';
$_LANG['password_js']['confirm_password_empty'] = 'Please enter your confirm password!';
$_LANG['password_js']['both_password_error'] = 'The two password you entered does not match!';

/* 会员留言 */
$_LANG['message_title'] = 'Title';
$_LANG['message_time'] = 'Message time';
$_LANG['reply_time'] = 'Reply time';
$_LANG['shopman_reply'] = 'Seller reply';
$_LANG['send_message'] = 'Send message';
$_LANG['message_type'] = 'Message type';
$_LANG['message_content'] = 'Message content';
$_LANG['submit_message'] = 'Submit messgae';
$_LANG['upload_img'] = 'Upload file';
$_LANG['img_name'] = 'Image name';

/* 留言类型 */
$_LANG['type'][M_MESSAGE] = 'Message';
$_LANG['type'][M_COMPLAINT] = 'Complaint';
$_LANG['type'][M_ENQUIRY] = 'Enquiry';
$_LANG['type'][M_CUSTOME] = 'After sales';
$_LANG['type'][M_BUY] = 'Request purchase';
$_LANG['type'][M_BUSINESS] = 'Seller comments';

$_LANG['add_message_success'] = 'Message sent successfully ';
$_LANG['message_list_lnk'] = 'Back to message list';
$_LANG['msg_title_empty'] = 'Message title cannot be empty';
$_LANG['upload_file_limit'] = 'Uploaded file size has exceed limit %dKB';

$_LANG['img_type_tips'] = '<font color="red">Tips：</font>';
$_LANG['img_type_list'] = 'You can upload supported file type：<br />gif、jpg、png、word、excel、txt、zip、ppt、pdf';
$_LANG['view_upload_file'] = 'View upload file';
$_LANG['upload_file_type'] = 'Invalid type file , please try again！';
$_LANG['upload_file_error'] = 'An error occurred in upload. please try again！';
$_LANG['message_empty'] = 'You have not message yet！';
$_LANG['msg_success'] = 'Message has been successfully summited！';
$_LANG['confirm_remove_msg'] = 'Are you sure you want to delete this message？';

/* 会员红包 */
$_LANG['bonus_is_used'] = 'The bonus you entered has already collected by yourself!';
$_LANG['bonus_is_used_by_other'] = 'The bonus you entered has already collected by others!';
$_LANG['bonus_add_success'] = 'You has successfully add a new bonus！';
$_LANG['bonus_not_exist'] = 'Your entered bonus does not exists';
$_LANG['user_bonus_empty'] = 'You does not have bonus yet';
$_LANG['add_bonus_sucess'] = 'Add new bonus successful!';
$_LANG['add_bonus_false'] = 'Add new bonus failed!';
$_LANG['bonus_add_expire'] = 'This bonus has already expired!';
$_LANG['bonus_use_expire'] = 'This bonus valid date has already expired！';

/* 储值卡 */
$_LANG['no_use_record'] = 'Stored value card temporary does not have record.';
$_LANG['add_value_card_sucess'] = 'Bind your stored value card successful！';
$_LANG['add_value_card_false'] = 'Bind your stored value card failed！';
$_LANG['vc_is_used'] = 'You had already bound this stored value card!';
$_LANG['vc_is_used_by_other'] = 'The stored value card you entered has already been bind by other user!';
$_LANG['vc_not_exist'] = 'The stored value card you entered does not exists！';
$_LANG['vc_use_expire'] = 'This stored value card has already expired! ';
$_LANG['vc_no_use_order'] = 'This stored value card can not be use in this order!';
$_LANG['vc_use_inspire'] = 'This stored value card have not started to use yet！';
$_LANG['vc_limit_expire'] = 'You have reached the maximum number of bind stored value card！';

/* 充值卡 */
$_LANG['pc_is_used'] = 'This top up card has already used!！';
$_LANG['pc_use_expire'] = 'This top up card has already expired！';
$_LANG['use_pay_card_sucess'] = 'Top up successful！';
$_LANG['pc_not_exist'] = 'The top up card you entered does not exists！';

/* 会员订单 */
$_LANG['order_list_lnk'] = 'My order list';
$_LANG['order_number'] = 'Order no.';
$_LANG['order_addtime'] = 'Order time';
$_LANG['order_money'] = 'Order total amount';
$_LANG['order_status'] = 'Order status';
$_LANG['first_order'] = 'Main order';
$_LANG['second_order'] = 'Second order';
$_LANG['merge_order'] = 'Consolidated order';
$_LANG['no_priv'] = 'You do not have permission to operate others person order';
$_LANG['buyer_cancel'] = 'User cancelled';


$_LANG['cancel'] = 'Cancel order';
$_LANG['pay_money'] = 'Make payment';
$_LANG['view_order'] = 'View order';
$_LANG['received'] = 'Confirm order received';
$_LANG['ss_received'] = 'Completed';

//ecmoban模板堂 --zhuo start
$_LANG['wait_pay'] = 'Awaiting Payment';
$_LANG['shipping_single'] = 'Partial order';
//ecmoban模板堂 --zhuo end

$_LANG['confirm_cancel'] = 'Are you sure you wanr to cancel this order? This order will be considered an invalid order after cancellation.';
$_LANG['merge_ok'] = 'Consolidated order successful！';
$_LANG['merge_invalid_order'] = 'Sorry, your selected orders does not allow for consolidated';
$_LANG['select'] = 'Please select...';
$_LANG['order_not_pay'] = "Your order status is %s ,no payment required";
$_LANG['order_sn_empty'] = 'Consolidated main order no can not be empty.';
$_LANG['merge_order_notice'] = 'Cosolidated order is prior to another same status of orders before shipping and consolidated into one new orders.<br />Shipping address，Shipping method etc are subject to the main order 订单合并是在发货前将相同状态的订单合并成一新的订单。<br />收货地址，送货方式等以主定单为准。';
$_LANG['order_exist'] = 'This order does not exits！';
$_LANG['order_is_group_buy'] = '[Group purchase]';
$_LANG['order_is_exchange'] = '[Mall Points]';
$_LANG['order_is_presale'] = '[Presale]';
$_LANG['gb_deposit'] = '（Deposit）';
$_LANG['notice_gb_order_amount'] = '（Remark：If group purchase required deposit,  you only need to pay the deposit and the corresponding payment fee for the first time.）';
$_LANG['business_message'] = 'Send/view seller message';
$_LANG['pay_order_by_surplus'] = 'Order partial payment by using balance：%s';
$_LANG['return_surplus_on_cancel'] = 'Cancel order %s，refunds order by using prepayment';
$_LANG['return_integral_on_cancel'] = 'Cancel order %s，refunds order by using point';

/* 订单状态 */
$_LANG['os'][OS_UNCONFIRMED] = 'Not confirm';
$_LANG['os'][OS_CONFIRMED] = 'Confirmed';
$_LANG['os'][OS_SPLITED] = 'Confirmed';
$_LANG['os'][OS_SPLITING_PART] = 'Confirmed';
$_LANG['os'][OS_CANCELED] = 'Cancelled';
$_LANG['os'][OS_INVALID] = 'Invalid';
$_LANG['os'][OS_RETURNED] = 'Returned';
$_LANG['os'][OS_RETURNED_PART] = 'Partial returned';

$_LANG['ss'][SS_UNSHIPPED] = 'Not shipped';
$_LANG['ss'][SS_PREPARING] = 'Preparing';
$_LANG['ss'][SS_SHIPPED] = 'Shipped';
$_LANG['ss'][SS_RECEIVED] = 'Confirm order received';
$_LANG['ss'][SS_SHIPPED_PART] = 'Shipped (Partial item)';
$_LANG['ss'][SS_SHIPPED_ING] = 'Preparing'; // Already separate item

$_LANG['ps'][PS_UNPAYED] = 'Awaiting Payment';
$_LANG['ps'][PS_PAYING] = 'Payment is processing';
$_LANG['ps'][PS_PAYED] = 'Already paid';
$_LANG['ps'][PS_PAYED_PART] = 'Partial payment (Deposit)';
//ecmoban模板堂 --zhuo start

//ecmoban模板堂 --zhuo end

$_LANG['shipping_not_need'] = 'No shipping is required.';
$_LANG['current_os_not_unconfirmed'] = 'Current order status is not “unconfirmed。';
$_LANG['current_os_already_confirmed'] = 'Current order status has been confirmed, it cannot be cancelled anymore，please try to contact seller';
$_LANG['current_ss_not_cancel'] = 'Only unshipped order status can be cancelled，please try to contact seller for cancellation。';
$_LANG['current_ps_not_cancel'] = 'Only unpaid order status can be cancelled，please try to contact seller for cancelation.。';
$_LANG['confirm_received'] = 'Are you confirm that you have received the product? There is no return or refund after this confirmation.';

/* 合并订单及订单详情 */
$_LANG['merge_order_success'] = 'Consolidated order successful!';
$_LANG['merge_order_failed']  = 'Consolidated order failed，please try again!';
$_LANG['order_sn_not_null'] = 'Please enter the order number that you wish to consolidated.';
$_LANG['two_order_sn_same'] = 'Both order to be consolidated can not be same order no.';
$_LANG['order_not_exist'] = "Order %s does not exists";
$_LANG['os_not_unconfirmed_or_confirmed'] = " %s 的order status is not “Not confirm” or “Confirm”";
$_LANG['ps_not_unpayed'] = "Order %s payment status is not “Unpaid”";
$_LANG['ss_not_unshipped'] = "Order %s shipping status is not “Unshipped”";
$_LANG['order_user_not_same'] = 'Both orders to be consolidate is not under the same user';
$_LANG['from_order_sn'] = '1st order number：';
$_LANG['to_order_sn'] = '2nd order number：';
$_LANG['merge'] = 'Consolidated';
$_LANG['notice_order_sn'] = 'When both order does not match, consolidate order information is subject to (Ex:Payment,delivert,packaging,greeting cards,bonus method...).';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['goods_price'] = 'Item price';
$_LANG['goods_attr'] = 'Attribute';
$_LANG['use_balance'] = 'Use balance';
$_LANG['order_postscript'] = 'Order postscript';
$_LANG['order_number'] = 'Order no.';
$_LANG['consignment'] = 'consignment no.';
$_LANG['shopping_money'] = 'Sub Total';
$_LANG['invalid_order_id'] = 'Invalid order no.';
$_LANG['shipping'] = 'Shipping method';
$_LANG['payment'] = 'Payment method';
$_LANG['use_pack'] = 'Use packaging';
$_LANG['use_card'] = 'Use greeting cards';
$_LANG['order_total_fee'] = 'Order total amount';
$_LANG['order_money_paid'] = 'Paid amount';
$_LANG['order_amount'] = 'Total payable amount';
$_LANG['accessories'] = 'Accessories';
$_LANG['largess'] = 'Free gift';
$_LANG['use_more_surplus'] = 'Partial payment by using balance';
$_LANG['max_surplus'] = '（Your available balance：%s）';
$_LANG['button_submit'] = 'Confirm';
$_LANG['order_detail'] = 'Order status';
$_LANG['error_surplus_invalid'] = 'Invalid number！';
$_LANG['error_order_is_paid'] = 'Payment is not required for this order!';
$_LANG['error_surplus_not_enough'] = 'Your account balance is insufficient!';

/* 订单状态 */
$_LANG['detail_order_sn'] = 'Order no.';
$_LANG['detail_order_status'] = 'Order status';
$_LANG['detail_pay_status'] = 'Payment status';
$_LANG['detail_shipping_status'] = 'Shipping status';
$_LANG['detail_order_sn'] = 'Order no.';
$_LANG['detail_to_buyer'] = 'Seller message';

$_LANG['confirm_time'] = 'Confirm time %s';
$_LANG['pay_time'] = 'Payment time %s';
$_LANG['shipping_time'] = 'Shipping time %s';

$_LANG['select_payment'] = 'Select payment method';
$_LANG['order_amount'] = 'Total payable amount';
$_LANG['update_address'] = 'Updaye consignee information';
$_LANG['virtual_card_info'] = 'Virtual card information';
$_LANG['virtual_goods_info'] = 'View Virtual card key';

/* 取回密码 */
$_LANG['back_home_lnk'] = 'Back to homepage';
$_LANG['get_password_lnk'] = 'Return to the get password';
$_LANG['get_password_by_question'] = 'Get password by password question';
$_LANG['get_password_by_mail'] = 'Get password by registered email';
$_LANG['back_retry_answer'] = 'Back and try again.';

/* 登录 注册 */
$_LANG['label_username'] = 'Username/Email/Contact no.';
$_LANG['label_email'] = 'Email';
$_LANG['label_password'] = 'Password';
$_LANG['label_confirm_password'] = 'Confirm password';
$_LANG['label_password_intensity'] = 'Password strength';
$_LANG['want_login'] = 'Already have account，i want to login';
$_LANG['other_msn'] = 'MSN';
$_LANG['other_qq'] = 'QQ';
$_LANG['other_office_phone'] = 'Office telephone no.';
$_LANG['other_home_phone'] = 'Telephone no.';
$_LANG['other_mobile_phone'] = 'Mobile no.';
$_LANG['remember'] = 'Please save my login information.';

$_LANG['msg_un_blank'] = 'Username cannot be empty';
$_LANG['msg_un_length'] = 'Username cannot be longer than 7 chinese character.';
$_LANG['msg_un_format'] = 'Username contains illegal characters';
$_LANG['msg_un_registered'] = 'Username has already exists, please try again.';
$_LANG['msg_can_rg'] = 'Can register';
$_LANG['msg_email_blank'] = 'Email address cannot be empty';
$_LANG['msg_email_registered'] = 'Email address has already exists, please try again';
$_LANG['msg_email_format'] = 'Invalid email address';

$_LANG['msg_phone_blank'] = 'Mobile no. cannot be empty';
$_LANG['msg_phone_registered'] = 'Mobile no. has already exists, please try again.';
$_LANG['msg_phone_invalid'] = 'Invalid mobile no.';
$_LANG['msg_phone_not_correct'] = 'Incorrect monile no.,please try again.';
$_LANG['msg_mobile_code_blank'] = 'Mobile verification code cannot be empty.';
$_LANG['msg_mobile_code_not_correct'] = 'Mobile verification code is incorrect.';
$_LANG['msg_mobile_mobile_code'] = 'Phone dynamic code cannot be empty or invalid';
$_LANG['msg_mobile_invalid'] = '%s Invalid mobile number';

$_LANG['msg_confirm_pwd_blank'] = 'Confirm password cannot be empty';

$_LANG['msg_identifying_code'] = 'Verification code cannor be empty';
$_LANG['msg_identifying_not_correct'] = 'Incorrect verification code';

$_LANG['login_success'] = 'Login success';
$_LANG['confirm_login'] = 'Confirm login';
$_LANG['profile_lnk'] = 'View my profile';
$_LANG['login_failure'] = 'Incorrect username or password';
$_LANG['relogin_lnk'] = 'Please try to login again';

$_LANG['sex'] = 'Sex';
$_LANG['male'] = 'Male';
$_LANG['female'] = 'Female';
$_LANG['secrecy'] = 'Confidential';
$_LANG['birthday'] = 'Date of birth';

$_LANG['logout'] = 'You have successfully logged out!';
$_LANG['username_empty'] = 'Username is empty';
$_LANG['username_invalid'] = 'Username %s contain illegal character';
$_LANG['username_exist'] = 'Username %s has already exists';
$_LANG['phone_exist'] = 'Mobile no. %s has already exists';
$_LANG['username_not_allow'] = 'Username %s does not allow register';
$_LANG['confirm_register'] = 'Confirm register';

$_LANG['agreement'] = "I have read and agreed 《<a class=\"agreement\" href=\"article.php?cat_id=-1\" target=\"_blank\">Term and condition</a>》";

$_LANG['email_empty'] = 'email is empty';
$_LANG['email_invalid'] = '%s Invalid email address';
$_LANG['email_exist'] = '%s Already exists';
$_LANG['email_not_allow'] = 'Email %s is not allow to register';
$_LANG['register'] = 'Register for new username';
$_LANG['register_success'] = 'Username %s register successful';

$_LANG['passwd_question'] = 'Password question';
$_LANG['sel_question'] = 'Please selece password question';
$_LANG['passwd_answer'] = 'Password answer';
$_LANG['passwd_balnk'] = 'Your password cannot contain spaces';

/* 用户中心默认页面 */
$_LANG['welcome_to'] = "Welcome back";
$_LANG['last_time'] = 'Last login time';
$_LANG['your_account'] = 'Your account';
$_LANG['your_notice'] = 'User notification';
$_LANG['your_surplus'] = 'Balance';
$_LANG['credit_line'] = 'Credit limit';
$_LANG['your_bonus'] = 'Your bonus';
$_LANG['your_message'] = 'Message';
$_LANG['your_order'] = 'Order';
$_LANG['your_integral'] = 'Your point';
$_LANG['your_level'] = 'Your level %s ';
$_LANG['next_level'] = ',You still need %s point to %s ';
$_LANG['attention'] = 'Follow';
$_LANG['no_attention'] = 'Unfollow';
$_LANG['del_attention'] = 'Are you sure you want o unfollow this item？';
$_LANG['add_to_attention'] = 'Are you sure you want add this item to follow list?';
$_LANG['label_need_image'] = 'Do you want to display product image?：';
$_LANG['need'] = 'Display';
$_LANG['need_not'] = 'Not to display';
$_LANG['horizontal'] = 'Horizontal';
$_LANG['verticle'] = 'Verticle';
$_LANG['generate'] = 'Generate code';
$_LANG['label_goods_num'] = 'Display product quantity：';
$_LANG['label_rows_num'] = 'Display row number：';
$_LANG['label_arrange'] = 'Select product sorting method：';
$_LANG['label_charset'] = 'Select code：';
$_LANG['charset']['utf8'] = 'International code（utf8）';
$_LANG['charset']['zh_cn'] = 'Simplified Chinese';
$_LANG['charset']['zh_tw'] = 'Traditional Chinese';
$_LANG['goods_num_must_be_int'] = 'Item quantity must be an integer';
$_LANG['goods_num_must_over_0'] = 'Item quantity must be greater than zero';
$_LANG['rows_num_must_be_int'] = 'Display number of row must be an interger';
$_LANG['rows_num_must_over_0'] = 'Display number of row must be greater than zero';

$_LANG['last_month_order'] = 'Recently you had submitted 30 days before';
$_LANG['order_unit'] = 'Unit Order';
$_LANG['please_received'] = 'Your order has been shipped out,please be aware of the collection';
$_LANG['your_auction'] = 'You won the auction <strong>%s</strong> ，Go now <a href="auction.php?act=view&amp;id=%s"><span style="color:#06c;text-decoration:underline;">Buy</span></a>';
$_LANG['your_snatch'] = 'Your won the auction of this item <strong>%s</strong> ，Go now <a href="snatch.php?act=main&amp;id=%s"><span style="color:#06c;text-decoration:underline;">Buy</span></a>';

/* 我的标签 */
$_LANG['no_tag'] = 'No tags at this moment';
$_LANG['confirm_drop_tag'] = 'Are you sure you want to delete this tag? ';

/* user_passport.dwt js语言文件 */
$_LANG['passport_js']['username_empty'] = '<i></i>Please enter your username';
$_LANG['passport_js']['username_shorter'] = '<i></i>Username length cannot be less than 3 character。';
$_LANG['passport_js']['username_invalid'] = '<i></i>Username can only contain combination of alphanumeric and underscore';
$_LANG['passport_js']['password_empty'] = '<i></i>Please enter your password';
$_LANG['passport_js']['password_shorter'] = '<i></i>Login password can not be less than 6 character.';
$_LANG['passport_js']['confirm_password_invalid'] = '<i></i>The two passwords you entered do not match';
$_LANG['passport_js']['captcha_empty'] = '<i></i>Please enter verification code';
$_LANG['passport_js']['email_empty'] = '<i></i>Email cannot be empty';
$_LANG['passport_js']['email_invalid'] = '<i></i>Email is invalid';
$_LANG['passport_js']['agreement'] = '<i></i>You have not accepted the term and condition';
$_LANG['passport_js']['msn_invalid'] = '<i></i>msn address is not a valid adress';
$_LANG['passport_js']['qq_invalid'] = '<i></i>QQ number is not a valid number';
$_LANG['passport_js']['home_phone_invalid'] = '<i></i>Home telephone no. is not a valid number';
$_LANG['passport_js']['office_phone_invalid'] = '<i></i>Office telephone no. is not a valid number';
$_LANG['passport_js']['mobile_phone_invalid'] = '<i></i>>Mobile no. is not a valid number.';
$_LANG['passport_js']['msg_un_blank'] = '<i></i>Username cannot be empty';
$_LANG['passport_js']['msg_un_length'] = '<i></iUsername length cannot be less than 7 chinese character';
$_LANG['passport_js']['msg_un_format'] = '<i></i>Username contains illegal characters';
$_LANG['passport_js']['msg_un_registered'] = '<i></i>Username has already exists, please enter again';
$_LANG['passport_js']['msg_can_rg'] = '<i></i>Can register';
$_LANG['passport_js']['msg_email_blank'] = '<i></i>Email address cannot be empty';
$_LANG['passport_js']['msg_email_registered'] = '<i></i>Email has already exists, please enter again';
$_LANG['passport_js']['msg_email_format'] = '<i></i>Invalid format，please enter the correct email address';
$_LANG['passport_js']['msg_blank'] = '<i></i>Cannot be empty';
$_LANG['passport_js']['no_select_question'] = '<i></i>You have not finish your password question';
$_LANG['passport_js']['passwd_balnk'] = '<i></i>Password cannot contain spaces';

$_LANG['passport_js']['msg_phone_blank'] = '<i></i>Mobile no. cannot be empty';
$_LANG['passport_js']['msg_phone_registered'] = '<i></i>Mobile no. has already exists, please enter again';
$_LANG['passport_js']['msg_phone_invalid'] = '<i></i>Invalid monile no.';
$_LANG['passport_js']['msg_phone_not_correct'] = '<i></i>Invalid mobile no，please enter again';
$_LANG['passport_js']['msg_mobile_code_blank'] = '<i></i>Mobile verification code cannot be empty';
$_LANG['passport_js']['msg_mobile_code_not_correct'] = '<i></i>Invalid mobile verification code';

$_LANG['passport_js']['msg_confirm_pwd_blank'] = '<i></i>Confirm password cannot be empty';

$_LANG['passport_js']['msg_identifying_code'] = '<i></i>Verification code cannot be empty';
$_LANG['passport_js']['msg_identifying_not_correct'] = '<i></i>Invalid verification code';



/* user_clips.dwt js 语言文件 */
$_LANG['clips_js']['msg_title_empty'] = 'Message title is empty';
$_LANG['clips_js']['msg_content_empty'] = 'Message content is empty';
$_LANG['clips_js']['msg_title_limit'] = 'Message title can not exceed can not exceed 200 words';

/* 合并订单js */
$_LANG['merge_order_js']['from_order_empty'] = 'Please select item to be consolidate from the item list.';
$_LANG['merge_order_js']['to_order_empty'] = 'Please select the main order to be consolidate';
$_LANG['merge_order_js']['order_same'] = 'Main order and sub order is the same，please select again';
$_LANG['merge_order_js']['confirm_merge'] = 'Are you sure you want to consolidate this two order?';

/* 将用户订单中商品加入购物车 */
$_LANG['order_id_empty'] = 'No specified order no.';
$_LANG['return_to_cart_success'] = 'The order has been successfully added to the shopping cart';

/* 保存用户订单收货地址 */
$_LANG['consigness_empty'] = 'The consignee name is empty';
$_LANG['address_empty'] = 'Shipping address details is empty';
$_LANG['require_unconfirmed'] = 'This order status is not able to modify the address';

/* 红包详情 */
$_LANG['bonus_sn'] = 'Bonus no.';
$_LANG['bonus_name'] = 'Bonus name';
$_LANG['bonus_amount'] = 'Bonus amount';
$_LANG['min_goods_amount'] = 'Min. order amount';
$_LANG['bonus_end_date'] = 'Bonus expired date';
$_LANG['bonus_status'] = 'Bonus status';

$_LANG['not_start'] = 'Have not start';
$_LANG['overdue'] = 'Already expired';
$_LANG['not_use'] = 'Have not use';
$_LANG['had_use'] = 'Already used';

/* 用户推荐 */
$_LANG['affiliate_mode'] = 'Affiliate mode';
$_LANG['affiliate_detail'] = 'Affiliate detail';
$_LANG['affiliate_member'] = 'My affiliate members';
$_LANG['affiliate_code'] = 'Affiliate code';
$_LANG['firefox_copy_alert'] = "Your firefox security restrictions restrict you to clipboard operation, please open ’about:config’将signed.applets.codebase_principal_support’Setting is true’try again later";
$_LANG['affiliate_type'][0] = 'Affiliate registration';
$_LANG['affiliate_type'][1] = 'Affiliate order';
$_LANG['affiliate_type'][-1] = 'Affiliate registration';
$_LANG['affiliate_type'][-2] = 'Affiliate order';

$_LANG['affiliate_codetype'] = 'Format';

$_LANG['affiliate_introduction'] = 'Affiliate introduction';
$_LANG['affiliate_intro'][0] = '　　We recommmend for new register affiliate user，Now open <b> Affiliate registration </b> activity，activities are as below：

　　１、We will provide you affiliate code by sending to the forum or blog.
　　２、Visitor click on the link to visit the store。
　　３、When visitor click on the link <b>%d%s</b> and registered from that website，we will consider this user is recommended by you, you will get ranking point <b>%d</b> as a reward (When your ranking point has reached limit <b>%d</b> it will stop to reward)。
　　４、The particular user consumption in this website，you can get a certain percentage of commision. Current total commission for this order amount is <b>%s</b> 、Points <b>%s</b> ，distribute to you、and your recommender etc，For details of distribution on commision please refer to <b><a href="#myrecommend">>My affiliate member</a></b>。
　　５、The commission will issue by the administrator after examination，Please be patient.
　　６、You can view your introduction、affiliate status through affiliate details.';
$_LANG['affiliate_intro'][1] = '　　We recommmend for new register affiliate user，Now open <b> Affiliate order </b> activity，activities are as below：

　　１、When browsing the item, click affiliate order get the affiliate code by sending to the forum or blog.
　　２、Visitor click on the link to visit the store.
　　３、、When visitor click on the link <b>%d%s</b> and order from that website, we will consider this order is recommended by you.
　　４、You will get order amount<b>%s</b> 、Point <b>%s</b>as a reward。
　　５、The commission will issue by the administrator after examination，Please be patient。
　　６、You can view your introduction、affiliate status through affiliate details';

$_LANG['level_point_all'] = 'Total percentage of affiliate point';
$_LANG['level_money_all'] = 'Total percentage of Affiliate cash';
$_LANG['level_register_all'] = 'Affiliate registration point';
$_LANG['level_register_up'] = 'Affliliate level point limit';

$_LANG['affiliate_stats'][0] = 'Waiting for process';
$_LANG['affiliate_stats'][1] = 'Already is affiliated';
$_LANG['affiliate_stats'][2] = 'Cancel affiliate';
$_LANG['affiliate_stats'][3] = 'Already revoke';
$_LANG['affiliate_stats'][4] = 'Waiting for buyer payment';

$_LANG['level_point'] = 'Total percentage of affiliate point';
$_LANG['level_money'] = 'Total percentage of Affiliate cash';

$_LANG['affiliate_status'] = 'Affiliate status';

$_LANG['affiliate_point'] = 'Affiliate point';
$_LANG['affiliate_money'] = 'Affiliate cash';

$_LANG['affiliate_expire'] = 'Expired date';

$_LANG['affiliate_lever'] = 'Level';
$_LANG['affiliate_num'] = 'No. of affiliate';

$_LANG['affiliate_view'] = 'Effect';
$_LANG['affiliate_code'] = 'Code';

$_LANG['register_affiliate'] = 'Affiliate member ID %s ( %s ) register and get point';
$_LANG['register_points'] = 'Register and get point';

$_LANG['validate_ok'] = '%s Hi，Your email %s has been verified';
$_LANG['validate_fail'] = 'Verification failed, please make sure your enter the correct verification link';
$_LANG['validate_mail_ok'] = 'A Verificarion email has been sent to your email';

$_LANG['not_validated'] = 'You have not verify your email address';
$_LANG['resend_hash_mail'] = 'Click to send email verification';

$_LANG['query_status'] = 'View status';

$_LANG['change_payment'] = 'Change other payment method';

$_LANG['copy_to_clipboard'] = 'Copy to clipboard';


$_LANG['expire_unit']['hour'] = 'Hour';
$_LANG['expire_unit']['day'] = 'Day';
$_LANG['expire_unit']['week'] = 'Week';

$_LANG['recommend_webcode'] = 'Web Signature code';
$_LANG['recommend_bbscode'] = 'Forum Signature code';
$_LANG['im_code'] = 'Sharing';
$_LANG['code_copy'] = 'Copy code';
$_LANG['show_good_to_you'] = 'Recommended items just for you';


/* 积分兑换 */
$_LANG['transform_points'] = 'Point redemption';
$_LANG['invalid_points'] = 'The point you entered is not a valid value';
$_LANG['invalid_input'] = 'Invalid';
$_LANG['overflow_points'] = 'The redeemed points that you entered is exceed your actual points';
$_LANG['to_pay_points'] = 'Congratulations， your %s forum %s redeemed %s consume points';
$_LANG['to_rank_points'] = 'Congratulations， your %s forum %s redeemed %s level point';
$_LANG['from_pay_points'] = 'Congratulations， your %s redeemed cosumer point %s forum %s';
$_LANG['from_rank_points'] = 'Congratulations， your %s forum%s redeemed %s consume point';
$_LANG['cur_points'] = 'Your current point';
$_LANG['rule_list'] = 'Redemption rule';
$_LANG['transform'] = 'Redeem';
$_LANG['rate_is'] = 'Rate is';
$_LANG['rule'] = 'Redemption rule';
$_LANG['transform_num'] = 'Redemption quantity';
$_LANG['transform_result'] = 'Redemption result';
$_LANG['bbs'] = 'Forum';
$_LANG['exchange_amount'] = 'Payment';
$_LANG['exchange_desamount'] = 'Income';
$_LANG['exchange_ratio'] = 'Redemption rate';
$_LANG['exchange_points'][0] = 'Level point';
$_LANG['exchange_points'][1] = 'Consume point';
$_LANG['exchange_action'] = 'Redeem';
$_LANG['exchange_js']['deny'] = 'Cannot be redeem';
$_LANG['exchange_js']['balance'] = 'Your {%s}balance is not enough，please enter again';
$_LANG['exchange_deny'] = 'This point cannot be redeem';
$_LANG['exchange_success'] = 'Congratulations， You has used %s unit %s redeemed %s unit %s';
$_LANG['exchange_error_1'] = 'UCenter an error has occurred when trying to redeem point';
$_LANG['rank_points'] = 'Level point';
$_LANG['pay_points'] = 'Consume point';

/* 密码强度 */
$_LANG['pwd_lower'] = 'Weak';
$_LANG['pwd_middle'] = 'Average';
$_LANG['pwd_high'] = 'Strong';
$_LANG['user_reg_info'][0] = 'Not yet a member? Register now';
$_LANG['user_reg_info'][1] = 'Friendly tips';
$_LANG['user_reg_info'][2] = 'Non-members may able to purchase item from our website';
$_LANG['user_reg_info'][8] = 'Non-members may not able to purchase item from our website';
$_LANG['user_reg_info'][3] = 'But after registration you are allow to purchase item from our website';
$_LANG['user_reg_info'][4] = 'Save your personal information';
$_LANG['user_reg_info'][5] = 'Add followed item to favorite';
$_LANG['user_reg_info'][6] = 'Enjoy the membership points system';
$_LANG['user_reg_info'][7] = 'Subscribe store product information';
$_LANG['add_bonus'] = 'Add bonus';

/* 密码找回问题 */
$_LANG['passwd_questions']['friend_birthday'] = 'When is my best friend birthday?';
$_LANG['passwd_questions']['old_address']     = 'Where is my childhood home address?';
$_LANG['passwd_questions']['motto']           = 'What is my motto?';
$_LANG['passwd_questions']['favorite_movie']  = 'What is my favorite movie?';
$_LANG['passwd_questions']['favorite_song']   = 'What is my favorite song?';
$_LANG['passwd_questions']['favorite_food']   = 'What is my favorite food?';
$_LANG['passwd_questions']['interest']        = 'What is my favorite hobby?';
$_LANG['passwd_questions']['favorite_novel']  = 'What is my favorite novels?';
$_LANG['passwd_questions']['favorite_equipe'] = 'What is my favorite sports team?';

/* 用户菜单 */
$_LANG['order_list'] = 'My order';
$_LANG['address_list'] = 'Shipping address';
$_LANG['booking_list'] = 'Order Received registration ';
$_LANG['return_list'] = 'Return order';
$_LANG['profile'] = 'User information';
$_LANG['collection_list'] = 'My favorite';
$_LANG['message_list'] = 'My message';
$_LANG['affiliate'] = 'My affiliate';
$_LANG['comment_list'] = 'Comment/reviews';
$_LANG['bonus'] = 'My bonus';
$_LANG['track_packages'] = 'Track my bonus';
$_LANG['account_log'] = 'Manage my fund';
$_LANG['baitiao'] = 'My Baitiao';//bylu
$_LANG['repay_bt'] = 'Baitiao payment';//bylu
$_LANG['account_safe'] = 'Account security';
$_LANG['account_bind'] = 'Bind your account';
$_LANG['crowdfunding'] = 'My Crowdfunding';
$_LANG['focus_brand'] = 'Follow brand';

//批发管理
$_LANG['wholesale_centre'] = 'Wholesale centre';
$_LANG['my_purchase_order'] = 'My purchase order';
$_LANG['want_buy_order'] = 'My request purchase order list';
$_LANG['want_buy_order_desc'] = 'Request purchase order detail';
$_LANG['supplier_info'] = 'Seller information';


$_LANG['address'] = 'Address';
$_LANG['goods_order'] = 'Return order';
$_LANG['apply_return'] = 'Request return';
$_LANG['return_detail'] = 'Return detail';
$_LANG['user_picture'] = 'Edit profile picture';
$_LANG['store_list'] = 'Follow store';
$_LANG['account_detail'] = 'Account detail';
$_LANG['account_raply'] = 'Withdrawal cash';
$_LANG['account_deposit'] = 'Top up';

//我的发票
$_LANG['my_invoice'] = 'My invoice';
$_LANG['order_invoice_state'] = 'Order invoice status';
$_LANG['increment_invoice_info'] = 'Value added invoice information';
$_LANG['invoice_help'] = 'Invoice help centre';

//交易纠纷
$_LANG['transaction_disputes'] = 'Transaction disputes';
$_LANG['may_apply_order'] = 'May apply for the order';
$_LANG['already_apply_order'] = 'Already apply for the order';
$_LANG['apply_disputes_order'] = 'Apply for the disputes order';
$_LANG['view_disputes_order'] = 'View the disputes order';
$_LANG['complaint_title'] = 'Dispute type';
$_LANG['evidence_upload'] = "Upload evidence";
$_LANG['complaint_title_null'] = 'Please select dispute type！';
$_LANG['complaint_content_null'] = 'The problem description can not be empty！';
$_LANG['complaint_success']  = "Complaint success";
$_LANG['back_complaint_list']  = "Back to complaint list";
$_LANG['complaint_reprat']  = "You have already complained about this order，cannot submit again!";
//违规举报
$_LANG['illegal_report'] = 'Illegal report';
$_LANG['report_goods'] = 'Report items';

/*入驻申请*/
$_LANG['invalid_img_val']   = 'In the album, item no.%s show invalid image format!';
$_LANG['img_url_too_big']   = 'In the album, item no.%s show image file is too large （Maximum：%s），unable to upload.';

/*by kong haojlj*/
$_LANG['phone_check_code'] = "Mobile verification code is empty or expired, please try again later";
$_LANG['single_comment'] = "Reviews";
$_LANG['user_keyword'] = "Item name、Item code、Order number";

$_LANG['greet'][0] = "Good morning";
$_LANG['greet'][1] = "Good afternoon";
$_LANG['greet'][2] = "Good afternoon";
$_LANG['greet'][3] = "Good evening";
$_LANG['plugins'] = "The server has not been registered to the plug-in！";
$_LANG['Access_timeout'] = "Illegal access or request timed out！";
$_LANG['Illegal_access'] = "Illegal access or errors access，Please contact the administrator！";
$_LANG['Mobile_code_error'] = "Mobile verification code is empty or expired, please try again later";
$_LANG['Mobile_code_null'] = "Mobile no. or mobile verification code cannot be empty.";
$_LANG['Mobile_code_msg'] = "Mobile no. or mobile verification code is incorrect.";
$_LANG['Mobile_username'] = "Username or mobile no. is incorrect!";
$_LANG['password_difference'] = "The two password you entered does not match!";
$_LANG['delete_order'] = "Delete order";
$_LANG['update_address_error'] = "Update your shipping address information was failed.";
$_LANG['address_perfect_error'] = "Shipping address information is incomplete";
$_LANG['receipt_fail'] = "Receipt failed-_-，please try to receipt order again";
$_LANG['back_receipt'] = "Back to receive order again.";
$_LANG['vouchers_all'] = "All vouchers";
$_LANG['vouchers_user'] = "Member vouchers";
$_LANG['vouchers_shoping'] = "Shopping vouchers";
$_LANG['vouchers_login'] = "Registration vouchers";
$_LANG['unknown'] = "Unknown";
$_LANG['user_vouchers'] = "User centre_voucher list";
$_LANG['Repeated_submission'] = "The same item cannot be repeat submit in the same order";
$_LANG['Return_abnormal'] = "An Error occurred in submission on return parcels, please try again.";
$_LANG['Apply_refund'] = "Apply for refund (Send back by user)";
$_LANG['Apply_Success_Prompt'] = "Application has submitted successfully，our staff will review it as soon as possible！";
$_LANG['See_Returnlist'] = "View return order";
$_LANG['Apply_abnormal'] = "An error occurred in submission, please try again.";
$_LANG['payment_coupon'] = "Payment Reminder";
$_LANG['balance_insufficient'] = "Account balance is insufficient. Please select other payment method";
$_LANG['Ious_Prompt_one'] = "Biaotiao installment No. %u stage order no.：%s";
$_LANG['Ious_Prompt_two'] = "Biaotiao payment order no. ：%s";
$_LANG['Ious_Payment_success'] = "Congrats, payment is successful!";
$_LANG['my_Ious'] = "My Baitiao"; 
$_LANG['pay_fail'] = "Payment failed";
$_LANG['ious_pay'] = "Baitiao payment";
$_LANG['pay_noline'] = "Online payment";
$_LANG['seller_garde'] = "Seller level to join";
$_LANG['seller_apply'] = " Series no. %s appluy payment for upgrading seller";
$_LANG['apply_success'] = "Apply successful";
$_LANG['pay_password_fail'] = "Incorrect payment verification code";
$_LANG['back_input'] = "Please enter again";
$_LANG['back_input_Code'] = "Back to verify again"; 
$_LANG['back_choose'] = "Back to select again";
$_LANG['back_Fill'] = "Back to fill again";
$_LANG['Mobile_code_null'] = "Mobile verification code cannot be empty";
$_LANG['Mobile_code_fail'] = "Incorrert mobile or mobile verification code";
$_LANG['Real_name_authentication_Mobile_one'] = "Mobile no. and mobile verification code does not match";
$_LANG['Real_name_authentication_Mobile_two'] = "Mobile no. is empty, please certified your mobile number first.";
$_LANG['Real_name_authentication_Mobile_three'] = "Password is empty or password does not match";
$_LANG['pay_password_packup_error'] = 'Your payment password is incorrect!'; 
$_LANG['permissions_null'] = "You do not have permissions to access this page";
$_LANG['msg_email_format'] = 'Format error,please enter the correct email address';
$_LANG['msg_email_null'] = 'Verification email address cannot be empty，please enter the correct email address';
$_LANG['on_failure'] = "Access is denied";
$_LANG['Real_name_password_null'] = "Password cannot be empty";
$_LANG['Real_name_null'] = "Real name is cannot be empty";
$_LANG['self_num_null'] = 'IC no. cannot be empty';
$_LANG['bank_name_null'] = "Bank name cannot be empty";
$_LANG['bank_card_null'] = 'Bank card no. cannot be empty';
$_LANG['bank_mobile_null'] = 'Mobile no. cannot be empty';
$_LANG['single_comment'] = "Comment/Review";
$_LANG['single_comment_on'] = "Add additional comments";
$_LANG['Risk_rating'][0] = "Super dangerous";
$_LANG['Risk_rating'][1] = "Dangerous";
$_LANG['Risk_rating'][2] = "Low level";
$_LANG['Risk_rating'][3] = "Intermediate level";
$_LANG['Risk_rating'][4] = "Upper-intermediate level";
$_LANG['Risk_rating'][5] = "Advance Level";

/*白条*/
$_LANG['bt_Total_amount'] = 'Baitiao total amount'; 
$_LANG['element'] = "Yuan";
$_LANG['zhang'] = "Piece";
$_LANG['Surplus_baitiao'] = "Baitiao balance";
$_LANG['Deferred_repayment_period'] = 'Deferred payment period';
$_LANG['amount_paid'] = "Waiting for total payment";
$_LANG['Pending_payment'] = "Waiting Baitiao payment";
$_LANG['Transaction_detail'] = "Transaction detail";
$_LANG['Consumer_account_day'] = "Consume billing date";
$_LANG['label_bt_one'] = "Payment due date";
$_LANG['label_bt_two'] = "My payment date";
$_LANG['order_fee'] = 'Order amount';
$_LANG['stage'] = "Stage";
$_LANG['Has_paid_off'] = "Already paid off";
$_LANG['repayment'] = "Repayment";
$_LANG['formated_order_amount'] = "Order total amount";
$_LANG['rate'] = "Rate";
$_LANG['Number_periods'] = "No. of installment already paid";
$_LANG['Repayment_amount_now'] = "Current total repayment amount";
$_LANG['Bind_Account'] = "Bind account";
$_LANG['existing'] = "Already exists";
$_LANG['No_existing'] = "No";
$_LANG['Bind_one'] = "Account no. ，please bind";
$_LANG['user_number_bind'] = "Account no.";
$_LANG['user_password_bind'] = "Please enter your passwords";
$_LANG['Code_bind'] = 'Verification code';
$_LANG['captcha_empty'] = 'Please enter your verification code.';
$_LANG['forget_password'] = 'Forget login password';
$_LANG['bind_now'] = "Bind now";
$_LANG['bind_login_one'] = "Your username and login name";
$_LANG['bind_login_two'] = "It is recommended to use two or more combinations of letters, numbers and symbols, 6-20 characters.";
$_LANG['bind_login_three'] = 'It is recommended to use two or more combination of letter';
$_LANG['bind_login_four'] = 'Support password with letters, numbers and symbols “-”“_” combination，3-20 characters.';
$_LANG['username_bind'] = "Username";
$_LANG['bind_password'] = "Password";
$_LANG['bind_password2'] = "Re-password";
$_LANG['bind_password2_one'] = "Please enter the password again";
$_LANG['bind_phone'] = "Mobile no.";
$_LANG['bind_phone_one'] = "Yyou can use the phone to login and retrieve your password, after the verification is complete.";
$_LANG['bind_phone_two'] = "Please fill the correct mobile no.";
$_LANG['Code_bind_one'] = "Not clear？Click image to renew code";
$_LANG['bindMobile_code'] = "Mobile verification code";
$_LANG['bindMobile_code_null'] = "Please enter the mobile verification code";
$_LANG['get_bindMobile_code'] = "Get get mobile verification code";
$_LANG['agreed_bind'] = "I have read and agreed";
$_LANG['protocol_bind'] = "User Agreement";
$_LANG['bind_Mobile'] = "Bind to phone";
$_LANG['binding'] = "Bind";
$_LANG['email_user'] = 'Email';
$_LANG['bonus_user'] = "Bonus";
$_LANG['confirmation_not'] = "Waiting for confirm";
$_LANG['piad_not'] = "Awaiting Payment";
$_LANG['Receipt_receipt'] = "Awaiting Received";
$_LANG['receipt_not'] = "Awaiting Received";
$_LANG['comment_not'] = "Awaiting Comment";
$_LANG['complete_user'] = "Comfirmed";
$_LANG['see_all_order'] = "View all orde";
$_LANG['order_total'] = "Total amount";
$_LANG['consignee'] = 'Consignee';
$_LANG['order_time'] = "Order date";
$_LANG['see_all_Collection'] = 'View all collection';
$_LANG['unit_price_user'] = 'Unit price'; 
$_LANG['Collection_time'] = 'Collection time';
$_LANG['Recent_collection'] = "Recent collection";
$_LANG['calendar_help'] = 'Help';
$_LANG['help_Prompt_one'] = "After_sale_service guarantee";
$_LANG['help_Prompt_two'] = "A guide to payment methods";
$_LANG['help_Prompt_three'] = "Location of payment after arrival of goods";
$_LANG['help_Prompt_four'] = "How to identify fake phones";
$_LANG['help_Prompt_five'] = "Booking payment";
$_LANG['help_Prompt_six'] = "Return policy";
$_LANG['help_Prompt_Seven'] = "Delivery and payment smart inquiry";
$_LANG['help_Prompt_Eight'] = "How to enjoy international warranty";
$_LANG['help_Prompt_Nine'] = "How to identity original battery";
$_LANG['you_have'] = 'You have';
$_LANG['Out_stock_goods'] = "Unit item out of stock";
$_LANG['valid_goods'] = 'Booking product';
$_LANG['novalid_goods'] = 'You currently does not have any item out of stock';
$_LANG['Collection_goods'] = "Favorite product";
$_LANG['message_title'] = 'Message title';
$_LANG['message_content'] = 'Content ';
$_LANG['Select_file'] = 'Select file'; 
$_LANG['message_type_list'] = 'Only support gif、jpg、png、word、excel、txt、zip、ppt、pdf ';
$_LANG['Split_rule'] = "Affiliate policy ";
$_LANG['Web_signature'] = "Web Signature code";
$_LANG['stay_evaluate_goods'] = "Waiting for product comment";
$_LANG['stay_add_file'] = "Waiting for add picture";
$_LANG['Already_evaluated'] = "Already commented";
$_LANG['goods_info'] = "Product information";
$_LANG['message_state'] = "Comment status";
$_LANG['Click_review'] = "Click comment";
$_LANG['order_Prompt'] = "Order you have not complete yet -_-";
$_LANG['Continue_bask_single'] = "Continue review";
$_LANG['comment_see'] = "View comment";
$_LANG['comment_again'] = "Continue comment";
$_LANG['comment_add'] = "Add comment";
$_LANG['Satisfaction_evaluation'] = "Satisfaction evaluation";
$_LANG['No_comment'] = "No comment in this moment";
$_LANG['product_desc'] = 'Related Product description';
$_LANG['Like_ata'] = "Give a like";
$_LANG['Please_rate'] = 'Please rate';
$_LANG['seller_fwtd'] = 'Seller service';
$_LANG['logistics_speed'] = 'Shipping speed';
$_LANG['logistics_senders'] = 'Distributor service';
$_LANG['comments_think'] = "Thanks for your feedback";
$_LANG['take_list'] = "Pick up list";
$_LANG['gift_gard_number'] = "Gift card number";
$_LANG['gift_goods_name'] = 'Pick up item';
$_LANG['tpnd_time'] = 'Pick up time';
$_LANG['gift_address'] = "Pick up address";
$_LANG['gift_status'] = 'Pick up status';
$_LANG['gift_Prompt'] = 'Pick up successfully,waiting for delivery';
$_LANG['null_gift_Prompt'] = 'You currently does not have pick up item message';
$_LANG['Transaction_record'] = "Transaction record";
$_LANG['all_status'] = 'All status';
$_LANG['Complaint_goods'] = "Complaint product";
$_LANG['Complaint_store'] = "Complaint store";
$_LANG['Complaint_title'] = "Complaint title";
$_LANG['Treatment_status'] = "Manage status";
$_LANG['Label_number_null'] = "Please select at least one label tag";
$_LANG['Verify_email'] = "Verify Email";
$_LANG['Login_name'] = "Login username";
$_LANG['Post'] = "Post";
$_LANG['box'] = "box";
$_LANG['verification_code'] = "Get a verification code";
$_LANG['code_number'] = "4 digit number";
$_LANG['Free_registration'] = "Free registration";
$_LANG['Welcome_login'] = "Welcome login";
$_LANG['passport_one'] = "The username and password does not match, please try again";
$_LANG['passportforgot_password'] = 'Forget password？';
$_LANG['signin_now'] = 'Log&nbsp;&nbsp;in';
$_LANG['Third_party_Lgion'] = "Use third party account login";
$_LANG['jingdong'] = "Use APP";
$_LANG['code_lgion'] = "Scan to login";
$_LANG['lgion_fail'] = "Login failed";
$_LANG['code_lgion_again'] = "Please refresh the QR code and scan again";
$_LANG['Refresh_two_code'] = "Refresh QR code again";
$_LANG['Use_help'] = "Use help";
$_LANG['code_problem'] = "Cannot scan, version too old?";
$_LANG['code_lgion_now'] = 'Scan to login'; 
$_LANG['Have_account'] = "Have account? ";
$_LANG['login_here'] = 'Login here';
$_LANG['or_login'] = 'Or';
$_LANG['email_yanzheng'] = "Verify email";
$_LANG['email_label'] = "Email verification";
$_LANG['phone_yanzheng'] = "Mobile verification";
$_LANG['Prompt_problem'] = "Password question";
$_LANG['passwd_answer_useer'] = 'Password answer';
$_LANG['getMobile_code'] = "Send";
$_LANG['service_agreement'] = "Service agreement";
$_LANG['Agreement_register'] = "I agree to the terms and condition";
$_LANG['register_now'] = "Register now";
$_LANG['reset_email_password'] = "Reset email password";
$_LANG['reset_phone_password'] = 'Reser mobile password';
$_LANG['Regist_problem'] = "Register problem";
$_LANG['email_reset'] = 'Registered Email';
$_LANG['reset_password'] = 'Reset password';
$_LANG['bind_mobile_regist'] = 'Bind your mobile';
$_LANG['msg_mobile_code'] = 'Mobile code';
$_LANG['get_verification_code'] = "Send";
$_LANG['Order_recycling_station'] = "Recycle Bin";
$_LANG['all_time'] = 'All time';
$_LANG['Today'] = "Today";
$_LANG['three_today'] = "3 day before";
$_LANG['aweek'] = "1 week before";
$_LANG['thismonth'] = "1 month before";
$_LANG['search_oreder_user'] = "product name/order no.";
$_LANG['query'] = 'Query';
$_LANG['Ious_staging'] = "Baitiao installment";
$_LANG['baitiao_order'] = "Baitiao order";
$_LANG['Waybill_number'] = "Airway bill no.";
$_LANG['pick_code'] = "Pick up code";
$_LANG['amount_each'] = "Installment amount for each period";
$_LANG['yuan_stage'] ='Yuan/Stage';
$_LANG['bt_go_refund'] = "Go to make payment";
$_LANG['logistics_tracking'] ='Tracking my parcel';
$_LANG['info'] = "Information";
$_LANG['zc_scheme_info'] = "Crowdfunding project detail";
$_LANG['zc_project_name'] ='Crowdfunding project name';
$_LANG['zc_project_raise_money'] = 'Crowdfunding amount';
$_LANG['zc_goods_price'] = 'Project price';
$_LANG['freight'] = "Shipping fee";
$_LANG['user_goods_sn'] = "Item no.";
$_LANG['Discount_user'] = "Promotion";
$_LANG['check_all'] = 'Select all';
$_LANG['put_in_cat'] = 'Add to shopping cart';
$_LANG['Other'] = 'Other';
$_LANG['Deposit_user'] = "Total payable (Deposit)";
$_LANG['Deposit_user_one'] = "Total";
$_LANG['end_pay_time'] = "Very sorry，your last payment has been overdue.";
$_LANG['pay_end_one'] = "Please take note that your next payment due date is ";
$_LANG['zhi'] = "Until";
$_LANG['pay_end_two'] = "Stop，there is no return or refund after the deposit was paid！";
$_LANG['Fixed_telephone'] = "Phone";
$_LANG['user_address'] = "Address";
$_LANG['email_address'] = "Email address";
$_LANG['offline_store_information'] = 'Store information';
$_LANG['stores_name']                 = 'Store name';
$_LANG['stores_opening_hours']        = 'Operation hour';
$_LANG['stores_traffic_line']         = 'Store direction';
$_LANG['stores_img']                  = 'Store image';
$_LANG['since_some_info'] = 'Pick up information';
$_LANG['Invoice_information'] = 'Invoice information';
$_LANG['Order_note_user'] = "Order remark";
$_LANG['store_grade_list'] = "Join seller level list";
$_LANG['grade_name'] = "Level name";
$_LANG['good_number'] = 'Item quantity';
$_LANG['temp_number'] = 'Template quantity';
$_LANG['grade_introduce']   = 'Level introduction';
$_LANG['entry_criteria']    = 'Qualification for Membership';
$_LANG['grade_img']         =  'Level logo';
$_LANG['Has_succeeded'] = "Successful";
$_LANG['once'] = 'Apply';
$_LANG['grade_info']        = 'Current level information';
$_LANG['now_grade']         = 'Current level';
$_LANG['in_time']           = 'Join time';
$_LANG['end_time']          = 'Expire date';
$_LANG['refund_grade']      = 'Balance';
$_LANG['year'] = "Year";
$_LANG['information_count'] = 'General Information';
$_LANG['settled_down'] = "Join membership expiration year";
$_LANG['label_total_user'] = 'Total';
$_LANG['Settlement'] = "Pay";
$_LANG['Select_payment'] = 'Your payment method is';
$_LANG['Fee_for_user'] = "Handling fee is";
$_LANG['payment_amount_user'] = "Total payable amount is";
$_LANG['remark_package'] = '（Package）';
$_LANG['nothing'] = "Nothing";
$_LANG['Have_applied'] = "[Applied]";
$_LANG['close_applied'] = "[Closed]";
$_LANG['applied'] = "Apply";
$_LANG['Return_repair'] = "Back to Repair/return";
$_LANG['Return_type'] = "Return type";
$_LANG['Return_reason'] = "Return Reason";
$_LANG['Return_one'] = "7 days return";
$_LANG['Return_two'] = "8-15 days return";
$_LANG['Return_three'] = "15 days above before warranty period";
$_LANG['Performance_fault'] = "Faulty/damaged/broken";
$_LANG['Performance_fault_one'] = "Product did not meet customer expectations";
$_LANG['Missing_parts'] = "Missing parts";
$_LANG['Missing_parts_one'] = "The actual product part received are not as described on the introduction packing list.";
$_LANG['Logistics_loss'] = "Shipping damage";
$_LANG['Logistics_loss_one'] = "Item has been damaged,defective,unusable during shipping.";
$_LANG['Inconsistent_goods'] = "Actual item received is not as described on the website";
$_LANG['Inconsistent_goods_one'] = "Actual item received is not as described on the website specification.";
$_LANG['Buy_wrong'] = "Purchase wrongly or Extra purchase";
$_LANG['Buy_wrong_one'] = "Under the premise that Item（Packaging and Parts）must be in their original condition";
$_LANG['Buy_wrong_two'] = "Can be return";
$_LANG['Return_Explain'] = "<h3> Service policy </h3>
                <p><i>1、</i><span>You must return an item in the original condition as it was received, include the free gift. </span></p>
                <p><i>2、</i><span>Shipping damage：Please check your item carefully when received, if found that damaged in packaging or product itself, need to inform the carriers on the spot and refuse the delivery；if you found that damaged in packaging or product itself after received, please apply for return within 24 hours of receipt.Return will be not accepted after 24 hour of receipt.</span></p>
                <p><i>3、</i><span>Actual item received is not as described on the website： All of our products are 100% authentic quality goods and are sourced directly from the manufacturers or approved manufacturer agents. However, the manufacturer will change the packaging, place of origin or some accessories without prior notice.Thus, We can not make sure that the goods you received are in perfect with the product picture, place of origin or some accessories in the store. </span></p>
                <p><i>4、</i><span>If you have any doubt of the products quality, you may issue relevant written identification, and we will be dealt with it in accordance with the provisions of the state law. </span></p>";
$_LANG['Service_Mingxi'] = "Service detail";
$_LANG['reminder'] = 'Friendly reminder';
$_LANG['reminder_one'] = 'After-sales service provide by Seller';
$_LANG['reminder_two'] = 'Provide you with';
$_LANG['Service_type'] = "Service type";
$_LANG['order_return_type'][0] = "Repair";
$_LANG['order_return_type'][1] = "Return";
$_LANG['order_return_type'][2] = "Replace item";
$_LANG['order_return_type'][3] = "Only refund";
$_LANG['Repair_number'] = "Repair no.";
$_LANG['Repair_one'] = "Available repair";
$_LANG['Repair_two'] = "Unit，has been repaired";
$_LANG['jian'] = "Unit";
$_LANG['return_number'] = "Return quantity";
$_LANG['return_one'] = "Available return";
$_LANG['return_two'] = "Unit，has been returned";
$_LANG['return_one'] = "Available return";
$_LANG['return_two'] = "Unit，has been returned";
$_LANG['change_two'] = "Unit，has been replaced";
$_LANG['Application_credentials'] = "Application credentials";
$_LANG['has_Test_Report'] = "has test report";
$_LANG['return_reason']='Return reason';
$_LANG['problem_desc'] = 'Problem description';
$_LANG['pic_info'] = 'Picture information';
$_LANG['pic_info_one'] = '<p> In order to help us have a better solution, please upload your image</p>
                                    <p>Press Ctrl able to upload multiple image</p>
									<p>Maximum of 10 picture can be uploaded, maximum each picture size is 5M，surpport bmp,gif,jpg,png,jpeg format file</p>
									';
$_LANG['Empty_picture'] = 'Clear picture';
$_LANG['Contact_name'] = "Contact person";
$_LANG['label_mobile'] = 'Mobile no.';
$_LANG['detailed_info'] = "Detailed information";
$_LANG['return_sn'] = "Return order no.";
$_LANG['apply_time'] = "Apply time";
$_LANG['return_type_user'] = "Return type";
$_LANG['back_cause'] = 'Return reason';
$_LANG['amount_return'] = 'Item return';
$_LANG['return_shipping'] = 'Shipping fee return';
$_LANG['return_total'] = 'Total refunded';
$_LANG['Contact_address'] = "Contact address";
$_LANG['progress_return'] = "Return progress";
$_LANG['Waybill'] = "Airway bill no.";
$_LANG['Logistics_company'] = "Logistics company";
$_LANG['Express_info'] = "Shipping information";
$_LANG['Express_company'] = "Courier company";
$_LANG['select_Express_company'] = "Please select Courier company";
$_LANG['User_sent'] = "Sent by user";
$_LANG['courier_sz'] ='Tracking no.';
$_LANG['Express_info_two'] = "Please fill in the courier information of the goods you sent back.";
$_LANG['seller_shipping'] ='Sent by seller';
$_LANG['consignee_new'] = 'Add consignee information';
$_LANG['add_consignee_one'] = 'Added';
$_LANG['add_consignee_two'] = 'Unit shipping address, Maximum can add';
$_LANG['default_consigneeing'] = "Set as default address";
$_LANG['default_consignee_to'] = "Set as default";
$_LANG['modify'] = "Modify";
$_LANG['Newly'] = "Add";
$_LANG['consignee_empty'] = "Consignee information cannot be empty";
$_LANG['Local_area'] = 'Location';
$_LANG['select_Local_area'] = 'Please select the location';
$_LANG['detailed_address_null'] = 'Please fill in the detailed address';
$_LANG['label_tel'] = 'Contact no.';
$_LANG['label_tel_empty'] = "Please enter the contact method";
$_LANG['default_consigneed'] = "Set as default shipping address";
$_LANG['submit_address'] = 'Save';
$_LANG['youhave'] = 'You have';
$_LANG['return_goods_user'] = 'Unit return item';
$_LANG['return_sn_user'] = 'Return order no.';
$_LANG['y_amount'] = 'Total refunded';
$_LANG['return_order_user'] = 'You currently does not have any return order';
$_LANG['return_order_user_desc'] = '<h3>Tips</h3>
                    <p>1、Please sent your return item as soon as posible</p>
                    <p>2、Please fill in the courier information after the item sent, we will process your return item immediately once received. </p>';
$_LANG['Modify_Avatar'] = 'Edit profile picture';
$_LANG['nick_name'] = 'Nick name';
$_LANG['Birthday_user'] = "Date of birth";
$_LANG['sex_user'] = "Gender";
$_LANG['Immediately_verify'] = "Verify now";
$_LANG['Security_Center'] = "Security center";
$_LANG['Security_level'] = "Security level";
$_LANG['Security_level_desc'] = "We recommend that you should startup all of security setting .";
$_LANG['password_user'] = 'Login password';
$_LANG['password_user_desc'] = 'Your account could be at risk of hack.For security, we recommend that you change your account password regularly.';
$_LANG['Email_authent'] = "Email authentication";
$_LANG['email_yanzheng_you'] = "Verification email address";
$_LANG['Email_authent_desc'] = "After verification, you are able to quickly retrieve the login password, receive reminder on changes in account balance.";
$_LANG['is_validated'] = 'Verify';
$_LANG['phone_authent'] = "Mobile certification";
$_LANG['phone_authent_desc'] = "Your mobile has been verified, If it has been lost or deactivated, please replace it immediately in order to avoid account from being hacked";
$_LANG['phone_authent_desc_one'] = "After verification,you are able to quickly retrieve the login password and payment password, receive reminder on changes in account balance.。";
$_LANG['pay_password'] = 'Payment password';
$_LANG['confirm_pay_password'] = 'Confirm payment password';
$_LANG['Safety_certification'] = "Security verification";
$_LANG['Degree_of_safety'] = "Security level";
$_LANG['Degree_of_safety_desc'] = "Payment password has been set up，we recommend that you change your account password regularly.";
$_LANG['pay_password_manage'] = 'Payment password';
$_LANG['Safety_renzheng'] = "Security verification";
$_LANG['Safety_renzheng_desc'] = "Security verification";
$_LANG['Enable_now'] = "Use now";
$_LANG['16_users_real'] = 'Real name authentication';
$_LANG['16_users_real_info'] = 'Your Real name authentication information';
$_LANG['16_users_real_desc'] = 'You have not verify your real name of this account,real-name authentication can speed up the cash withdrawal process.';
$_LANG['Safety_now'] = "Verify now";
$_LANG['edit_password_login'] = "Edit login password";
$_LANG['Verify_identity'] = "Verify identity";
$_LANG['Verify_phone_in'] = "Verified mobile";
$_LANG['adopt_phone'] = "Verify by mobile";
$_LANG['Verify_email_in'] = "Verify by email address";
$_LANG['Verify_password_in'] = "Verify by payment password";
$_LANG['Verify_phone_user'] = "Verify by mobile";
$_LANG['Verify_password_user'] = "Verify by payment password";
$_LANG['Verify_phone_codeempty'] = "Please fill in the mobile verification code";
$_LANG['get_verification_code_user'] = "Send";
$_LANG['Verified_mailbox'] = "Verified email address";
$_LANG['send_verify_email'] = 'Send verification email';
$_LANG['input_pay_password'] = 'Please enter payment password';
$_LANG['send_email_in'] = 'A verification email has been sent to';
$_LANG['send_email_desc_one'] = 'Please login your email address and Click the link provided to finish verifying your email address before it is expired.';
$_LANG['send_email_desc_two'] = 'Have no receive email back to verification';
$_LANG['send_email_desc_three'] = '（Please complete the verification now, if the email verification fails, please change your email address）';
$_LANG['new_login_password'] = "New login password";
$_LANG['password_Prompt'] = "By the combinations of letters, numbers and symbol with at least two or more combination of 6-20 halfwidth character, case sensitive.";
$_LANG['input_password_again'] = "Please enter your password again";
$_LANG['security_rating'] = "Congratulations, edit password successfully!";
$_LANG['security_rating_one'] = "The latest security rating ";
$_LANG['security_rating_two'] = "Your account security level can be upgraded, go now!";
$_LANG['security_rating_three'] = "Improve other security settings, security rating can be increased！";
$_LANG['Mailbox_Management'] = "Manage email address";
$_LANG['edit_email'] = "Edit email address";
$_LANG['Verify_mailbox'] = "Verify email address";
$_LANG['website_email'] = 'Email';
$_LANG['edit_email_desc_one'] = "Congratulations,edit email address successfully verified!";
$_LANG['edit_email_desc_two'] = "Congratulations,email address successfully verified!";
$_LANG['edit_email_desc_three'] = "Congratulations,edit email address successfully verified!";
$_LANG['edit_email_desc_four'] = "Congratulations,edit email address successfully verified!";
$_LANG['phone_Management'] = "Manage mobile";
$_LANG['phone_edit'] = "Edit mobile";
$_LANG['Verify_phone'] = "Verify mobile";
$_LANG['bind_phone_user'] = "Congratulations,bind your phone successfully！";
$_LANG['pay_password_Management'] = "Manage payment password";
$_LANG['edit_pay_password'] = "Edit payment password";
$_LANG['Enable_pay_password'] = "Enable payment password";
$_LANG['Enable_pay_password_desc'] = "After enable payment password, you may take the following steps to authenticate your identity by payment password in order to ensure your funds are secure. Please confirm!";
$_LANG['pay_password_Prompt'] = "Your payment password has been enable!";
$_LANG['forgot_paypassword'] = 'Forget payment password?';
$_LANG['pay_online'] = 'Online payment';
$_LANG['balance_pay'] = "Pay by balance";
$_LANG['Enable_pay_password_notice'] = "Congratulations，enable payment password successfully！";
$_LANG['Real_name'] = "Real name";
$_LANG['Real_name_notice'] = "please fill in your real name authentication information,in order to protect your account security.";
$_LANG['Real_name_input'] = "Please enter your name";
$_LANG['number_ID'] = "ID number";
$_LANG['bank'] = 'Bank name';
$_LANG['bank_card'] = 'Bank card no.';
$_LANG['Support_bank'] = 'Supported bank';
$_LANG['Savings_deposit_card'] = "Stored value card";
$_LANG['Credit'] = "Credit card";
$_LANG['bank_name']['ICBC'] = 'Industrial and Commercial Bank of China';
$_LANG['bank_name']['CCB'] = 'China Construction Bank';
$_LANG['bank_name']['CMB'] = 'China Merchants Bank';
$_LANG['bank_name']['ABC'] = 'Agricultural Bank of China';
$_LANG['bank_name']['BCOM'] = 'Bank of Communications';
$_LANG['bank_name']['GDB'] = 'China Guangfa Bank';
$_LANG['bank_name']['BOC'] = 'Bank of China';
$_LANG['bank_name']['CMBC'] = 'China Minsheng Bank';
$_LANG['label_mobile_notice'] = 'Please fill in the mobile phone number of your bank card that you provided to the bank, to verify that the bank card is true belongs to you yourself';
$_LANG['label_mobile_input'] = 'Please enter mobile no.';
$_LANG['label_mobile_code'] = 'Mobile verification code';
$_LANG['Short_message_null'] = 'No receive any message?'; 
$_LANG['label_mobile_error'] = 'Wrong mobile no.?';
$_LANG['mobile_step_notice'] = "Follow the steps below to solve the problem：";
$_LANG['mobile_step_notice_one'] = "1. Please confirm that the alternate mobile no. is your current existing mobile no.<br>
                                2. If alternate mobile no. that you provided to bank has been suspended, please contact the bank for amendment.<br>
                                3. Please rebind after the alternate mobile no. that you provided to bank has been amended.<br>
                                4. For more help，You can contact";
$_LANG['mobile_Agree'] = "I have read and agreed the term and condition";
$_LANG['edit_info'] = "Edit information";
$_LANG['Verify_time'] = "Verify time";
$_LANG['adopt_status'] = 'Review status';
$_LANG['is_confirm'][0]   = 'Not reviewed';
$_LANG['is_confirm'][1]   = 'Review passed';
$_LANG['is_confirm'][2]   = 'Review have not passed';
$_LANG['Authentication_channel'] = "Verification channel：real name authentication";
$_LANG['bind_qq'] = "Bind QQ account";
$_LANG['Bound'] = "Bound";
$_LANG['not_Bound'] = "Not bind";
$_LANG['Unbundling'] = "Unbind";
$_LANG['Un_bind'] = "Unbind";
$_LANG['Shopping_user'] = "Shopping";
$_LANG['account_bind_one'] = "You are still using";
$_LANG['account_bind_two'] = "Only 1 QQ account can be bind";
$_LANG['account_bind_three'] = "Please remember this";
$_LANG['account_bind_fuor'] = "Account";
$_LANG['account_bind_five'] = "<li>1、You need to login this account after unbind.Order and other information will not be lost after unbind. Forgot your password? please retrieve the password in the login page；</li>
                                <li>2、All QQ acounts related to this account will be unbind；</li>";
$_LANG['account_bind_six'] = "You can login with QQ account after bind";
$_LANG['weibo_one'] = "Bind Weibo account";
$_LANG['weibo_two'] = "Only 1 Weibo account can be bind";
$_LANG['weibo_three'] = "<li>1、You need to login this account after unbind.Order and other information will not be lost after unbind. Forgot your password? please retrieve the password in the login page；</li>
                                <li>2、All Weibo acounts related to this account will be unbind；</li>";
$_LANG['weibo_four'] = "You can login with Weibo account after bind";
$_LANG['weixin_one'] = "Bind Wechat account";
$_LANG['weixin_two'] = "Only 1 Wechat account can be bind";
$_LANG['weixin_three'] = "<li>1、You need to login this account after unbind.Order and other information will not be lost after unbind. Forgot your password? please retrieve the password in the login page；</li>
                                <li>2、All Wechat acounts related to this account will be unbind；</li>";
$_LANG['weixin_four'] = "You can login with Wechat account after bind";
$_LANG['bonus_balance'] = "Available bonus balance";
$_LANG['available_bonus'] = 'Available bonus';
$_LANG['About_expire'] = 'Expired soon';
$_LANG['bonus_info'] = '<h3>Bonus binding and description</h3>
                <p>1、Please enter the bonus password no. on the left side for binding or inquiry. </p>
                <p>2、If you still own an old version bonus（card no. with 19 character），After activate please go to"<span class="ftx-05"> My bonus </span>" check my available bonus balance.</p>
                ';
$_LANG['card_number'] = 'Card &nbsp;&nbsp; No';
$_LANG['card_password'] = 'Password&nbsp;&nbsp;';
$_LANG['Bind_current_account'] = "Bind to current account";
$_LANG['Bound_bonus'] = "Bound bonus";
$_LANG['keyong'] = "Available";
$_LANG['have_been_exhausted'] = "Finished";
$_LANG['card_number_label'] = "Card no";
$_LANG['face_value_label'] = "Face value";
$_LANG['Min_order_amount'] = "Minimum order amount";
$_LANG['bind_time'] = "Bind time";
$_LANG['general_audience'] = 'General';
$_LANG['bonus_help_one'] = "Bonus usage guide";
$_LANG['bonus_help_two'] = "<p>1. After the bonus have bound to account, it can only be used by the current bound account；</p>
                                <p>2.Invoice will not be issued for the partial payment by bonus；</p>
                                <p>3.Please take note on bonus expiration date, we will notify you when the bonus is about to expired；</p>";
$_LANG['bonus_help_three'] = "<p>4.The partial payment by bonus will be return back to the original amount of bonus ,it does not able to convert in cash；</p>
                                <p>5.If you have any questions, please click on the following help page for inquiries.</p>";
$_LANG['Use_rule'] = "Rules of Use";
$_LANG['Invoice_distribution'] = "Invoice and distribution ";
$_LANG['Red_envelope'] = "Bonus rule";
$_LANG['Coupon_list'] = "Coupon list";
$_LANG['Consumption_full'] = "Minimun spending";
$_LANG['no_use_sn'] = "Coupon&nbsp;&nbsp;Series&nbsp;&nbsp;No.";
$_LANG['Category_restrictions'] = "Category restrictions";
$_LANG['Platform_limit'] = "Platform limit";
$_LANG['xian'] = "Limit";
$_LANG['employ'] = "Use";
$_LANG['whole_platform'] = "Self-managed";
$_LANG['Immediate_use'] = "Use now";
$_lang['data_empty'] = "No data";
$_LANG['Expiration_time'] = "Expiration time";
$_LANG['latest_state'] ="Latest status";
$_LANG['null_invoice'] = "No parcel";
$_LANG['label_user_balance'] = 'User balance';
$_LANG['05_seller_account_log'] = 'Apply record';
$_LANG['account_log_empty'] = "You currently do not have any apply record";
$_LANG['current_funding'] = "Your current capital is";
$_LANG['operation_log_null'] = "Your currently do not haec any operate record";
$_LANG['Current_balance'] = "Current available withdrawal balance";
$_LANG['Current_balance'] = "Current available withdrawal balance";
$_LANG['Current_balance_label'] = "Available withdrawal balance";
$_LANG['renmingni'] = "（RMB）";
$_LANG['Application_withdrawal'] = "Apply for withdrawal cash";
$_LANG['Reset_Form'] = "Reset form";
$_LANG['yueangqian'] = "Youe current available balance is";
$_LANG['Determine_Recharge'] = "Confirm top up";
$_LANG['Recharge_info'] = "Top up information";
$_LANG['I_support'] = "My support";
$_LANG['I_concerned'] = "My follow";
$_LANG['Already_paid'] = "Paid";
$_LANG['not_paid'] = "Have not paid";
$_LANG['Project_info'] = "Project information";
$_LANG['zc_number'] = "No. of supporter (People)";
$_LANG['gz_number'] = "No. of follower(People)";
$_LANG['zc_in'] = "In the process of crowdfunding";
$_LANG['zc_raise'] = "Raised";
$_LANG['go_pay'] = "Go pay";
$_LANG['zc_ss'] = '"In the process of Shipping';
$_LANG['Received_goods'] = "Item Received";
$_LANG['Received_notice_one'] = "Very sorry, This is a blank area <br/>You have not support any projects yet, Go now";
$_LANG['Received_notice_two'] = "See what is intesting!";
$_LANG['zc_home'] = "crowdfunding homepage";
$_LANG['To_support'] = "Go to support";
$_LANG['report_img_number'] = "Maximum of 5 image can be uploaded!";
$_LANG['inform_content_null']           = 'Report content cannot be empty!';
$_LANG['type_null']        = 'Select report type!';
$_LANG['title_null']        = 'Please select report title!';
$_LANG['report_success']  = "Report successfully";
$_LANG['back_report_list']  = "Back to report list";
$_LANG['repeat_report']  = "This item you has already been reported, please waiting for judgement result!";
$_LANG['offgoods_report']  = "This product has already off the shelf, temporarily can not report";


$_LANG['js_languages']['user_name_bind'] = "Please enter username and password";
$_LANG['js_languages']['user_namepassword_bind'] = "Please enter the correct username and password";
$_LANG['js_languages']['is_user_follow'] = "Are you sure you want to follow this selected item?";
$_LANG['js_languages']['cancel_user_follow'] = "Are you sure you want to unfollow this selected item?";
$_LANG['js_languages']['delete_user_follow'] = "re you sure you want to delete selected followed item?";
$_LANG['js_languages']['delete_brand_follow'] = "Are you sure you want to delete selected followed brand";
$_LANG['js_languages']['select_follow_goods'] = "Please select the follow item";
$_LANG['js_languages']['select_follow_brand'] = "lease select the follow brand";
$_LANG['js_languages']['follow_Prompt'] = "Prompt";
$_LANG['js_languages']['comments_think'] = "Thank you for your comments";
$_LANG['js_languages']['comment_img_number'] = "Maximum of 10 picture can be uploaded！";
$_LANG['js_languages']['content_not'] = 'Content cannot be empty';
$_LANG['js_languages']['word_number'] = 'Maximum of 0-500 character can be entered';
$_LANG['js_languages']['button_unremove'] = 'Confirm';
$_LANG['js_languages']['comments_Other'] = 'You can continue to comment on other order product';
$_LANG['js_languages']['parameter_error'] = "Submit error";
$_LANG['js_languages']['fuzhizgantie'] = "Address has been copied, and you can paste it with Ctrl+V";
$_LANG['js_languages']['verify_email_null'] = "Email address can not be empty";
$_LANG['js_languages']['verify_email_Wrongful'] = "Invalid email address";
$_LANG['js_languages']['verify_email_code_number'] = "Please fill in the 4 digit verification code";
$_LANG['js_languages']['Mailbox_sent'] = "Email sent";
$_LANG['js_languages']['operation_order_one'] = "Are you sure you want to delete this order?";
$_LANG['js_languages']['operation_order_two'] = "Are you sure you want to restore this order?";
$_LANG['js_languages']['operation_order_three'] = "Are you sure you want to completely delete this order？";
$_LANG['js_languages']['logistics_tracking_in'] ='We are tracking your logistic information, please wait...';
$_LANG['js_languages']['surplus_null'] ='Used balance amount cannot be empty';
$_LANG['js_languages']['surplus_isnumber'] ='Used balance must be a numeric';
$_LANG['js_languages']['cannot_null'] = 'Cannot be empty';
$_LANG['js_languages']['select_payment_pls'] = 'Please select payment method';
$_LANG['js_languages']['settled_down_lt1'] = "Payment period cannot be less than 1 year.";
$_LANG['js_languages']['Wrongful_input'] = "Invalid content";
$_LANG['js_languages']['return_one'] = "Please select a reason for return！";
$_LANG['js_languages']['return_two'] = "Please select a reason for return！";
$_LANG['js_languages']['return_three'] = "Problem Description cannot be empty！";
$_LANG['js_languages']['return_four'] = "Please select country";
$_LANG['js_languages']['address_empty'] = 'Shipping address cannot be empty';
$_LANG['js_languages']['Contact_name_empty'] = 'Contact person cannot be empty';
$_LANG['js_languages']['phone_format_error'] = 'Invalid mobile no.';
$_LANG['js_languages']['msg_phone_blank'] = 'Mobile no. cannot be empty';
$_LANG['js_languages']['change_two'] = "Maximum number of change：";
$_LANG['js_languages']['jian'] = "Unit";
$_LANG['js_languages']['select_Express_company'] = "Please select courier company";
$_LANG['js_languages']['Express_companyname_null'] = "Please fill in the courier company name";
$_LANG['js_languages']['courier_sz_nul'] ='Please fill in the courier no.';
$_LANG['js_languages']['delete_consignee'] = "Are you sure you want to delete this shippping address?";
$_LANG['js_languages']['default_consignee'] = "Are you sure you want to set this shipping address as default";
$_LANG['js_languages']['sign_building_desc'] = "Set an easy remember name，Ex：'Sent to home'、'sent to company'";
$_LANG['js_languages']['Immediately_verify'] = "Verify now";
$_LANG['js_languages']['null_email_user'] = 'mail address cannot be empty'; 
$_LANG['js_languages']['SMS_code_empty'] = 'SMS verification code cannot be empty'; 
$_LANG['js_languages']['Real_name_password_null'] = "Password cannot be empty";
$_LANG['js_languages']['Verify_password_deff'] = "Password does not match";
$_LANG['js_languages']['Real_name_null'] = "Real name cannot be empty";
$_LANG['js_languages']['number_ID_null'] = "ID card no. cannot be empty";
$_LANG['js_languages']['bank_name_null'] = "Bank name cannot be empty";
$_LANG['js_languages']['bank_number_null'] = "ank card no. cannot be empty";
$_LANG['js_languages']['Un_bind'] = "Unbind";
$_LANG['js_languages']['bind_user_one'] = "Are you sure you want";
$_LANG['js_languages']['account_bind_fuor'] = "Account no.";
$_LANG['js_languages']['account_bind_five'] = "Please use after unbind";
$_LANG['js_languages']['registered'] = "Login";
$_LANG['js_languages']['card_number_null'] = "Card no. cannot be empty";
$_LANG['js_languages']['go_login'] = "Go to login";
$_LANG['js_languages']['cancel_zc'] = "Are you sure you want to unfollow this crowdfunding project";
$_LANG['js_languages']['no_attention'] = 'Unfollow';
$_LANG['js_languages']['Unbundling'] = "Unbind";
$_LANG['js_languages']['binding'] = "Bind";
$_LANG['js_languages']['stop'] = "Hide";
$_LANG['js_languages']['number_ID_error'] = "nvalid ID card number, please enter the correct ID card no.";
$_LANG['js_languages']['bank_number_error'] = "Invalid bank card no.";

//20161214 start
$_LANG['follow_batch'] = 'Batch follow';
$_LANG['drop_batch'] = 'Batch delete';
$_LANG['Collection_goods_null'] = "Sorry, you have not add this item to favorite!";
$_LANG['Popularity_follow'] = "Popularity follow";
$_LANG['Service_evaluation'] = "Service eveluation";
$_LANG['follow_time'] = "Follow time";
$_LANG['shop_sells'] = "Hot sale in our store ";
$_LANG['shop_new'] = "New product in our store";
$_LANG['Collection_store_null'] = "Sorry, you have not add this store to favorite!";
$_LANG['score'] = "Rating score";
$_LANG['Pleas_mark'] = "Please give a rating";
$_LANG['Experience'] = "Experience";
$_LANG['Experience_one'] = "Please share your experience on (Screen size, aspects of system, accessories quality) ";
$_LANG['Experience_two'] = "Maximum of 500 characters can be entered";
$_LANG['drop_pic'] = 'Delete image';
$_LANG['Personal_homepage'] = "My profile";
$_LANG['oreder_core'] = "Order center";
$_LANG['user_core'] = "User center";
$_LANG['Trade_complaint'] = "Trade Disputes";
$_LANG['Account_center'] = "My Wallet";
$_LANG['Shop_management'] = "Manage store";
$_LANG['Store_backstage'] = "Store backstage";
$_LANG['business'] = "Seller";
$_LANG['people_time'] = "Consignee/order date";
$_LANG['Sub_order'] = "Sub order";
$_LANG['reduction'] = "Restore";
$_LANG['order_user_desc'] = "Dear customer, your item is issued by a different seller, therefore your order will separate delivery to you, Sorry for the inconvenience caused.";
//20161214 end

$_LANG['seller_Grade'] = 'Seller level';

//储值卡
$_LANG['user_one_code'] = "Incorrect SMS Verification code";
$_LANG['value_card_list'] = 'Stored value card lis';
$_LANG['overdue_time'] = "Valid until ";
$_LANG['face_value_card'] = "Face&nbsp;&nbsp;&nbsp;&nbsp;value";
$_LANG['card_type'] = 'Card type';
$_LANG['menuplatform_card'] = "Platform";
$_LANG['value_card_info'] = "Stored value card user guide";
$_LANG['lab_card_id'] = 'Series no.';
$_LANG['Use_the_amount_of'] = "Use amount";
$_LANG['use_value_card'] = 'Use stored value card';
$_LANG['value_card_bind'] = 'Bind your stored value card';
$_LANG['card_bind_desc'] = 'Stored value card binding and description ';
$_LANG['card_desc']['one'] = 'Enter the stored value card number on the right side to bind the password ';
$_LANG['card_desc']['two'] = 'Please read the usable range of stored value card carefully';
$_LANG['value_card_filling'] = 'Top up stored value card';
$_LANG['value_card_unwrap'] = 'Unbind stored value card';
$_LANG['Buyer_impression'] = 'Buyer impression';

/*2017模板 新增*/
//内容为空时
$_LANG['no_records'] = 'Sorry, no data ';
$_LANG['no_brand_goods'] = 'This brand currently does not have product~ ~';
$_LANG['no_store_goods'] = 'This seller currently does not have product~';
$_LANG['no_bonus_keyong'] = 'Master, you do not have any available bonus yet~';
$_LANG['no_bonus_daoqi'] = 'Master, you do not have any bonus expired soon~';
$_LANG['no_bonus_end'] = 'Master, you do not hae any used bonus yet~';

$_LANG['no_coupons_keyong'] = 'Master, you do not have any available coupons yet~';
$_LANG['no_coupons_use'] = 'Master, you do not have any used coupons yet~';
$_LANG['no_coupons_over'] = 'Master, you do not have any expired coupons yet~';
$_LANG['no_coupons_soon_over'] = 'Master, you do not have any coupons expired soon~';
$_LANG['after_service_desc'] = 'Rejected reason';

$_LANG['user']['default']['no_records'] = 'Master, you recently have not bought anything ';
$_LANG['user']['order_list']['no_records'] = 'Master, you have not purchase any product yet~';
$_LANG['user']['booking_list']['no_records'] = 'Master, you currently do not have any booking item yet~';
$_LANG['user']['return_list']['no_records'] = 'Master, you currently do not have any return order yet~';
$_LANG['user']['crowdfunding']['no_records'] = 'Master, you do not have any supported project yet ~';
$_LANG['user']['collection_list']['no_records'] = 'Master, you currently do not have any item here~';
$_LANG['user']['store_list']['no_records'] = 'Master, you have not follow any store yet~';
$_LANG['user']['focus_brand']['no_records'] = 'Master, you have not follw any brand yet~';
$_LANG['user']['comment_list_0']['no_records'] = 'No order can be commented~';
$_LANG['user']['comment_list_1']['no_records'] = 'No review can be added~';
$_LANG['user']['comment_list_2']['no_records'] = 'No order was commented~';
$_LANG['user']['take_list']['no_records'] = 'Master, you do not have any pick up item~';
$_LANG['user']['value_card']['no_records'] = 'Master, you do not have any stored value card~';
$_LANG['user']['track_packages']['no_records'] = 'Master,you do not have any tracking parcel~';
$_LANG['user']['restore']['no_records'] = 'Master, you currently do not have any deleted order~';
$_LANG['user']['order_recycle']['no_records'] = 'Master, you currently do not have any deleted order~';
/*2017模板 新增end*/

$_LANG['trade_snapshot'] = 'Trade Snapshot';
$_LANG['malice_report']  = "You have a false report, your report permission has been blocked!";
$_LANG['malice_report_end']  = "Block expiration time：";
$_LANG['handle_message']        = "Reply";
$_LANG['handle_type']        = "Manage result";
$_LANG['handle_type_desc'][1]   = "Invalid report--Item is able to continue selling";
$_LANG['handle_type_desc'][2]   = "False report--All of your reported content will be consider invalid, users will be forbidden to report.";
$_LANG['handle_type_desc'][3]   = "Valid Report--Item will be off the shelf";
$_LANG['complaint_state'][0]       = "Not manage";
$_LANG['complaint_state'][1]       = "Waiting for appeal";
$_LANG['complaint_state'][2]       = "In a conversation";
$_LANG['complaint_state'][3]       = "Waiting for judgement";
$_LANG['complaint_state'][4]       = "Complete";
$_LANG['complaint_info']           = "Complaint detail";
$_LANG['appeal_info']              = "Appeal detail";
$_LANG['appeal_content']        = "Appeal content";
$_LANG['appeal_img']            = "Appeal image";
$_LANG['complaint_time'] = "Complaint time";
$_LANG['talk_record'] = "Conversation record";
$_LANG['talk_release'] = "Post conversation";
$_LANG['talk_refresh'] = "Refresh conversation";
$_LANG['talk_info'] = "Conversation detail";
$_LANG['talk_member_type'][1]            = "Complainant";
$_LANG['talk_member_type'][2]            = "Respondent";
$_LANG['talk_member_type'][3]            = "Administrator";
$_LANG['end_handle_time'] = "Manage time";
$_LANG['complaint_handle_time'] = "Preliminary review time";
$_LANG['handle_user'] = "Operator";
$_LANG['end_handle_messg'] = "Manage suggestion";


$_LANG['need_invoice'][0] = "General invoice";
$_LANG['need_invoice'][1] = "Value added tax invoice";


$_LANG['auction_staues'][0] = 'Not started';
$_LANG['auction_staues'][1] = 'In process';
$_LANG['auction_staues'][2] = 'End';
$_LANG['auction_staues'][3] = 'End';
$_LANG['order_details'] = 'Order Details';
$_LANG['payment_info'] = 'Payment information';
$_LANG['Shipping_info'] = 'Shipping information';
$_LANG['shipping_tracking'] = 'Tracking';
$_LANG['items'] = 'Items';
$_LANG['all'] = 'All';
$_LANG['Payment'] = 'Payment';
$_LANG['Shipping'] = 'Shipping';
$_LANG['Received'] = 'Received';
?>