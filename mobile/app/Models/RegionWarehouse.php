<?php
 
namespace App\Models;

class RegionWarehouse extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'region_warehouse';
	protected $primaryKey = 'region_id';
	public $timestamps = false;
	protected $fillable = array('regionId', 'parent_id', 'region_name', 'region_type', 'agency_id');
	protected $guarded = array();
}

?>
