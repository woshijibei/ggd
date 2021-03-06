<?php
 
namespace App\Models;

class GoodsReport extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_report';
	protected $primaryKey = 'report_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'user_name', 'goods_id', 'goods_name', 'goods_image', 'title_id', 'type_id', 'inform_content', 'add_time', 'report_state', 'handle_type', 'handle_message', 'handle_time', 'admin_id');
	protected $guarded = array();
}

?>
