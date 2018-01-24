<?php
 
namespace App\Models;

class StoreAction extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'store_action';
	protected $primaryKey = 'action_id';
	public $timestamps = false;
	protected $fillable = array('parent_id', 'action_code', 'relevance', 'action_name');
	protected $guarded = array();
}

?>