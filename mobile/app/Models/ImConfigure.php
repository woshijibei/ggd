<?php
 
namespace App\Models;

class ImConfigure extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'im_configure';
	public $timestamps = false;
	protected $fillable = array('ser_id', 'type', 'content', 'is_on');
	protected $guarded = array();
}

?>
