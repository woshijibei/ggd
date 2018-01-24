<div class="avatar">
    <a href="user.php?act=profile"><img src="<?php if ($this->_var['user_id']): ?><?php if ($this->_var['info']['user_picture']): ?><?php echo $this->_var['info']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/touxiang.jpg<?php endif; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/avatar.png<?php endif; ?>"></a>
</div>
<div class="login-info">
    <?php if ($this->_var['user_id']): ?>
    <span>Hi，<?php if ($this->_var['info']['nick_name']): ?><?php echo $this->_var['info']['nick_name']; ?><?php else: ?>Welcome to <?php echo $GLOBALS['_CFG']['shop_name']; ?>!<?php endif; ?></span>
    <a href="<?php echo $this->_var['site_domain']; ?>user.php" class="login-button login-success"><?php echo $this->_var['lang']['user_center']; ?></a>
    <?php else: ?>
    <span>Hi，Welcome to <?php echo $GLOBALS['_CFG']['shop_name']; ?>!</span>
    <a href="<?php echo $this->_var['site_domain']; ?>user.php" class="login-button"><?php echo $this->_var['lang']['please_login']; ?></a>
    <a href="user.php?act=register" target="_blank" class="register_button">Sign Up</a>
    <?php endif; ?>
</div>