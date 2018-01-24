<?php
 
namespace App\Models;

class DiscussCircle extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'discuss_circle';
	protected $primaryKey = 'dis_id';
	public $timestamps = false;
	protected $fillable = array('dis_browse_num', 'like_num', 'parent_id', 'quote_id', 'goods_id', 'user_id', 'order_id', 'dis_type', 'dis_title', 'dis_text', 'add_time', 'user_name');
	protected $guarded = array();
}

?>
