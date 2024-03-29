/**
 * 商创 平台后台商家后台共用js库



 * $Author: sunle and kong $
 * $Id: activity.php 17217 2017-07-20 06:29:08Z sunle and kong $
 */
$(function(){
	/*************************************平台和商家 后台通用 start*************************************/
	
	/* 后台商品详情手机端上传图片或上传文字 */
	$("[ectype='mb_add_img'],[ectype='mb_add_txt']").on("click",function(){
		var ectype = $(this).attr("ectype"),
			title = "",
			log_type = '',
			content = "";
		if(ectype == "mb_add_img"){
			title = "添加图片";
			log_type = 'image';
		}else if(ectype == "mb_add_txt"){
			title = "添加文字";
			log_type = 'word';
		}
		
		if(log_type == 'word'){
			$.jqueryAjax('goods.php', 'act=gallery_album_dialog&log_type='+log_type, function(data){
				goods_visual_desc(title,815,data.content,function(){
                	append_mobile_text("#goodsMobile");
				});
			});
		}else {
			Ajax.call('dialog.php', "act=shop_banner&is_vis=1", function(result){
				goods_visual_desc("图片编辑器",915,result.content,function(){
					append_mobile_img("#goodsMobile");
				});
		
				//根据cookie默认选中图片库筛选方式
				album_select(1);
				
			}, 'POST', 'JSON');
		}
	});
        //商品详情页  退货标识关联
	$("[ectype='return_type'] input[type='checkbox']").on("click",function(){
            var i = 0;
            $("[ectype='return_type'] input[type='checkbox']:checked").each(function(){
                if($(this).val() != 0){
                    i++;
                }
            })
            if(i > 0){
                $("input[name='is_return']").prop("checked",true);
            }else{
                $("input[name='is_return']").prop("checked",false);
            }
        })
        //商品详情页  退货标识关联
	$("input[name='is_return']").on("click",function(){
           if($(this).is(':checked')){
               $("[ectype='return_type'] input[type='checkbox']").each(function(){
                    if($(this).val() != 0){
                        $(this).prop("checked",true);
                    }
                })
           }else{
               $("[ectype='return_type'] input[type='checkbox']").each(function(){
                    if($(this).val() != 0){
                        $(this).prop("checked",false);
                    }
                })
           }
        })
	/*后台商品详情页 图片库中选择所需图片 弹窗*/
	$("[ectype='gallery_album']").on("click",function(){
		var inid = $(this).parents(".gallery_album").data("inid");
		var picId = "";
		var img_src = "";
		var obj = "";
		var is_lib = $("input[name='is_lib']").val();//图片库标识
		var is_vis = 2,
			picIds = '',
			goods_id = $("input[name='goods_id']").val();
		
		if(inid != 'gallery_album'){
			is_vis = 1;
		}
		//图片库标识
		if(!is_lib){
			is_lib = 0;
		}
		
		Ajax.call('dialog.php', "act=shop_banner&is_vis="+is_vis+"&image_type=1&inid=" + inid, function(result){
			goods_visual_desc("图片编辑器",915,result.content,function(){
				obj = $("*[ectype='pic_replace']").find("li.current");
				if(inid == "gallery_album_dsc"){
					obj.each(function(){
						picId = $(this).data("picid");
						var src = $(this).data('url');
						if(img_src){
							img_src += "," + src;
						}else{
							img_src = src
						}
					});
					insert_img(picId,inid,img_src,goods_id,is_lib);
				}else{
					obj.each(function(){
						picId = $(this).data("picid");
						if(picIds){
							picIds += "," + picId;
						}else{
							picIds = picId
						}
					});
                    insert_img(picIds,inid,'',goods_id,is_lib);
				}
			});
			
			//根据cookie默认选中图片库筛选方式
			album_select(is_vis,inid);
			
			$("[ectype='pic_list']").perfectScrollbar("destroy");
			$("[ectype='pic_list']").perfectScrollbar();
		}, 'POST', 'JSON');
	});
	
	/*后台 弹窗搜索商品 */
	$(document).on("click","*[ectype='changedgoods']",function(){
		ajaxchangedgoods(1);
	});
	
	/*后台 商品切换配件类型 */
    $(document).on("click","[ectype='group_checked']",function(){
        var id = $(this).parents("tr").data("gid");
		var group_id = $(this).data("value");
		Ajax.call('goods.php?is_ajax=1&act=edit_gorup_type', 'id=' + id + "&group_id=" + group_id, function(data){
			if(data.message){
				alert(data.message);
			}
		} , 'POST', 'JSON');
    });
	
	/*后台 删除商品配件/礼包商品 */
    $(document).on("click","[ectype='remove_group']",function(){
		var _this = $(this),
                    operation = _this.data("operation"),
                    msg = _this.data("msg"),
                    goods =  _this.parents('tr').data("goods"),
                    where  = '',
                    ajax_url = '';
                    if(!msg || msg == 'undefined'){
                        msg = "确定删除该配件？";
                    }
                    if(operation == 'package'){
                        var packageId = $("input[name='id']").val()
                        var product_id = _this.parents('tr').find("input[name='product_id[]']").val();
                        where = 'pid=' + packageId + "&goods_id=" + goods + "&product_id=" + product_id;
                        ajax_url = 'package.php?is_ajax=1&act=drop_package_goods';
                    }else{
                        var id = _this.parents("tr").data("gid");
                        where = 'id=' + id;
                        ajax_url = 'goods.php?is_ajax=1&act=remove_group_type';
                    }
                
		if(confirm(msg)){
			Ajax.call(ajax_url, where, function(data){
				if(data.message){
					alert(data.message);
				}else{
					_this.parents("tr").remove();
				}
			} , 'POST', 'JSON');
		}
    });
	
	/*后台 设置配件 */
	$(document).on("click","*[ectype='setupGroupGoods']",function(){
		var spec_attr = new Object(),
			_this = $(this),
			pbtype = _this.data('pbtype'),
			pbmode = _this.data('pbmode'),
                        diffeseller = _this.data('diffeseller'),
			goods_id = '',
			group_goods = '',
			ru_id = '-1';
                //区分商家商品
                if(diffeseller == 1){
                    ru_id = $("input[name='ru_id']").val();
                    if(!ru_id){
                            ru_id = '-1';
                    }
                }
		//优惠活动设置商品
		if(pbmode == 'setgoods_content'){
			group_goods = $("#range-div").attr('data-goodsids');
		}else{
			//商品配件
			goods_id = $("input[name='goods_id']").val();
		}
		if(pbmode != 'setgoods_content'){
                    $("[ectype='group_list']").find("tr").each(function(){
                            var val = $(this).data('goods');
                            if(group_goods){
                                    group_goods = group_goods + "," + val;
                            }else{
                                    group_goods = val;
                            }
                    });
                }
		spec_attr.goods_ids = group_goods;
		spec_attr.ru_id = ru_id;
		Ajax.call('dialog.php?act=goods_info', "goods_type=1&search_type=goods&goods_id=" + goods_id + "&spec_attr="+$.toJSON(spec_attr) , function(data){
			var content = data.content;
			goods_visual_desc('设置商品',970,content,function(){
				var goods_ids = $("#set_up_goods").find("input[name='goods_ids']").val();
				if(pbmode == 'setgoods_content'){
					Ajax.call('get_ajax_content.php','act=getsearchgoodsDiv&goods_ids='+goods_ids+'&pbtype='+pbtype + "&ru_id=" + ru_id,function(data){
						$("#range-div").attr("data-goodsIds",data.back_goods);
						$("#range-div").html(data.content);
						
					},'GET','JSON');
				}else if(pbmode == 'setpackagegoods'){
                                    var packageId = $("input[name='id']").val()
                                    Ajax.call('package.php?is_ajax=1', 'act=add_package_goods&pid='+ packageId + "&goods_ids=" +  goods_ids + "&pbtype=" + pbtype, function(data){
                                        $("[ectype='group_list']").html(data.content);
                                        reset_select("[ectype='group_list']")
                                    }, 'GET', 'JSON');
                                }else{
					Ajax.call('get_ajax_content.php','act=add_group_goods&goods_ids='+goods_ids+'&goods_id='+goods_id,function(data){
						if(data.error == 1){
							alert(data.message);
						}else{
							$("[ectype='group_list']").html(data.content);
							reset_select("[ectype='group_list']")
						}
						
					},'GET','JSON');
				}
			},'set_up_goods');
			
		}, 'POST', 'JSON');
	});
	
	/*************************************平台和商家 后台通用 end*************************************/
	
	/* file上传文件类型 封装函数 satrt*/
	$(document).on("change","input[class='type-file-file']",function(){
		var state = $(this).data('state');
		var filepath=$(this).val();
		var extStart=filepath.lastIndexOf(".");
		var ext=filepath.substring(extStart,filepath.length).toUpperCase();

		if(state == 'txtfile'){
			if(ext!=".TXT"){
				alert("上传文件限于txt格式");
				$(this).attr('value','');
				return false;
			}
		}else if(state == 'imgfile'){
			if(ext!=".PNG"&&ext!=".GIF"&&ext!=".JPG"&&ext!=".JPEG"){
				alert("上传图片限于png,gif,jpeg,jpg格式");
				$(this).attr('value','');
				return false;
			}
		}else if(state == 'csvfile'){
			if(ext!=".CSV"){
				alert("上传文件限于csv格式");
				$(this).attr('value','');
				return false;
			}
		}else if(state == 'sqlfile'){
            if(ext!=".SQL"){
				alert("上传文件限于sql格式");
				$(this).attr('value','');
				return false;
			}
    	}
		
		$(this).siblings(".type-file-text").val(filepath);
	});

	$(".type-file-box").hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	});
	/* file上传文件类型 封装函数 end*/
	
	
	/*************************************平台、商家、商城前台 通用 start*************************************/
	/* jq仿select下拉选框 start */
	$(document).on("click",".imitate_select .cite",function(){
		$(".imitate_select ul").hide();
		$(this).parents(".imitate_select").find("ul").show();
		$(this).siblings("ul").perfectScrollbar("destroy");
		$(this).siblings("ul").perfectScrollbar();
	});
	
	$(document).on("click",".imitate_select li a",function(){
		var _this = $(this);
		var val = _this.data('value');
		var text = _this.html();
		_this.parents(".imitate_select").find(".cite").html(text);
		_this.parents(".imitate_select").find("input[type=hidden]").val(val);
		_this.parents(".imitate_select").find("ul").hide();
	});
	/* jq仿select下拉选框 end */
	/*************************************平台、商家、商城前台 通用 end*************************************/
});
//超值礼包编辑商品数量
function edit_package_nuber(obj){
    var _this = $(obj),
        goods_id =  _this.parents('tr').data("goods"),
        packageId = $("input[name='id']").val(),
        num = _this.val(),
        product_id = _this.parents('tr').find("input[name='product_id[]']").val();
        Ajax.call('package.php','act=edit_package_nuber&goods_id='+goods_id+'&pid='+packageId + "&product_id=" + product_id + "&num=" + num,function(data){
            if(data.error == 1){
               alert(data.msg) ;
                _this.val(data.goods_number);
            }
        },'GET','JSON');   
}
/*后台 超值礼包商品切换属性 */
$(document).on("click","[ectype='package_checked']",function(){
    var _this = $(this),
        goods_id =  _this.parents('tr').data("goods"),
        packageId = $("input[name='id']").val(),
        product_id = _this.data('value'),
        product_obj = _this.parents('tr').find("input[name='product_id[]']"),
        old_product_id = product_obj.attr('data-oldproduct');
       Ajax.call('package.php','act=edit_package_product&goods_id='+goods_id+'&pid='+packageId + "&product_id=" + product_id + "&old_product_id=" + old_product_id,function(data){
            if(data.error == 1){
               alert(data.msg) ;
               product_obj.val(old_product_id);
               reset_select("[ectype='group_list']");
            }
        },'GET','JSON');   
});

