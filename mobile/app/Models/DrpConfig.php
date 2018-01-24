<?php
 
namespace App\Models;

class DrpConfig extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'drp_config';
	public $timestamps = false;
	protected $fillable = array('code', 'type', 'store_range', 'value', 'name', 'warning', 'sort_order');
	protected $guarded = array();
}

?>
