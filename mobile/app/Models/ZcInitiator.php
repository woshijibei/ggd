<?php
 
namespace App\Models;

class ZcInitiator extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_initiator';
	public $timestamps = false;
	protected $fillable = array('name', 'company', 'img', 'intro', 'describe', 'rank');
	protected $guarded = array();
}

?>
