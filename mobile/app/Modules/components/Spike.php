<?php
 
return array(
	'id'      => 'mod-spike',
	'module'  => 'spike',
	'setting' => false,
	'data'    => array(
		'spikeName'   => 'Flash Deals',
		'endTime'     => date('Y/m/d H:i:s', time() + (7 * 24 * 3600)),
		'day'         => '0',
		'hour'        => '0',
		'min'         => '0',
		'sec'         => '0',
		'moreLink'    => '#',
		'imgList'     => array(),
		'showTag'     => array(
			array('key' => '0', 'type' => 'checkbox', 'text' => 'Price'),
			array('key' => '1', 'type' => 'checkbox', 'text' => '市场价')
			),
		'showStyle'   => array(
			array('key' => '0', 'type' => 'radio', 'text' => '样式一')
			),
		'isTagSel'    => array('0', '1', '2'),
		'isShowStyle' => '0'
		)
	);

?>
