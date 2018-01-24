<?php
 
namespace App\Models;

class GoodsReportType extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'goods_report_type';
	protected $primaryKey = 'type_id';
	public $timestamps = false;
	protected $fillable = array('type_name', 'type_desc', 'is_show');
	protected $guarded = array();
}

?>
