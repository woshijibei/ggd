<?php
 
namespace App\Models;

class GoodsReportTitle extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_report_title';
	protected $primaryKey = 'title_id';
	public $timestamps = false;
	protected $fillable = array('type_id', 'title_name', 'is_show');
	protected $guarded = array();
}

?>
