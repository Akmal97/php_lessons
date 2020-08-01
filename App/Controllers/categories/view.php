<?php

$category_id = Request::getIntFromGet('id');
;

$category = Category::getCategoryById($category_id);
$products = Product::getProductListByCategoryId($category_id);
$smarty->assign('current_category', $category);
$smarty->assign('products', $products);
$smarty->display('categories/view.tpl');