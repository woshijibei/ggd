<?php
 
namespace App\Models;

class ShippingArea extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'shipping_area';
	protected $primaryKey = 'shipping_area_id';
	public $timestamps = false;
	protected $fillable = array('shipping_area_name', 'shipping_id', 'configure', 'ru_id');
	protected $guarded = array();

	public function shipping()
	{
		return $this->hasOne('App\\Models\\Shipping', 'shipping_id', 'shipping_id');
	}
}

?>
