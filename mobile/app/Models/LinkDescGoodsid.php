<?php
 
namespace App\Models;

class LinkDescGoodsid extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'link_desc_goodsid';
	public $timestamps = false;
	protected $fillable = array('d_id', 'goods_id');
	protected $guarded = array();
}

?>
