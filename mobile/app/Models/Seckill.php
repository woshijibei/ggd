<?php
 
namespace App\Models;

class Seckill extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'seckill';
	protected $primaryKey = 'sec_id';
	public $timestamps = false;
	protected $fillable = array('acti_title', 'begin_time', 'is_putaway', 'acti_time', 'add_time');
	protected $guarded = array();
}

?>
