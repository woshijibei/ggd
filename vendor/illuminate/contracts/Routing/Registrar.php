<?php
 
namespace Illuminate\Contracts\Routing;

interface Registrar
{
	public function get($uri, $action);

	public function post($uri, $action);

	public function put($uri, $action);

	public function delete($uri, $action);

	public function patch($uri, $action);

	public function options($uri, $action);

	public function match($methods, $uri, $action);

	public function resource($name, $controller, array $options = array());

	public function group(array $attributes, $routes);

	public function substituteBindings($route);

	public function substituteImplicitBindings($route);
}


?>
