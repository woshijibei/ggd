<?php
 
namespace App\Models;

class WechatExtend extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_extend';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'name', 'keywords', 'command', 'config', 'type', 'enable', 'author', 'website');
	protected $guarded = array();
}

?>