/*后台 超值礼包商品复制 */
$(document).on("click","[ectype='add_package_goods']",function(){
    var _this = $(this),
        goods_id =  _this.parents('tr').data("goods"),
        packageId = $("input[name='id']").val();
        Ajax.call('package.php?is_ajax=1', 'act=add_package_goods&pid='+ packageId + "&goods_ids=" +  goods_id + "&pbtype=package&type=1" , function(data){
            $("[ectype='group_list']").html(data.content);
            reset_select("[ectype='group_list']")
        }, 'GET', 'JSON');
});
/**
 * 
 * 公共js 函数库 start
 * $Author: sunle and kong $ 
 *
**/

/****************************jq仿select带返回函数 start*******************************/
jQuery.divselect = function(divselectid,inputselectid,fn) {
	var obj = "",
		txt = "",
		input = "",
		val = 0;
	
	$(document).on('click',divselectid+" .cite",function(event){
		event.stopImmediatePropagation();
		
		obj = $(this).parents(divselectid).find("ul");
		
		$(".imitate_select").find("ul").hide();

		if(obj.css("display")=="none"){
			obj.css("display","block");
		}else{
			obj.css("display","none");
		}
		
		obj.perfectScrollbar("destroy");
		obj.perfectScrollbar();
	});
	
	$(document).on("click",divselectid+" ul li a",function(event){
		event.stopImmediatePropagation();
		
		obj = $(this).parents(divselectid);
		input = obj.find(inputselectid);
		txt = $(this).text();
		val = $(this).data("value");
		
		obj.find(".cite").html(txt);
		
		obj.find("ul").hide();

		input.val(val);
		
		if(fn){
			fn($(this));
		}		
	});
	
	$(document).on("click",function(){
		$(divselectid+" ul").hide();
	});
};

