<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
    <div class="warpper">
        <div class="title"><?php if ($this->_var['template_type'] == 'seller'): ?>店铺 - <?php echo $this->_var['ur_here']; ?><?php else: ?>模板 - 首页可视化管理<?php endif; ?></div>
        <div class="content">
            <?php if ($this->_var['template_type'] == 'seller'): ?>
                <?php echo $this->fetch('library/seller_step_tab.lbi'); ?>
            <?php endif; ?>
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4>操作提示</h4><span id="explanationZoom" title="收起提示"></span></div>
                <ul>
                    <?php if ($this->_var['template_type'] == 'seller'): ?>
                    <li>展示所有店铺模板，包括付费模板</li>
                    <li>可进行模板信息，内容等编辑</li>
                    <?php else: ?>
                    <li>展示所有首页模板。</li>
                    <li>可进行首页模板信息，内容等编辑</li>
                    <li>每套模板有对应的首页模板</li>
                    <li>该功能暂时只支持ecmoban_dsc2017，ecmoban_dsc后期开发中，敬请期待</li>
                    <?php endif; ?>
                    <li>导出时需选中对应的选中按钮</li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                        <a href="javascript:void(0);" ectype='information' data-code=""><div class="fbutton"><div class="add" title="添加新模板"><span><i class="icon icon-plus"></i>添加新模板</span></div></div></a>
                        <a href="javascript:void(0);" ectype="export"><div class="fbutton"><div class="add" title="导出"><span><i class="icon icon-download-alt"></i>导出</span></div></div></a>
                    </div>
                </div>
                <div class="common-content">
                    <div class="common-content">
                        <div class="mian-info">
                            <form method="post" action="visualhome.php?act=export_tem" name="listForm" id="exportForm">
                                <div class="list-div" id="listDiv">
                            	<?php endif; ?>
                                <div class="template-list template-ksh-list mt10" ectype='templateList'>
                                    <ul>
                                        <?php $_from = $this->_var['available_templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'template');$this->_foreach['template'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['template']['total'] > 0):
    foreach ($_from AS $this->_var['template']):
        $this->_foreach['template']['iteration']++;
?>
                                        <li <?php if ($this->_var['default_tem'] == $this->_var['template']['code']): ?>class="curr"<?php endif; ?>>
                                            <div class="checkbox_item">
                                                <input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['template']['code']; ?>" class="ui-checkbox" id="checkbox_<?php echo $this->_var['template']['code']; ?>" />
                                                <label for="checkbox_<?php echo $this->_var['template']['code']; ?>" class="ui-label"></label>
                                            </div>
                                            <div class="tit" title="<?php echo $this->_var['template']['name']; ?>"><?php if ($this->_var['template']['name']): ?><?php echo $this->_var['template']['name']; ?><?php else: ?>&nbsp;<?php endif; ?></div>
                                            <div class="span"><?php echo $this->_var['template']['desc']; ?></div>
                                            <div class="img"<?php if ($this->_var['template_type'] != 'seller'): ?> ectype="setupTemplate"<?php endif; ?> data-code="<?php echo $this->_var['template']['code']; ?>">
                                                <?php if ($this->_var['template']['screenshot']): ?><img width="263" height="338" src="<?php echo $this->_var['template']['screenshot']; ?>" data-src-wide="<?php echo $this->_var['template']['template']; ?>" border="0" id="<?php echo $this->_var['template']['code']; ?>" ectype="pic" class="pic"/><?php endif; ?>
                                                <?php if ($this->_var['template_type'] != 'seller'): ?><div class="bg"></div><?php endif; ?>
                                            </div>
                                            <?php if ($this->_var['template_type'] != 'seller'): ?>
                                            <div class="box" ectype="setupTemplate" data-code="<?php echo $this->_var['template']['code']; ?>">
                                                <i class="icon icon-gou"></i>
                                                <span>使用该模版</span>
                                            </div>
                                            <?php endif; ?>
                                            <div class="info">
                                                <div class="row">
                                                	<a href="<?php echo $this->_var['template']['template']; ?>" target="_blank" ectype="see" class="mr10">查看大图</a>
                                                	<a href="<?php if ($this->_var['template_type']): ?>topic.php?act=visual&code=<?php echo $this->_var['template']['code']; ?>&temp_type=seller<?php else: ?>visualhome.php?act=visual&code=<?php echo $this->_var['template']['code']; ?><?php endif; ?>" target="_blank">装修</a>
                                                </div>
                                                <?php if ($this->_var['template_type'] == 'seller'): ?>
                                                <div class="row">    
                                                	<div class="price">价格：<em class="org"><?php if ($this->_var['template']['temp_mode'] == 0): ?>免费<?php else: ?><?php echo $this->_var['template']['temp_cost']; ?><?php endif; ?></em></div>
                                                    <div class="sales_volume">销量：<?php echo $this->_var['template']['sales_volume']; ?></div>
                                                </div>
                                                <?php endif; ?>
                                                <div class="row">
                                                    <a href="<?php if ($this->_var['template_type'] == 'seller'): ?>../merchants_store.php?preview=1&temp_code=<?php echo $this->_var['template']['code']; ?><?php else: ?>../index.php?suffix=<?php echo $this->_var['template']['code']; ?><?php endif; ?>" class="mr10" target="_blank" >预览模板</a>
                                                    <a href="javascript:void(0);" ectype='information' data-code="<?php echo $this->_var['template']['code']; ?>" data-id="<?php echo $this->_var['template']['temp_id']; ?>" class="mr10">编辑模板信息</a>
                                                    <a href="javascript:removeTemplate('<?php echo $this->_var['template']['code']; ?>','<?php echo $this->_var['template']['temp_id']; ?>')">删除模板</a>
                                                </div>
                                            </div>
                                            <i<?php if ($this->_var['default_tem'] == $this->_var['template']['code']): ?> class="ing"<?php endif; ?> ectype="default"></i>
                                        </li>	
                                        <?php endforeach; else: ?>
                                        <li class="notic">暂无模板</li>
                                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                	<input type='hidden' name='template_type' value="<?php echo $this->_var['template_type']; ?>">
                                </div>
                                <?php if ($this->_var['template_type'] == 'seller'): ?>
                                <?php if ($this->_var['page_count'] > 1): ?>
                                <div class="template-page">
                                    <div class="list-page">
                                        <?php echo $this->fetch('library/page.lbi'); ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php endif; ?>
                                <?php if ($this->_var['full_page']): ?>
                        		</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.purebox.js')); ?>
    
    <script type="text/javascript">
        <?php if ($this->_var['template_type'] == 'seller'): ?>
        listTable.recordCount = '<?php echo $this->_var['record_count']; ?>';
        listTable.pageCount = '<?php echo $this->_var['page_count']; ?>';

        <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endif; ?>
    // 点击查看图片
    $(function(){
        $('.nyroModal').nyroModal();
        resetHref();
    });
	function resetHref(){
		$("*[ectype='see']").each(function(){
			var href = $(this).attr("href");
			$(this).attr("href",href + "?&" + +Math.random());
		});
		$("*[ectype='pic']").each(function(){
			var src = $(this).attr("src");
			$(this).attr("src",src + "?&" + +Math.random());
		});
	}
    function removeTemplate(code,temp_id){
            var template_type = "<?php echo $this->_var['template_type']; ?>";
		if(code){
			if(confirm("确定删除该模板吗？删除后将无法找回！！请谨慎操作！！")){
				Ajax.call('visualhome.php', "act=removeTemplate&code=" + code + "&template_type=" + template_type + "&temp_id=" + temp_id, function(data){
                                    if(data.error == 0){
                                        if(template_type == 'seller'){
                                            location.reload();
                                        }else{
                                            $("[ectype='templateList']").find("ul").html(data.content);
                                            resetHref();
                                        }
                                    }else{
                                        alert(data.content);
                                    }
                                }, 'POST', 'JSON');
			}
		}else{
			alert('请选择删除的模板');
		}
    }
    
	//使用模板
	$(document).on("click","*[ectype='setupTemplate']",function(){
		var code = $(this).data('code');
		var t = $(this);
		if(confirm("启用新的样式将覆盖原来的样式。您确定要启用选定的样式吗？")){
			Ajax.call('visualhome.php', 'act=setupTemplate' + '&code=' + code, function(result){
				if(result.error == 1){
					alert(result.message);
				}else{
					t.parents("[ectype='templateList']").find('[ectype="default"]').removeClass("ing");
					t.parents("li").find('[ectype="default"]').addClass("ing");
					t.parents("li").addClass("curr").siblings().removeClass("curr");
				}
			}, 'POST', 'JSON');
		}
	});
	
	//信息编辑
	$(document).on("click","*[ectype='information']",function(){
		var code = $(this).data('code');
                var template_type = "<?php echo $this->_var['template_type']; ?>";
                var temp_id = $(this).data('id');
		Ajax.call('dialog.php', 'act=template_information' + '&check=1&action=add&code=' + code + "&template_type=" + template_type + "&temp_id=" + temp_id, informationResponse, 'POST', 'JSON');
	});
	
	function informationResponse(result){
		var content = result.content;
		pb({
			id: "template_information",
			title: "模板信息",
			width: 945,
			content: content,
			ok_title: "确定",
			drag: true,
			foot: true,
			cl_cBtn: false,
			onOk: function(){
                                var template_type = "<?php echo $this->_var['template_type']; ?>";
				var fald = true;
				var name = $("#information").find("input[name='name']");
				var ten_file = $("#information").find("input[name='ten_file_textfile']");
				var big_file = $("#information").find("input[name='big_file_textfile']");
                                var seller_fald = true;
                                var seller_masg = '';
				if(template_type == 'seller'){
                                    var temp_mode = $("#information").find("input[name='temp_mode']:checked").val();
                                    var temp_cost = $("#information").find("input[name='temp_cost']").val();
                                    if(temp_mode == 1 && temp_cost == ''){
                                        seller_masg = "模板金额不能为空";
                                        seller_fald = false;
                                    }else if(temp_mode == 1 && isNaN(temp_cost)){
                                        seller_masg = "模板金额必须是数字";
                                        seller_fald = false;
                                    }
                                }
				if(name.val() == ""){
					error_div("#information input[name='name']","模板名称不能为空");
					fald = false;
				}else if(ten_file.val() == ""){
					error_div("#information input[name='ten_file']","请上传模板封面");
					fald = false;
				}else if(big_file.val() == ""){
					error_div("#information input[name='big_file']","请上传模板大图");
					fald = false;
				}else if(seller_fald === false){
                                    alert(seller_masg);
                                    error_div("#information input[name='temp_cost']",seller_masg);
                                    fald = false;
                                }else{
					var actionUrl = "visualhome.php?act=edit_information";  
					$("#information").ajaxSubmit({
						type: "POST",
						dataType: "JSON",
						url: actionUrl,
						data: {"action": "TemporaryImage"},
						success: function (data) {
							if(data.error == 1){
								alert(data.massege);
							}else{
                                                            if(template_type == 'seller'){
                                                                location.reload();
                                                            }else{
                                                                $("[ectype='templateList']").find("ul").html(data.content);
                                                            }
							}
                            resetHref();
						},
						async: true  
					});
					
					fald = true;
				}
				return fald;
			}
		});
	}
	
	error_div = function(obj,error, is_error){
		var error_div = $(obj).parents('div.value').find('div.form_prompt');
		$(obj).parents('div.value').find(".notic").hide();
		
		if(is_error != 1){
			$(obj).addClass("error");
		}
		
		$(obj).focus();
		error_div.find("label").remove();
		error_div.append("<label class='error'><i class='icon icon-exclamation-sign'></i>"+error+"</label>");
	}
	
	$(document).on("click","*[ectype='export']",function(){
		var checkboxes = '';
		var i = 0;
		$("[ectype='templateList']").find("input[name='checkboxes[]']:checked").each(function(){
			i++;
		})
		if(i > 0){
			$("#exportForm").submit();
		}else{
			alert("请选择导出对象！");
		}
	});
	</script>
</body>
</html>
<?php endif; ?>
