<?php
 
namespace App\Models;

class WechatUserTag extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_user_tag';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'tag_id', 'openid');
	protected $guarded = array();
}

?>
