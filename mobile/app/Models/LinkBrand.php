<?php
 
namespace App\Models;

class LinkBrand extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'link_brand';
	public $timestamps = false;
	protected $fillable = array('bid', 'brand_id');
	protected $guarded = array();
}

?>
