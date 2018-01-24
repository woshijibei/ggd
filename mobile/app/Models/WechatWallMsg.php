<?php
 
namespace App\Models;

class WechatWallMsg extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_wall_msg';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'wall_id', 'user_id', 'content', 'addtime', 'checktime', 'status');
	protected $guarded = array();
}

?>
