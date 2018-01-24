<?php
 
namespace App\Models;

class TouchTopic extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'touch_topic';
	public $timestamps = false;
	protected $fillable = array('topic_id', 'user_id', 'title', 'intro', 'start_time', 'end_time', 'data', 'template', 'css', 'topic_img', 'title_pic', 'base_style', 'htmls', 'keywords', 'description', 'review_status', 'review_content');
	protected $guarded = array();
}

?>
