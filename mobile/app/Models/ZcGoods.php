<?php
 
namespace App\Models;

class ZcGoods extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_goods';
	public $timestamps = false;
	protected $fillable = array('pid', 'limit', 'backer_num', 'price', 'shipping_fee', 'content', 'img', 'return_time', 'backer_list');
	protected $guarded = array();
}

?>
