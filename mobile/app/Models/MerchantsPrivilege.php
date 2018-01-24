<?php
 
namespace App\Models;

class MerchantsPrivilege extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'merchants_privilege';
	public $timestamps = false;
	protected $fillable = array('action_list', 'grade_id');
	protected $guarded = array();
}

?>
