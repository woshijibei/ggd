<?php
 
namespace App\Models;

class DrpLog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'drp_log';
	protected $primaryKey = 'log_id';
	public $timestamps = false;
	protected $fillable = array('order_id', 'time', 'user_id', 'user_name', 'money', 'point', 'drp_level', 'is_separate', 'separate_type');
	protected $guarded = array();
}

?>