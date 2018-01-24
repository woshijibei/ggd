<?php

/**
 * DSC 前台语言文件
 * $Author: Zhuo $
 * $Id: common.php 2016-01-04 Zhuo $
*/

$_LANG['merchants_article'] = "Article that you view does not exitst anymore,please contact with administrator";
$_LANG['shoppingcart_empty'] = "Your shopping cart is empty";
$_LANG['goshoppingnow'] = "Go shopping now";
/* 优惠券 start */
$_LANG['lang_goods_coupons']['all_pay'] = "Overall voucher";
$_LANG['lang_goods_coupons']['user_pay'] = "Membership voucher";
$_LANG['lang_goods_coupons']['goods_pay'] = "Shopping voucher";
$_LANG['lang_goods_coupons']['reg_pay'] = "Register voucher";
$_LANG['lang_goods_coupons']['not_pay'] = "Unknown";
$_LANG['lang_goods_coupons']['is_goods'] = "Limited item";
$_LANG['lang_goods_coupons']['is_all'] = "Applicable on all categories";

$_LANG['lang_coupons_receive_failure'] = "Redeem failure,coupon is finish redeemed";
$_LANG['lang_coupons_user_receive'] = "Redeem failure,you have already received the coupon!Limited to %s sheet per person";
$_LANG['lang_coupons_user_rank'] = "Redeem failure,only limit to member with level: %s to receive";
$_LANG['lang_coupons_receive_succeed'] = "Redeem successfully！Thank you for your participation，wish you have a pleasant shopping~";
/* 优惠券 end */

/* 众筹 start */
$_LANG['lang_crowd_preheat'] = "Preheating";
$_LANG['lang_crowd_of'] = "In the process of crowdfunding";
$_LANG['lang_crowd_succeed'] = "Crowdfunding successfully";

$_LANG['lang_crowd_art_succeed'] = "Published successfully";
$_LANG['lang_crowd_art_succeed_repeat'] = "Has already been published，please do not repeat publishment！";
$_LANG['lang_crowd_login'] = "Publish the topic after login";
$_LANG['lang_crowd_page_title'] = "Crowdfunding-Shipping address";
$_LANG['lang_crowd_login_focus'] = "Only login user can follow";
$_LANG['lang_crowd_focus_succeed'] = "Follow successfully";
$_LANG['lang_crowd_focus_repeat'] = "Has already followed，please do not repeat！";
$_LANG['lang_crowd_focus_cancel'] = "Unfollow successfully!";

$_LANG['lang_crowd_like'] = "Like successfully";
$_LANG['lang_crowd_like_repeat'] = "Has already liked, please do not repeat！";

$_LANG['lang_crowd_next_step'] = "Next step";
$_LANG['lang_crowd_not_login'] = "You have not logged in, please login to your account！";

$_LANG['lang_crowd_not_pay'] = "You have not paid crowdfunding orders，please pay before you submit new order";
$_LANG['lang_crowd_not_address'] = "You have not set the shipping address";
/* 众筹 end */

$_LANG['lang_product_sn'] = "Item number";

$_LANG['dwt_shop_name'] = "";

$_LANG['order_payed_sms'] = 'Order %s paid，Consignee：%s Telephone：%s'; //wang

//ecmoban模板堂 --zhuo start 审核收货人地址
$_LANG['order_address_stay'] = "Unable to submit order<br/>Shipping address has been modified，pending verification...";
$_LANG['order_address_no'] = "Unable to submit order<br/>Shipping address has been modified，verification not passed...";
$_LANG['index_lnk'] = "Back to Home";

$_LANG['edit_address_success'] = 'Your shipping address information has been successfully updated,verification approved';
$_LANG['address_list_lnk'] = 'Return to address list';

$_LANG['signin_failed_user'] = 'Shipping address is empty，please add the shipping address';
$_LANG['lnk_user'] = "Go add on receive address";
//ecmoban模板堂 --zhuo end 审核收货人地址

$_LANG['single_user'] = 'User reviews'; //by zhang
$_LANG['discuss_user'] = 'Internet user discussion area'; //by zhang
$_LANG['allcount'] = 'All posting'; //by zhang
$_LANG['s_count'] = 'Reviews post';
$_LANG['t_count'] = 'Discussion posting';
$_LANG['w_count'] = 'Question and answer posting';
$_LANG['q_count'] = 'Particular group posting';
$_LANG['reply_number'] = 'Reply rate';
$_LANG['click_count'] = 'Button click rate';
$_LANG['sort']['single_sort'] = 'Sort';

$_LANG['set_gcolor'] = 'Add product colours'; //by zhang

//ecmoban模板堂 --zhuo start
$_LANG['ff'][FF_NOMAINTENANCE] =  'Not repaired';
$_LANG['ff'][FF_MAINTENANCE] =  'Had repaired';
$_LANG['ff'][FF_REFOUND] = 'Had refunded';
$_LANG['ff'][FF_NOREFOUND] = 'Not yet refund';
$_LANG['ff'][FF_NOEXCHANGE] =  'Not return stock yet';
$_LANG['ff'][FF_EXCHANGE] =  'Had returned stock';

$_LANG['steps_UserLogin'] = 'You are not logged in and can not sign in';
$_LANG['UserLogin'] = 'Go log in';

$_LANG['please_select'] = 'Please choose';
$_LANG['country'] = 'Country';
$_LANG['province'] = 'District';
$_LANG['city'] = 'City';
$_LANG['area'] = 'Area';

$_LANG['delivery_warehouse'] = 'Warehouse';

$_LANG['group_shortage'] = "Sorry, the package of the main items of goods have been suspended due to lack of sales stock。\nDo you want to register for the goods now？";
$_LANG['group_not_on_sale'] = 'Sorry, the package of the main items had been off shelf';
$_LANG['group_goods_not_exists'] = "Sorry，the package of the main items does not exist";

$_LANG['not_start'] = 'Have not starts';
$_LANG['overdue'] = 'Already expired';
$_LANG['has_ended'] = 'Already end';
$_LANG['not_use'] = 'Have not use';
$_LANG['had_use'] = 'Already use';
//ecmoban模板堂 --zhuo end

/* 用户登录语言项 */
$_LANG['empty_username_password'] = 'Sorry，you must fully fill in user name and password.';
$_LANG['shot_message'] = "Short news";

/* 公共语言项 */

