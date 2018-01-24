<?php
 
namespace App\Models;

class SnatchLog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'snatch_log';
	protected $primaryKey = 'log_id';
	public $timestamps = false;
	protected $fillable = array('snatch_id', 'user_id', 'bid_price', 'bid_time');
	protected $guarded = array();
}

?>
