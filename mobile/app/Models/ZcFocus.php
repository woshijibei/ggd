<?php
 
namespace App\Models;

class ZcFocus extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_focus';
	protected $primaryKey = 'rec_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'pid', 'add_time');
	protected $guarded = array();
}

?>