/* jq仿select下拉 默认值赋值 */
function reset_select(obj){
	$(obj).find('.imitate_select').each(function(){
		var sel_this = $(this);
		var val = sel_this.children('input[type=hidden]').val();
		sel_this.find('a').each(function(){
			if($(this).attr('data-value') == val){
				sel_this.children('.cite').html($(this).html());
			}
		})
	});
}
/****************************jq仿select带返回函数 end*********************************/


/****************************后台商品详情-商品描述-电脑端手机端start**************************/
var pannel_div = "";

/* 后台商品详情-手机描述展示区域（添加图片）*/
function append_mobile_img(obj){
	var url = "",
		con = $(obj).find("*[ectype='pic_list']"),
		cur = con.find("li.current");
		
	if(cur.length>0){
		cur.each(function(){
			url = $(this).data("url");
			pannel_div = "<div class='section s-img'><div class='img'><img src='"+url+"' /></div><div class='tools'><a href='javascript:void(0);' class='move-up icon-arrow-up'></a><a href='javascript:void(0);' class='move-down icon-arrow-down'></a><a href='javascript:void(0);' class='move-remove'><i class='icon icon-remove'></i>删除</a><div class='cover'></div></div></div>";
			$(".section_warp").append(pannel_div);
		});
	}
	$(".section_warp").find(".section:first").find(".move-up").addClass("disabled");
	$(".section_warp").find(".section:last").find(".move-down").addClass("disabled");
	
	hiddenInput();
}