$_LANG['largess'] = 'Gift';
$_LANG['sys_msg'] = 'system notification';
$_LANG['catalog'] = 'Catalog';
$_LANG['please_view_order_detail'] = 'product had been sent，details please go to user centre and refer to ordering details';
$_LANG['user_center'] = 'User Centre';
$_LANG['shop_closed'] = "Our shop on stock counting，please revisit shortly...";
$_LANG['shop_register_closed'] = 'Particular shop stop register';
$_LANG['shop_upgrade'] = "Upgraded in process，admin staff from <a href=\\\"admin/\\\">management office</a> after login，system will auto upgraded";
$_LANG['js_languages']['process_request'] = 'In process of your request...';
$_LANG['process_request'] = 'In process of your request...';
$_LANG['please_waiting'] = 'Please wait, downloading...';
$_LANG['icp_number'] = 'ICPregistration certificate no';
$_LANG['plugins_not_found'] = "Add in file %s cannot identify location";
$_LANG['home'] = 'Home';
$_LANG['back_up_page'] = 'Back to previous page';
$_LANG['illegal_operate'] = '非法操作';
$_LANG['close_window'] = 'Close';
$_LANG['back_home'] = 'Back to Home';
$_LANG['ur_here'] = 'Current location:';
$_LANG['all_goods'] = 'All products';
$_LANG['all_recommend'] = "All recommendations";
$_LANG['all_attribute'] = "All";
$_LANG['promotion_goods'] = 'On sales products';
$_LANG['best_goods'] = 'Best Product';
$_LANG['new_goods'] = 'New Product';
$_LANG['hot_goods'] = 'Hot Product';
$_LANG['view_cart'] = "View Cart";
$_LANG['catalog'] = 'All category';
$_LANG['regist_login'] = 'Register/login';
$_LANG['profile'] = 'Personal details';
$_LANG['query_info'] = "Co-executed %d single finding，timecost %f second，online %d ";
$_LANG['gzip_enabled'] = '，Gzip activated';
$_LANG['gzip_disabled'] = '，Gzip disabled';
$_LANG['memory_info'] = '，Used space %0.3f MB';
$_LANG['cart_info'] = "%d";
$_LANG['shopping_and_other'] = 'Customers who bought this item also bought';
$_LANG['bought_notes'] = 'Purchase history';
$_LANG['later_bought_amounts'] = 'Number of recent transactions';
$_LANG['bought_time'] = 'Purchased time';
$_LANG['turnover'] = 'Deal';
$_LANG['no_notes'] = 'No one has ever purchased this product';
$_LANG['shop_price'] = "Mall price";
$_LANG['market_price'] = "Market Price";
$_LANG['goods_brief'] = 'Product description：';
$_LANG['goods_album'] = 'Product album';
$_LANG['promote_price'] = "Sales price";
$_LANG['fittings_price'] = 'Accessories price：';
$_LANG['collect'] = 'Add to favorites';
$_LANG['add_to_cart'] = "Add to Shopping Cart";
$_LANG['return_to_cart'] = "Put back to shopping cart";
$_LANG['search_goods'] = 'Product search';
$_LANG['search'] = 'Search';
$_LANG['wholesale_search'] = 'Search for wholesale items';
$_LANG['article_title'] = 'Article title';
$_LANG['article_author'] = 'Author';
$_LANG['article_add_time'] = 'Add date';
$_LANG['relative_file'] = '[ Related Download ]';
$_LANG['category'] = 'Category';
$_LANG['brand'] = 'Brands';
$_LANG['price_min'] = 'Minimum price';
$_LANG['price_max'] = 'Maximum price';
$_LANG['goods_name'] = 'Product name';
$_LANG['goods_attr'] = 'Product attributes';
$_LANG['goods_price_ladder'] = 'Price category';
$_LANG['ladder_price'] = 'Wholesale price';
$_LANG['shop_prices'] = "Shop price";
$_LANG['market_prices'] = "Market Price";
$_LANG['group_buy_price'] = "Group purchase price";
$_LANG['seckill_price'] = "Flashdeal price";
$_LANG['presale_price'] = "Price";
$_LANG['deposit'] = 'Group buy deposit';
$_LANG['amount'] = 'Product total price';
$_LANG['number'] = 'Purchase quantity';
$_LANG['handle'] = 'Handling';
$_LANG['add'] = 'Add';
$_LANG['edit'] = 'Edit';
$_LANG['drop'] = 'Drop';
$_LANG['view'] = 'View';
$_LANG['modify'] = 'Modify';
$_LANG['is_cancel'] = 'Cancel';
$_LANG['amend_amount'] = 'Amend Qty';
$_LANG['end'] = 'End';
$_LANG['require_field'] = 'Required';
$_LANG['search_result'] = 'Search result';
$_LANG['order_number'] = 'Order no';
$_LANG['consignment'] = 'Posting no';
$_LANG['activities'] = 'Product undergo activities';
$_LANG['remark_package'] = 'Value packages';
$_LANG['old_price'] = 'Original  price：';
$_LANG['package_price'] = 'Value package price：';
$_LANG['then_old_price'] = 'Save：';
$_LANG['free_goods'] = 'Free shipping goods';
$_LANG['searchkeywords_notice'] = 'Match few of the all keywords，can use "space" or "AND" connect。example win32 AND unix<br />Match some of the keywords，can use"+"or "OR" connect。example win32 OR unix';
$_LANG['hidden_outstock'] = 'Hide out of sales products';
$_LANG['keywords'] = 'Keywords';
$_LANG['sc_ds'] = 'Searching introduction';
$_LANG['button_search'] = 'Search';
$_LANG['no_search_result'] = 'Can not found ideal products！';
$_LANG['all_category'] = 'All Category';
$_LANG['all_brand'] = 'All Brands';
$_LANG['all_option'] = 'Please choose';
$_LANG['extension'] = 'Expand selection';
$_LANG['gram'] = 'Gram';
$_LANG['kilogram'] = 'Kilogram';
$_LANG['goods_sn'] = 'Product serial no.：';
$_LANG['bar_code'] = 'Barcode';
$_LANG['goods_brand'] = 'Brand：';
$_LANG['goods_weight'] = 'Product weight：';
$_LANG['goods_number'] = 'Product balance stock：';
$_LANG['goods_give_integral'] = 'Purchase this product will get gift：';
$_LANG['goods_integral'] = 'Can use：';
$_LANG['goods_bonus'] = 'Purchase this product can get angpao：';
$_LANG['goods_free_shipping'] = 'This product is free shipping product，when calculating on distribution value it will not include in calculation';
$_LANG['goods_rank'] = 'Feedback：';
$_LANG['goods_compare'] = 'Product comparison';
$_LANG['properties'] = 'Product attributes：';
$_LANG['brief'] = 'Simple introduction：';
$_LANG['add_time'] = 'Uploading time：';
$_LANG['residual_time'] = 'End in ';
$_LANG['begin_time_soon'] = 'From the start time';
$_LANG['day'] = 'Day';
$_LANG['hour'] = 'Hour';
$_LANG['minute'] = 'Minute';
$_LANG['compare'] = 'Compare';
$_LANG['volume_price'] = 'When purchase quantity reach below quantity range can get discounted price';
$_LANG['number_to'] = 'Qty.';
$_LANG['article_list'] = 'Article list';

$_LANG['not'] = "No";
$_LANG['open'] = "Open";
$_LANG['open_more'] = "Open more";
$_LANG['stop'] = "Keep";
$_LANG['stop_more'] = "Keep more";
$_LANG['time'] = "Time";
$_LANG['money_symbol'] = "MR";
$_LANG['current_price'] = 'Current price';
$_LANG['start_time'] = 'Starting time';
$_LANG['end_time'] = 'Ending time';
$_LANG['con_cus_service'] = 'contact customer service';
$_LANG['min_fare'] = 'minimum adding price';
$_LANG['max_fare'] = 'maximum adding price';
$_LANG['store_shop'] = 'seller store';
$_LANG['shop'] = 'Shop';
$_LANG['see_more'] = 'search and view more';
$_LANG['comprehensive'] = 'comprehensive comment';
$_LANG['branch'] = 'score';
$_LANG['score_detail'] = 'scoring details';
$_LANG['industry_compare'] = 'industry comparison';
$_LANG['goods'] = 'Products';
$_LANG['service'] = 'Service';
$_LANG['prescription'] = 'Time performance';
$_LANG['store_total'] = 'Store score';
$_LANG['company'] = 'Company';
$_LANG['seat_of'] = 'Location';
$_LANG['online_service'] = 'Online customer service';
$_LANG['enter_the_shop'] = 'View Shop';
$_LANG['follow'] = 'Follow';
$_LANG['followed'] = 'Following';
$_LANG['unfollow'] = 'unFollow';
$_LANG['follow_yes'] = 'Already followed';
$_LANG['follow_store'] = 'Followed store';
$_LANG['assign'] = 'Confirm';
$_LANG['apply'] = 'Apply';
$_LANG['au_number'] = 'Second price';
$_LANG['brand_home'] = 'Brand main page';
$_LANG['brand_category'] = 'Brand Category';

$_LANG['look_new'] = 'Find new products';
$_LANG['look_hot'] = 'Find hot sale';
$_LANG['all_category'] = 'All category';
$_LANG['change_a_lot'] = 'Refresh';
$_LANG['best'] = 'Best';
$_LANG['see_all'] = 'View All';
$_LANG['ren'] = 'people';
$_LANG['jian_goods'] = 'piece product';
$_LANG['guess_love'] = 'Guess you will like';
$_LANG['sale_amount'] = 'sales volume';
$_LANG['screen_price'] = 'Please fill in the screening price';
$_LANG['screen_price_left'] = 'Please fill in the left side filter price';
$_LANG['screen_price_right'] = 'please fill in the right side filter price';
$_LANG['screen_price_dy'] = 'left side price cannot higher than or equal to the right side price';
$_LANG['publish_top'] = 'publish new discussion topic';
$_LANG['types'] = 'Type';
$_LANG['publish'] = 'publish';
$_LANG['statement'] = 'statement';
$_LANG['statement_one'] = '1、You are welcome to ask questions about your product.To ensure the quality of the topic, iron and above level users can publish topics, registered and above level users can reply.；';
$_LANG['statement_two'] = '2、User discussion policy is comment will be publish first and then verify it later，if we found that you post cannot help other user or violation of the relevant provisions of the State.' . @$dwt_shop_name . 'Admin have the right to delete';
$_LANG['commentTitle_not'] = 'Title cannot be empty';
$_LANG['commentTitle_xz'] = 'Title length can only between 2 - 50 characters ';
$_LANG['content_not'] = 'Content cannot be empty';
$_LANG['captcha_not'] = 'Verification code cannot be empty';
$_LANG['captcha_xz'] = 'Please 4 digit verificaion code';
$_LANG['message_see'] = '【New news】Please check!';
$_LANG['message_not'] = '【　　　】Please check!';

/* 商品比较JS语言项 */
$_LANG['compare_js']['button_compare'] = 'compare selected item';
$_LANG['compare_js']['exist'] = 'You already select %s';
$_LANG['compare_js']['count_limit'] = 'You can only select maximum of 4 item to compare';
$_LANG['compare_js']['goods_type_different'] = '\"%s\" And the selected product type is different cannot be compared';

