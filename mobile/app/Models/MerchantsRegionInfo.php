<?php
 
namespace App\Models;

class MerchantsRegionInfo extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'merchants_region_info';
	public $timestamps = false;
	protected $fillable = array('ra_id', 'region_id');
	protected $guarded = array();
}

?>
