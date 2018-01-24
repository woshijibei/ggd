<?php
 
namespace App\Models;

class OrderAction extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'order_action';
	protected $primaryKey = 'action_id';
	public $timestamps = false;
	protected $fillable = array('order_id', 'action_user', 'order_status', 'shipping_status', 'pay_status', 'action_place', 'action_note', 'log_time');
	protected $guarded = array();
}

?>
