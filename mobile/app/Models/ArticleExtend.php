<?php
 
namespace App\Models;

class ArticleExtend extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'article_extend';
	public $timestamps = false;
	protected $fillable = array('article_id', 'click', 'likenum', 'hatenum');
	protected $guarded = array();
}

?>
