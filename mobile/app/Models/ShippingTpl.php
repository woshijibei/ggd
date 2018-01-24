<?php
 
namespace App\Models;

class ShippingTpl extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'shipping_tpl';
	protected $primaryKey = 'st_id';
	public $timestamps = false;
	protected $fillable = array('shipping_id', 'ru_id', 'print_bg', 'print_model', 'config_lable', 'shipping_print', 'update_time');
	protected $guarded = array();
}

?>
