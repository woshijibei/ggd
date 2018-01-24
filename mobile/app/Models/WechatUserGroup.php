<?php
 
namespace App\Models;

class WechatUserGroup extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_user_group';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'group_id', 'name', 'count', 'sort');
	protected $guarded = array();
}

?>
