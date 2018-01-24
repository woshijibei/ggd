<?php
 
namespace App\Models;

class ConnectUser extends \Illuminate\Database\Eloquent\Model
{
	protected $table = 'connect_user';
	public $timestamps = false;
	protected $fillable = array('connect_code', 'user_id', 'is_admin', 'open_id', 'refresh_token', 'access_token', 'profile', 'create_at', 'expires_in', 'expires_at');
	protected $guarded = array();
}

?>