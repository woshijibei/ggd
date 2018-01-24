<?php
 
namespace App\Models;

class CartUserInfo extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'cart_user_info';
	public $timestamps = false;
	protected $fillable = array('ru_id', 'user_id', 'shipping_type', 'shipping_id');
	protected $guarded = array();
}

?>
