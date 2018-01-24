<?php
 
namespace App\Models;

class Searchengine extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'searchengine';
	public $timestamps = false;
	protected $fillable = array('date', 'searchengine', 'count');
	protected $guarded = array();
}

?>
