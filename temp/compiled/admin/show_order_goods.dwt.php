<div class="brank_s"></div>
<div class="tit">
    <div class="th thd1"><?php echo $this->_var['lang']['goods_name_brand']; ?></div>
    <div class="th thd2"><?php echo $this->_var['lang']['goods_sn']; ?></div>
    <div class="th thd3"><?php echo $this->_var['lang']['goods_price']; ?></div>
    <div class="th thd4"><?php echo $this->_var['lang']['goods_number']; ?></div>
    <div class="th thd5"><?php echo $this->_var['lang']['goods_attr']; ?></div>
    <div class="th thd6"><?php echo $this->_var['lang']['storage']; ?></div>
    <div class="th thd7"><?php echo $this->_var['lang']['subtotal']; ?></div>
</div>
<?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goodsList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goodsList']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goodsList']['iteration']++;
?>		
<div class="con_tr">
    <div class="td thd1">
        <div class="img"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" width="50" height="50" /></div>
        <div class="name">
			<?php if ($this->_var['goods']['oi_extension_code'] == "group_buy"): ?>
			<a href="../group_buy.php?act=view&id=<?php echo $this->_var['goods']['extension_id']; ?>" target="_blank">
			<?php elseif ($this->_var['goods']['oi_extension_code'] == "snatch"): ?>
			<a href="../snatch.php?id=<?php echo $this->_var['goods']['extension_id']; ?>" target="_blank">
			<?php elseif ($this->_var['goods']['oi_extension_code'] == "seckill"): ?>
			<a href="../seckill.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank">
			<?php elseif ($this->_var['goods']['oi_extension_code'] == "auction"): ?>
			<a href="../auction.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank">	
			<?php elseif ($this->_var['goods']['oi_extension_code'] == "exchange_goods"): ?>
			<a href="../exchange.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank">
			<?php elseif ($this->_var['goods']['oi_extension_code'] == "presale"): ?>
			<a href="../presale.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank">
			<?php elseif ($this->_var['goods']['o_extension_code'] == "package_buy"): ?>
			<a href="../package.php" target="_blank">
			<?php else: ?>
            <a href="../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank">
			<?php endif; ?>
                <?php echo $this->_var['goods']['goods_name']; ?>
                <?php if ($this->_var['goods']['brand_name']): ?><span class="org">[ <?php echo $this->_var['goods']['brand_name']; ?> ]</span><?php endif; ?>
				<?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?>
                <?php if ($this->_var['goods']['is_gift']): ?>
                    <span class="red">
                        <?php if ($this->_var['goods']['goods_price'] > 0): ?>
                            <?php echo $this->_var['lang']['remark_favourable']; ?>
                        <?php else: ?>
                            <?php echo $this->_var['lang']['remark_gift']; ?>
                        <?php endif; ?>
                    </span>
                <?php endif; ?>
                <?php if ($this->_var['goods']['parent_id'] > 0): ?><span class="red"><?php echo $this->_var['lang']['remark_fittings']; ?></span><?php endif; ?>
            </a>
        </div>
    </div>
    <div class="td thd2"><?php echo $this->_var['goods']['goods_sn']; ?></div>
    <div class="td thd3"><?php echo $this->_var['goods']['formated_goods_price']; ?></div>
    <div class="td thd4"><?php echo $this->_var['goods']['goods_number']; ?></div>
    <div class="td thd5"><?php if ($this->_var['goods']['goods_attr']): ?><?php echo nl2br($this->_var['goods']['goods_attr']); ?><?php else: ?>&nbsp;<?php endif; ?></div>
    <div class="td thd6"><?php echo $this->_var['goods']['storage']; ?></div>
    <div class="td thd7"><?php echo $this->_var['goods']['formated_subtotal']; ?></div>
</div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>