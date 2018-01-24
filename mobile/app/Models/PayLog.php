<?php
 
namespace App\Models;

class PayLog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'pay_log';
	protected $primaryKey = 'log_id';
	public $timestamps = false;
	protected $fillable = array('order_id', 'order_amount', 'order_type', 'is_paid', 'openid', 'transid');
	protected $guarded = array();
}

?>
