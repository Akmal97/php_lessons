<?php

if (Request::isPost()) {

    $product = Product::getDataFromPost();
    $productId = Product::add($product);

    $imageUrl = trim($_POST['image_url']);
    ProductImage::uploadImageByUrl($productId, $imageUrl);

    $uploadImages = $_FILES['images'] ?? [];
    ProductImage::uploadImages($productId, $uploadImages);

    if ($productId) {
        Response::redirect('/products/list');
    } else {
        die("some insert error");
    }
}

$categories = Category::getCategoryList();

$smarty->assign('categories', $categories);
$smarty->display('products/add.tpl');


