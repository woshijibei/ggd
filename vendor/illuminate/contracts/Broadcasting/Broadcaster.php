<?php
 
namespace Illuminate\Contracts\Broadcasting;

interface Broadcaster
{
	public function auth($request);

	public function validAuthenticationResponse($request, $result);

	public function broadcast(array $channels, $event, array $payload = array());
}


?>
