<?php
 
namespace App\Models;

class GoodsCat extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_cat';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'cat_id');
	protected $guarded = array();
}

?>
