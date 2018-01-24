<?php
 
namespace App\Models;

class AppealImg extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'appeal_img';
	protected $primaryKey = 'img_id';
	public $timestamps = false;
	protected $fillable = array('order_id', 'complaint_id', 'ru_id', 'img_file');
	protected $guarded = array();
}

?>
