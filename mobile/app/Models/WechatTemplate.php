<?php
 
namespace App\Models;

class WechatTemplate extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_template';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'template_id', 'code', 'content', 'template', 'title', 'add_time', 'status');
	protected $guarded = array();
}

?>
