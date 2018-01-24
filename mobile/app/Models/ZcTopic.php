<?php
 
namespace App\Models;

class ZcTopic extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_topic';
	protected $primaryKey = 'topic_id';
	public $timestamps = false;
	protected $fillable = array('parent_topic_id', 'reply_topic_id', 'topic_status', 'topic_content', 'user_id', 'pid', 'add_time');
	protected $guarded = array();
}

?>