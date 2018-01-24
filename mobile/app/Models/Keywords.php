<?php
 
namespace App\Models;

class Keywords extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'keywords';
	public $timestamps = false;
	protected $fillable = array('date', 'searchengine', 'keyword', 'count');
	protected $guarded = array();
}

?>
