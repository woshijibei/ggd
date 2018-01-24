<?php
 
namespace Illuminate\Contracts\Queue;

interface Job
{
	public function fire();

	public function release($delay = 0);

	public function delete();

	public function isDeleted();

	public function isDeletedOrReleased();

	public function attempts();

	public function failed($e);

	public function maxTries();

	public function timeout();

	public function getName();

	public function resolveName();

	public function getConnectionName();

	public function getQueue();

	public function getRawBody();
}


?>
