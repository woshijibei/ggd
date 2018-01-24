<?php
 
namespace App\Models;

class WechatMenu extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_menu';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'pid', 'name', 'type', 'key', 'url', 'sort', 'status');
	protected $guarded = array();
}

?>
