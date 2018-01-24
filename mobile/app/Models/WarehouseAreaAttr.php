<?php
 
namespace App\Models;

class WarehouseAreaAttr extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'warehouse_area_attr';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'goods_attr_id', 'area_id', 'attr_price', 'admin_id');
	protected $guarded = array();
}

?>
