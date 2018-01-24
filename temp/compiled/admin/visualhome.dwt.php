<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <title>首页装修</title>
    
	<link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/layoutit.css" />
    <link rel="stylesheet" type="text/css" href="css/layer.css" />
    <link rel="stylesheet" type="text/css" href="css/dsc_visual.css" />
    <link rel="stylesheet" type="text/css" href="css/color.css" />
    <link rel="stylesheet" type="text/css" href="css/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="css/purebox.css" />
    <link rel="stylesheet" type="text/css" href="js/spectrum-master/spectrum.css" />
    <link rel="stylesheet" type="text/css" href="../js/perfect-scrollbar/perfect-scrollbar.min.css" />
    <?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery-1.9.1.min.js,../js/jquery.json.js,../js/transport_jquery.js,../js/perfect-scrollbar/perfect-scrollbar.min.js,../js/jquery.nyroModal.js,../js/plupload.full.min.js,../js/jquery.SuperSlide.2.1.1.js,../js/jquery.form.js,../js/lib_ecmobanFunc.js,../js/visualization.js,../js/jquery.cookie.js,spectrum-master/spectrum.js,common.js,jquery-ui/jquery-ui.min.js,layer.js')); ?>
    
    <!--[if lt IE 9]>
	<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    <!--[if lte IE 8]>
        <script type="Text/Javascript" language="JavaScript">
            $(function(){
                pb({
                    id:'notIe',
                    content:'<div class="noContent"><div class="noText"><p class="p1">您当前浏览器版本过低</p><p class="p1">不支持浏览</p><p class="p2">建议使用</p><p class="p3">谷歌、火狐、360极速、IE9以上版本</p></div></div>',
                    drag:false,
                    head:false,
                    cl_cBtn:false,
                    width:316,
                    height:376,
                    ok_title:"确定",
                    onOk:function(){
                        location.href = "../index.php";
                    }
                });
                
                $("#pb-mask").css('cssText','position: fixed; width: 100%; height: 100%; top: 0px; left: 0px; opacity: 1; overflow: hidden; z-index: 2000; background-color:#fff;')
            });
        </script>
    <![endif]-->
    <script type="text/javascript">
    //这里把JS用到的所有语言都赋值到这里
    <?php $_from = $this->_var['lang']['js_languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
</head>
<body>
    <div class="main-wrapper">
        <div class="dp_leftcolumn">
            <ul class="tab-bar">
                <li class="modules">
                    <div class="wrap">
                        <div class="left-line"></div>
                        <i class="iconfont icon-template"></i>
                        <span>模板</span>
                        <b class="b-small"></b>
                    </div>
                </li>
                <li class="page-content">
                    <div class="wrap">
                        <div class="left-line"></div>
                        <i class="iconfont icon-visual-con"></i>
                        <span>中间</span>
                        <b class="b-small"></b>
                    </div>
                </li>
                <li class="page-head">
                    <div class="wrap">
                        <div class="left-line"></div>
                        <i class="iconfont icon-store-alt"></i>
                        <span>弹窗广告</span>
                        <b class="b-small"></b>
                    </div>
                </li>
            </ul>
            <ul class="toolbar">
                <li class="li modules-slide">
                    <b class="iconfont icon-cha" ectype="close"></b>
                    <div class="inside">
                        <p class="red">选择所需模块，并拖动至相应位置</p>                        
                    </div>
                    <div class="modules-box">
                        <div class="modules-wrap modules-wrap-current">
                            <div class="head" ectype="head"><span>基础模块</span><i class="iconfont icon-xia"></i></div>
                            <div class="module-list clearfix">
                                <div class="visual-item lyrow lunbotu" data-mode="lunbo" data-purebox="adv" data-li="1" data-length="5" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_01.png" /></span>
                                            <span class="txt">图片轮播</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="banner home-banner">
                                        	<div class="bd">
                                            	<ul data-type="range">
                                                    <li><a href="#"><img src="../data/gallery_album/visualDefault/shop_banner_pic.jpg"></a></li>
                                                </ul>
                                            </div>
                                            <div class="hd"><ul></ul></div>
                                            <div class="vip-outcon">
                                                <div class="vip-con">
                                                    <div class="insertVipEdit" data-mode="insertVipEdit">
                                                        <div class="userVip-info" ectype="user_info">
                                                            <div class="avatar">
                                                                <a href="user.php?act=profile"><img src="../themes/ecmoban_dsc2017/images/avatar.png"></a>
                                                            </div>
                                                            <div class="login-info">
                                                                <span>Hi，Welcome to <?php echo $this->_var['shop_name']; ?>!</span>
                                                                <a href="user.php" class="login-button">Sign In</a>
                                                                <a href="merchants.php" target="_blank" class="register_button">我要开店</a>
                                                            </div>
                                                        </div>
                                                        <div class="vip-item">
                                                            <div class="tit">
                                                                <a href="javascript:void(0);" class="tab_head_item on">网店信息</a>
                                                                <a href="javascript:void(0);" class="tab_head_item">网店帮助分类</a>
                                                            </div>
                                                            <div class="con">
                                                                <ul>
                                                                    <li><a href="article.php?id=5" target="_blank">免责条款</a></li>
                                                                    <li><a href="article.php?id=4" target="_blank">联系我们</a></li>
                                                                    <li><a href="article.php?id=3" target="_blank">咨询热点</a></li>
                                                                </ul>
                                                                <ul style="display: none;">
                                                                    <li><a href="article.php?id=61" target="_blank">堂主的一封信：大商创被同行抄袭 证明我们已获得初步成功！</a></li>
                                                                    <li><a href="article.php?id=58" target="_blank">大商创多用户商城系统版本升级 1.2版正式发布</a></li>
                                                                    <li><a href="article.php?id=64" target="_blank">模板堂问答系统“问答堂”正式上线，产品相关问答一搜全知道</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="vip-item">
                                                            <div class="tit">My Panel</div>
                                                            <div class="kj_con">
                                                                <div class="item item_1">
                                                                    <a href="history_list.php" target="_blank">
                                                                        <i class="iconfont icon-browse"></i>
                                                                        <span>我的浏览</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_2">
                                                                    <a href="user.php?act=collection_list" target="_blank">
                                                                        <i class="iconfont icon-zan-alt"></i>
                                                                        <span>我的收藏</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_3">
                                                                    <a href="user.php?act=order_list" target="_blank">
                                                                        <i class="iconfont icon-order"></i>
                                                                        <span>我的订单</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_4">
                                                                    <a href="user.php?act=account_safe" target="_blank">
                                                                        <i class="iconfont icon-password-alt"></i>
                                                                        <span>账号安全</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_5">
                                                                    <a href="user.php?act=affiliate" target="_blank">
                                                                        <i class="iconfont icon-share-alt"></i>
                                                                        <span>我要分享</span>
                                                                    </a>
                                                                </div>
                                                                <div class="item item_6">
                                                                    <a href="merchants.php" target="_blank">
                                                                        <i class="iconfont icon-settled"></i>
                                                                        <span>商家入驻</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="setup_box" data-html="not">
                                                        <div class="barbg"></div>
                                                        <a href="javascript:void(0);" class="move-edit" ectype='vipEdit'><i class="iconfont icon-edit1"></i>编辑</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-need" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/8.png" /></span>
                                            <span class="txt">首页广告</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="need-channel clearfix" id="h-need" data-type="range" data-lift="">
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                            <div class="channel-column" style="background:url(../data/gallery_album/visualDefault/ad_03_pic_02.jpg) no-repeat;">
                                                <div class="column-title">
                                                	<h3>主标题</h3>
                                                    <p>副标题</p>
                                                </div>
                                                <div class="column-img"><img src="../data/gallery_album/visualDefault/homeIndex_008.png"></div>
                                                <a href="#" target="_blank" class="column-btn">去看看</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-promo" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/5.png" /></span>
                                            <span class="txt">促销活动</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="promoWarp clearfix" id="h-promo" data-type="range" data-lift="">
                                            <div class="tit" style="background-color:#ed5f5f;">
                                                <h3>主标题</h3>
                                                <span>此标题</span>
                                                <i class="titIcon"></i>
                                            </div>
                                            <ul>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="opacity_img">
                                                    <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                    <div class="info">
                                                        <div class="price">￥370.50</div>
                                                        <div class="name"><a href="#" target="_blank">夏季短袖连衣裙新款打底裙碎</a></div>
                                                        <div class="time" ectype="time">
                                                            <span class="label">剩余时间：</span>
                                                            <span class="days">00</span>
                                                            <em>：</em>
                                                            <span class="hours">00</span>
                                                            <em>：</em>
                                                            <span class="minutes">00</span>
                                                            <em>：</em>
                                                            <span class="seconds">00</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200 not-draggable" data-mode="h-sepmodule" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/6.png" /></span>
                                            <span class="txt">活动栏</span>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="sepmodule clearfix" id="h-sepmodule" data-type="range" data-lift="">
                                            <div class="module" ectype="module">
                                                <div class="sepmodule_warp" data-hierarchy='1'>
                                                    <div class="sepmod-left" style="background-color:#9893f4;">
                                                        <div class="tit">
                                                            <h3>主标题</h3>
                                                            <div class="subtit"><em style="background-color:#9893f4;">次标题<i></i></em><span></span></div>
                                                            <i class="tit_icon"></i>
                                                        </div>
                                                        <div class="opacity_img sepmod-goods">
                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                            <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            <div class="price">￥0.00</div>
                                                        </div>
                                                        <i class="titIcon"></i>
                                                    </div>
                                                    <div class="sepmod-right">
                                                        <ul>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="opacity_img sepmod-goods">
                                                                <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                                </div>
                                            </div>
                                            <div class="module fr" ectype="module">
                                                <div class="sepmodule_warp" data-hierarchy='2'>
                                                    <div class="sepmod-left" style="background-color:#9893f4;">
                                                        <div class="tit">
                                                            <h3>主标题</h3>
                                                            <div class="subtit"><em style="background-color:#9893f4;">次标题<i></i></em><span></span></div>
                                                            <i class="tit_icon"></i>
                                                        </div>
                                                        <div class="sepmod-goods">
                                                            <div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                            <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            <div class="price">￥0.00</div>
                                                        </div>
                                                        <i class="titIcon"></i>
                                                    </div>
                                                    <div class="sepmod-right">
                                                        <ul>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                            <li class="sepmod-goods">
                                                                <div class="img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
                                                                <div class="name"><a href="#" target="_blank">请选择商品</a></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                                                <div class="setup_box">
                                                    <div class="barbg"></div>
                                                    <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                                    <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                                    <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                                    <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200 brandList" data-mode="h-brand" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/7.png" /></span>
                                            <span class="txt">首页品牌</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="brand-channel clearfix" id="h-brand" data-type="range" data-lift="">
                                        	<div class="home-brand-adv slide_lr_info"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_007.jpg" class="slide_lr_img"></a></div>
                                            <div ectype="homeBrand">
                                                <div class="brand-list" id="recommend_brands">
                                                    <ul>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                        <li>
                                                            <div class="brand-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></div>
                                                        </li>
                                                    </ul>
                                                    <input type="hidden" name="user_id" value="0">
                                                    <a href="javascript:void(0);" ectype="changeBrand" class="refresh-btn"><i class="iconfont icon-rotate-alt"></i><span>换一批</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-streamer" data-purebox="adv" ectype="visualItme" data-length="1">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/8.png" /></span>
                                            <span class="txt">横幅广告</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="adv_module">
                                            <div class="hd"><ul></ul></div>
                                            <div class="bd">
                                                <ul data-type="range">
                                                    <li><a href=""><img src="../data/gallery_album/visualDefault/ad_01_pic.jpg"></a></li>
                                                </ul>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-master" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/9.png" /></span>
                                            <span class="txt">达人专区</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="master-channel" id="h-master" data-type="range" data-lift="">
                                            <div class="ftit"><h3>达人专区</h3></div>
                                            <div class="master-con">
                                                <div class="m-c-item m-c-i-1" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">GO</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-2" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">GO</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-3" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">GO</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-4" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">GO</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                                <div class="m-c-item m-c-i-5" style="background:url(../data/gallery_album/visualDefault/homeIndex_003.jpg) center center no-repeat;">
                                                    <div class="m-c-main">
                                                        <div class="title">
                                                            <h3>主标题</h3>
                                                            <span>次标题</span>
                                                        </div>
                                                        <a href="http://" class="m-c-btn" target="_blank">GO</a>
                                                    </div>
                                                    <div class="img"><a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_009.png"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="h-storeRec" data-purebox="homeAdv" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/10.png" /></span>
                                            <span class="txt">推荐店铺</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="store-channel" id="h-storeRec" data-type="range" data-lift="">
                                            <div class="ftit"><h3>推荐店铺</h3></div>
                                            <div class="rec-store-list">
                                            	<div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                                <div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                                <div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                            	<div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="rec-store-item opacity_img">
                                                    <a href="#" target="_blank">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/homeIndex_005.jpg"></div>
                                                        <div class="info">
                                                            <div class="s-logo"><div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_001.jpg"></div></div>
                                                            <div class="s-title">
                                                            	<div class="tit">主标题</div>
                                                                <div class="ui-tit">次标题</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow w1200" data-mode="guessYouLike" data-purebox="goods" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">还没逛够</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="lift-channel clearfix" id="guessYouLike" data-type="range" data-lift="">
                                            <div class="goodstitle" data-goodsTitle='title'>
                                                <div class="ftit"><h3>还没逛够</h3></div>
                                            </div>
                                            <ul>
                                            	<li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="opacity_img">
                                                	<a href="#">
                                                        <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                        <div class="p-name" title="">商品名称商品名称商品名称...</div>
                                                        <div class="p-price">
                                                            <div class="shop-price"><em>¥</em>0.00</div>
                                                            <div class="original-price"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="visual-item lyrow" data-mode="custom" data-purebox="cust" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_04.png" /></span>
                                            <span class="txt">自定义区</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="custom" data-type="range" data-lift=""><div class="default ui-draggable ui-box-display">自定义内容，可以用来展示店铺的特色区域。</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modules-wrap modules-wrap-current mt20">
                            <div class="head" ectype="head"><span>楼层模块</span><i class="iconfont icon-xia"></i></div>
                            <div class="module-list clearfix">
								<!--楼层模板一-->
                                <div class="visual-item lyrow w1200" data-mode="homeFloor" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">楼层一</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorOne floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<i class="box_hd_arrow"></i>
    												<i class="box_hd_dec"></i>
                                                	<div class="hd-tit">主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">
                                                            	<span>NEW ARRIVAL</span>
                                                                <i class="arrowImg"></i>
                                                            </li>
                                                            <li ectype="floor_cat_content">
                                                            	<span>次级分类</span>
                                                                <i class="arrowImg"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd bd-mode-01">
                                                	<div class="bd-left">
                                                    	<div class="floor-left-slide">
                                                        	<div class="bd">
                                                            	<ul>
                                                                	<li><a href="#"><img src="../data/gallery_album/visualDefault/homeIndex_002.jpg" width="232" height="570"></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="hd"><ul></ul></div>
                                                        </div>
                                                        <div class="floor-left-adv">
                                                        	<a href="http://" class="mb10" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_004.jpg" width="232" height="280"></a>
                                                            <a href="http://" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_004.jpg" width="232" height="280"></a>
                                                        </div>
                                                    </div>
                                                    <div class="bd-right">
                                                    	<div class="floor-tabs-content clearfix">
                                                        	<div class="f-r-main f-r-m-adv">
                                                            	<div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_004.jpg">
                                                                    </a>
                                                                </div>
                                                                <div class="f-r-m-item f-r-m-i-double">
                                                                	<a href="http://" target="_blank">
                                                                        <div class="title">
                                                                            <h3>主标题</h3>
                                                                            <span>次标题</span>
                                                                        </div>
                                                                        <img src="../data/gallery_album/visualDefault/homeIndex_006.jpg">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="floor-fd">
                                                    <div class="floor-fd-brand clearfix">
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
								<!--楼层模板二-->
                                <div class="visual-item lyrow w1200 not-draggable" data-mode="homeFloorModule" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">楼层二</span>
                                        </div>
                                    </div>
                                    <div class="module floormodule mr8" ectype="module">
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                        <div class="view" data-hierarchy='1'>
                                            <div class="floor-content" data-type="range">
                                                <div class="floor-line-con floorTwo floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                    <div class="floor-hd" ectype="floorTit">
                                                    	<i class="box_hd_arrow"></i>
    													<i class="box_hd_dec"></i>
                                                        <div class="hd-tit">主分类名称</div>
                                                        <div class="hd-tags">
                                                            <ul>
                                                                <li class="first current">
                                                                    <span>NEW ARRIVAL</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                                <li ectype="floor_cat_content">
                                                                    <span>次级分类</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="floor-bd">
                                                        <div class="bd-left">
                                                            <div class="floor-left-slide">
                                                                <div class="bd">
                                                                    <ul>
                                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_013.jpg"></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="hd"><ul></ul></div>
                                                            </div>
                                                        </div>
                                                        <div class="bd-right">
                                                            <div class="floor-tabs-content clearfix">
                                                                <div class="f-r-main f-r-m-adv">
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="f-r-main">
                                                                    <ul class="p-list">
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="floor-fd">
                                                        <div class="floor-fd-brand clearfix">
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="module floormodule" ectype="module">
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                        <div class="view" data-hierarchy='2'>
                                            <div class="floor-content" data-type="range">
                                                <div class="floor-line-con floorTwo floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                                    <div class="floor-hd" ectype="floorTit">
                                                        <div class="hd-tit">主分类名称</div>
                                                        <div class="hd-tags">
                                                            <ul>
                                                                <li class="first current">
                                                                    <span>NEW ARRIVAL</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                                <li ectype="floor_cat_content">
                                                                    <span>次级分类</span>
                                                                    <i class="arrowImg"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="floor-bd">
                                                        <div class="bd-left">
                                                            <div class="floor-left-slide">
                                                                <div class="bd">
                                                                    <ul>
                                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_013.jpg"></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bd-right">
                                                            <div class="floor-tabs-content clearfix">
                                                                <div class="f-r-main f-r-m-adv">
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                    <div class="f-r-m-item">
                                                                        <a href="#" target="_blank">
                                                                            <div class="title">
                                                                                <h3>男童装</h3>
                                                                                <span>新款上市</span>
                                                                            </div>
                                                                            <img src="../data/gallery_album/visualDefault/homeIndex_012.jpg">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="f-r-main">
                                                                    <ul class="p-list">
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                        <li class="opacity_img">
                                                                            <a href="#" target="_blank">
                                                                                <div class="p-img"><img src="../data/gallery_album/visualDefault/zhanwei.png"></div>
                                                                                <div class="p-name">微琪思新款2016无袖牛仔连衣裙修身中短裙显瘦休闲背心裙</div>
                                                                                <div class="p-price"><em>¥</em>370.50</div>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="floor-fd">
                                                        <div class="floor-fd-brand clearfix">
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                    <div class="link"></div>
                                                                </a>
                                                            </div>
                                                            <div class="item">
                                                                <a href="#" target="_blank">
                                                                    <div class="link-l"></div>
                                                                    <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
								<!--楼层模板三-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorThree" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">楼层三</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorThree floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit">主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">NEW ARRIVAL</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FT-bd-more-01">
                                                    <ul>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                        <li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual232x590.jpg"></a></li>
                                                    </ul>
                                                </div>
												<div class="floor-fd">
                                                    <div class="floor-fd-brand clearfix">
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                        <div class="item">
                                                            <a href="#" target="_blank">
                                                                <div class="link-l"></div>
                                                                <div class="img"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg" title="esprit"></div>
                                                                <div class="link"></div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<!--楼层模板四-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorFour" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">楼层四</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorFour floor-color-type-3" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit">主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">NEW ARRIVAL</li>
															<li>连衣裙</li>
															<li>毛衣外套</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FF-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-adv">
															<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x520.jpg"></a>
														</div>
														<div class="p-list">
															<ul>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="right-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="right-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
													<div class="bd-right">
														<div class="floor-left-adv">
															<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x520.jpg"></a>
														</div>
														<div class="p-list">
															<ul>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="left-child opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li class="opacity_img">
																	<div class="product">
																		<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																		<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
															</ul>
														</div>
													</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
								<!--楼层模板五-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorFive" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">楼层五</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorFive floor-color-type-5" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit"><i class="iconfont icon-ele"></i><em class="iconfont icon-spot"></em>主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">NEW ARRIVAL</li>
															<li>连衣裙</li>
															<li>毛衣外套</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FFI-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-slide">
															<div class="bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual477x450.jpg"></a></li>
																</ul>
															</div>
															<div class="hd">
																<ul></ul>
															</div>
														</div>
														<div class="floor-left-adv">
															<ul>
																<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual236x450.jpg"></a></li>
																<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual236x450.jpg"></a></li>
																<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual236x450.jpg"></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="floor-fd">
													<div class="floor-fd-slide">
														<div class="bd">
															<ul>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
																<li>
																	<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																	<div class="p-info">
																		<div class="p-name"><a href="#" target="_blank">唐人基 灌汤鱼丸180g*4袋 福州鱼丸 贡丸冷冻肉丸海鲜</a></div>
																		<div class="p-price"><em>¥</em>370.50</div>
																	</div>
																</li>
															</ul>
														</div>
														<a href="javascript:void(0);" class="ff-prev"></a>
														<a href="javascript:void(0);" class="ff-next"></a>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							
								<!--楼层模板六-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorSix" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">楼层六</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorSix floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="floor-hd" ectype="floorTit">
                                                	<div class="hd-tit"><i class="icon"></i>主分类名称</div>
                                                    <div class="hd-tags">
                                                    	<ul>
                                                        	<li class="first current">NEW ARRIVAL</li>
															<li>连衣裙</li>
															<li>毛衣外套</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="floor-bd FS-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-slide">
															<div class="bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x480.jpg"></a></li>
																</ul>
															</div>
															<div class="hd">
																<ul></ul>
															</div>
														</div>
														<div class="floor-brand">
															<div class="fb-bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/homeIndex_010.jpg"></a></li>
																</ul>
															</div>
															<a href="javascript:void(0);" class="prev"><i class="iconfont icon-left"></i></a>
															<a href="javascript:void(0);" class="next"><i class="iconfont icon-right"></i></a>
														</div>
													</div>
													<div class="bd-right">
														<div class="floor-left-adv">
															<ul>
																<li class="f-bd-item child-double">
																	<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x240.jpg"></a>
																	<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x240.jpg"></a>
																</li>
																<li class="f-bd-item"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x480.jpg"></a></li>
																<li class="f-bd-item"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x480.jpg"></a></li>
															</ul>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
								<!--楼层模板七-->
								<div class="visual-item lyrow w1200" data-mode="homeFloorSeven" data-purebox="homeFloor" data-li="1" ectype="visualItme">
                                    <div class="drag" data-html="not">
                                        <div class="navLeft">
                                            <span class="pic"><img src="images/visual/navLeft_03.png" /></span>
                                            <span class="txt">楼层七</span>
                                        </div>
                                        <div class="setup_box">
                                            <div class="barbg"></div>
                                            <a href="javascript:void(0);" class="move-up iconfont icon-up1"></a>
                                            <a href="javascript:void(0);" class="move-down iconfont icon-down1"></a>
                                            <a href="javascript:void(0);" class="move-edit" ectype='model_edit'><i class="iconfont icon-edit1"></i>编辑</a>
                                            <a href="javascript:void(0);" class="move-remove"><i class="iconfont icon-remove-alt"></i>删除</a>
                                        </div>
                                    </div>
                                    <div class="view">
                                        <div class="floor-content" data-type="range">
                                            <div class="floor-line-con floorSeven floor-color-type-1" data-title="主分类名称" data-idx="1" id="floor_1" ectype="floorItem">
                                            	<div class="ftit"><h3>逛了又逛</h3></div>
                                                <div class="floor-bd FSE-bd-more-01">
													<div class="bd-left">
														<div class="floor-left-slide">
															<div class="bd">
																<ul>
																	<li><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual400x440.jpg"></a></li>
																</ul>
															</div>
															<div class="hd">
																<ul></ul>
															</div>
														</div>
														<div class="floor-nav">
															<ul>
																<li class="curr">NEW ARRIVAL<i></i></li>
																<li>休闲食品<i></i></li>
																<li>油粮调味<i></i></li>
																<li>肉类<i></i></li>
																<li>休闲食品<i></i></li>
															</ul>
														</div>
													</div>
													<div class="bd-right">
														<div class="floor-left-adv">
															<a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/visual200x440.jpg"></a>
														</div>
														<div class="floor-tabs-content">
															<div class="f-r-main f-r-curr">
																<ul class="p-list">
																	<li class="child-curr opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="child-curr opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="child-curr opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																	<li class="opacity_img">
																		<div class="product">
																			<div class="p-img"><a href="#" target="_blank"><img src="../data/gallery_album/visualDefault/zhanwei.png"></a></div>
																			<div class="p-name"><a href="#" target="_blank">亿健家用彩屏多功能折叠</a></div>
																			<div class="p-price"><em>¥</em>370.50</div>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
							</div>
                        </div>
                    </div>
                </li>
                <li class="li page-content-slide" data-style="content">
                    <b class="iconfont icon-cha" ectype="close"></b>
                    <div class="page-head-bg-content">
                        <div class="page-head-bg-content-wrap">
                            <div class="page-head-bg">
                                <label class="tit">中间背景色：</label>
                                <input type="hidden" class="tm-picker-trigger" value="<?php echo $this->_var['content']['bg_color']; ?>" />
                                <input type="checkbox" class="ui-checkbox" name="content_dis" value="1" id="content_dis" <?php if ($this->_var['content']['if_show'] == 1): ?>checked<?php endif; ?>/> 
                                <label for="content_dis" class="ui-label">显示</label>
                            </div>
                            <div class="page-head-bgimg clearfix">
                                <form  action="" id="bgfileForm" method="post"  enctype="multipart/form-data"  runat="server" >
                                    <div><label class="tit">中间背景图：</label></div>
                                    <div class="bgimg"><input name="fileimg" type="hidden" value="<?php if ($this->_var['content']['img_file']): ?><?php echo $this->_var['content']['img_file']; ?><?php else: ?>../data/gallery_album/visualDefault/bgimg.gif<?php endif; ?>"/><img id="confilefile" src="<?php if ($this->_var['content']['img_file']): ?><?php echo $this->_var['content']['img_file']; ?><?php else: ?>../data/gallery_album/visualDefault/bgimg.gif<?php endif; ?>" alt=""></div>
                                    <div class="action">
                                        <div class="action-btn action-btn_bg">
                                            <a href="javascript:void(0);" class="ks-uploader-button">
                                                <span class="btn-text">更换图片</span>
                                                <div class="file-input-wrapper"><input type="file" name="confile" value="更换图片" class="file-input"></div>
                                            </a>
                                            <a href="javascript:void(0);" class="delete" ectype="delete_bg"></a>
                                        </div>
                                        <div class="content">
                                            <div>文件格式：GIF,JPG,PNG</div>
                                            <div>文件大小：200k以内</div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="bg-show clearfix" <?php if ($this->_var['content']['img_file'] == ''): ?>style="display:none;"<?php endif; ?>>
                                <div>背景显示：</div>
                                <div class="bg-show-nr">
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'repeat'): ?>class="current"<?php endif; ?> data-bg-show="repeat">平铺</a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'repeat-y'): ?>class="current"<?php endif; ?> data-bg-show="repeat-y">纵向平铺</a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'repeat-x'): ?>class="current"<?php endif; ?> data-bg-show="repeat-x">横向平铺</a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['bgrepeat'] == 'no-repeat'): ?>class="current"<?php endif; ?> data-bg-show="no-repeat">不平铺</a>
                                </div>
                            </div>
                            <div class="bg-align clearfix" <?php if ($this->_var['content']['img_file'] == ''): ?>style="display:none;"<?php endif; ?>>
                                <div>背景对齐：</div>
                                <div class="bg-align-nr">
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['align'] == 'left'): ?>class="current"<?php endif; ?> data-bg-align="left">左对齐</a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['align'] == 'center'): ?>class="current"<?php endif; ?> data-bg-align="center">居中</a>
                                    <a href="javascript:void(0);" <?php if ($this->_var['content']['align'] == 'right'): ?>class="current"<?php endif; ?> data-bg-align="right">右对齐</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="li page-content-slide" data-style="adv">
                	<div class="inside">
                        <p class="red ml0">此模块控制首页弹出广告，如不需要直接删除图片即可</p>                        
                    </div>
                    <b class="iconfont icon-cha" ectype="close"></b>
                    <div class="page-head-bg-content pt0">
                        <div class="page-head-bg-content-wrap">
                            <form  action="" id="advfileForm" method="post"  enctype="multipart/form-data"  runat="server" >
                                <div class="overflow">
                                    <label class="tit">广告链接：</label>
                                    <input type="text" value="<?php echo $this->_var['bonusadv']['fileurl']; ?>" name="adv_url" class="text mt10" placeholder="http(s)://"/>
                                </div>
                                <div class="page-head-bgimg clearfix">
                                    <div><label class="tit">广告背景图：</label></div>
                                    <div class="bgimg"><img src="<?php if ($this->_var['bonusadv']['img_file']): ?><?php echo $this->_var['bonusadv']['img_file']; ?><?php else: ?>../data/gallery_album/visualDefault/bgimg.gif<?php endif; ?>" alt="" id="bonusadvfile"></div>
                                    <div class="action">
                                        <div class="action-btn">
                                            <a href="javascript:void(0);" class="ks-uploader-button">
                                                <span class="btn-text">更换图片</span>
                                                <div class="file-input-wrapper"><input type="file" name="advfile" value="更换图片" class="file-input"></div>
                                            </a>
                                            <a href="javascript:void(0);" class="delete" ectype="delete_adv"></a>
                                        </div>
                                        <div class="content">
                                        	<div>文件格式：GIF,JPG,PNG</div>
                                            <div>文件尺寸：640*568</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="overflow mt20">
                                    <button type="button" ectype="adcSubmit" class="button">提交</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="db_main">
            <div class="design-nav-wrap">
                <div class="btns">
                    <a href="javascript:void(0);" class="btn btn_blue" ectype="downloadModal">确认发布</a>
                    <a href="javascript:void(0);" class="btn" <?php if ($this->_var['is_temp'] == 0): ?>style="display:none"<?php endif; ?> ectype="back" >还原</a>
                    <a href="javascript:void(0);" class="btn" ectype="preview" >预览</a>
                    <a href="javascript:void(0);" class="btn" ectype="information" >信息编辑</a>
                </div>
            </div>
            <div class="pc-page pc-home" ectype="visualShell">
                <?php if ($this->_var['pc_page']['out']): ?>
                    <?php echo $this->_var['pc_page']['out']; ?>
                <?php else: ?>
                    <?php echo $this->fetch('library/pc_page.lbi'); ?>
                <?php endif; ?>
            </div>
        </div>
        
        <div class="df_hidden">
        	<input type="hidden" name="suffix" value="<?php echo $this->_var['pc_page']['tem']; ?>" data-section="<?php echo $this->_var['vis_section']; ?>"/>
            <div id="preview-layout"></div>
            <div id="head-layout"></div>
            <div id="topBanner-layout"></div>
        </div>
    </div>
    
	<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js,../js/jquery.picTip.js')); ?>
	<script type="text/javascript">
        function getcolor(){
            var color = $(".tm-picker-trigger").val();
            if(color == ''){
                color = "#fff";
            }
			
            //商品名称颜色设置
			$(".page-head-bg .tm-picker-trigger").spectrum({
				showInitial: true,
				showPalette: true,
				showSelectionPalette: true,
				showInput: true,
				color: color,
				showSelectionPalette: true,
				maxPaletteSize: 10,
				preferredFormat: "hex",
				palette: [
					["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
					"rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
					["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
					"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
					["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
					"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
					"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
					"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
					"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
					"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
					"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
					"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
					"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
					"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
				]
			});
        }
		getcolor();
		
		//商品分类选择
		$.category();
		
		//banner轮播广告
		function sider(){
			$(".shop_banner,.adv_module").slide({titCell:".hd ul",mainCell:".bd ul",trigger:"click",delayTime:0});
		}   
		/****************************************楼层弹框内容里js end***************************************/
    </script>
</body>
</html>