/* 后台商品详情-手机描述展示区域（添加文字）*/
function append_mobile_text(obj){
	var text = $(obj).find(".dialogTextarea").val();

	text = text.replace(",","，");
	text = text.replace("'","‘");
	text = text.replace('"',"“");
	text = text.replace('&',"&amp;");
        
	pannel_div = "<div class='section s-txt'><div class='txt'>"+text+"</div><div class='tools'><a href='javascript:void(0);' class='move-up icon-arrow-up'></a><a href='javascript:void(0);' class='move-down icon-arrow-down'></a><a href='javascript:void(0);' class='move-edit' ectype='move_edit_touch'><i class='icon icon-edit'></i>编辑</a><a href='javascript:void(0);' class='move-remove'><i class='icon icon-remove'></i>删除</a><div class='cover'></div></div></div>";
	$(".section_warp").append(pannel_div);
	$(".section_warp").find(".section:first").find(".move-up").addClass("disabled");
	$(".section_warp").find(".section:last").find(".move-down").addClass("disabled");
	
	hiddenInput();
}

/*
** 
** 后台商品详情-手机端详情内容操作 start
**
*/
//文字模块编辑

$(document).on("click","[ectype='move_edit_touch']",function(){
    var log_type = "word",
        _this = $(this),
        txt_this =  _this.parents(".section").find(".txt"),
        content = txt_this.html(),
        title = "添加文字";
		
    $.jqueryAjax('goods.php', 'act=gallery_album_dialog&log_type='+log_type + "&content=" + content, function(data){
		goods_visual_desc(title,815,data.content,function(){
			var text = $("#goodsMobile").find(".dialogTextarea").val();
			txt_this.html(text);
			
			hiddenInput();
		});
    });
})
/* 模块上移 */
$(document).on("click",".move-up",function(){
	var _this = $(this);
	var _div = _this.parents(".section");
	var prev_div = _div.prev();
	
	var clone = _div.clone();
	if(!_this.hasClass("disabled")){
		_div.remove();
		prev_div.before(clone);
		disabled();
		hiddenInput();
	}
});

