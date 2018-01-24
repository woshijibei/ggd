<?php
 
namespace App\Models;

class MerchantsAccountLog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'merchants_account_log';
	protected $primaryKey = 'log_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'user_money', 'frozen_money', 'change_time', 'change_desc', 'change_type');
	protected $guarded = array();
}

?>
