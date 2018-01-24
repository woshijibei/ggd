<?php
 
namespace App\Models;

class MerchantsDocumenttitle extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'merchants_documenttitle';
	protected $primaryKey = 'dt_id';
	public $timestamps = false;
	protected $fillable = array('dt_title', 'cat_id');
	protected $guarded = array();
}

?>