$_LANG['bonus'] = 'Coupon：';
$_LANG['no_comments'] = 'Temporarily there is no any comment from user';
$_LANG['give_comments_rank'] = 'Write a comment';
$_LANG['comments_rank'] = 'Feedback';
$_LANG['comment_num'] = "Feedback %d ";
$_LANG['login_please'] = 'You cannot use this function because you are not logged in yet';
$_LANG['collect_existed'] = 'This item already exists in your favorites.';
$_LANG['collect_success'] = 'This item has been successfully added to the favorites。';
$_LANG['collect_brand_existed'] = 'You have already follow this brand';
$_LANG['collect_brand_success'] = 'Successfully follow this brand';
$_LANG['cancel_brand_success'] = 'You have already unfollow this brand';
$_LANG['send_authemail_success'] = 'Verification email successfully sent';
$_LANG['copyright'] = "&copy; 2005-%s %s Copyright, All Rights Reserved";
$_LANG['no_ads_id'] = 'Does not have specify ID advertisement and ads url link!';
$_LANG['remove_collection_confirm'] = 'Are you sure you want to remove the selected item from your favorites?';
$_LANG['err_change_attr'] = 'Can not find the specified product or specified product attributes';

$_LANG['collect_goods'] = 'Favorite Product';
$_LANG['plus'] = 'Add';
$_LANG['minus'] = 'Minus';
$_LANG['yes'] = 'Yes';
$_LANG['no'] = 'No';

$_LANG['same_attrbiute_goods'] = 'Same%sproduct';

/* TAG */
$_LANG['button_submit_tag'] = 'Add to my tag';
$_LANG['tag_exists'] = 'You have added a tag to this product. Please do not submit it again.';
$_LANG['tag_cloud'] = 'Tag cloud';
$_LANG['tag_anonymous'] = 'Sorry，only registered members can log in to submit tags';
$_LANG['tag_cloud_desc'] = 'Tag cloud（Tag cloud）is used to represent a content tag in a website。 Tag（tag、keywords）iss a more flexible and interesting way of sorting goods, you can add one or more tags for each item, so you can view other members to submit the same item with your tag by clicking on the tag,  can let you use the fastest way to find a tag of all shop goods.For example, click on the "red" tag, you can open such a page, showing all the "red" for the tag of the shop goods';

/* AJAX 相关 */
$_LANG['invalid_captcha'] = 'Sorry ，verification code you entered is incorrect。';
$_LANG['goods_exists'] = "Sorry,the same item already exists in your shopping cart。";
$_LANG['fitting_goods_exists'] = "Sorry, this accessory has been added to your shopping cart。";
$_LANG['invalid_number'] = 'Sorry，invalid item quantity.';
$_LANG['not_on_sale'] = 'Sorry，this items had been off shelf。';
$_LANG['no_basic_goods'] = "Sorry，You wish to buy the goods as accessories, but the shopping cart has no basic parts of the goods.";
$_LANG['cannt_alone_sale'] = 'Sorry, the item can not be sold separately。';
$_LANG['shortage'] = "Sorry ，this item temporarily out of Stock and suspended sales\n Do you want to register pre-order for this item ?";
$_LANG['shortage_little'] = "This item temporarily is out of stock. already amend your item order quantity to %d。\n do you want to go to shopping cart now? ";
$_LANG['oos_tips'] = 'This item temporarily is out of stock. Do you want to register for pre-order?';

$_LANG['addto_cart_success_1'] = "This item already add to shopping cart, do you want to continue shopping?\nif you wish to pay now，please click “yes” button。\nif you wish to continue shopping，please click “cancel” button.";
$_LANG['addto_cart_success_2'] = "This item already add to shopping cart，do you want to continue shopping?\nif you wush to continuew shopping,please click “Yes”button。\nif you wish to pay now，please click “cancel” button.";
$_LANG['no_keywords'] = "Please enter a search keyword!";

/* 分页排序 */
$_LANG['exchange_sort']['goods_id'] = 'Sort by upload time';
$_LANG['exchange_sort']['exchange_integral'] = 'Sort by points';
$_LANG['exchange_sort']['last_update'] = 'Sort by update time';
$_LANG['order']['DESC'] = 'Reverse manner';
$_LANG['order']['ASC'] = 'Correct manner';
$_LANG['pager_1'] = 'Total';
$_LANG['pager_2'] = 'Single record';
$_LANG['pager_3'] = '，Total  ';
$_LANG['pager_4'] = ' Page。';
$_LANG['page_first'] = 'First page';
$_LANG['page_prev'] = 'Previous page';
$_LANG['page_next'] = 'Next page';
$_LANG['page_last'] = 'Last page';
$_LANG['btn_display'] = 'Display format';
$_LANG['page_last_new'] = 'Last page';

/* 投票 */
$_LANG['vote_times'] = 'Numner of participants';
$_LANG['vote_ip_same'] = 'Sorry，You have already voted!';
$_LANG['submit_vote'] = 'Vote';
$_LANG['submit_reset'] = 'Re-election';
$_LANG['vote_success'] = 'Congratulations, voted successfully';

/* 评论 */
$_LANG['cmt_submit_done'] = 'Your comment has been successfully published thank you for your participation!';
$_LANG['cmt_submit_wait'] = "Your review has been successfully published, please wait for the administrator review!";
$_LANG['cmt_lang']['cmt_empty_username'] = 'Please enter your username';
$_LANG['cmt_lang']['cmt_empty_email'] = 'Please enter your email address';
$_LANG['cmt_lang']['cmt_error_login'] = 'Please log in to post a comment';
$_LANG['cmt_lang']['cmt_error_email'] = 'Invalid email address';
$_LANG['cmt_lang']['cmt_empty_content'] = 'You have not entered a comment';
$_LANG['cmt_spam_warning'] = 'please try to comment again in 30 seconds!';
$_LANG['cmt_lang']['captcha_not_null'] = 'Verification code cannot be empty!';
$_LANG['cmt_lang']['cmt_invalid_comments'] = 'Invalid comment content!';
$_LANG['invalid_comments'] = 'Invalid comment content!';
$_LANG['error_email'] = 'Invalid email address format!';
$_LANG['admin_username'] = "Administrator：";
$_LANG['reply_comment'] = 'Reply';
$_LANG['comment_captcha'] = 'Verification code';
$_LANG['comment_login'] = 'Only registered members able to comment, please log in to post a comment';
$_LANG['comment_custom'] = "Comments failed. Only registered members who purchased item in our shop can post comment.";
$_LANG['comment_brought'] = 'Comments failed. Only registered users who have purchased this item able to comment on the item.';
$_LANG['anonymous'] = 'Anonymous users';

/* 其他信息 */
$_LANG['js_languages']['goodsname_not_null'] = 'product name can not be empty!';

/* 商品比较 */
$_LANG['compare_remove'] = 'Remove';
$_LANG['compare_no_goods'] = 'You have not selected any product that need to be compared or the number of product to compare is less than 2 个。';

$_LANG['no_user_name'] = 'This username does not exist';
$_LANG['undifine_rank'] = 'Not available';
$_LANG['not_login'] = 'You have not logged in yet';
$_LANG['half_info'] = 'The information is not complete, please fill in all the information';
$_LANG['no_id'] = 'No product ID';
$_LANG['save_success'] = 'modify successfully';
$_LANG['drop_consignee_confirm'] = 'Are you sure you want to delete the consignee information?';

/* 夺宝奇兵 */
$_LANG['snatch_js']['price_not_null'] = 'Price cannot be empty';
$_LANG['snatch_js']['price_not_number'] = 'Price must be numeric';
$_LANG['snatch_list'] = 'Snatch list';
$_LANG['not_in_range'] = 'You only can bid between %dto%d';
$_LANG['also_bid'] = 'You had already bid %s ';
$_LANG['lack_pay_points'] = 'Your score is insufficient, you cannot bid';
$_LANG['snatch'] = 'Snatch item';
$_LANG['snatch_is_end'] = 'Event has ended';
$_LANG['snatch_start_time'] = 'This event from %s to %s End';
$_LANG['price_extent'] = 'Bid range';
$_LANG['user_to_use_up'] = 'The user can bid many times，each time consume';
$_LANG['snatch_victory_desc'] = 'When activity has ended, ，system will pick the lowest and unique bid or unrepeated bid (the lowest and unique bid) from all the users who bid for prizes as winner of the auction item.';
$_LANG['price_less_victory'] = 'If the user wins the price below';
$_LANG['price_than_victory'] = 'Will be able to purchase the prizes at the current auction price; if the user wins the price higher than';
$_LANG['or_can'] = 'or can';
$_LANG['shopping_product'] = 'Purchase this prizes';
$_LANG['victory_price_product'] = 'Winner is able to purchase the prizes at current auction prices';
$_LANG['now_not_snatch'] = 'There is currently no activity';
$_LANG['my_integral'] = 'My point';
$_LANG['bid'] = 'bid';
$_LANG['me_bid'] = 'I want to bid';
$_LANG['me_now_bid'] = 'My bid';
$_LANG['only_price'] = 'Unique Price';
$_LANG['view_snatch_result'] = 'Activity result';
$_LANG['victory_user'] = 'Winner of the prize';
$_LANG['price_bid'] = 'Price bid';
$_LANG['bid_time'] = 'Bid time';
$_LANG['not_victory_user'] = 'Non-winner of the prize';
$_LANG['snatch_log'] = 'Participate in the snatch activity %s ';
$_LANG['not_for_you'] = 'You are not the winner，cannot purchase';
$_LANG['order_placed'] = 'You have already placed the order. If you want to buy it again, please cancel the original order';

