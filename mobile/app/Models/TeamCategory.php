<?php
 
namespace App\Models;

class TeamCategory extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'team_category';
	public $timestamps = false;
	protected $fillable = array('name', 'parent_id', 'content', 'tc_img', 'sort_order', 'status');
	protected $guarded = array();
}

?>
