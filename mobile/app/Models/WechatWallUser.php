<?php
 
namespace App\Models;

class WechatWallUser extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_wall_user';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'wall_id', 'nickname', 'sex', 'headimg', 'status', 'addtime', 'checktime', 'openid', 'wechatname', 'headimgurl');
	protected $guarded = array();
}

?>
