<?php
 
namespace App\Models;

class GoodsType extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_type';
	protected $primaryKey = 'cat_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'cat_name', 'enabled', 'attr_group');
	protected $guarded = array();
}

?>