<?php
return array(
	'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController   
	'product/([0-9]+)' => 'product/view/$1',
	'product' => 'product/index',
	'zakaz' => 'zakaz/index',
	'catalog' => 'catalog/index',
    'about' => 'about/index',
	'' => 'site/index',
);