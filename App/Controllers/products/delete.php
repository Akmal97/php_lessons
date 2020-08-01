<?php

$id = Request::getIntFromPost('id', false);

if (!$id) {
    die("error with id");
}

$deleted = Product::deleteById($id);

if ($deleted) {
    Response::redirect('/products/list');
} else {
    die("some one error with delete");
}