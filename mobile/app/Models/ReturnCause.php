<?php
 
namespace App\Models;

class ReturnCause extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'return_cause';
	protected $primaryKey = 'cause_id';
	public $timestamps = false;
	protected $fillable = array('cause_name', 'parent_id', 'sort_order', 'is_show');
	protected $guarded = array();
}

?>
