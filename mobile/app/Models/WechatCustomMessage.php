<?php
 
namespace App\Models;

class WechatCustomMessage extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_custom_message';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'uid', 'msg', 'send_time', 'is_wechat_admin');
	protected $guarded = array();
}

?>
