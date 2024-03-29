<?php
 
namespace App\Models;

class AccountLog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'account_log';
	protected $primaryKey = 'log_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'user_money', 'frozen_money', 'rank_points', 'pay_points', 'change_time', 'change_desc', 'change_type');
	protected $guarded = array();
}

?>
