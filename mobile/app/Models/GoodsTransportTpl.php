<?php
 
namespace App\Models;

class GoodsTransportTpl extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_transport_tpl';
	public $timestamps = false;
	protected $fillable = array('tid', 'user_id', 'shipping_id', 'region_id', 'configure');
	protected $guarded = array();
}

?>