/* 购物流程中的前台部分 */
$_LANG['select_spe'] = 'Please select the item attribute';

/* 购物流程中的订单部分 */
$_LANG['price'] = 'Price';
$_LANG['name'] = 'Name';
$_LANG['describe'] = 'Description';
$_LANG['fee'] = 'Fee';
$_LANG['free_money'] = 'Free money';
$_LANG['img'] = 'Image';
$_LANG['no_pack'] = 'No packing';
$_LANG['no_card'] = 'No greeting cards';
$_LANG['bless_note'] = 'Greetings word';
$_LANG['use_integral'] = 'Use point';
$_LANG['can_use_integral'] = 'Points';
$_LANG['noworder_can_integral'] = 'This order can be used up to';
$_LANG['use_surplus'] = 'Use balance';
$_LANG['your_surplus'] = 'Your current available balance';
$_LANG['pay_fee'] = 'Pay processing fees';
$_LANG['insure_fee'] = 'Insureance fees';
$_LANG['need_insure'] = 'Do you want to add shipping insurance';
$_LANG['cod'] = 'Distribution decision';

$_LANG['curr_stauts'] = 'Current status';
$_LANG['use_bonus'] = 'Use bonus';
$_LANG['use_value_card'] = 'Use Stored value card';
$_LANG['use_bonus_kill'] = 'Use offline bonus';
$_LANG['invoice'] = 'Open invoice';
$_LANG['invoice_type'] = 'Invoice type';
$_LANG['invoice_title'] = 'Invoice title';
$_LANG['invoice_content'] = 'Invoice content';
$_LANG['order_postscript'] = 'Order postscript';
$_LANG['booking_process'] = 'Booking process';
$_LANG['complete_acquisition'] = 'After the order is completed, you will get';
$_LANG['with_price'] = 'with price';
$_LANG['de'] = 'of';
$_LANG['bonus'] = 'Bonus';
$_LANG['goods_all_price'] = 'Total product price';
$_LANG['dis_amount'] = 'Product discount';
$_LANG['discount'] = 'Discount';
$_LANG['tax'] = 'Invoice tax amount';
$_LANG['shipping'] = 'Shipping';
$_LANG['shipping_fee'] = 'Shipping fee';
$_LANG['pack_fee'] = 'Packaging fee';
$_LANG['card_fee'] = 'Greeting fee';
$_LANG['total_fee'] = 'Total fees';
$_LANG['self_site'] = 'This site';
$_LANG['order_gift_integral'] = 'Order %s free gift points';

/* 缺货处理 */
$_LANG['oos'][OOS_WAIT] = 'Waiting for all the goods are ready and send';
$_LANG['oos'][OOS_CANCEL] = 'Cancel order';
$_LANG['oos'][OOS_CONSULT] = 'Negotiate with the owner';

/* 评论部分 */
$_LANG['username'] = 'User name';
$_LANG['email'] = 'Email';
$_LANG['comment_rank'] = 'Comment rank';
$_LANG['comment_content'] = 'Comment content';
$_LANG['submit_comment'] = 'Submit comment';
$_LANG['button_reset'] = 'Reset';
$_LANG['goods_comment'] = 'Product comment';
$_LANG['article_comment'] = 'Article comment';

/* 支付确认部分 */
$_LANG['pay_status'] = 'Payment status';
$_LANG['pay_not_exist'] = 'This payment method does not exist or parameter error！';
$_LANG['pay_disabled'] = 'This payment method has not been enabled yet！';
$_LANG['pay_success'] = 'Payment successful！';
$_LANG['pay_fail'] = 'Payment failed, please go back and try again！';

/* 文章部分 */
$_LANG['new_article'] = 'New article';
$_LANG['shop_notice'] = 'Shop notice';
$_LANG['order_already_received'] = "This order has been confirmed, thank you for shopping at this site, welcome to visit again.";
$_LANG['order_invalid'] = 'The order you submitted is invalid.';
$_LANG['act_ok'] = "Thank you for informing us that you have received the goods, thank you for shopping at this site, welcome to visit again.";
$_LANG['receive'] = 'Confirmation of receipt';
$_LANG['buyer'] = 'Buyer';
$_LANG['next_article'] = 'Next article';
$_LANG['prev_article'] = 'Previous article';

/* 虚拟商品 */
$_LANG['virtual_goods_ship_fail'] = 'Automatic delivery failed, please contact the seller as soon as possibleto for re-delivery';

/* 选购中心 */
$_LANG['pick_out'] = 'Shopping center';
$_LANG['fit_count'] = "Total %s Pieces of goods meet the conditions";
$_LANG['goods_type'] = "Product Types";
$_LANG['remove_all'] = 'Remove all';
$_LANG['advanced_search'] = 'Advanced_search';
$_LANG['activity'] = 'This product is in progress';
$_LANG['order_not_exists'] = "Sorry, did not find the specified order. Please contact the website administrator";

$_LANG['promotion_time'] = 'Of the time is %sto%s，Hurry up and grab it！';

/* 倒计时 */
$_LANG['goods_js']['day'] = 'Day';
$_LANG['goods_js']['hour'] = 'Hour';
$_LANG['goods_js']['minute'] = 'Minute';
$_LANG['goods_js']['second'] = 'Second';
$_LANG['goods_js']['end'] = 'End';

/*商品语言JS start*/
$_LANG['goods_js']['goods_attr_js'] = 'Please select the product specification type';
/*商品语言JS end*/

$_LANG['favourable'] = 'Promotions activity';

/* 团购部分语言项 */
$_LANG['group_buy'] = 'Group purchase activity';
$_LANG['group_buy_goods'] = 'All Products';
$_LANG['gb_goods_name'] = 'Group purchase item：';
$_LANG['gb_start_date'] = 'Start time：';
$_LANG['gb_end_date'] = 'End time：';
$_LANG['gbs_pre_start'] = 'This group purchase activity have not yet started, please continue to pay attention.';
$_LANG['gbs_under_way'] = 'This group purchase activity are still hot in progress, distance to ending time still left：';
$_LANG['gbs_finished'] = 'This group purchase activity has ended, awaiting for processing...';
$_LANG['gbs_succeed'] = 'This group purchase activitiy has ended successfully！';
$_LANG['gbs_fail'] = 'This group purchase activity has ended, no successfully.';
$_LANG['gb_price_ladder'] = 'Price_ladder：';
$_LANG['gb_ladder_amount'] = 'Qty';
$_LANG['gb_ladder_price'] = 'Price';
$_LANG['gb_deposit'] = 'Deposit：';
$_LANG['gb_restrict_amount'] = 'Limited purchase quantity：';
$_LANG['gb_limited'] = 'Limited purchase';
$_LANG['gb_gift_integral'] = 'Free gift point：';
$_LANG['gb_cur_price'] = 'Current price：';
$_LANG['gb_valid_goods'] = 'Current order quantity：';
$_LANG['gb_final_price'] = 'Deal price：';
$_LANG['gb_final_amount'] = 'Deal quantity：';
$_LANG['gb_notice_login'] = 'Tip: You need to register as a member and log in to participate in the group purchase of the item!';
$_LANG['gb_error_goods_lacking'] = 'Sorry, there is not enough stock, please modify the quantity！';
$_LANG['gb_error_restrict_amount'] = 'Sorry, the number of items that you have purchased has reached the quantity limit！';
$_LANG['gb_error_status'] = 'Sorry, This group purchase has ended or have not started cannot participate now！';
$_LANG['gb_error_login'] = 'Sorry，You are not logged in, can not participate group purchasdse, please log in first!';
$_LANG['group_goods_empty'] = 'Currently there is no group purchase activities';

/* 预售部分语言项 */
$_LANG['presale_error_status'] = 'Sorry,pre-sale activities has ended or have not yet started, cannot participate now！';
$_LANG['back_to_presale'] = 'Return to pre-sale product';

