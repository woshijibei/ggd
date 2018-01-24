<?php
 
namespace App\Models;

class SeckillTimeBucket extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'seckill_time_bucket';
	public $timestamps = false;
	protected $fillable = array('begin_time', 'end_time', 'title');
	protected $guarded = array();
}

?>
