<?php
 
namespace App\Models;

class TouchAdsense extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'touch_adsense';
	public $timestamps = false;
	protected $fillable = array('from_ad', 'referer', 'clicks');
	protected $guarded = array();
}

?>