/* 拍卖部分语言项 */
$_LANG['auction'] = 'Auction activity';
$_LANG['auction_list'] = 'Auction activity list';
$_LANG['act_status'] = 'Activity status';
$_LANG['au_start_price'] = 'Starting price';
$_LANG['au_start_price_two'] = 'Starting price';
$_LANG['au_end_price'] = 'Fixed Price';
$_LANG['au_end_price_two'] = 'Fixed Price';
$_LANG['au_amplitude'] = 'Bid Increment';
$_LANG['au_deposit'] = 'Deposit';
$_LANG['au_deposit_two'] = 'Deposit';
$_LANG['no_auction'] = 'Currently does not have auction activity';
$_LANG['au_pre_start'] = 'This auction activities have not yet started.';
$_LANG['au_under_way'] = 'The auction is in progress, distance to ending time still left：';
$_LANG['au_under_way_1'] = 'The auction is still in progress';
$_LANG['au_bid_user_count'] = 'Bids user count';
$_LANG['au_last_bid_price'] = 'Last bid price';
$_LANG['au_last_bid_user'] = 'The last bid buyer';
$_LANG['au_last_bid_time'] = 'The last bid time ';
$_LANG['au_finished'] = 'This auction activity has ended';
$_LANG['au_bid_user'] = 'Buyer';
$_LANG['au_bid_price'] = 'Bid price';
$_LANG['au_bid_time'] = 'Time';
$_LANG['au_bid_status'] = 'Status';
$_LANG['no_bid_log'] = 'There are no buyers bid at this moment';
$_LANG['au_bid_ok'] = 'Leading';
$_LANG['out'] = 'Out';
$_LANG['au_i_want_bid'] = 'I want to bid';
$_LANG['nin_want_bid'] = 'Your bids';
$_LANG['button_bid'] = 'Bid';
$_LANG['button_buy'] = 'Buy Now';
$_LANG['au_not_under_way'] = 'This auction activity has ended, can not be bids anymore.';
$_LANG['au_bid_price_error'] = 'Please enter the correct price';
$_LANG['au_bid_after_login'] = 'You must registered as a member and log in before bidding';
$_LANG['au_bid_repeat_user'] = 'You are already the highest bidder for this item!';
$_LANG['au_your_lowest_price'] = 'Your bid cannot lower than %s';
$_LANG['au_your_lowest_price_wen'] ='Your bid cannot lower than ¥';
$_LANG['au_user_money_short'] = 'Your available funds is insufficient, please go to the user center for top up!';
$_LANG['au_unfreeze_deposit'] = 'Unfreeze auction activity deposit：%s';
$_LANG['au_freeze_deposit'] = 'Unfreeze auction activity deposit：%s';
$_LANG['au_not_finished'] = 'This auction activity has not yet ended and cannot be purchased';
$_LANG['au_order_placed'] = 'You have already placed an order, and if you want to buy it again, please cancel the original order';
$_LANG['au_no_bid'] = 'No one bid for this auction activity, can not be purchased.';
$_LANG['au_final_bid_not_you'] = 'u are not the highest bidder, can not buy it';
$_LANG['au_buy_after_login'] = 'Please login first';
$_LANG['au_is_winner'] = 'Congratulations! You have won the right to buy the item. You can click the buy button to buy your baby home.';
$_LANG['au_mechanism'] = 'Auction organization';
$_LANG['bidding_process'] = 'Bidding process';
$_LANG['process_step_one'] = 'User account current balance is not less than the amount of the deposit';
$_LANG['process_step_two'] = 'To ensure that the highest bid at the end of the auction will get the auction goods.';
$_LANG['process_step_three'] = 'Fill in the order information，submit order';
$_LANG['process_step_four'] = 'Make payment for submited order';
$_LANG['process_step_five'] = 'Payment successfully awaiting for delivery, auction process finished ';
$_LANG['auction_desc'] = 'Auction details';
$_LANG['au_introduce'] = 'Auction induction';
$_LANG['au_raiders'] = 'Auction strategy';
$_LANG['au_ren'] = 'Bidders';
$_LANG['rec_au'] = 'Recommended auction';
$_LANG['bid_number'] = 'No. of bidder';
$_LANG['au_end'] = 'Aucton end';
$_LANG['more'] = 'More';

/* 批发部分语言项 */
$_LANG['ws_user_rank'] = 'Your ranking is temporarily unable to view the wholesale program';
$_LANG['ws_login_please'] = 'Please login first';
$_LANG['ws_return_home'] = 'Back to home';
$_LANG['ws_return_wholesale'] = 'Back to wholesale market';
$_LANG['wholesale'] = 'Wholesale';
$_LANG['no_wholesale'] = 'No wholesale product';
$_LANG['ws_price'] = 'Wholesale price';
$_LANG['ws_subtotal'] = 'Subtotal';
$_LANG['ws_invalid_goods_number'] = 'Please enter the correct quantity';
$_LANG['ws_attr_not_matching'] = 'Your selected item attriute does not exists, please refer to the wholesale price list';
$_LANG['ws_goods_number_not_enough'] = 'The quantity you purchased does not reach the minimum quantity of wholesale, please refer to the wholesale price list.';
$_LANG['ws_goods_attr_exists'] = "This item already add to shopping cart,cannot be added again";
$_LANG['ws_remark'] = 'Please enter your contact method ,payment method, and shipping method etc. information';
$_LANG['ws_order_submitted'] = 'Your order has been successfully submitted, please remember your order no.: %s。';
$_LANG['ws_price_list'] = 'Price list';

/* 积分兑换部分语言项 */
$_LANG['exchange'] = 'Point Mall';
$_LANG['exchange_integral'] = 'Consume point：';
$_LANG['exchange_goods'] = 'Redeem now';
$_LANG['eg_error_login'] = 'Sory，you are not logged in, cannot participate in the redemption, please login first!';
$_LANG['eg_error_status'] = 'Sorry，this item has been canceled, cannot be redeem now！';
$_LANG['eg_error_integral'] = 'Sorry，Your current point is not enough to redeem for this item!';
$_LANG['notice_eg_integral'] = 'Item in point mall is require to cosume point：';
$_LANG['eg_error_number'] = 'Sorry，This item is out of stock, can not be redeem now!';

/* 会员登录注册 */
$_LANG['member_name'] = 'User';
$_LANG['password'] = 'Password';
$_LANG['confirm_password'] = 'Confirm password';
$_LANG['sign_up'] = 'Sign up as new user';
$_LANG['forgot_password'] = 'Forgot your password？';
$_LANG['hello'] = 'Hello';
$_LANG['welcome_return'] = 'Welcome back';
$_LANG['now_account'] = 'Now your account have';
$_LANG['balance'] = 'Balance';
$_LANG['along_with'] = 'and';
$_LANG['preferential'] = 'Coupon';
$_LANG['edit_user_info'] = 'Enter the user center';
$_LANG['logout'] = 'Log out';
$_LANG['user_logout'] = 'Log out';
$_LANG['welcome'] = "Welcome to our store";
$_LANG['user_login'] = 'User login';
$_LANG['login_now'] = 'Login Now';
$_LANG['reg_now'] = 'Register Now';

/* 商品品牌页 */
$_LANG['official_site'] = 'Ofiicial site：';
$_LANG['brand_category'] = 'Category browsing：';
$_LANG['all_category'] = 'All category';

/* 商品分类页 */
$_LANG['goods_filter'] = 'Filter product';

/* cls_image类的语言项 */
$_LANG['directory_readonly'] = 'Table of Contents % does not exists or cannot be writen';
$_LANG['invalid_upload_image_type'] = 'Invalid upload image format';
$_LANG['upload_failure'] = 'File %s upload failure.';
$_LANG['missing_gd'] = 'No install GD ku (PHP.net)';
$_LANG['missing_orgin_image'] = 'Can not find the original picture %s ';
$_LANG['nonsupport_type'] = 'Image format is not supported %s ';
$_LANG['creating_failure'] = 'Create image failed';
$_LANG['writting_failure'] = 'Image writing failed';
$_LANG['empty_watermark'] = 'Watermark file parameters cannot be empty';
$_LANG['missing_watermark'] = 'Cannot find watermark file %s';
$_LANG['create_watermark_res'] = 'Failed to create watermark image resource. Watermark image type is %s';
$_LANG['create_origin_image_res'] = 'Failed to create original watermark image resource. Original watermark image type is %s';
$_LANG['invalid_image_type'] = 'Cannot recognized Watermark image %s ';
$_LANG['file_unavailable'] = 'File %s does not exists or can not be read.';

/* 邮件发送错误信息 */
$_LANG['smtp_setting_error'] = 'SMTP server setup information is incomplete.';
$_LANG['smtp_connect_failure'] = 'Unable to connect to SMTP server %s';
$_LANG['smtp_login_failure'] = 'SMTP server to verify account no. or password is not correct.';
$_LANG['smtp_refuse'] = 'Mail server refuse to send the email';
$_LANG['sendemail_false'] = "Email failed to send, please contact the website adminstrator！";
$_LANG['disabled_fsockopen'] = 'fsockopen function is disabled';

