<?php

require ROOT_PATH . ADMIN_PATH . '/sms_url.php';
$_LANG['cfg_name']['floor_nav_type'] = '首页楼层左侧导航样式';
$_LANG['cfg_range']['floor_nav_type'][1] = '样式一';
$_LANG['cfg_range']['floor_nav_type'][2] = '样式二';
$_LANG['cfg_range']['floor_nav_type'][3] = '样式三';
$_LANG['cfg_range']['floor_nav_type'][4] = '样式四';
$_LANG['cfg_desc']['floor_nav_type'] = '<a href="../images/floor_nav_type_icon.jpg" class="nyroModal"><i class="icon icon-picture" onmouseover="toolTip(\'<img src=../images/floor_nav_type_icon.jpg>\')" onmouseout="toolTip()"></i></a>&nbsp;&nbsp;多项设置首页楼层左侧导航定位不同样式';
$_LANG['cfg_name']['ip_type'] = '站点IP定位类型';
$_LANG['cfg_range']['ip_type'][0] = '新浪';
$_LANG['cfg_range']['ip_type'][1] = '淘宝';
$_LANG['cfg_range']['ip_type'][2] = '腾讯';
$_LANG['cfg_desc']['ip_type'] = 'IP定位主要用于网站头部和商品详情地区定位，建议选择（腾讯或新浪接口），测试清浏览器缓存';
$_LANG['js_languages']['reduce_num_not_null'] = '请输入类型\\n(说明：类型与发票内容一致)\\n';
$_LANG['js_languages']['reduce_price_not_null'] = '请输入税率';
$_LANG['cfg_name']['tengxun_key'] = '腾讯地图密钥';
$_LANG['cfg_desc']['tengxun_key'] = '<a href="http://lbs.qq.com/mykey.html" target="_blank">获取密钥</a>';
$_LANG['cfg_name']['kuaidi100_key'] = '快递100密钥';
$_LANG['cfg_desc']['kuaidi100_key'] = '请输入<a href="https://www.kuaidi100.com/openapi/applyapi.shtml" target="_blank">快递100密钥</a>';
$_LANG['cfg_name']['use_coupons'] = '是否启用优惠券';
$_LANG['cfg_range']['use_coupons'][0] = '关闭';
$_LANG['cfg_range']['use_coupons'][1] = '启用';
$_LANG['cfg_name']['use_value_card'] = '是否启用储值卡';
$_LANG['cfg_range']['use_value_card'][0] = '关闭';
$_LANG['cfg_range']['use_value_card'][1] = '启用';
$_LANG['cfg_name']['add_shop_price'] = '商品SKU价格模式';
$_LANG['cfg_range']['add_shop_price'][0] = 'SKU价格（属性货品价格）';
$_LANG['cfg_range']['add_shop_price'][1] = 'SKU价格（商品价格 + 属性货品价格）';
$_LANG['cfg_name']['goods_attr_price'] = '商品属性价格模式';
$_LANG['cfg_range']['goods_attr_price'][0] = '单一模式';
$_LANG['cfg_range']['goods_attr_price'][1] = '货品模式';
$_LANG['cfg_desc']['goods_attr_price'] = '商品属性价格分两种模式，单一模式是系统原先单个属性设置价格，货品模式是以货品属性一组设置价格';
$_LANG['cfg_name']['user_login_register'] = '会员登录/注册邮箱验证是否开启';
$_LANG['cfg_range']['user_login_register'][0] = '关闭';
$_LANG['cfg_range']['user_login_register'][1] = '开启';
$_LANG['cfg_desc']['user_login_register'] = '如果开启邮箱验证，用户在使用邮箱注册会员成功后必须邮箱验证才能进入会员中心';
$_LANG['cfg_name']['user_phone'] = '会员账号安全验证级别';
$_LANG['cfg_range']['user_phone'][0] = '邮箱验证';
$_LANG['cfg_range']['user_phone'][1] = '手机验证';
$_LANG['cfg_desc']['user_phone'] = '如果开启手机验证并关闭《会员登录/注册邮箱验证是否开启》情况下，以手机验证为最高级别';
$_LANG['cfg_name']['server_model'] = '服务器运行方式';
$_LANG['cfg_range']['server_model'][0] = '单台服务器';
$_LANG['cfg_range']['server_model'][1] = '多台服务器负载均衡';
$_LANG['cfg_desc']['server_model'] = '如果商城没有采用负载均衡方式运行(比如阿里云的负载均衡)，请设置单台服务器方式';
$_LANG['cfg_name']['exchange_size'] = '积分商品列表页的数量';
$_LANG['cfg_name']['site_domain'] = '网站域名';
$_LANG['cfg_desc']['site_domain'] = '请输入您当前网站的域名，避免启用商家二级域名出现问题（如：http://www.xxxx.com/）';
$_LANG['cfg_name']['sms_price_notice'] = '商品降价时是否发送短信';
$_LANG['cfg_range']['sms_price_notice'][1] = '发短信';
$_LANG['cfg_range']['sms_price_notice'][0] = '不发短信';
$_LANG['cfg_name']['sms_ecmoban_user'] = '短信接口用户名';
$_LANG['cfg_name']['sms_ecmoban_password'] = '短信接口密码';
$_LANG['cfg_name']['sign'] = '发货日期起可退换货时间';
$_LANG['cfg_desc']['sign'] = '以天数为单位';
$_LANG['cfg_name']['sms_type'] = '短信类型';
$_LANG['cfg_range']['sms_type'][0] = '互亿无线';
$_LANG['cfg_range']['sms_type'][1] = '阿里大于';
$_LANG['cfg_range']['sms_type'][2] = '阿里短信服务';
$_LANG['cfg_name']['ali_appkey'] = '阿里大鱼(appKey)';
$_LANG['cfg_name']['ali_secretkey'] = '阿里大鱼(secretKey)';
$_LANG['cfg_name']['access_key_id'] = 'AccessKeyID';
$_LANG['cfg_name']['access_key_secret'] = 'AccessKeySecret';
$_LANG['cfg_name']['sms_find_signin'] = '客户密码找回时';
$_LANG['cfg_range']['sms_find_signin'][0] = '不发短信';
$_LANG['cfg_range']['sms_find_signin'][1] = '发短信';
$_LANG['cfg_name']['sms_code'] = '发送验证码';
$_LANG['cfg_range']['sms_code'][0] = '不发短信';
$_LANG['cfg_range']['sms_code'][1] = '发短信';
$_LANG['cfg_desc']['sms_code'] = '用于单个参数验证码（用户实名验证、商家实名验证等）短信发送';
$_LANG['cfg_name']['user_account_code'] = '会员充值/提现时是否发送短信';
$_LANG['cfg_range']['user_account_code'][0] = '不发短信';
$_LANG['cfg_range']['user_account_code'][1] = '发短信';
$_LANG['cfg_name']['open_oss'] = '阿里云OSS对象存储启用';
$_LANG['cfg_range']['open_oss'][0] = '关闭';
$_LANG['cfg_range']['open_oss'][1] = '开启';
$_LANG['cfg_name']['open_memcached'] = 'Memcached是否启用';
$_LANG['cfg_range']['open_memcached'][0] = '关闭';
$_LANG['cfg_range']['open_memcached'][1] = '开启';
$_LANG['cfg_desc']['open_memcached'] = '温馨提示：启用前必须确认系统服务器Memcached服务一切正常';
$_LANG['cfg_name']['ad_reminder'] = '广告位提示设置';
$_LANG['cfg_range']['ad_reminder'][0] = '关闭';
$_LANG['cfg_range']['ad_reminder'][1] = '开启';
$_LANG['cfg_desc']['ad_reminder'] = '启用后可以查看页面广告位是否设置广告';
$_LANG['cfg_name']['open_study'] = '查看教程开关设置';
$_LANG['cfg_range']['open_study'][0] = '关闭';
$_LANG['cfg_range']['open_study'][1] = '开启';
$_LANG['cfg_desc']['open_study'] = '启用后可以查看官网教程';
$_LANG['cfg_name']['show_warehouse'] = '商品详情开启可选仓库';
$_LANG['cfg_range']['show_warehouse'][0] = '关闭';
$_LANG['cfg_range']['show_warehouse'][1] = '开启';
$_LANG['cfg_name']['seller_email'] = '下订单时是否给入驻商客服发邮件';
$_LANG['cfg_range']['seller_email'][0] = '关闭';
$_LANG['cfg_range']['seller_email'][1] = '开启';
$_LANG['cfg_desc']['seller_email'] = '店铺基本信息设置的客服邮件地址不为空时，该选项有效。';
$_LANG['cfg_name']['user_helpart'] = '会员帮助文章';
$_LANG['cfg_desc']['user_helpart'] = '此设置为会员中心默认页面右侧帮助文章（格式：1,2,3 注：逗号为英文逗号）';
$_LANG['cfg_name']['single_thumb_width'] = '晒单缩略图宽度';
$_LANG['cfg_name']['single_thumb_height'] = '晒单缩略图高度';
$_LANG['cfg_name']['return_pictures'] = '退换货上传图片凭证';
$_LANG['cfg_desc']['return_pictures'] = '设置退换货上传图片凭证数量限制';
$_LANG['cfg_name']['auction_ad'] = '限制显示广告数量';
$_LANG['cfg_name']['marticle'] = '店铺入驻文章列表';
$_LANG['cfg_desc']['marticle'] = '设置店铺入驻首页左侧文章ID,文本框中填写文章分类ID';
$_LANG['cfg_name']['marticle_id'] = '店铺入驻文章默认内容';
$_LANG['cfg_desc']['marticle_id'] = '设置默认显示店铺入驻文章内容ID';
$_LANG['cfg_name']['open_delivery_time'] = '是否开启自动确认收货';
$_LANG['cfg_range']['open_delivery_time'][0] = '关闭';
$_LANG['cfg_range']['open_delivery_time'][1] = '开启';
$_LANG['cfg_name']['open_area_goods'] = '是否开启页面区分地区商品';
$_LANG['cfg_range']['open_area_goods'][0] = '关闭';
$_LANG['cfg_range']['open_area_goods'][1] = '开启';
$_LANG['cfg_name']['choose_process'] = '入驻申请必填功能';
$_LANG['cfg_range']['choose_process'][0] = '关闭';
$_LANG['cfg_range']['choose_process'][1] = '开启';
$_LANG['cfg_name']['freight_model'] = '商品运费模式';
$_LANG['cfg_range']['freight_model'][0] = '系统默认';
$_LANG['cfg_range']['freight_model'][1] = '仓库模式';
$_LANG['cfg_desc']['freight_model'] = '系统默认：按配送方式设置运费，即普通的运费模式，如发往苏州、上海等的运费设置；<br>仓库模式：使用仓库设置运费，如从上海仓库发往苏州的运费设置。';
$_LANG['cfg_name']['customer_service'] = '店铺客服设置';
$_LANG['cfg_range']['customer_service'][0] = '默认统一客服';
$_LANG['cfg_range']['customer_service'][1] = '商家自行客服';
$_LANG['cfg_desc']['customer_service'] = '设置客服模式是由管理员设置统一店铺客服或者是由商家自行设置店铺客服';
$_LANG['cfg_name']['review_goods'] = '审核店铺商品';
$_LANG['cfg_range']['review_goods'][0] = '关闭';
$_LANG['cfg_range']['review_goods'][1] = '开启';
$_LANG['cfg_desc']['review_goods'] = '设置是否需要审核商家添加的商品，如果开启则所有商家添加的商品都需要审核之后才能显示';
$_LANG['cfg_name']['group_goods'] = '商品配件组名称';
$_LANG['cfg_desc']['group_goods'] = '以英文逗号分隔字符串抒写，例：推荐配件,人气组合';
$_LANG['cfg_name']['attr_set_up'] = '商品属性权限';
$_LANG['cfg_range']['attr_set_up'][0] = '由网站统一设置';
$_LANG['cfg_range']['attr_set_up'][1] = '商家可自行设置';
$_LANG['cfg_desc']['attr_set_up'] = '设置商品属性商家是否有权限添加';
$_LANG['cfg_name']['goods_file'] = '商品编辑审核字段';
$_LANG['cfg_desc']['goods_file'] = '设置商品编辑时需要审核的字段，空值为审核已通过，否则未审核' . '<br/>' . '默认字段：goods_name,shop_price,market_price,promote_price,goods_sn' . '<br/>' . '仓库或地区模式时：-warehouse_price,warehouse_promote_price,region_price,region_promote_price';
$_LANG['cfg_name']['delete_seller'] = '是否删除商家所有信息';
$_LANG['cfg_range']['delete_seller'][0] = '否';
$_LANG['cfg_range']['delete_seller'][1] = '是';
$_LANG['cfg_desc']['delete_seller'] = '在删除商家的同时删除商家的所有信息，请慎重选择.';
$_LANG['cfg_name']['editing_tools'] = '内容编辑器';
$_LANG['cfg_range']['editing_tools']['fckeditor'] = '默认Fckeditor';
$_LANG['cfg_range']['editing_tools']['ueditor'] = '百度Ueditor(推荐)';
$_LANG['cfg_name']['sms_signin'] = '客户注册时是否发送短信验证码';
$_LANG['cfg_range']['sms_signin'][1] = '发短信';
$_LANG['cfg_range']['sms_signin'][0] = '不发短信';
$_LANG['cfg_name']['sms_ecmoban_user'] = '互亿在线短信接口用户名';
$_LANG['cfg_name']['sms_ecmoban_password'] = '互亿在线短信接口密码';
$_LANG['cfg_name']['sms_seller_signin'] = '修改入住商权限时是否发送短信';
$_LANG['cfg_range']['sms_seller_signin'][0] = '不发短信';
$_LANG['cfg_range']['sms_seller_signin'][1] = '发短信';
$_LANG['cfg_name']['ectouch_qrcode'] = '底部二维码右边';
$_LANG['cfg_name']['ecjia_qrcode'] = '底部二维码左边';
$_LANG['cfg_name']['index_down_logo'] = '首页下滑弹出logo图片';
$_LANG['cfg_name']['site_commitment'] = '头部右侧翻转效果图片';
$_LANG['cfg_name']['user_login_logo'] = '用户登录与注册页面LOGO';
$_LANG['cfg_name']['login_logo_pic'] = '用户登录与注册页面LOGO右侧图';
$_LANG['cfg_name']['business_logo'] = '批发Logo';
$_LANG['cfg_name']['extend_basic'] = '扩展信息';
$_LANG['cfg_name']['basic'] = '基本设置';
$_LANG['cfg_name']['display'] = '显示设置';
$_LANG['cfg_name']['shop_info'] = '平台信息';
$_LANG['cfg_name']['shopping_flow'] = '购物流程';
$_LANG['cfg_name']['smtp'] = '邮件服务器设置';
$_LANG['cfg_name']['goods'] = '商品显示设置';
$_LANG['cfg_name']['lang'] = '系统语言';
$_LANG['cfg_name']['shop_closed'] = '暂时关闭网站';
$_LANG['cfg_name']['icp_file'] = 'ICP 备案证书文件';
$_LANG['cfg_name']['watermark'] = '水印文件';
$_LANG['cfg_name']['watermark_place'] = '水印位置';
$_LANG['cfg_name']['use_storage'] = '是否启用库存管理';
$_LANG['cfg_name']['market_price_rate'] = '市场价格比例';
$_LANG['cfg_name']['rewrite'] = 'URL重写';
$_LANG['cfg_name']['integral_name'] = '消费积分名称';
$_LANG['cfg_name']['integral_scale'] = '积分换算比例';
$_LANG['cfg_name']['integral_percent'] = '积分支付比例';
$_LANG['cfg_name']['enable_order_check'] = '是否开启新订单提醒';
$_LANG['cfg_name']['default_storage'] = '默认库存';
$_LANG['cfg_name']['date_format'] = '日期格式';
$_LANG['cfg_name']['time_format'] = '时间格式';
$_LANG['cfg_name']['currency_format'] = '货币格式';
$_LANG['cfg_name']['thumb_width'] = '缩略图宽度';
$_LANG['cfg_name']['thumb_height'] = '缩略图高度';
$_LANG['cfg_name']['image_width'] = '商品图片宽度';
$_LANG['cfg_name']['image_height'] = '商品图片高度';
$_LANG['cfg_name']['best_number'] = '精品推荐数量';
$_LANG['cfg_name']['new_number'] = '新品推荐数量';
$_LANG['cfg_name']['hot_number'] = '热销商品数量';
$_LANG['cfg_name']['promote_number'] = '特价商品的数量';
$_LANG['cfg_name']['group_goods_number'] = '团购商品的数量';
$_LANG['cfg_name']['top_number'] = '销量排行数量';
$_LANG['cfg_name']['history_number'] = '浏览历史数量';
$_LANG['cfg_name']['comments_number'] = '评论数量';
$_LANG['cfg_name']['bought_goods'] = '相关商品数量';
$_LANG['cfg_name']['article_number'] = '最新文章显示数量';
$_LANG['cfg_name']['order_number'] = '订单显示数量';
$_LANG['cfg_name']['shop_name'] = '商店名称';
$_LANG['cfg_name']['shop_title'] = '商店标题';
$_LANG['cfg_name']['shop_website'] = '商店网址';
$_LANG['cfg_name']['shop_desc'] = '商店描述';
$_LANG['cfg_name']['shop_keywords'] = '商店关键字';
$_LANG['cfg_name']['shop_country'] = '所在国家';
$_LANG['cfg_name']['shop_province'] = '所在省份';
$_LANG['cfg_name']['shop_city'] = '所在城市';
$_LANG['cfg_name']['shop_address'] = '详细地址';
$_LANG['cfg_name']['licensed'] = '是否显示 Licensed';
$_LANG['cfg_name']['qq'] = '客服QQ号码';
$_LANG['cfg_name']['ww'] = '淘宝旺旺';
$_LANG['cfg_name']['skype'] = 'Skype';
$_LANG['cfg_name']['ym'] = 'Yahoo Messenger';
$_LANG['cfg_name']['msn'] = 'MSN Messenger';
$_LANG['cfg_name']['service_email'] = '客服邮件地址';
$_LANG['cfg_name']['service_phone'] = '客服电话';
$_LANG['cfg_name']['can_invoice'] = '能否开发票';
$_LANG['cfg_name']['user_notice'] = '用户中心公告';
$_LANG['cfg_name']['shop_notice'] = '商店公告';
$_LANG['cfg_name']['shop_reg_closed'] = '是否关闭注册';
$_LANG['cfg_name']['send_mail_on'] = '是否开启自动发送邮件';
$_LANG['cfg_name']['auto_generate_gallery'] = '上传商品是否自动生成相册图';
$_LANG['cfg_name']['retain_original_img'] = '上传商品时是否保留原图';
$_LANG['cfg_name']['member_email_validate'] = '是否开启会员邮件验证';
$_LANG['cfg_name']['send_verify_email'] = '用户注册时自动发送验证邮件';
$_LANG['cfg_name']['message_board'] = '是否启用留言板功能';
$_LANG['cfg_name']['message_check'] = '用户留言是否需要审核';
$_LANG['cfg_name']['use_integral'] = '是否使用积分';
$_LANG['cfg_name']['use_bonus'] = '是否使用红包';
$_LANG['cfg_name']['use_value_card'] = '是否使用储值卡';
$_LANG['cfg_name']['use_surplus'] = '是否使用余额';
$_LANG['cfg_name']['use_how_oos'] = '是否使用缺货处理';
$_LANG['cfg_name']['send_confirm_email'] = '确认订单时';
$_LANG['cfg_name']['order_pay_note'] = '设置订单为“已付款”时';
$_LANG['cfg_name']['order_unpay_note'] = '设置订单为“未付款”时';
$_LANG['cfg_name']['order_ship_note'] = '设置订单为“已发货”时';
$_LANG['cfg_name']['order_unship_note'] = '设置订单为“未发货”时';
$_LANG['cfg_name']['when_dec_storage'] = '什么时候减少库存';
$_LANG['cfg_name']['send_ship_email'] = '发货时';
$_LANG['cfg_name']['order_receive_note'] = '设置订单为“收货确认”时';
$_LANG['cfg_name']['order_cancel_note'] = '取消订单时';
$_LANG['cfg_name']['send_cancel_email'] = '取消订单时';
$_LANG['cfg_name']['order_return_note'] = '退货时';
$_LANG['cfg_name']['order_invalid_note'] = '把订单设为无效时';
$_LANG['cfg_name']['send_invalid_email'] = '把订单设为无效时';
$_LANG['cfg_name']['sn_prefix'] = '商品货号前缀';
$_LANG['cfg_name']['close_comment'] = '关闭网店的原因';
$_LANG['cfg_name']['watermark_alpha'] = '水印透明度';
$_LANG['cfg_name']['icp_number'] = 'ICP证书或ICP备案证书号';
$_LANG['cfg_name']['invoice_content'] = '发票内容';
$_LANG['cfg_name']['invoice_type'] = '发票类型及税率';
$_LANG['cfg_name']['stock_dec_time'] = '减库存的时机';
$_LANG['cfg_name']['sales_volume_time'] = '增加销量的时机';
$_LANG['cfg_name']['comment_check'] = '用户评论是否需要审核';
$_LANG['cfg_name']['comment_factor'] = '商品评论的条件';
$_LANG['cfg_name']['no_picture'] = '商品的默认图片';
$_LANG['cfg_name']['no_brand'] = '品牌的默认图片';
$_LANG['cfg_name']['stats_code'] = '统计代码';
$_LANG['cfg_name']['cache_time'] = '缓存存活时间（秒）';
$_LANG['cfg_name']['page_size'] = '商品分类页列表的数量';
$_LANG['cfg_name']['article_page_size'] = '文章分类页列表的数量';
$_LANG['cfg_name']['page_style'] = '分页样式';
$_LANG['cfg_name']['sort_order_type'] = '商品分类页默认排序类型';
$_LANG['cfg_name']['sort_order_method'] = '商品分类页默认排序方式';
$_LANG['cfg_name']['show_order_type'] = '商品分类页默认显示方式';
$_LANG['cfg_name']['goods_name_length'] = '商品名称的长度';
$_LANG['cfg_name']['price_format'] = '商品价格显示规则';
$_LANG['cfg_name']['register_points'] = '会员注册赠送积分';
$_LANG['cfg_name']['shop_logo'] = '商店 Logo';
$_LANG['cfg_name']['enable_gzip'] = '是否启用Gzip模式';
$_LANG['cfg_name']['anonymous_buy'] = '是否允许未登录用户购物';
$_LANG['cfg_name']['min_goods_amount'] = '最小购物金额';
$_LANG['cfg_name']['one_step_buy'] = '是否一步购物';
$_LANG['cfg_name']['show_goodssn'] = '是否显示货号';
$_LANG['cfg_name']['show_brand'] = '是否显示品牌';
$_LANG['cfg_name']['show_goodsweight'] = '是否显示重量';
$_LANG['cfg_name']['show_goodsnumber'] = '是否显示库存';
$_LANG['cfg_name']['show_addtime'] = '是否显示上架时间';
$_LANG['cfg_name']['show_rank_price'] = '是否显示等级价格';
$_LANG['cfg_name']['show_give_integral'] = '是否赠送消费积分';
$_LANG['cfg_name']['show_marketprice'] = '是否显示市场价格';
$_LANG['cfg_name']['goodsattr_style'] = '商品属性显示样式';
$_LANG['cfg_name']['test_mail_address'] = '邮件地址';
$_LANG['cfg_name']['send'] = '发送测试邮件';
$_LANG['cfg_name']['send_service_email'] = '下订单时是否给客服发邮件';
$_LANG['cfg_name']['show_goods_in_cart'] = '购物车里显示商品方式';
$_LANG['cfg_name']['show_attr_in_cart'] = '购物车里是否显示商品属性';
$_LANG['test_mail_title'] = '测试邮件';
$_LANG['cfg_name']['email_content'] = '您好！这是一封检测邮件服务器设置的测试邮件。收到此邮件，意味着您的邮件服务器设置正确！您可以进行其它邮件发送的操作了！';
$_LANG['cfg_name']['sms'] = '短信设置';
$_LANG['cfg_name']['sms_shop_mobile'] = '商家的手机号码';
$_LANG['cfg_name']['sms_order_placed'] = '客户下订单时是否给商家发短信';
$_LANG['cfg_name']['sms_order_payed'] = '客户付款时是否给商家发短信';
$_LANG['cfg_name']['sms_order_shipped'] = '商家发货时是否给客户发短信';
$_LANG['cfg_name']['attr_related_number'] = '属性关联的商品数量';
$_LANG['cfg_name']['top10_time'] = '排行统计的时间';
$_LANG['cfg_name']['goods_gallery_number'] = '商品详情页相册图片数量';
$_LANG['cfg_name']['article_title_length'] = '文章标题的长度';
$_LANG['cfg_name']['cron_method'] = '是否开启命令行调用计划任务';
$_LANG['cfg_name']['timezone'] = '默认时区';
$_LANG['cfg_name']['upload_size_limit'] = '附件上传大小';
$_LANG['cfg_name']['search_keywords'] = '首页搜索的关键字';
$_LANG['cfg_name']['cart_confirm'] = '购物车确定提示';
$_LANG['cfg_name']['bgcolor'] = '缩略图背景色';
$_LANG['cfg_name']['name_of_region_1'] = '一级配送区域名称';
$_LANG['cfg_name']['name_of_region_2'] = '二级配送区域名称';
$_LANG['cfg_name']['name_of_region_3'] = '三级配送区域名称';
$_LANG['cfg_name']['name_of_region_4'] = '四级配送区域名称';
$_LANG['cfg_name']['related_goods_number'] = '关联商品显示数量';
$_LANG['cfg_name']['visit_stats'] = '站点访问统计';
$_LANG['cfg_name']['help_open'] = '用户帮助是否打开';
$_LANG['cfg_desc']['invoice_type'] = '税率填写整数值，例如（税率：12，商品金额：35.70）则公式：35.70 * （12 / 100） = 4.28元';
$_LANG['cfg_desc']['smtp'] = '设置邮件服务器基本参数';
$_LANG['cfg_desc']['market_price_rate'] = '输入商品售价时将自动根据该比例计算市场价格';
$_LANG['cfg_desc']['rewrite'] = 'URL重写是一种搜索引擎优化技术，可以将动态的地址模拟成静态的HTML文件。需要Apache的支持。';
$_LANG['cfg_desc']['integral_name'] = '您可以将消费积分重新命名。例如：商豆';
$_LANG['cfg_desc']['integral_scale'] = '每100积分可抵多少现金';
$_LANG['cfg_desc']['integral_percent'] = '每100元商品最多可以使用多少元积分';
$_LANG['cfg_desc']['comments_number'] = '显示在商品详情页的用户评论数量。';
$_LANG['cfg_desc']['shop_title'] = '商店的标题将显示在浏览器的标题栏';
$_LANG['cfg_desc']['smtp_host'] = '邮件服务器主机地址。如果本机可以发送邮件则设置为localhost';
$_LANG['cfg_desc']['smtp_user'] = '发送邮件所需的认证帐号，如果没有就为空着';
$_LANG['cfg_desc']['bought_goods'] = '显示多少个购买此商品的人还买过哪些商品';
$_LANG['cfg_desc']['currency_format'] = '显示商品价格的格式，%s将被替换为相应的价格数字。';
$_LANG['cfg_desc']['image_height'] = '如果您的服务器支持GD，在您上传商品图片的时候将自动将图片缩小到指定的尺寸。';
$_LANG['cfg_desc']['watermark'] = '水印文件须为gif格式才可支持透明度设置。';
$_LANG['cfg_desc']['watermark_place'] = '水印显示在图片上的位置，"无"将不显示水印。';
$_LANG['cfg_desc']['watermark_alpha'] = '水印的透明度，可选值为0-100。当设置为100时则为不透明。';
$_LANG['cfg_desc']['invoice_content'] = '客户要求开发票时可以选择的内容。例如：办公用品。每一行代表一个选项。';
$_LANG['cfg_desc']['stats_code'] = '您可以将其他访问统计服务商提供的代码添加到每一个页面。';
$_LANG['cfg_desc']['cache_time'] = '前台页面缓存的存活时间，以秒为单位。';
$_LANG['cfg_desc']['qq'] = 'QQ客服名称和号码请用“|”隔开（如：客服1|123456），如果您有多个客服的QQ号码，请换行。';
$_LANG['cfg_desc']['msn'] = '如果您有多个客服的MSN号码，请在每个号码之间使用半角逗号（,）分隔。';
$_LANG['cfg_desc']['ym'] = '如果您有多个客服的 Yahoo Messenger 号码，请在每个号码之间使用半角逗号（,）分隔。';
$_LANG['cfg_desc']['ww'] = '旺旺客服名称和号码请用“|”隔开（如：客服2|654321），如果您有多个客服的旺旺号码，请换行。';
$_LANG['cfg_desc']['shop_logo'] = '上传图片格式必须是gif,jpg,jpeg,png;图片大小在200kb之内';
$_LANG['cfg_desc']['business_logo'] = '上传图片格式必须是gif,jpg,jpeg,png;图片大小在200kb之内';
$_LANG['cfg_desc']['enable_gzip'] = '启用Gzip模式可压缩发送页面大小，加快网页传输。需要php支持Gzip。如果已经用Apache等对页面进行Gzip压缩，请禁止该功能。';
$_LANG['cfg_desc']['skype'] = '如果您有多个客服的Skype号码，请在每个号码之间使用半角逗号（,）分隔。提示：你需要在你的Skype隐私设置中启用状态显示功能';
$_LANG['cfg_desc']['attr_related_number'] = '在商品详情页面显示多少个属性关联的商品。';
$_LANG['cfg_desc']['user_notice'] = '该信息将在用户中心欢迎页面显示';
$_LANG['cfg_desc']['comment_factor'] = '选取较高的评论条件可以有效的减少垃圾评论的产生。只有用户订单完成后才认为该用户有购买行为';
$_LANG['cfg_desc']['min_goods_amount'] = '达到此购物金额，才能提交订单。';
$_LANG['cfg_desc']['search_keywords'] = '首页显示的搜索关键字,请用半角逗号(,)分隔多个关键字';
$_LANG['cfg_desc']['shop_notice'] = '以上内容将显示在首页商店公告中,注意控制公告内容长度不要超过公告显示区域大小。';
$_LANG['cfg_desc']['bgcolor'] = '颜色请以#FFFFFF格式填写';
$_LANG['cfg_desc']['cart_confirm'] = '允许您设置用户点击“加入购物车”后是否提示以及随后的动作。';
$_LANG['cfg_desc']['use_how_oos'] = '使用缺货处理时前台订单确认页面允许用户选择缺货时处理方法。';
$_LANG['cfg_desc']['send_service_email'] = '网店信息中的客服邮件地址不为空时，该选项有效。';
$_LANG['cfg_desc']['send_mail_on'] = '启用该选项登录后台时，会自动发送邮件队列中尚未发送的邮件';
$_LANG['cfg_desc']['sms_shop_mobile'] = '请先注册手机短信服务再填写手机号码';
$_LANG['cfg_desc']['send_verify_email'] = '“是否开启会员邮件验证”设为开启时才可使用此功能';
$_LANG['cfg_range']['cart_confirm'][1] = '提示用户，点击“确定”进购物车';
$_LANG['cfg_range']['cart_confirm'][2] = '提示用户，点击“取消”进购物车';
$_LANG['cfg_range']['cart_confirm'][3] = '直接进入购物车';
$_LANG['cfg_range']['cart_confirm'][4] = '不提示并停留在当前页面';
$_LANG['cfg_range']['shop_closed'][0] = '否';
$_LANG['cfg_range']['shop_closed'][1] = '是';
$_LANG['cfg_range']['licensed'][0] = '否';
$_LANG['cfg_range']['licensed'][1] = '是';
$_LANG['cfg_range']['send_mail_on']['on'] = '开启';
$_LANG['cfg_range']['send_mail_on']['off'] = '关闭';
$_LANG['cfg_range']['member_email_validate'][1] = '开启';
$_LANG['cfg_range']['member_email_validate'][0] = '关闭';
$_LANG['cfg_range']['send_verify_email'][1] = '开启';
$_LANG['cfg_range']['send_verify_email'][0] = '关闭';
$_LANG['cfg_range']['message_board'][1] = '开启';
$_LANG['cfg_range']['message_board'][0] = '关闭';
$_LANG['cfg_range']['auto_generate_gallery'][1] = '是';
$_LANG['cfg_range']['auto_generate_gallery'][0] = '否';
$_LANG['cfg_range']['retain_original_img'][1] = '是';
$_LANG['cfg_range']['retain_original_img'][0] = '否';
$_LANG['cfg_range']['watermark_place'][0] = '无';
$_LANG['cfg_range']['watermark_place'][1] = '左上';
$_LANG['cfg_range']['watermark_place'][2] = '右上';
$_LANG['cfg_range']['watermark_place'][3] = '居中';
$_LANG['cfg_range']['watermark_place'][4] = '左下';
$_LANG['cfg_range']['watermark_place'][5] = '右下';
$_LANG['cfg_range']['use_storage'][1] = '是';
$_LANG['cfg_range']['use_storage'][0] = '否';
$_LANG['cfg_range']['rewrite'][0] = '禁用';
$_LANG['cfg_range']['rewrite'][1] = '简单重写';
$_LANG['cfg_range']['rewrite'][2] = '复杂重写';
$_LANG['cfg_range']['can_invoice'][0] = '不能';
$_LANG['cfg_range']['can_invoice'][1] = '能';
$_LANG['cfg_range']['top10_time'][0] = '所有';
$_LANG['cfg_range']['top10_time'][1] = '一年';
$_LANG['cfg_range']['top10_time'][2] = '半年';
$_LANG['cfg_range']['top10_time'][3] = '三个月';
$_LANG['cfg_range']['top10_time'][4] = '一个月';
$_LANG['cfg_range']['use_integral'][1] = '使用';
$_LANG['cfg_range']['use_integral'][0] = '不使用';
$_LANG['cfg_range']['use_bonus'][1] = '使用';
$_LANG['cfg_range']['use_bonus'][0] = '不使用';
$_LANG['cfg_range']['use_value_card'][1] = '使用';
$_LANG['cfg_range']['use_value_card'][0] = '不使用';
$_LANG['cfg_range']['use_surplus'][1] = '使用';
$_LANG['cfg_range']['use_surplus'][0] = '不使用';
$_LANG['cfg_range']['use_how_oos'][1] = '使用';
$_LANG['cfg_range']['use_how_oos'][0] = '不使用';
$_LANG['cfg_range']['send_confirm_email'][1] = '发送邮件';
$_LANG['cfg_range']['send_confirm_email'][0] = '不发送邮件';
$_LANG['cfg_range']['order_pay_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_pay_note'][0] = '无需填写备注';
$_LANG['cfg_range']['order_unpay_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_unpay_note'][0] = '无需填写备注';
$_LANG['cfg_range']['order_ship_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_ship_note'][0] = '无需填写备注';
$_LANG['cfg_range']['order_unship_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_unship_note'][0] = '无需填写备注';
$_LANG['cfg_range']['order_receive_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_receive_note'][0] = '无需填写备注';
$_LANG['cfg_range']['order_cancel_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_cancel_note'][0] = '无需填写备注';
$_LANG['cfg_range']['order_return_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_return_note'][0] = '无需填写备注';
$_LANG['cfg_range']['order_invalid_note'][1] = '必须填写备注';
$_LANG['cfg_range']['order_invalid_note'][0] = '无需填写备注';
$_LANG['cfg_range']['when_dec_storage'][0] = '下定单时';
$_LANG['cfg_range']['when_dec_storage'][1] = '发货时';
$_LANG['cfg_range']['send_ship_email'][1] = '发送邮件';
$_LANG['cfg_range']['send_ship_email'][0] = '不发送邮件';
$_LANG['cfg_range']['send_cancel_email'][1] = '发送邮件';
$_LANG['cfg_range']['send_cancel_email'][0] = '不发送邮件';
$_LANG['cfg_range']['send_invalid_email'][1] = '发送邮件';
$_LANG['cfg_range']['send_invalid_email'][0] = '不发送邮件';
$_LANG['cfg_range']['mail_charset']['UTF8'] = '国际化编码（utf8）';
$_LANG['cfg_range']['mail_charset']['GB2312'] = '简体中文';
$_LANG['cfg_range']['mail_charset']['BIG5'] = '繁体中文';
$_LANG['cfg_range']['comment_check'][0] = '不需要审核';
$_LANG['cfg_range']['comment_check'][1] = '需要审核';
$_LANG['cfg_range']['message_check'][0] = '不需要审核';
$_LANG['cfg_range']['message_check'][1] = '需要审核';
$_LANG['cfg_range']['comment_factor'][0] = '所有用户';
$_LANG['cfg_range']['comment_factor'][1] = '仅登录用户';
$_LANG['cfg_range']['comment_factor'][2] = '有过一次以上购买行为用户';
$_LANG['cfg_range']['comment_factor'][3] = '仅购买过该商品用户';
$_LANG['cfg_range']['enable_gzip'][1] = '启用';
$_LANG['cfg_range']['enable_gzip'][0] = '禁用';
$_LANG['cfg_range']['price_format'][0] = '不处理';
$_LANG['cfg_range']['price_format'][1] = '保留不为 0 的尾数';
$_LANG['cfg_range']['price_format'][2] = '不四舍五入，保留一位小数';
$_LANG['cfg_range']['price_format'][3] = '不四舍五入，不保留小数';
$_LANG['cfg_range']['price_format'][4] = '先四舍五入，保留一位小数';
$_LANG['cfg_range']['price_format'][5] = '先四舍五入，不保留小数 ';
$_LANG['cfg_range']['sort_order_type'][0] = '按上架时间';
$_LANG['cfg_range']['sort_order_type'][1] = '按商品价格';
$_LANG['cfg_range']['sort_order_type'][2] = '按最后更新时间';
$_LANG['cfg_range']['sort_order_method'][0] = '降序排列';
$_LANG['cfg_range']['sort_order_method'][1] = '升序排列';
$_LANG['cfg_range']['show_order_type'][0] = '列表显示';
$_LANG['cfg_range']['show_order_type'][1] = '表格显示';
$_LANG['cfg_range']['show_order_type'][2] = '文本显示';
$_LANG['cfg_range']['help_open'][0] = '关闭';
$_LANG['cfg_range']['help_open'][1] = '打开';
$_LANG['cfg_range']['page_style'][0] = '默认经典';
$_LANG['cfg_range']['page_style'][1] = '流行页码';
$_LANG['cfg_range']['anonymous_buy'][0] = '不允许';
$_LANG['cfg_range']['anonymous_buy'][1] = '允许';
$_LANG['cfg_range']['one_step_buy'][0] = '否';
$_LANG['cfg_range']['one_step_buy'][1] = '是';
$_LANG['cfg_range']['show_goodssn'][1] = '显示';
$_LANG['cfg_range']['show_goodssn'][0] = '不显示';
$_LANG['cfg_range']['show_brand'][1] = '显示';
$_LANG['cfg_range']['show_brand'][0] = '不显示';
$_LANG['cfg_range']['show_goodsweight'][1] = '显示';
$_LANG['cfg_range']['show_goodsweight'][0] = '不显示';
$_LANG['cfg_range']['show_goodsnumber'][1] = '显示';
$_LANG['cfg_range']['show_goodsnumber'][0] = '不显示';
$_LANG['cfg_range']['show_addtime'][1] = '显示';
$_LANG['cfg_range']['show_addtime'][0] = '不显示';
$_LANG['cfg_range']['show_rank_price'][1] = '显示';
$_LANG['cfg_range']['show_rank_price'][0] = '不显示';
$_LANG['cfg_range']['show_give_integral'][1] = '显示';
$_LANG['cfg_range']['show_give_integral'][0] = '不显示';
$_LANG['cfg_range']['goodsattr_style'][1] = '单选按钮';
$_LANG['cfg_range']['goodsattr_style'][0] = '下拉列表';
$_LANG['cfg_range']['show_marketprice'][1] = '显示';
$_LANG['cfg_range']['show_marketprice'][0] = '不显示';
$_LANG['cfg_range']['sms_order_placed'][1] = '发短信';
$_LANG['cfg_range']['sms_order_placed'][0] = '不发短信';
$_LANG['cfg_range']['sms_order_payed'][1] = '发短信';
$_LANG['cfg_range']['sms_order_payed'][0] = '不发短信';
$_LANG['cfg_range']['sms_order_shipped'][1] = '发短信';
$_LANG['cfg_range']['sms_order_shipped'][0] = '不发短信';
$_LANG['cfg_range']['cron_method'][0] = '否';
$_LANG['cfg_range']['cron_method'][1] = '是';
$_LANG['cfg_range']['enable_order_check'][0] = '否';
$_LANG['cfg_range']['enable_order_check'][1] = '是';
$_LANG['cfg_range']['enable_order_check'][0] = '否';
$_LANG['cfg_range']['enable_order_check'][1] = '是';
$_LANG['cfg_range']['stock_dec_time'][0] = '发货时';
$_LANG['cfg_range']['stock_dec_time'][1] = '下订单时';
$_LANG['cfg_range']['sales_volume_time'][0] = '付款时';
$_LANG['cfg_range']['sales_volume_time'][1] = '发货时';
$_LANG['cfg_range']['send_service_email'][0] = '否';
$_LANG['cfg_range']['send_service_email'][1] = '是';
$_LANG['cfg_range']['show_goods_in_cart'][1] = '只显示文字';
$_LANG['cfg_range']['show_goods_in_cart'][2] = '只显示图片';
$_LANG['cfg_range']['show_goods_in_cart'][3] = '显示文字与图片';
$_LANG['cfg_range']['show_attr_in_cart'][0] = '否';
$_LANG['cfg_range']['show_attr_in_cart'][1] = '是';
$_LANG['cfg_range']['shop_reg_closed'][0] = '否';
$_LANG['cfg_range']['shop_reg_closed'][1] = '是';
$_LANG['cfg_range']['timezone'][-12] = '(GMT -12:00) Eniwetok, Kwajalein';
$_LANG['cfg_range']['timezone'][-11] = '(GMT -11:00) Midway Island, Samoa';
$_LANG['cfg_range']['timezone'][-10] = '(GMT -10:00) Hawaii';
$_LANG['cfg_range']['timezone'][-9] = '(GMT -09:00) Alaska';
$_LANG['cfg_range']['timezone'][-8] = '(GMT -08:00) Pacific Time (US &amp; Canada), Tijuana';
$_LANG['cfg_range']['timezone'][-7] = '(GMT -07:00) Mountain Time (US &amp; Canada), Arizona';
$_LANG['cfg_range']['timezone'][-6] = '(GMT -06:00) Central Time (US &amp; Canada), Mexico City';
$_LANG['cfg_range']['timezone'][-5] = '(GMT -05:00) Eastern Time (US &amp; Canada), Bogota, Lima, Quito';
$_LANG['cfg_range']['timezone'][-4] = '(GMT -04:00) Atlantic Time (Canada), Caracas, La Paz';
$_LANG['cfg_range']['timezone']['-3.5'] = '(GMT -03:30) Newfoundland';
$_LANG['cfg_range']['timezone'][-3] = '(GMT -03:00) Brassila, Buenos Aires, Georgetown, Falkland Is';
$_LANG['cfg_range']['timezone'][-2] = '(GMT -02:00) Mid-Atlantic, Ascension Is., St. Helena';
$_LANG['cfg_range']['timezone'][-1] = '(GMT -01:00) Azores, Cape Verde Islands';
$_LANG['cfg_range']['timezone'][0] = '(GMT) Casablanca, Dublin, Edinburgh, London, Lisbon, Monrovia';
$_LANG['cfg_range']['timezone'][1] = '(GMT +01:00) Amsterdam, Berlin, Brussels, Madrid, Paris, Rome';
$_LANG['cfg_range']['timezone'][2] = '(GMT +02:00) Cairo, Helsinki, Kaliningrad, South Africa';
$_LANG['cfg_range']['timezone'][3] = '(GMT +03:00) Baghdad, Riyadh, Moscow, Nairobi';
$_LANG['cfg_range']['timezone']['3.5'] = '(GMT +03:30) Tehran';
$_LANG['cfg_range']['timezone'][4] = '(GMT +04:00) Abu Dhabi, Baku, Muscat, Tbilisi';
$_LANG['cfg_range']['timezone']['4.5'] = '(GMT +04:30) Kabul';
$_LANG['cfg_range']['timezone'][5] = '(GMT +05:00) Ekaterinburg, Islamabad, Karachi, Tashkent';
$_LANG['cfg_range']['timezone']['5.5'] = '(GMT +05:30) Bombay, Calcutta, Madras, New Delhi';
$_LANG['cfg_range']['timezone']['5.75'] = '(GMT +05:45) Katmandu';
$_LANG['cfg_range']['timezone'][6] = '(GMT +06:00) Almaty, Colombo, Dhaka, Novosibirsk';
$_LANG['cfg_range']['timezone']['6.5'] = '(GMT +06:30) Rangoon';
$_LANG['cfg_range']['timezone'][7] = '(GMT +07:00) Bangkok, Hanoi, Jakarta';
$_LANG['cfg_range']['timezone'][8] = '(GMT +08:00) Beijing, Hong Kong, Perth, Singapore, Taipei';
$_LANG['cfg_range']['timezone'][9] = '(GMT +09:00) Osaka, Sapporo, Seoul, Tokyo, Yakutsk';
$_LANG['cfg_range']['timezone']['9.5'] = '(GMT +09:30) Adelaide, Darwin';
$_LANG['cfg_range']['timezone'][10] = '(GMT +10:00) Canberra, Guam, Melbourne, Sydney, Vladivostok';
$_LANG['cfg_range']['timezone'][11] = '(GMT +11:00) Magadan, New Caledonia, Solomon Islands';
$_LANG['cfg_range']['timezone'][12] = '(GMT +12:00) Auckland, Wellington, Fiji, Marshall Island';
$_LANG['cfg_range']['upload_size_limit'][-1] = '服务默认设置';
$_LANG['cfg_range']['upload_size_limit'][0] = '0KB';
$_LANG['cfg_range']['upload_size_limit'][64] = '64KB';
$_LANG['cfg_range']['upload_size_limit'][128] = '128KB';
$_LANG['cfg_range']['upload_size_limit'][256] = '256KB';
$_LANG['cfg_range']['upload_size_limit'][512] = '512KB';
$_LANG['cfg_range']['upload_size_limit'][1024] = '1MB';
$_LANG['cfg_range']['upload_size_limit'][2048] = '2MB';
$_LANG['cfg_range']['upload_size_limit'][4096] = '4MB';
$_LANG['cfg_range']['visit_stats']['on'] = '开启';
$_LANG['cfg_range']['visit_stats']['off'] = '关闭';
$_LANG['rewrite_confirm_apache'] = 'URL Rewrite 功能要求您的 Web Server 必须是 Apache，\\n并且起用了 rewrite 模块。\\n同时请您确认是否已经将htaccess.txt文件重命名为.htaccess。\\n如果服务器上还有其他的重写规则请去掉注释,请将RewriteBase行的注释去掉,并将路径设置为服务器请求的绝对路径';
$_LANG['rewrite_confirm_iis'] = 'URL Rewrite 功能要求您的 Web Server 必须安装IIS，\\n并且起用了 ISAPI Rewrite 模块。\\n如果您使用的是ISAPI Rewrite商业版，请您确认是否已经将httpd.txt文件重命名为httpd.ini。如果您使用的是ISAPI Rewrite免费版，请您确认是否已经将httpd.txt文件内的内容复制到ISAPI Rewrite安装目录中httpd.ini里。';
$_LANG['gzip_confirm'] = 'GZip 功能需要您的服务器支持 zlib 扩展库。\\n如果您发现开启Gzip后页面出现乱码，可能是您的服务器已经开启了Gzip，您不需要在 DSC 中再次开启。';
$_LANG['retain_original_confirm'] = '如果您不保留商品原图，在“图片批量处理”的时候，\\n将不会重新生成不包含原图的商品图片。请慎重使用该功能！';
$_LANG['msg_invalid_file'] = '您上传了一个非法的文件类型。该文件名为：%s';
$_LANG['msg_upload_failed'] = '上传文件 %s 失败，请检查 %s 目录是否可写。';
$_LANG['smtp_ssl_confirm'] = '此功能要求您的php必须支持OpenSSL模块, 如果您要使用此功能，请联系您的空间商确认支持此模块';
$_LANG['cfg_name']['mail_service'] = '邮件服务';
$_LANG['cfg_desc']['mail_service'] = '如果您选择了采用服务器内置的 Mail 服务，您不需要填写下面的内容。';
$_LANG['cfg_range']['mail_service'][0] = '采用服务器内置的 Mail 服务';
$_LANG['cfg_range']['mail_service'][1] = '采用其他的 SMTP 服务';
$_LANG['cfg_name']['smtp_host'] = '发送邮件服务器地址(SMTP)';
$_LANG['cfg_name']['smtp_port'] = '服务器端口';
$_LANG['cfg_name']['smtp_user'] = '邮件发送帐号';
$_LANG['cfg_name']['smtp_pass'] = '帐号密码';
$_LANG['cfg_name']['smtp_mail'] = '邮件回复地址';
$_LANG['cfg_name']['mail_charset'] = '邮件编码';
$_LANG['cfg_name']['smtp_ssl'] = '邮件服务器是否要求加密连接(SSL)';
$_LANG['cfg_range']['smtp_ssl'][0] = '否';
$_LANG['cfg_range']['smtp_ssl'][1] = '是';
$_LANG['mail_settings_note'] = '<li>如果您的服务器支持 Mail 函数（具体信息请咨询您的空间提供商）。我们建议您使用系统的 Mail 函数。</li><li>当您的服务器不支持 Mail 函数的时候您也可以选用 SMTP 作为邮件服务器。</li>';
$_LANG['save_success'] = '保存商店设置成功。';
$_LANG['mail_save_success'] = '邮件服务器设置成功。';
$_LANG['sendemail_success'] = '恭喜！测试邮件已成功发送到 ';
$_LANG['sendemail_false'] = '邮件发送失败，请检查您的邮件服务器设置！';
$_LANG['seller_save_success'] = '店铺设置成功。';
$_LANG['js_languages']['smtp_host_empty'] = '您没有填写邮件服务器地址!';
$_LANG['js_languages']['smtp_port_empty'] = '您没有填写服务器端口!';
$_LANG['js_languages']['reply_email_empty'] = '您没有填写邮件回复地址!';
$_LANG['js_languages']['test_email_empty'] = '您没有填写发送测试邮件的地址!';
$_LANG['js_languages']['email_address_same'] = '邮件回复地址与发送测试邮件的地址不能相同!';
$_LANG['cfg_name']['wap'] = 'WAP设置';
$_LANG['cfg_name']['wap_config'] = '是否使用WAP功能';
$_LANG['cfg_range']['wap_config'][0] = '关闭';
$_LANG['cfg_range']['wap_config'][1] = '开启';
$_LANG['cfg_name']['wap_logo'] = 'WAP LOGO上传';
$_LANG['cfg_desc']['wap_logo'] = '为了更好地兼容各种手机类型，LOGO 最好为png图片';
$_LANG['cfg_name']['wap_index_pro'] = '是否开启首页APP广告位';
$_LANG['cfg_range']['wap_index_pro'][1] = '开启';
$_LANG['cfg_range']['wap_index_pro'][0] = '关闭';
$_LANG['cfg_name']['use_lbs'] = '城市定位';
$_LANG['cfg_range']['use_lbs'][0] = '关闭';
$_LANG['cfg_range']['use_lbs'][1] = '开启';
$_LANG['cfg_desc']['use_lbs'] = '是否开启首页城市定位功能';
$_LANG['cfg_desc']['wap_config'] = '此功能只支持简体中文且只在中国大陆区有效';
$_LANG['cfg_name']['recommend_order'] = '推荐商品排序';
$_LANG['cfg_desc']['recommend_order'] = '推荐排序适合少量推荐，随机显示大量推荐';
$_LANG['cfg_range']['recommend_order'][0] = '推荐排序';
$_LANG['cfg_range']['recommend_order'][1] = '随机显示';
$_LANG['invoice_type'] = '类型';
$_LANG['invoice_rate'] = '税率（％）';
$_LANG['back_shop_config'] = '返回商店设置';
$_LANG['back_mail_settings'] = '返回邮件服务器设置';
$_LANG['mail_settings'] = '邮件服务器设置';
$_LANG['back_seller_settings'] = '返回店铺设置';
$_LANG['sms_success'] = '短信设置成功。';
$_LANG['back_sms_settings'] = '返回短信设置';
$_LANG['cfg_name']['two_code_logo'] = '二维码中间LOGO';
$_LANG['cfg_name']['two_code_links'] = '网站域名';
$_LANG['cfg_name']['two_code_mouse'] = '提示文字';
$_LANG['cfg_desc']['two_code_mouse'] = '提示文字为鼠标放在二维码上面的出现的文字提示';
$_LANG['cfg_desc']['two_code_logo'] = '如果不上传logo将使用每个商品的图片作为logo';
$_LANG['cfg_desc']['two_code_links'] = '域名为商品跳转的地址，系统会自动匹配每个商品的id。域名格式：http://wap.xxxxx.com';
$_LANG['cfg_name']['two_code'] = '商品二维码';
$_LANG['cfg_range']['two_code'][1] = '开启';
$_LANG['cfg_range']['two_code'][0] = '关闭';
$_LANG['delete_two_logo'] = '你确认要删除LOGO图片吗？';
$_LANG['delete_two_text'] = '删除LOGO图片';
$_LANG['sms_url'] = '<a href="' . $url . '" target="_blank">点此注册手机短信服务</a>';
$_LANG['cfg_name']['category_load_type'] = '商品加载方式';
$_LANG['cfg_range']['category_load_type'][0] = '默认分页';
$_LANG['cfg_range']['category_load_type'][1] = 'AJAX瀑布流';
$_LANG['cfg_desc']['category_load_type'] = '设置分类/搜索/促销活动（团购活动、积分商城、夺宝奇兵、拍卖活动等）页下商品加载的方式';
$_LANG['cfg_name']['grade_apply_time'] = '店铺等级/模板未支付申请时效性';
$_LANG['cfg_desc']['grade_apply_time'] = '店铺等级订单到期后状态修改为无效，模板订单到期后直接删除。默认（一）。单位（天）';
$_LANG['cfg_name']['apply_options'] = '店铺升级剩余预付款处理';
$_LANG['cfg_range']['apply_options'][1] = '补差价，退款';
$_LANG['cfg_range']['apply_options'][2] = '补差价，不退款';
$_LANG['cfg_name']['commission_model'] = '店铺佣金模式';
$_LANG['cfg_range']['commission_model'][0] = '店铺佣金比例';
$_LANG['cfg_range']['commission_model'][1] = '分类佣金比例';
$_LANG['cfg_name']['commission_percent'] = '固定佣金百分比';
$_LANG['cfg_desc']['commission_percent'] = '% （店铺统一佣金比例）';
$_LANG['cfg_name']['merchants_prefix'] = '店铺密码前缀';
$_LANG['cfg_desc']['merchants_prefix'] = '店铺入驻成功后，默认密码前缀';
$_LANG['cfg_name']['login_limited_num'] = '登录错误限制次数';
$_LANG['cfg_name']['nav_cat_model'] = '导航分类模式';
$_LANG['cfg_range']['nav_cat_model'][1] = '只显示顶级分类';
$_LANG['cfg_range']['nav_cat_model'][0] = '显示顶级分类和次级分类';
$_LANG['cfg_name']['index_article_cat'] = '首页文章栏目';
$_LANG['cfg_desc']['index_article_cat'] = '首页轮播图右侧文章栏目，请填写文章分类ID，多个分类使用半角逗号（,）分隔（注：2017模板使用）';
$_LANG['cfg_name']['marticle_index'] = '入驻首页底部文章';
$_LANG['cfg_desc']['marticle_index'] = '入驻首页底部文章，文本框中填写文章ID（格式：1,2,3 注：逗号为英文逗号）';
$_LANG['cfg_name']['openvisual'] = '是否启用首页可视化';
$_LANG['cfg_range']['openvisual'][0] = '关闭';
$_LANG['cfg_range']['openvisual'][1] = '启用';
$_LANG['cfg_desc']['openvisual'] = '开启首页可视化后前台首页将调用可视化模板，如果没有可视化模板则继续调用默认模板';
$_LANG['cfg_name']['bonus_adv'] = '是否开启首页弹出广告';
$_LANG['cfg_range']['bonus_adv'][0] = '关闭';
$_LANG['cfg_range']['bonus_adv'][1] = '启用';
$_LANG['cfg_desc']['bonus_adv'] = '可视化首页弹出广告在可视化装修中设置，默认模板弹出在广告位‘首页天降红包’中添加';
$_LANG['cfg_name']['wholesale_user_rank'] = '等级会员是否开启批发求购单';
$_LANG['cfg_range']['wholesale_user_rank'][0] = '关闭';
$_LANG['cfg_range']['wholesale_user_rank'][1] = '启用';
$_LANG['cfg_name']['is_illegal'] = '是否开启举报功能';
$_LANG['cfg_range']['is_illegal'][0] = '关闭';
$_LANG['cfg_range']['is_illegal'][1] = '启用';
$_LANG['cfg_name']['report_handle'] = '恶意举报处罚措施';
$_LANG['cfg_range']['report_handle'][0] = '关闭';
$_LANG['cfg_range']['report_handle'][1] = '开启';
$_LANG['cfg_desc']['report_handle'] = '开启该配置后，恶意举报的会员一定时间内将剥夺举报权利！';
$_LANG['cfg_name']['report_time'] = '举报时效';
$_LANG['cfg_desc']['report_time'] = '开启该配置后，举报将在到期后将修改状态为无效举报（单位：天）';
$_LANG['cfg_name']['report_handle_time'] = '恶意举报处罚时间';
$_LANG['cfg_desc']['report_handle_time'] = '审核为恶意举报后，该会员将冻结举报权限天数（单位：天）';
$_LANG['cfg_name']['receipt_time'] = '订单投诉时效性';
$_LANG['cfg_desc']['receipt_time'] = '确认收货后多少天内可申请交易纠纷，默认为15天（单位：天）';
$_LANG['cfg_name']['virtual_order'] = '是否显示首页订单提示轮播';
$_LANG['cfg_range']['virtual_order'][0] = '不显示';
$_LANG['cfg_range']['virtual_order'][1] = '显示';
$_LANG['cfg_name']['virtual_limit_nim'] = '是否显示写入虚拟已参团人数';
$_LANG['cfg_range']['virtual_limit_nim'][0] = '不显示';
$_LANG['cfg_range']['virtual_limit_nim'][1] = '显示';
$_LANG['cfg_name']['wholesale_article_cat'] = '批发首页文章栏目';
$_LANG['cfg_desc']['wholesale_article_cat'] = '批发首页轮播图右侧文章栏目，请填写文章分类ID，多个分类使用半角逗号（,）分隔（注：2017模板使用）';
$_LANG['cfg_name']['goods_base'] = '基本设置';
$_LANG['cfg_name']['goods_display'] = '显示设置';
$_LANG['cfg_name']['goods_page'] = '页面设置';
$_LANG['cfg_name']['goods_picture'] = '图片设置';
$_LANG['cfg_name']['template_pay_type'] = '重复付费设置';
$_LANG['cfg_range']['template_pay_type'][0] = '开启';
$_LANG['cfg_range']['template_pay_type'][1] = '关闭';
$_LANG['cfg_desc']['template_pay_type'] = '开启后，重复购买模板时需要再次付费。关闭后，重复购买的则直接上传为商家模板，无需再次付费';
$_LANG['cfg_name']['deposit_fee'] = '会员提现手续';
$_LANG['cfg_desc']['deposit_fee'] = '%';
$_LANG['cfg_name']['activation_number_type'] = '被拒退换货激活设置';
$_LANG['cfg_desc']['activation_number_type'] = '退换货如果被拒，会员可以重新激活次数，默认为：2次';
$_LANG['cfg_name']['register_article_id'] = '会员注册协议文章ID';
$_LANG['cfg_name']['seller_index_article'] = '商家后台首页文章分类';
$_LANG['cfg_desc']['seller_index_article'] = '商家帮助文章分类ID ';
$_LANG['cfg_name']['buyer_cash'] = '买家提现最低金额';
$_LANG['cfg_desc']['buyer_cash'] = '设置买家提现最低金额，0表示不限';
$_LANG['cfg_name']['buyer_recharge'] = '买家充值最低金额';
$_LANG['cfg_desc']['buyer_recharge'] = '设置买买家充值最低金额，0表示不限';

?>
