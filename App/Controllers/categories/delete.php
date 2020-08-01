<?php

$id = Request::getIntFromPost('id');
;

if (!$id) {
    die("error with id");
}

$deleted = Category::deleteCategoryById($id);

if ($deleted) {
    Response::redirect('/categories/list');
} else {
    die("some one error with delete");
}