$_LANG['topic_goods_empty'] = 'There are currently no topic goods';
$_LANG['email_list_ok'] = 'Subscribe';
$_LANG['email_list_cancel'] = 'unsubscribe';
$_LANG['email_invalid'] = 'Invalid email address！';
$_LANG['email_alreadyin_list'] = 'Email address already exists in the list！';
$_LANG['email_notin_list'] = 'Email address does not exists in the list!';
$_LANG['email_re_check'] = 'Resend your verification email,  Please check and confirm!';
$_LANG['email_check'] = 'Please check your email to complete the confirmation process!';
$_LANG['email_not_alive'] = 'This email address is unverified status, does not need to be unsubscribed!';
$_LANG['check_mail'] = 'Verification email';
$_LANG['check_mail_content'] = "%s Hi：<br><br>this is by%ssend a email verification for subscription,please click the following link, to finish the verification process。<br><a href=\"%s\" target=\"_blank\">%s</a>\n<br><br>%s<br>%s";
$_LANG['email_checked'] = 'Email has been confirmed！';
$_LANG['hash_wrong'] = 'Verification Failed! please check your verification code or enter email address to resend verification code!';
$_LANG['email_canceled'] = 'Email has been canceled!';
$_LANG['goods_click_count'] = 'Item click count';
$_LANG['p_y']['link_start'] = '<a href="http://www.ecmoban.com" target="_blank" style=" font-family:Verdana; font-size:11px;">';
$_LANG['p_y']['link_p'] = 'Powe';
$_LANG['p_y']['link_r'] = 'red&nbsp;';
$_LANG['p_y']['link_b'] = 'by&nbsp;';
$_LANG['p_y']['main_start'] = '<strong><span style="color: #3366FF">';
$_LANG['p_y']['main_e'] = 'E';
$_LANG['p_y']['main_c'] = 'CSho';
$_LANG['p_y']['main_p'] = 'p</span>&nbsp;';
$_LANG['p_y']['v_s'] = '<span style="color: #FF9966">';
$_LANG['p_y']['v'] = VERSION;
$_LANG['p_y']['link_end'] = '</span></strong></a>&nbsp;';

/* 虚拟卡 */
$_LANG['card_sn'] = 'Card series number';
$_LANG['card_password'] = 'Card password';
$_LANG['end_date'] = 'Expiry date';
$_LANG['virtual_card_oos'] = 'Virtual card is out of stock ';

/* 订单状态查询 */
$_LANG['invalid_order_sn'] = 'Invalid order no.';
$_LANG['order_status'] = 'Order status';
$_LANG['shipping_date'] = 'Shipping time';
$_LANG['query_order'] = 'Check this order no.';
$_LANG['order_query_toofast'] = 'You have made too many attempts. Please try again later.';

$_LANG['online_info'] = '%s user online';

/* 按钮 */
$_LANG['btn_direct_buy'] = 'Direct buy';
$_LANG['btn_buy'] = 'Buy';
$_LANG['btn_collect'] = 'Like';
$_LANG['btn_store_pick'] = 'Self pick up';
$_LANG['btn_add_to_cart'] = "Add to Cart";
$_LANG['btn_add_to_collect'] = 'Add to favorite';

$_LANG['stock_up'] = 'Out of stock';


$_LANG['hot_search'] = 'Hot search';

$_LANG['please_select_attr'] = "Product that you added to the shopping cart have different models can be selected, do you wish to immediately jump to product details to select the model number?";

/* 促销信息栏 */
$_LANG['snatch_promotion'] = '[Snatch]';
$_LANG['group_promotion'] = '[Group purchase]';
$_LANG['auction_promotion'] = '[Auction]';
$_LANG['favourable_promotion'] = '[Offer]';
$_LANG['wholesale_promotion'] = '[Wholesale]';
$_LANG['package_promotion'] = '[Package]';

/* feed推送 */
$_LANG['feed_user_buy'] = "Already purchase";
$_LANG['feed_user_comment'] = "Already comment";
$_LANG['feed_goods_price'] = "Item price";
$_LANG['feed_goods_desc'] = "Item desciption";

/* 留言板 */
$_LANG['shopman_comment'] = 'Item comment';
$_LANG['message_ping'] = 'Comment';
$_LANG['message_board'] = "Message board";
$_LANG['post_message'] = "I want to post a message";
$_LANG['message_title'] = 'Title';
$_LANG['message_time'] = 'Message time';
$_LANG['reply_time'] = 'Reply time';
$_LANG['reply_browse'] = 'Reply/Browse';
$_LANG['shop_owner_reply'] = 'Shop owner reply';
$_LANG['message_board_type'] = 'Message board type';
$_LANG['content'] = 'Content';
$_LANG['message_content'] = 'Message content';
$_LANG['message_anonymous'] = 'Message anonymous';
$_LANG['message_type'][M_MESSAGE] = 'Message';
$_LANG['message_type'][M_COMPLAINT] = 'Complaint';
$_LANG['message_type'][M_ENQUIRY] = 'Enquiry';
$_LANG['message_type'][M_CUSTOME] = 'After sales';
$_LANG['message_type'][M_BUY] = 'Purchase request';
$_LANG['message_type'][M_BUSINESS] = 'Vendor Message';
$_LANG['message_type'][M_COMMENT] = 'Comment';
$_LANG['message_board_js']['msg_empty_email'] = 'Please enter your email address';
$_LANG['message_board_js']['msg_error_email'] = 'Invalid email address';
$_LANG['message_board_js']['msg_title_empty'] = 'Message title is empty';
$_LANG['message_board_js']['msg_content_empty'] = 'Message content is empty';
$_LANG['message_board_js']['msg_captcha_empty'] = 'Verification code is empty';
$_LANG['message_board_js']['msg_title_limit'] = 'Message title can not exceed can not exceed 200 words';
$_LANG['message_submit_wait'] = 'Your message has been successfully published, please wait for the administrator review!';
$_LANG['message_submit_done'] = 'Message has been successfully published';
$_LANG['message_board_close'] = "Message board function close";
$_LANG['upload_file_limit'] = 'Maximum upload file size %dKB';
$_LANG['message_list_lnk'] = 'Back to message list';

/* 报价单 */
$_LANG['quotation'] = "Quotation";
$_LANG['print_quotation'] = "Print quotation";
$_LANG['goods_inventory'] = "Stock";
$_LANG['goods_category'] = "Item category";
$_LANG['shopman_reply'] = 'Administrator reply';
$_LANG['specifications'] = 'Specifications';

/* 相册JS语言项 */
$_LANG['gallery_js']['close_window'] = 'do you want to close current window';
$_LANG['submit'] = 'Submit';
$_LANG['reset'] = 'Reset';
$_LANG['order_query'] = 'Order query';
$_LANG['shipping_query'] = 'Shipping query';
$_LANG['view_history'] = 'Recent viewed';
$_LANG['clear_history'] = '[Clear history]';
$_LANG['no_history'] = 'You have cleared the recently viewed item';
$_LANG['goods_tag'] = 'Item tag';
$_LANG['releate_goods'] = "User also like";
$_LANG['goods_list'] = 'Item list';
$_LANG['favourable_goods'] = 'add item to favorites';
$_LANG['accessories_releate'] = 'Related accessories';
$_LANG['article_releate'] = 'Related article';
$_LANG['email_subscribe'] = 'Subscribe Email';
$_LANG['consignee_info'] = 'Cosignee information';
$_LANG['user_comment'] = 'Feedback';
$_LANG['total'] = 'Total';
$_LANG['user_comment_num'] = 'Comment';
$_LANG['auction_goods'] = 'Auction item';
$_LANG['auction_goods_info'] = 'Auction item information';
$_LANG['article_cat'] = 'Article catogery';
$_LANG['online_vote'] = 'Online survey';
$_LANG['new_price'] = 'Latest bid';
$_LANG['promotion_info'] = 'Promotion info';
$_LANG['price_grade'] = 'Price range';
$_LANG['your_choice'] = 'Your choice';
$_LANG['system_info'] = 'System info';
$_LANG['all_tags'] = 'All tags';
$_LANG['activity_list'] = 'Activity list';
$_LANG['package_list'] = 'Package list';
$_LANG['treasure_info'] = 'Treasure info';
$_LANG['activity_desc'] = 'Activity desciption';
$_LANG['activity_intro'] = 'Activity introduction';
$_LANG['get_password'] = 'Reset the password ';
$_LANG['fee_total'] = 'Total fee';
$_LANG['other_info'] = 'Other infomation';
$_LANG['user_balance'] = 'User balance';
$_LANG['wholesale_goods_cart'] = "Wholesale item shopping cart";
$_LANG['wholesale_goods_list'] = 'Wholesale item list';
$_LANG['bid_record'] = 'Bid record';
$_LANG['shipping_method'] = 'Shipping method';
$_LANG['payment_method'] = 'Payment method';
$_LANG['goods_package'] = 'Item packaging';
$_LANG['goods_card'] = 'Greeting card';
$_LANG['groupbuy_intro'] = 'Group purchase introduction';
$_LANG['groupbuy_goods_info'] = 'Group purchase item information';
$_LANG['act_time'] = 'Start and end time';
$_LANG['top10'] = 'Sale rankings';
$_LANG['service_guarantee'] = 'Service guarantee';

/* 优惠活动 */
$_LANG['label_act_name'] = 'Promotion activity name：';
$_LANG['label_start_time'] = 'Promotion Starting time：';
$_LANG['label_end_time'] = 'Promotion end time：';
$_LANG['label_user_rank'] = 'User ranking who able to enjoy promotion：';
$_LANG['not_user'] = 'Non-user';
$_LANG['label_act_range'] = 'Promotion range：';
$_LANG['far_all'] = 'All product';
$_LANG['far_category'] = 'The following categories';
$_LANG['far_brand'] = 'The following brand';
$_LANG['far_goods'] = 'The following item';
$_LANG['label_min_amount'] = 'Minimum amount：';
$_LANG['label_max_amount'] = 'Maximum amount：';
$_LANG['notice_max_amount'] = '0 represent no maximum amount ';
$_LANG['label_act_type'] = 'Promotion method：';
$_LANG['fat_goods'] = 'Enjoy free gift';
$_LANG['fat_price'] = 'Cash discount';
$_LANG['fat_discount'] = 'Enjoy discount';
$_LANG['orgtotal'] = 'Original price';
$_LANG['heart_buy'] = 'Action is better than excitement.';
$_LANG['activity_txt'] = 'Activity';
$_LANG['activity_time'] = 'Activity time';

