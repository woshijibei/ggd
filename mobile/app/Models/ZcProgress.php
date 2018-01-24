<?php
 
namespace App\Models;

class ZcProgress extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_progress';
	public $timestamps = false;
	protected $fillable = array('pid', 'progress', 'add_time', 'img');
	protected $guarded = array();
}

?>
