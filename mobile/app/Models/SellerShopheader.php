<?php
 
namespace App\Models;

class SellerShopheader extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'seller_shopheader';
	public $timestamps = false;
	protected $fillable = array('content', 'headtype', 'headbg_img', 'shop_color', 'seller_theme', 'ru_id');
	protected $guarded = array();
}

?>