/* 其他模板涉及常用语言项 */
$_LANG['label_regist'] = 'User registration';
$_LANG['label_login'] = 'User login';
$_LANG['label_profile'] = 'User profile';
$_LANG['label_collection'] = 'My favorite';
$_LANG['article_list'] = 'Article list';
$_LANG['preferences_price'] = 'Promotion price';
$_LANG['divided_into'] = 'Divided rules';

//店铺街by wang
$_LANG['store_street'] = 'Store street';

$_LANG['no_goods_in_cart'] = "There are no items in your shopping cart！";
$_LANG['over_bind_limit'] = "You have reached maximum limit of bind stored value card ！";

//瀑布流加载分类商品 by wu
$_LANG['add_to_cart'] = 'Add to Cart';
$_LANG['sales_volume'] = 'Orders';
$_LANG['bestmatch'] = 'Best Match';
$_LANG['compare'] = 'VS';
$_LANG['collect'] = 'Like';
$_LANG['have_no_goods'] = 'Temporary out of stock';
$_LANG['select_attr'] = 'Please select the attribute';
$_LANG['order_wholesale_sms'] = 'Order wholesale information';

/* 众筹title */
$_LANG['crowdfunding'] = 'Crowdfunding project';
$_LANG['zc_search'] = 'Search crowfunding project';
$_LANG['zc_order_info'] = 'Order infomation';
$_LANG['zc_order_submit'] = 'Submit';

/*门店 by kong 20160722*/
$_LANG['store_shortage'] = "Sorry，this item of this store temporary out of stock，Please select another store";


/*页面底部  by kong haojlj*/
$_LANG['Authentic_guarantee'] = "GUARANTEED";
$_LANG['Rave_reviews'] = "QUALITY";
$_LANG['7_days_return'] = '7 days return';
$_LANG['Lightning_delivery'] = 'FAST DELIVERY';
$_LANG['Authority_of_honor'] = 'WORTHY SHOP';
$_LANG['Coupon_redemption_succeed'] = "Receive success! Thank you for your participation~";
$_LANG['coupons_prompt'] = "This event is a probabilistic event and does not guarantee that all customers will receive a coupon successfully";
$_LANG['Site_navigation'] = "Site navigation";
$_LANG['seller_store']  = 'Seller store';
$_LANG['all_goods_cat'] = "All Category";
$_LANG['Good_coupon_market'] = "Good coupon market";
$_LANG['task_mart'] = "Quest market";
$_LANG['presell_cat'] = "All pre-sale catogory";
$_LANG['New_product_release'] = "New product release";
$_LANG['First_order'] = "Order first";
$_LANG['piece_total'] = "Total piece";
$_LANG['go_to_cart'] = "Checkout";
$_LANG['Welcome_to'] = "Welcome to ";
$_LANG['please_login'] = "Login";
$_LANG['registered'] = "Login";
$_LANG['download_prompt'] = "The download file does not exist!";
$_LANG['flagship_store'] = 'Flagship store';
$_LANG['exclusive_shop'] = 'Exclusive store';
$_LANG['franchised_store'] = 'Franchise stores';
$_LANG['week'][1] = 'Monday';
$_LANG['week'][2] = 'Tuesday';
$_LANG['week'][3] = 'Wednesday';
$_LANG['week'][4] = 'Thursday';
$_LANG['week'][5] = 'Friday';
$_LANG['week'][6] = 'Saturday';
$_LANG['week'][7] = 'Sunday';
$_LANG['table_prompt'] = "The table name or table field name can not be empty";
$_LANG['presell'] = "Pre-sale";
$_LANG['gift_card_exchange'] = "Gift card exchange";
$_LANG['project'] = "Topic";
$_LANG['rec_txt'][1] = 'Normal';
$_LANG['rec_txt'][2] = 'Group Buying';
$_LANG['rec_txt'][3] = 'Auction';
$_LANG['rec_txt'][4] = 'Snatch item';
$_LANG['rec_txt'][5] = 'Point mall';
$_LANG['rec_txt'][6] = 'Pre-sale';
$_LANG['cat_list'] = 'Shopping Cart';
$_LANG['my_cart'] = 'Shopping Cart';
$_LANG['back'] = 'Back';
$_LANG['Since_some'] = "Self-pick up";
$_LANG['implement_time'] = "Execution time ：";
$_LANG['information_null'] = "Sorry，There is no data qualified for this report";
$_LANG['Shopping_together_single'] = "Add-on items";
$_LANG['Contact_us'] = "Contact us";
$_LANG['submit_goods'] = 'Submit';
$_LANG['Mall_announcement'] = "Mall announcement";
$_LANG['System_cat'] = "System categories";
$_LANG['Other_information'] = "Other information";
$_LANG['Recent_popular'] = "Recent popular";
$_LANG['View_larger'] = "View large image";
$_LANG['general_audience'] = 'General';
$_LANG['Send_light'] = '送照明灯';
$_LANG['Jingdong_peisong'] = "Jingdong distribution";
$_LANG['Please_select'] = "Please select..";

