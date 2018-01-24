<?php
 
namespace App\Models;

class ZcProject extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'zc_project';
	public $timestamps = false;
	protected $fillable = array('cat_id', 'title', 'init_id', 'start_time', 'end_time', 'amount', 'join_money', 'join_num', 'focus_num', 'prais_num', 'title_img', 'details', 'describe', 'risk_instruction', 'img', 'is_best');
	protected $guarded = array();
}

?>
