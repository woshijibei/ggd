<?php
 
namespace App\Repositories\Product;

class ProductRepository implements \App\Contracts\Repository\Product\ProductRepositoryInterface
{
	private $model;

	public function __construct()
	{
		$this->model = \App\Models\Products::where('product_id', '<>', 0);
	}

	public function field($filed)
	{
		$this->model->select($filed);
		return $this;
	}

	public function findBy($column)
	{
		foreach ($column as $k => $v) {
			$this->model = $this->model->where($k, $v);
		}

		return $this;
	}

	public function column($column)
	{
		$row = $this->model->select($column)->first();

		if ($row === null) {
			return array();
		}

		$row = $row->toArray();
		return $row[$column];
	}
}

?>