/*20161214  start*/
$_LANG['View_details'] = "View detail";
$_LANG['Browsing_record'] = "Browsing record";
$_LANG['default'] = "Default";
$_LANG['is_new'] = 'New';
$_LANG['is_hot'] = 'Hot';
$_LANG['is_best'] = 'Best';
$_LANG['Comment_number'] = "Reviews";
$_LANG['clear'] = "Clear";
$_LANG['Receiving_land'] = "Place of receipt";
$_LANG['Free_shipping'] = "Free Shipping";
$_LANG['Self_goods'] = "MC";
$_LANG['Grid_model'] = "Grid model";
$_LANG['List_model'] = "List model";
$_LANG['Recent_browse'] = "Views";
$_LANG['tuiguang_goods'] = "Trending Products";
$_LANG['Popular_recommendation'] = "Popular Recomendation";
$_LANG['torob_buy'] = "Go to purchase";
$_LANG['brand_goods'] = "Item brand";
$_LANG['Enter_brand_page'] = "Enter brand page";
$_LANG['Prompt'] = "Tips";
$_LANG['Cancel_attention'] = "Unsubscribe";
$_LANG['check_all'] = 'Select All';
$_LANG['Share'] = "Total have";
$_LANG['pic_count'] = "Piece photo";
$_LANG['cilck_view'] = "Click and view";
$_LANG['cilck_retract'] = "Click and save";
$_LANG['View_all_replies'] = "View all comments";
$_LANG['Collection_success'] = "You had successfully save this product！";
$_LANG['Collection_see'] = "You had successfully save this product！";
$_LANG['remove_goods_Collection'] = "Are you sure you want to remove the item from your favorites？";
$_LANG['cancel_grand'] = "Are you sure you want to cancel the followed of favourite brand？";
$_LANG['add_address_zc'] = "Adding receive address";
$_LANG['confirm_address_zc'] = "Confirm receive addres";
$_LANG['Basic_info_comp'] = "Basic information comparison";
$_LANG['Model'] = "Model or spec";
$_LANG['contrast_item'] = "Temporarily no comparison item";
$_LANG['compare_click_see'] = "Click here to fold / unfold";
$_LANG['compare_one'] = "Click fixed cancel";
$_LANG['compare_two'] = "Cancel highlight dispaly classification";
$_LANG['compare_three'] = "Highlight display different classification";
$_LANG['compare_four'] = "Display same category";
$_LANG['compare_five'] = "Hide same category";
$_LANG['add_consignee_address'] = 'Add Address';
$_LANG['edit_consignee_info'] = 'Edit receiver details';
$_LANG['remove_consignee_info'] = 'Cancel receiver details';
$_LANG['Consignee'] = "Receiver";
$_LANG['input_Consignee_name'] = "Please fill in receiver name";
$_LANG['Local_area'] = 'Current location';
$_LANG['address_info'] = "Detailed Address";
$_LANG['input_address_info'] = "Please fill in receive details address";
$_LANG['phone_con'] = "Mobile";
$_LANG['Fixed_telephone'] = "Permenant number";
$_LANG['input_contact'] = "Please fill in receiver name and details";
$_LANG['con_email'] = "Email Address";
$_LANG['con_email_input'] = "Please fill in email address";
$_LANG['con_sign_building'] = 'Address other name';
$_LANG['inputcon_sign_building'] = 'Please fill in address other name';
$_LANG['sign_building_desc'] = "Example：'deliver to home'、'deliver to office'";
$_LANG['Zip_code'] = "Post Code";
$_LANG['deliver_goods_time'] = 'best deliver time';
$_LANG['con_Preservation'] = 'save receiver information';
$_LANG['goods_info'] = "Product information";
$_LANG['shop_Price_dis'] = "Price";
$_LANG['Evaluation_points'] = "Evaluation point";
$_LANG['tiao_dis'] = "piece";
$_LANG['stock_pcs'] = "pcs";
$_LANG['Hot_topic'] = "hot topic";
$_LANG['hidden'] = 'Hidden';
$_LANG['Contrast_bar'] = "VS";
$_LANG['Continue_add_dui'] = "you still can continue add";
$_LANG['empty_contrast'] = 'Clear';
$_LANG['flow_info_lbi'] = "Subtotal";
$_LANG['Selling_price'] = "sale　　price";
$_LANG['selling_price_alt'] = "Price";
$_LANG['gs_number'] = 'Quantity';
$_LANG['Rate'] = 'good comment';
$_LANG['zhong_p'] = 'average comment';
$_LANG['Bad'] = 'bad comment'; 
$_LANG['share_flow'] = "Share";
$_LANG['existing'] = "existing";
$_LANG['No_goods'] = "no stock";
$_LANG['Customer_service_p'] = "Customer service";
$_LANG['freight_p'] = 'transport charge';
$_LANG['jian'] = "Pcs";
$_LANG['seller_Grade']='seller grade';
$_LANG['brand_gm'] = 'product&nbsp;&nbsp;&nbsp;&nbsp;brand';
$_LANG['Go_to_store'] = "go to store and shop";
$_LANG['go_see'] = "have a look";
$_LANG['Deliver_to'] = "deliver to";
$_LANG['Sold'] = " Sold";
$_LANG['his_bi'] = "Pcs";
$_LANG['go_shoping'] = "go shopping";
$_LANG['Flash_sale'] = "limited time purchase";
$_LANG['hour_two'] = 'hour';
$_LANG['minutes'] = 'minutes';
$_LANG['seconds'] = 'second';
$_LANG['Rush_once'] = "immediate grab and buy";
$_LANG['rush_renshu'] = "people had grabbed and bought";
$_LANG['Brand_Street'] = "brand street";
$_LANG['Mall_info'] = "mall information";
$_LANG['people_participate'] = "people had participated";
$_LANG['zhe'] = "break";
$_LANG['Group_purchase_end'] = "group purchase end";
$_LANG['Group_purchase_now'] = "immediate purchase";
$_LANG['End_pitch'] = "from end";
$_LANG['Wait_shooting'] = "waiting for publish";
$_LANG['Exchange_price'] = "exchange purchase price";
$_LANG['combo_markPrice'] = "reference price";
$_LANG['integral'] = 'accumulate mark';
$_LANG['integral_coune'] = 'people exchange';
$_LANG['exchange_now'] = 'immediate redeem';
$_LANG['Detailed_map'] = "detail map";
$_LANG['Track'] = "Track";
$_LANG['View_all_orders'] = "view all orders";
$_LANG['Distribution_limit'] = "Commodities are only supported for distribution for the Chinese mainland";
$_LANG['payment_is_cod'] = 'cash on delivery';
$_LANG['Classification_selection'] = "Classification screening";
$_LANG['successfully_added_shoping'] = "Baby has been successfully added to the shopping cartz！";
$_LANG['cart_count'] = "Shopping Cart Total";
$_LANG['Baby_total_amount'] = "baby total amount is";
$_LANG['cart_baby_success'] = "successfully add to shopping bag！";
$_LANG['zhong_boby'] = "Product";
$_LANG['total_cart'] = 'total count';
$_LANG['pay_to_cart'] = "Go to the shopping bag for payment";
$_LANG['Detailed_score'] = 'Score detailed';
$_LANG['my_take_delivery'] = "my pick up";
$_LANG['level_pos'] = "level&nbsp;other";
$_LANG['temporary_no'] = "temporary no";
$_LANG['order_list'] = 'Order List';
$_LANG['My_assets'] = "my asset";
$_LANG['My_footprint'] = 'my footprint'; 
$_LANG['Email_subscription'] = "Subscription";
$_LANG['Customer_service_center'] = "Chats";
$_LANG['email_posi'] = "Please enter your email";
$_LANG['Support_project'] = "support category";
$_LANG['Launch'] = "initiate";
$_LANG['Support'] = 'support';
$_LANG['zc_see_content'] = "click and display more reply content";
$_LANG['input_number_desc'] = "still can key in";
$_LANG['zi_zc'] = "word";
$_LANG['zhuce'] = "Register";
/*20161214  end*/

$_LANG['switch'] = "switch and change";
$_LANG['select_country'] = "select country name";
$_LANG['different_countries'] = "match&nbsp;&nbsp;distribute";
$_LANG['click_countries'] = "click and change the country name";

$_LANG['by_stages'] = "by stage";
$_LANG['Sun_to_single'] = "Go to reviews";
$_LANG['goods_null_cart'] = "There is no product in the shopping cart，activate purchase！";
$_LANG['sort'] = 'sorting';
$_LANG['value_card'] = "Stored value card";
$_LANG['value_card_bind'] = "binding stored value card";
$_LANG['in_value_card_bind'] = "already bind stored value card";
$_LANG['value_card_instructions'] = "<h3>binding stored value cared and introduction</h3>
                <p>1、On the right side, enter the stored value card number password to bind</p>
                <p>2、Please check the use range of stored value card carefully</p>";
$_LANG['wu'] = "Non";	
$_LANG['checked_city'] = "changed city";
$_LANG['hot_city'] = "hot named city";
$_LANG['sufficient'] = "sufficient";
$_LANG['only_leave'] = "only left";
$_LANG['time_shop'] = "arrival time at shop";
$_LANG['take_time_desc'] = "default to after a day of the current time";
$_LANG['store_take_mobile'] = "please key in handphone no";
$_LANG['store_take_mobile_one'] = "Mobile phone number will get the order code";
$_LANG['address'] = 'Address';
$_LANG['sales_hotline'] = "sales hotline";
$_LANG['working_time'] = "working hour";
$_LANG['change_choice'] = "change selection";
$_LANG['change_choice_desc'] = "The area has no store or without inventory";
$_LANG['select_store_info'] = "select store";
$_LANG['wu'] = "Non";	
$_LANG['all_goods'] = 'all self-managed goods';
$_LANG['spec_cat'] = 'specify classification';
$_LANG['spec_goods'] = 'specify products';		
$_LANG['all_goods_explain'] = 'only for self-managed product platform use';
$_LANG['spec_cat_explain'] = 'only platform specify classification use：% ';
$_LANG['spec_goods_explain'] = 'only platform specify product use：<a href="javascript:;" onclick="specGoods()" style="color:red;" >Click to view</a>';	

$_LANG['label_mobile'] = 'handphone no';
$_LANG['get_verification_code_user'] = "Get SMS check code";
$_LANG['Un_bind'] = "unbind";
$_LANG['Immediately_verify'] = "immediate verify";
$_LANG['package_nonumer'] = "sorry，super value package stock not enough。please choose other value package or contact administrator！";
$_LANG['big_pic'] = "Item";
$_LANG['Small_pic'] = "List";
$_LANG['pattern'] = "pattern";
$_LANG['peer_comparison'] = "peer comparison";
$_LANG['recommended_store'] = "Recommend store";

$_LANG['update_Success'] = "renew successfully！";
$_LANG['Submit_Success'] = "Submitted successfully！";
$_LANG['Submit_fail'] = "submit failed，please resubmit later";

$_LANG['indate'] = 'validity date';
$_LANG['bonus_card_number'] = "card&nbsp;&nbsp;&nbsp;no";
$_LANG['keyong'] = "available";
$_LANG['available'] = "available";
$_LANG['range_bonus'] = "range";
$_LANG['settled_down'] = "I want to join";
$_LANG['settled_down_schedule_step'] = "progress query";
$_LANG['Only_have_inventory'] = "In Stock";
/* Spike activity */
$_LANG['merchant_rec'] = "Recommend store";
$_LANG['flashsale_more'] = "More";
$_LANG['self_run'] = "MC";
$_LANG['platform_self'] = 'MC SHOP';
$_LANG['flashdeals'] = 'Flash Deals';
$_LANG['all_merchants'] = 'All stores';
$_LANG['self_merchants'] = 'Self-managed store';
$_LANG['assign_merchants'] = 'specific shop';
$_LANG['productdetails'] = 'Product Details';
$_LANG['overdue_login'] = 'login expired，please relogin again！';
$_LANG['huobifuhao'] = 'MR';
$_LANG['quicklink'] = 'Quick Links';
$_LANG['myorders'] = 'Orders';
$_LANG['wallet'] = 'Wallet';
$_LANG['search_store'] = "Searh in this store";
$_LANG['items'] = "items";
$_LANG['new_arrival'] = "NEW ARRIVAL";
$_LANG['powered_by'] = 'POWERED by Giggleday';
$_LANG['delete'] = 'Delete';
?>