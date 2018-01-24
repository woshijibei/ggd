<?php
 
namespace App\Models;

class SellerQrcode extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'seller_qrcode';
	protected $primaryKey = 'qrcode_id';
	public $timestamps = false;
	protected $fillable = array('ru_id', 'qrcode_thumb');
	protected $guarded = array();
}

?>
