<?php
 
namespace App\Models;

class SessionsData extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'sessions_data';
	protected $primaryKey = 'sesskey';
	public $timestamps = false;
	protected $fillable = array('expiry', 'data');
	protected $guarded = array();
}

?>
