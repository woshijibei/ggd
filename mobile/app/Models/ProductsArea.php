<?php
 
namespace App\Models;

class ProductsArea extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'products_area';
	protected $primaryKey = 'product_id';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'goods_attr', 'product_sn', 'bar_code', 'product_number', 'product_price', 'product_market_price', 'product_warn_number', 'area_id', 'admin_id');
	protected $guarded = array();
}

?>