<?php
 
namespace App\Models;

class VolumePrice extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'volume_price';
	public $timestamps = false;
	protected $fillable = array('price_type', 'goods_id', 'volume_number', 'volume_price');
	protected $guarded = array();
}

?>
