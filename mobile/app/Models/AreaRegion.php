<?php
 
namespace App\Models;

class AreaRegion extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'area_region';
	public $timestamps = false;
	protected $fillable = array('shipping_area_id', 'region_id', 'ru_id');
	protected $guarded = array();
}

?>
