<?php

include_once ROOT.'/models/Categories.php';
include_once ROOT.'/models/Product.php';

class ProductController
{
		public function actionView($productId)
		{
			$categories = array();
			$categories = Category::getCategoriesList();

			$product = Product::getProductById($productId);

			require_once(ROOT . '/views/product/view.php');

			return true;	
		}

		public function actionIndex()
		{
			$categories = array();
			$categories = Category::getCategoriesList();

			$productsList = array();
			$productsList = Product::getProductlist(5);

			require_once(ROOT . '/views/product/index.php');

			return true;	
		}
}