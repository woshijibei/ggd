<?php
 
namespace App\Models;

class GoodsConsumption extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_consumption';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'cfull', 'creduce');
	protected $guarded = array();
}

?>
