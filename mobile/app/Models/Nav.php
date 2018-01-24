<?php
 
namespace App\Models;

class Nav extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'nav';
	public $timestamps = false;
	protected $fillable = array('ctype', 'cid', 'name', 'ifshow', 'vieworder', 'opennew', 'url', 'type');
	protected $guarded = array();
}

?>
