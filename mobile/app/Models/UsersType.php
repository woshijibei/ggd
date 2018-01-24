<?php
 
namespace App\Models;

class UsersType extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'users_type';
	protected $primaryKey = 'user_id';
	public $timestamps = false;
	protected $fillable = array('enterprise_personal', 'companyname', 'contactname', 'companyaddress', 'industry', 'surname', 'givenname', 'agreement', 'country', 'province', 'city', 'district');
	protected $guarded = array();
}

?>
