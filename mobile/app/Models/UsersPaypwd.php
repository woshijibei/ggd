<?php
 
namespace App\Models;

class UsersPaypwd extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'users_paypwd';
	protected $primaryKey = 'paypwd_id';
	public $timestamps = false;
	protected $fillable = array('user_id', 'ec_salt', 'pay_password', 'pay_online', 'user_surplus', 'user_point', 'baitiao', 'gift_card');
	protected $guarded = array();
}

?>
