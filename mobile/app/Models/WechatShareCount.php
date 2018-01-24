<?php
 
namespace App\Models;

class WechatShareCount extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_share_count';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'openid', 'share_type', 'link', 'share_time');
	protected $guarded = array();
}

?>
