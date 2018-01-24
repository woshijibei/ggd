<?php if ($this->_var['full_page']): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
        <?php echo $this->fetch('library/seller_menu_left.lbi'); ?> 
        <div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
                <?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
                <div class="search-info">
                    <div class="search-form">
                        <form action="javascript:searchActivity()" name="searchForm">
                        	<div id="status" class="imitate_select select_w145">
                                <div class="cite"><?php echo $this->_var['lang']['adopt_status']; ?></div>
                                <ul>
                                    <li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['adopt_status']; ?></a></li>
                                    <li><a href="javascript:;" data-value="1" class="ftx-01"><?php echo $this->_var['lang']['not_audited']; ?></a></li>
                                    <li><a href="javascript:;" data-value="2" class="ftx-01"><?php echo $this->_var['lang']['audited_not_adopt']; ?></a></li>
                                    <li><a href="javascript:;" data-value="3" class="ftx-01"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></a></li>
                                </ul>
                                <input name="review_status" type="hidden" value="0"/>
                            </div>
                            <div class="search-key">
                                <input type="text" name="keyword" size="30" class="text text_2" placeholder="<?php echo $this->_var['lang']['goods_name']; ?>"/>
                                <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="submit" />
                            </div>
                        </form>
                    </div>
				</div>
                <form method="post" action="wholesale.php" name="listForm" onsubmit="return confirm(batch_drop_confirm);">
                <div class="list-div" id="listDiv">
                <?php endif; ?>
                <table class="ecsc-default-table">
                <thead>
                <tr>
                <th width="10%">
                    <div class="first_all">
                        <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" id="all" class="ui-checkbox" /><label for="all" class="ui-label"><a href="javascript:listTable.sort('act_id');"><?php echo $this->_var['lang']['record_id']; ?></a></label><div class="img"><?php echo $this->_var['sort_act_id']; ?></div>
                    </div>
                </th>
                <th width="20%" class="tl"><a href="javascript:listTable.sort('goods_name'); "><?php echo $this->_var['lang']['goods_name']; ?></a><div class="img"><?php echo $this->_var['sort_goods_name']; ?></div></th>
                <th width="30%">最小起订量</th>
                <th width="10%"><a href="javascript:listTable.sort('enabled'); "><?php echo $this->_var['lang']['enabled']; ?></a><div class="img"><?php echo $this->_var['sort_enabled']; ?></div></th>
                <th width="10%"><?php echo $this->_var['lang']['adopt_status']; ?></th>
                <th width="20%"><?php echo $this->_var['lang']['handler']; ?></th>
                </tr>
                </thead>
                <tbody>
                <?php $_from = $this->_var['wholesale_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'wholesale');if (count($_from)):
    foreach ($_from AS $this->_var['wholesale']):
?>
                <tr>
                <td><div class="first_all"><input value="<?php echo $this->_var['wholesale']['act_id']; ?>" name="checkboxes[]" type="checkbox" id="checkbox_<?php echo $this->_var['wholesale']['act_id']; ?>" class="ui-checkbox"><label class="ui-label" for="checkbox_<?php echo $this->_var['wholesale']['act_id']; ?>"><?php echo $this->_var['wholesale']['act_id']; ?></label></div></td>
                <td class="tl"><span class="activity_name w410"><?php echo htmlspecialchars($this->_var['wholesale']['goods_name']); ?></span></td>
                <td><?php echo $this->_var['wholesale']['moq']; ?></td>
                <td>
					<div class="switch <?php if ($this->_var['wholesale']['enabled']): ?>active<?php endif; ?>" title="<?php if ($this->_var['wholesale']['enabled']): ?>是<?php else: ?>否<?php endif; ?>" onclick="listTable.switchBt(this, 'toggle_enabled', <?php echo $this->_var['wholesale']['act_id']; ?>)">
						<div class="circle"></div>
					</div>
					<input type="hidden" value="0" name="">				
				</td>
                <td class="audit_status">
                    <?php if ($this->_var['wholesale']['review_status'] == 1): ?>
                    <font class="org2"><?php echo $this->_var['lang']['not_audited']; ?></font>
                    <?php elseif ($this->_var['wholesale']['review_status'] == 2): ?>
                    <font class="red"><?php echo $this->_var['lang']['audited_not_adopt']; ?></font>
                    <i class="tip yellow" title="<?php echo $this->_var['wholesale']['review_content']; ?>"><?php echo $this->_var['lang']['prompt']; ?></i>
                    <?php elseif ($this->_var['wholesale']['review_status'] == 3): ?>
                    <font class="green"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></font>
                    <?php endif; ?>
                </td>
                <td class="ecsc-table-handle tr">
                	<span><a href="wholesale.php?act=edit&amp;id=<?php echo $this->_var['wholesale']['act_id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn-green"><i class="icon icon-edit"></i><p><?php echo $this->_var['lang']['edit']; ?></p></a></span>
                	<span><a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['wholesale']['act_id']; ?>,'<?php echo $this->_var['lang']['drop_confirm']; ?>')" title="<?php echo $this->_var['lang']['drop']; ?>" class="btn-red"><i class="icon icon-trash"></i><p><?php echo $this->_var['lang']['drop']; ?></p></a></span>
                </td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10" class="td_border">
                            <div class="shenhe">
                                <input type="submit" name="drop" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="sc-btn btn_disabled" disabled="true" />
                                <input type="hidden" name="act" value="batch" />
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="20">
                            <?php echo $this->fetch('page.dwt'); ?>
                        </td>
                    </tr>
                </tfoot>
                </table>
                <?php if ($this->_var['full_page']): ?>
                </div>
              	</form>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript">
<!--
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

  
  onload = function()
  {
    startCheckOrder();
  }
  
  <?php if ($this->_var['priv_ru'] == 1): ?>
  function get_store_search(val){
    if(val == 1){
      document.forms['searchForm'].elements['merchant_id'].style.display = '';
      document.forms['searchForm'].elements['store_keyword'].style.display = 'none';
      document.forms['searchForm'].elements['store_type'].style.display = 'none';
    }else if(val == 2){
      document.forms['searchForm'].elements['merchant_id'].style.display = 'none';
      document.forms['searchForm'].elements['store_keyword'].style.display = '';
      document.forms['searchForm'].elements['store_type'].style.display = 'none';
    }else if(val == 3){
      document.forms['searchForm'].elements['merchant_id'].style.display = 'none';
      document.forms['searchForm'].elements['store_keyword'].style.display = '';
      document.forms['searchForm'].elements['store_type'].style.display = '';
    }else{
      document.forms['searchForm'].elements['merchant_id'].style.display = 'none';
      document.forms['searchForm'].elements['store_keyword'].style.display = 'none';
      document.forms['searchForm'].elements['store_type'].style.display = 'none';
    }
  }
  <?php endif; ?>

  /**
   * 搜索团购活动
   */
  function searchActivity()
  {
	  
    listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
	listTable.filter['review_status'] = Utils.trim(document.forms['searchForm'].elements['review_status'].value);
    listTable.filter['page'] = 1;
    listTable.loadList("wholesale_list");
  }
  
//-->

</script>
</body>
</html>
<?php endif; ?>