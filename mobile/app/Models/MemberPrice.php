<?php
 
namespace App\Models;

class MemberPrice extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'member_price';
	protected $primaryKey = 'price_id';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'user_rank', 'user_price');
	protected $guarded = array();
}

?>
