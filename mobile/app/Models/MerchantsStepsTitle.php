<?php
 
namespace App\Models;

class MerchantsStepsTitle extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'merchants_steps_title';
	protected $primaryKey = 'tid';
	public $timestamps = false;
	protected $fillable = array('fields_steps', 'fields_titles', 'steps_style', 'titles_annotation', 'fields_special', 'special_type');
	protected $guarded = array();
}

?>
