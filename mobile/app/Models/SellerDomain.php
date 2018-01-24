<?php
 
namespace App\Models;

class SellerDomain extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'seller_domain';
	public $timestamps = false;
	protected $fillable = array('domain_name', 'ru_id', 'is_enable', 'validity_time');
	protected $guarded = array();
}

?>
