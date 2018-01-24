<?php
 
namespace App\Models;

class WechatPoint extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_point';
	public $timestamps = false;
	protected $fillable = array('log_id', 'wechat_id', 'openid', 'keywords', 'createtime');
	protected $guarded = array();
}

?>
