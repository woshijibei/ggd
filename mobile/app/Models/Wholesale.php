<?php
 
namespace App\Models;

class Wholesale extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wholesale';
	protected $primaryKey = 'act_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'goods_id', 'goods_name', 'rank_ids', 'prices', 'enabled', 'review_status', 'review_content');
	protected $guarded = array();
}

?>
