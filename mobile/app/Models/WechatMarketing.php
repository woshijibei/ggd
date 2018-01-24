<?php
 
namespace App\Models;

class WechatMarketing extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_marketing';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'marketing_type', 'name', 'keywords', 'command', 'description', 'starttime', 'endtime', 'addtime', 'logo', 'background', 'config', 'support', 'status', 'qrcode', 'url');
	protected $guarded = array();
}

?>
