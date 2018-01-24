<?php
 
namespace App\Models;

class WechatRedpackAdvertice extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_redpack_advertice';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'market_id', 'icon', 'content', 'url');
	protected $guarded = array();
}

?>
