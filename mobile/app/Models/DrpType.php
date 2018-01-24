<?php
 
namespace App\Models;

class DrpType extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'drp_type';
	public $timestamps = false;
	protected $fillable = array('user_id', 'cat_id', 'goods_id', 'type', 'add_time');
	protected $guarded = array();
}

?>
