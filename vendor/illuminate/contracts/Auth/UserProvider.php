<?php
 
namespace Illuminate\Contracts\Auth;

interface UserProvider
{
	public function retrieveById($identifier);

	public function retrieveByToken($identifier, $token);

	public function updateRememberToken(Authenticatable $user, $token);

	public function retrieveByCredentials(array $credentials);

	public function validateCredentials(Authenticatable $user, array $credentials);
}


?>
