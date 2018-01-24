<?php
 
namespace App\Models;

class GoodsArticle extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_article';
	public $timestamps = false;
	protected $fillable = array('goods_id', 'article_id', 'admin_id');
	protected $guarded = array();
}

?>
