<?php
 
namespace App\Models;

class MerchantsPercent extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'merchants_percent';
	protected $primaryKey = 'percent_id';
	public $timestamps = false;
	protected $fillable = array('percent_value', 'sort_order', 'add_time');
	protected $guarded = array();
}

?>
