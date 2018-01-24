<?php
 
namespace App\Api\Foundation;

class Controller extends \App\Http\base\Controllers\Frontend
{
	protected function apiReturn($data, $code = 0)
	{
		return array('code' => $code, 'data' => $data);
	}

	protected function validate($args, $pattern)
	{
		$validator = Validation::createValidation();
		$rules = Validation::transPattern($pattern);

		if ($validator->validate($rules)->create($args) === false) {
			return $validator->getError();
		}
		else {
			return true;
		}
	}
}

?>
