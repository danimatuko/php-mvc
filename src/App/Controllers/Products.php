<?php

namespace App\Controllers;

use App\Models\Product;

class Products
{
	public function index()
	{
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
