<?php
 
namespace App\Models;

class GoodsConshipping extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_conshipping';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'sfull', 'sreduce');
	protected $guarded = array();
}

?>
