<?php
 
namespace App\Models;

class SingleSunImages extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'single_sun_images';
	public $timestamps = false;
	protected $fillable = array('user_id', 'order_id', 'goods_id', 'img_file', 'img_thumb', 'cont_desc', 'comment_id', 'img_type');
	protected $guarded = array();
}

?>
