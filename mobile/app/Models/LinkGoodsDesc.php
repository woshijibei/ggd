<?php
 
namespace App\Models;

class LinkGoodsDesc extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'link_goods_desc';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'desc_name', 'goods_desc');
	protected $guarded = array();
}

?>
