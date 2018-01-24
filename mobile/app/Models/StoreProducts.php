<?php
 
namespace App\Models;

class StoreProducts extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'store_products';
	protected $primaryKey = 'product_id';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'goods_attr', 'product_sn', 'product_number', 'ru_id', 'store_id');
	protected $guarded = array();
}

?>
