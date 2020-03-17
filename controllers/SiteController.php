<?php

include_once ROOT.'/models/Product.php';

class SiteController {

    public function actionIndex() {

        $productsList = array();
		$productsList = Product::getProductlist(9);

        require_once (ROOT. '/views/site/index.php');

        return true;
    }



}