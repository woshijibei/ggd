<?php
 
namespace App\Models;

class Wechat extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat';
	public $timestamps = false;
	protected $fillable = array('name', 'orgid', 'weixin', 'token', 'appid', 'appsecret', 'encodingaeskey', 'type', 'oauth_status', 'secret_key', 'oauth_redirecturi', 'oauth_count', 'time', 'sort', 'status', 'default_wx', 'ru_id');
	protected $guarded = array();
}

?>