/* 模块下移 */
$(document).on("click",".move-down",function(){
	var _this = $(this);
	var _div = _this.parents(".section");
	var next_div = _div.next();
	
	var clone = _div.clone();
	if(!_this.hasClass("disabled")){
		_div.remove();
		next_div.after(clone);
		disabled();
		hiddenInput();
	}
});

/* 删除模块 */
$(document).on("click",".move-remove",function(){
	var _this = $(this);
	_this.parents(".section").remove();
	disabled();
	hiddenInput();
});

/* 判断模块是顶部模块或底部模块 */
function disabled(){
	var demo = $("[ectype='mobile_pannel']");
	demo.find(".section .move-up").removeClass("disabled");
	demo.find(".section:first .move-up").addClass("disabled");
	
	demo.find(".section .move-down").removeClass("disabled");
	demo.find(".section:last .move-down").addClass("disabled");
}

/* 把手机端描述编辑内容 保存到隐藏域 */
function hiddenInput(){
	var obj = $(".section_warp");
	var clone = obj.clone();
	//clone.find(".tools").remove();
	$("input[name='desc_mobile']").val(clone.html());
}

/* 后台商品详情-手机端详情内容操作 end*/
	
/****************************后台商品详情-商品描述-电脑端手机端end****************************/


/***********************************图片库相关方法start***********************************/

