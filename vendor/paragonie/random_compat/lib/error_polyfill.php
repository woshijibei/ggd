<?php
 
if (!class_exists('Error', false)) {
	class Error extends Exception
	{	}
}

if (!class_exists('TypeError', false)) {
	if (is_subclass_of('Error', 'Exception')) {
		class TypeError extends Error
		{		}
	}
	else {
		class TypeError extends Exception
		{		}
	}
}

?>
