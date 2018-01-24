<?php
 
namespace App\Models;

class WechatPrize extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'wechat_prize';
	public $timestamps = false;
	protected $fillable = array('wechat_id', 'openid', 'prize_name', 'issue_status', 'winner', 'dateline', 'prize_type', 'activity_type', 'market_id');
	protected $guarded = array();
}

?>
