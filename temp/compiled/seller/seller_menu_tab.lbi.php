<div class="tabmenu">
	<ul class="tab">
		<?php $_from = $this->_var['tab_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'menu_0_39808200_1513839212');if (count($_from)):
    foreach ($_from AS $this->_var['menu_0_39808200_1513839212']):
?>
		<li <?php if ($this->_var['menu_0_39808200_1513839212']['curr']): ?>class="active"<?php endif; ?>><a href="<?php if ($this->_var['menu_0_39808200_1513839212']['href']): ?><?php echo $this->_var['menu_0_39808200_1513839212']['href']; ?><?php else: ?>javascript:void(0);<?php endif; ?>" <?php if ($this->_var['menu_0_39808200_1513839212']['ectype']): ?>ectype="<?php echo $this->_var['menu_0_39808200_1513839212']['ectype']; ?>"<?php endif; ?> <?php if ($this->_var['menu_0_39808200_1513839212']['ext']): ?><?php echo $this->_var['menu_0_39808200_1513839212']['ext']; ?><?php endif; ?>><?php echo $this->_var['menu_0_39808200_1513839212']['text']; ?></a></li>
		<?php endforeach; else: ?>
		<li class="active"><a href="javascript:;"><?php echo $this->_var['ur_here']; ?></a></li>
		<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>							
	</ul>
</div>
<?php if ($this->_var['action_link']): ?>
<div class="btn-info">
    <?php if ($this->_var['action_link']): ?>
    <a class="sc-btn sc-blue-btn" href="<?php echo $this->_var['action_link']['href']; ?>"><i class="<?php echo $this->_var['action_link']['class']; ?>"></i><?php echo $this->_var['action_link']['text']; ?></a>
    <?php endif; ?>
    <?php if ($this->_var['action_link2']): ?>
    <a class="sc-btn sc-blue-btn" href="<?php echo $this->_var['action_link2']['href']; ?>"><i class="<?php echo $this->_var['action_link2']['class']; ?>"></i><?php echo $this->_var['action_link2']['text']; ?></a>
    <?php endif; ?>
    <?php if ($this->_var['action_link3']): ?>
    <a class="sc-btn sc-blue-btn" href="<?php echo $this->_var['action_link3']['href']; ?>"><i class="<?php echo $this->_var['action_link3']['class']; ?>"></i><?php echo $this->_var['action_link3']['text']; ?></a>
    <?php endif; ?>
</div>
<?php endif; ?>
