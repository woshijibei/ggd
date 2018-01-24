<?php
 
return array(
	'id'      => 'mod-product',
	'module'  => 'product',
	'setting' => false,
	'data'    => array(
		'isStyleSel'       => '1',
		'showProductClass' => array('small' => false, 'big' => false, 'normal' => true),
		'showStyle'        => array(
			array('key' => '0', 'type' => 'radio', 'text' => '大图'),
			array('key' => '1', 'type' => 'radio', 'text' => '中图'),
			array('key' => '2', 'type' => 'radio', 'text' => '小图')
			),
		'isTagSel'         => array('0', '1'),
		'showTag'          => array(
			array('key' => '0', 'type' => 'checkbox', 'text' => '{$lang.goods_inventory}'),
			array('key' => '1', 'type' => 'checkbox', 'text' => '{$lang.sort_sales}')
			),
		'showMod'          => array(
			array('key' => 'best', 'type' => 'radio', 'text' => 'BEST'),
			array('key' => 'new', 'type' => 'radio', 'text' => 'NEW'),
			array('key' => 'hot', 'type' => 'radio', 'text' => 'HOT')
			),
		'isShowMod'        => 'best',
		'number'           => '10',
		'imgList'          => array()
		)
	);

?>
