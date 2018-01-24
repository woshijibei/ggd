<?php
 
namespace App\Models;

class LinkDescTemporary extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'link_desc_temporary';
	public $timestamps = false;
	protected $fillable = array('goods_id');
	protected $guarded = array();
}

?>
