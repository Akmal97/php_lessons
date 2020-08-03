<?php

$productImageId = Request::getIntFromPost('product_image_id', false);

if (!$productImageId) {
    die("error with id");
}

$deleted = ProductImage::deleteById($productImageId);
die('ok');

//if ($deleted) {
//    Response::redirect('/products/list');
//} else {
//    die("some one error with delete");
//}