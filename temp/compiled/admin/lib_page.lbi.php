<?php if ($this->_var['filter']['page_count'] > 1): ?>
<div class="pagination">
    <ul>
        <li><?php if ($this->_var['filter']['page'] != 1): ?><a class="demo" href="javascript:;" onclick="gallery_album_list_pb(this,'1')"><span>Home</span></a><?php else: ?><span>Home</span><?php endif; ?></li>
        <li><?php if ($this->_var['filter']['page'] != 1): ?><a class="demo" href="javascript:;" onclick="gallery_album_list_pb(this,'<?php echo $this->_var['filter']['page']; ?>','prev')" ><span>上一页</span></a><?php else: ?><span>上一页</span><?php endif; ?></li>
        <?php $_from = $this->_var['filter']['page_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'arr');if (count($_from)):
    foreach ($_from AS $this->_var['arr']):
?>
        <li><?php if ($this->_var['filter']['page'] == $this->_var['arr']): ?><span class="currentpage"><?php echo $this->_var['arr']; ?></span><?php else: ?><a class="demo" href="javascript:;" onclick="gallery_album_list_pb(this,'<?php echo $this->_var['arr']; ?>')" ><span><?php echo $this->_var['arr']; ?></span></a><?php endif; ?></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <li><?php if ($this->_var['filter']['page'] != $this->_var['filter']['page_count']): ?><a class="demo" href="javascript:;" onclick="gallery_album_list_pb(this,'<?php echo $this->_var['filter']['page']; ?>','next')" ><span>下一页</span></a><?php else: ?><span>下一页</span><?php endif; ?></li>
        <li><?php if ($this->_var['filter']['page'] != $this->_var['filter']['page_count']): ?><a class="demo" href="javascript:;" onclick="gallery_album_list_pb(this,'<?php echo $this->_var['filter']['page_count']; ?>')"><span>末页</span></a><?php else: ?><span>末页</span><?php endif; ?></li>
    </ul>
</div>
<?php endif; ?>
