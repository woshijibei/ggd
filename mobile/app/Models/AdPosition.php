<?php
 
namespace App\Models;

class AdPosition extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'ad_position';
	protected $primaryKey = 'position_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'position_name', 'ad_width', 'ad_height', 'position_model', 'position_desc', 'position_style', 'is_public', 'theme');
	protected $guarded = array();
}

?>
