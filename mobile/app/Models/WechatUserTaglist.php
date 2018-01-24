<?php
 
namespace App\Models;

class WechatUserTaglist extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_user_taglist';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'tag_id', 'name', 'count', 'sort');
	protected $guarded = array();
}

?>
