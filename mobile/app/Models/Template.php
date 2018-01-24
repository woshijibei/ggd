<?php
 
namespace App\Models;

class Template extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'template';
	public $timestamps = false;
	protected $fillable = array('filename', 'region', 'library', 'sort_order', 'number', 'type', 'theme', 'remarks', 'floor_tpl');
	protected $guarded = array();
}

?>