/* 弹出层图片库中选中的图片保存后执行方法（分为多选和单选）*/
function insert_img(pic_id,inid,img_src,goods_id,is_lib){
	/**
	** pic_id 图片库中的选中图片的图片id
	** inid 触发图片库标识，用于判断
	** img_src 图片库中的图片多选时用到，多个图片拼接后的字符串
	**/
	
	if(pic_id){
		if(inid == 'gallery_album_dsc'){
			//商品详情中的电脑端百度编辑器 图片库选择图片
			var content = $("input[name='goods_desc']").val();
			$.jqueryAjax('get_ajax_content.php', 'act=getFCKeditor&content='+encodeURIComponent(content)+"&img_src="+img_src, function(data){
				$("#FCKeditor").html(data.goods_desc);
			});
		}else{
			$.jqueryAjax('get_ajax_content.php', 'is_ajax=1&act=insert_goodsImg' + '&pic_id=' + pic_id + '&goods_id=' + goods_id + "&inid="+inid + "&is_lib="+is_lib, function(data){
				if(data.error > 0){
					alert(data.message);
				}else{
					if(inid != 'addAlbumimg'){
                                            //商品详情页商品主图图片库选择图片
                                            $("#goods_figure").html("<div class='img'><img src='../" + data.data['goods_thumb'] + "'/><div class='edit_images'>更换图片</div></div>");
                                            $("input[name=original_img]").val(data.data['original_img']);
                                            $("input[name=goods_img]").val(data.data['goods_img']);
                                            $("input[name=goods_thumb]").val(data.data['goods_thumb']);
					}
                                        $("#gallery_img_list").html(data.content);
				}
			});
		}
	}else{
		alert("系统出错，请重新选择图片");
	}
}

/* 图片库弹出窗 */
function goods_visual_desc(title,width,content,onOk,id){
	if(!id){
		id = "goodsMobile";
	}
	pb({
		id:id,
		title:title,
		width:width,
		content:content,
		ok_title:"确定",
		cl_title:"取消",
		drag:true,
		foot:true,
		cl_cBtn:true,
		onOk:onOk
	});
}

/*后台 图片库弹窗 选择使用图片（分为单复选）*/
$(document).on("click","*[ectype='pic_replace'] li",function(){
	var length = $(this).siblings(".current").length;
	var type = $(this).parents("*[ectype='pic_replace']").data("type");
	if(type == "check"){
		if(length<20){
			if($(this).hasClass("current")){
				$(this).removeClass("current");
			}else{
				$(this).addClass("current");
			}
		}else{
			alert("图片不能超过20张");
		}
	}else{
		if($(this).hasClass("current")){
			$(this).removeClass("current");
		}else{
			$(this).addClass("current").siblings().removeClass("current");
		}
	}
});

/*后台 弹窗 动态添加图片库相册 */
$(document).on("click","[ectype='add_album']",function(){
	Ajax.call('dialog.php?is_ajax=1&act=add_albun_pic', '', add_albumResponse , 'POST', 'JSON');
});


/*添加图片库相册回调方法 弹出窗口*/
function add_albumResponse(data){
	var content = data.content;
	pb({
		id: "add_albun_piccomtent",
		title: "图片编辑器",
		width: 950,
		content: content,
		ok_title: "确定",
		drag: true,
		foot: true,
		cl_cBtn: false,
		onOk: function () {
			var parents = $("#add_albun_pic");
			var required = parents.find("*[ectype='required']");

			if(validation(required) == true){
				var actionUrl = "get_ajax_content.php?act=add_albun_pic";
				$("#add_albun_pic").ajaxSubmit({
					type: "POST",
					dataType: "json",
					url: actionUrl,
					data: { "action": "TemporaryImage" },
					success: function (data) {
						if (data.error == "0") {
							alert(data.content);
						}else{
							$("[ectype='album_list_check']").html(data.content)
							$("input[name='album_id']").val(data.pic_id);
							
							changedpic(data.pic_id,"",1,0);
							
							album_select(1);
						}
						return true;
					},
					async: true
				});
				return true;
			}else{
				return false;
			}
		}
	});
}

