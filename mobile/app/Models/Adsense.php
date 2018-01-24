<?php
 
namespace App\Models;

class Adsense extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'adsense';
	public $timestamps = false;
	protected $fillable = array('from_ad', 'referer', 'clicks');
	protected $guarded = array();
}

?>
