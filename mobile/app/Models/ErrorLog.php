<?php
 
namespace App\Models;

class ErrorLog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'error_log';
	public $timestamps = false;
	protected $fillable = array('info', 'file', 'time');
	protected $guarded = array();
}

?>
