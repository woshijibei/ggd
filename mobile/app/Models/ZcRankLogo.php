<?php
 
namespace App\Models;

class ZcRankLogo extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_rank_logo';
	public $timestamps = false;
	protected $fillable = array('logo_name', 'img', 'logo_intro');
	protected $guarded = array();
}

?>
