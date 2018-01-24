<?php
 
namespace App\Models;

class TouchNav extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'touch_nav';
	public $timestamps = false;
	protected $fillable = array('ctype', 'cid', 'name', 'ifshow', 'vieworder', 'opennew', 'url', 'type', 'pic');
	protected $guarded = array();
}

?>
