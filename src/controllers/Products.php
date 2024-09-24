<?php

class Products
{
	public function index()
	{
		require "./src/models/Product.php";
		$model = new Product();
		$products = $model->getdata();

		if (!empty($products)) {
			require "./src/views/products.php";
		}
	}

	public function show()
	{
		require "./src/views/products-show.php";
	}
}