/* 相册选择仿select下拉 默认值赋值 */
function album_select(type,mark){
	/*
	**
	** type判断是否是可视化图片库弹出 
	** type = 0 表示是可视化图片库弹出
	** type = 1 表示不是可视化图片库弹出
	**
	*/
	
	var obj = $("*[ectype='albumFilter']").find(".imitate_select"),
		str = $.cookie('albumFilterDefalt'),
		arr = new Array(),
		inid = "";
	
	if(str){
		arr = str.split(",");
	}
	if(type == 1){
		$("[ectype='pic_list']").html('<i class="icon-spinner icon-spin"></i>');
	}else{
		$("[ectype='pic_list']").html("<i class='icon-spin'><img src='images/visual/load.gif' width='30' height='30'></i>");
	}
	
	if(mark){
		inid = mark;
	}

	setTimeout(function(){
		for(i=0;i<arr.length;i++){
			obj.find("input[type='hidden']").eq(i).val(arr[i]);
		}
		if(arr[1] == '' || arr[1] == 'undefined'){
			arr[1] = 2;
		}
                
		changedpic(arr[0],"",type,arr[1],inid);

		obj.each(function(index, element) {
			var obj = $(this);
			
			obj.find("input[type='hidden']").eq(index).val(arr[index]);
			
			obj.find("li").each(function(){
				var val = $(this).find("a").data("value");
				var text = $(this).find("a").html();
				if(val == arr[index]){
					obj.find(".cite").html(text);
				}
			});
		});
	},300);
}

/* 切换图片库 */
function changedpic(val,obj,is_vis,sort,inid){
	/*
	**
	** val 表示选中图片库的值
	** obj 表示选中图片库的对象
	** is_vis 判断是否图库类型，0表示是可视化图片库，1表示普通图片库弹窗多选，2表示普通图片库弹窗单选
	** sort 弹出图片库选中筛选排序值
	** inid 商品详情页图片库3个图片库标识；商品图片:gallery_album、电脑端商品描述:gallery_album_desc、商品相册:addAlbumimg
	**
	*/
	
	var album_id 	= 0,
		sort_name 	= 0,
		where 		= "",
		str 		= "";
	
	if(val > 0){
		album_id = val;
	}else{
		album_id = $("input[name='album_id']").val();
	}
	
	if(sort){
		sort_name = sort;
	}else{
		sort_name = $("input[name='sort_name']").val();
	}
	
	if(inid){
		where = "&inid=" + inid;
	}
        
	Ajax.call('get_ajax_content.php?is_ajax=1&act=get_albun_pic', "sort_name="+sort_name+"&album_id="+album_id+"&is_vis=" + is_vis + where, function(data){
		if(obj){
			obj = obj.parents("*[ectype='album-warp']");
			obj.find("[ectype='pic_list']").html(data.content);
		}else{
			$("[ectype='pic_list']").html(data.content);
		}
		$("[ectype='pic_list']").perfectScrollbar("destroy");
		$("[ectype='pic_list']").perfectScrollbar();
		
		if(is_vis != 1){
			//可视化弹出图片库选择
			if(obj){
				var id = $(obj).parents(".pb").attr("id");
				pbct("#" + id);
			}else{
				pbct();
			}
		}
	} , 'POST', 'JSON');
	
	var str = album_id + ',' + sort_name;
	albumFilterDefalt(str);
}

/*设置 弹出图片库 图库筛选选择值存入cookie 方便下次默认选中上一次选中的值*/
function albumFilterDefalt(str){
	$.cookie('albumFilterDefalt', str , { expires: 1 ,path:'/'});
}

/* 弹窗内图片库分页 */
function gallery_album_list_pb(obj,page,type) {
	var _this = $(obj).parents('.gallery_album');
	var where = '';
	var inid = _this.data("inid");
	var act = _this.data("act");
	var actionUrl = _this.data("url");
	var datawhere = _this.data("where");
	var url = (actionUrl) ? actionUrl : 'get_ajax_content.php';
	var is_goods = _this.data("goods");
	var is_vis = _this.data("vis");

	if(is_vis != 1){
		is_vis = 0;
	}

	where += "&is_vis=" + is_vis;
	page = parseInt(page);
	if(page){
		
		if(type == 'next'){
			//下一页
			page = page+1;
		}else if(type == 'prev'){
			//上一页
			page = page-1;
		}
		where += "&page="+page;
	}
	if(datawhere){
		where += "&" + datawhere;
	}
	if(act == 'brand_query'){
		var brand_ids = $("input[name='brand_ids']").val();
		where += "&brand_ids=" + brand_ids;
	}
	if(is_goods == 1){
		var goods_ids = $(obj).parents(".modal-body").find("input[name='goods_ids']").val();
		where += "&goods_ids=" + goods_ids;
	}
	
	$.jqueryAjax(url, 'act='+act + where, function(data){
		$("[ectype='"+inid+"']").html(data.content);
		$("[ectype='"+inid+"']").perfectScrollbar("destroy");
		$("[ectype='"+inid+"']").perfectScrollbar();
	});
};

