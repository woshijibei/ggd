<?php
 
namespace App\Models;

class Agency extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'agency';
	protected $primaryKey = 'agency_id';
	public $timestamps = false;
	protected $fillable = array('agency_name', 'agency_desc');
	protected $guarded = array();
}

?>
