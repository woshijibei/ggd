<?php
 
namespace App\Models;

class MerchantsRegionArea extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'merchants_region_area';
	protected $primaryKey = 'ra_id';
	public $timestamps = false;
	protected $fillable = array('ra_name', 'ra_sort', 'add_time', 'up_titme');
	protected $guarded = array();
}

?>