/*************************图片库end*******************************/

/* 判断弹框高度，如果有多个弹框同时出现需要传obj定位，一个弹出则不需要 */
function pbct(obj){
	var height = 0;
	
	if(obj){
		var obj = $(obj);
		pbct = obj.find(".pb-ct");
	}else{
		var pbct = $(".pb-ct");
	}
	
	height = pbct.height();
	
	if(height>499){
		pbct.css({"overflow":"hidden"})
		
		$(".pb-ct").perfectScrollbar("destroy");
		$(".pb-ct").perfectScrollbar();
	}
}

/*************************弹出框显示设置验证 start**********************/
/* 弹窗验证 */
function validation(required){
	var val = "";
	var msg = "";
	var flog = true;
	required.each(function(){
		val = $(this).val();
		msg = $(this).data("msg");
		if(val == ""){
			alert(msg);
			flog = false;
			return false;
		}else{
			flog = true;
		}
	});
	return flog;
}

//提示弹框
function pbDialog(msgTitle,msg,state,width,height,left,cBtn,onOk,ok_title,cl_title){
	//msgTitle 主提示信息
	//msg 次标题信息
	//state 状态 0表示感叹 1表示正确 2表示错误
	//width 弹出框宽度
	//height 弹出框高度
	//left 右边距
	//cBtn 弹出框取消按钮是否显示
	//onOk 点击确定返回函数
	
	var content = "",
		icon = "m-icon",
		msgTit = "",
		msgSpan = "",
		foot = true;
	
	if(state == 0){
		icon = "m-icon";
	}else if(state == 1){
		icon = "m-icon warn-icon-ok";
	}else if(state == 2){
		icon = "m-icon warn-icon-error";
	}
	
	if(msgTitle != ""){
		if(msg != ""){
			msgTit = "<h3 class='ftx-04'>"+ msgTitle +"</h3>";
		}else{
			msgTit = "<h3 class='ftx-04 rem'>"+ msgTitle +"</h3>";
		}
	}
	
	if(msg != ""){
		msgSpan = "<span class='ftx-03'>"+ msg +"</span>";
	}
	
	if(width == null || width == ""){
		width = 450;
	}
	
	if(height == null || height == ""){
		height = 80;
	}
	
	if(left == null || left == ""){
		left = 100;
	}
	
	if(onOk == null || onOk ==""){
		foot = false;
	}
	
	if(ok_title == null || ok_title == ""){
		ok_title = "确定";
	}
	
	if(cl_title == null || cl_title == ""){
		cl_title = "取消";
	}

	content = '<div class="tip-box icon-box" style="height:'+ height +'px; padding-left:'+ left +'px;"><span class="warn-icon '+ icon +'"></span><div class="item-fore">'+ msgTit + msgSpan +'</div></div>';
		
	pb({
		id:"pbDialog",
		title:"提示",
		width:width,
		height:height,
		content:content,
		drag:false,
		foot:foot,
		ok_title:ok_title,
		cl_title:cl_title,
		cl_cBtn:cBtn,
		onOk:onOk
	});
	
	$('#pbDialog .tip-box').css("padding-left",left);
}
/*************************弹出框显示设置验证 end**********************/
