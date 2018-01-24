<?php
 
namespace App\Models;

class TouchAdPosition extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'touch_ad_position';
	protected $primaryKey = 'position_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'position_name', 'ad_width', 'ad_height', 'position_desc', 'position_style', 'is_public', 'theme', 'tc_id', 'tc_type');
	protected $guarded = array();
}

?>
