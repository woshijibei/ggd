<?php
 
namespace App\Models;

class CollectBrand extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'collect_brand';
	protected $primaryKey = 'rec_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'brand_id', 'add_time', 'ru_id');
	protected $guarded = array();
}

?>
