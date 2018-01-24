
<?php if ($this->_var['user_id']): ?>
	<a href="<?php echo $this->_var['site_domain']; ?>user.php" class="nick_name"><?php echo $this->_var['info']['nick_name']; ?></a>
<?php else: ?>
	<a href="<?php echo $this->_var['site_domain']; ?>user.php">Sign in</a>
    |
    <a href="user.php?act=register">Sign up</a>
<?php endif; ?>

    