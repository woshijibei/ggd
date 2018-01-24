<?php
 
namespace App\Api\Controllers\Store;

class StoreController extends \App\Api\Controllers\Controller
{
	protected $store;

	public function __construct(\App\Repositories\Store\StoreRepository $store)
	{
		$this->store = $store;
	}

	public function index()
	{
		return $this->store->all();
	}

	public function detail($id)
	{
		return $this->store->detail($id);
	}
}

?>
