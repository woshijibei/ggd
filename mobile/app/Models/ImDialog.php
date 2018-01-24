<?php
 
namespace App\Models;

class ImDialog extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'im_dialog';
	public $timestamps = false;
	protected $fillable = array('customer_id', 'services_id', 'goods_id', 'store_id', 'start_time', 'end_time', 'origin', 'status');
	protected $guarded = array();
}

?>
