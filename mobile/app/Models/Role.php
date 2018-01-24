<?php
 
namespace App\Models;

class Role extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'role';
	protected $primaryKey = 'role_id';
	public $timestamps = false;
	protected $fillable = array('role_name', 'action_list', 'role_describe');
	protected $guarded = array();
}

?>
