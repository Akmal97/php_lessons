<?php

$productId = Request::getIntFromGet('id');

$product =[];

if ($productId) {
    $product = Product::getProductById($productId);
}

if (Request::isPost()) {
    $productData = Product::getDataFromPost();
    $edited = Product::updateById($productId, $productData);

    $path = APP_UPLOAD_PRODUCT_DIR . '/' . $productId;

    if (!file_exists($path)) {
        mkdir($path);
    }

    $imageUrl = trim($_POST['image_url']);
    ProductImage::uploadImageByUrl($productId, $imageUrl);

    $uploadImages = $_FILES['images'] ?? [];
    ProductImage::uploadImages($productId, $uploadImages);

    Response::redirect('/products/list');
}
$categories = Category::getCategoryList();

$smarty->assign('categories', $categories);
$smarty->assign('e', $product);
$smarty->display('products/edit.tpl');

