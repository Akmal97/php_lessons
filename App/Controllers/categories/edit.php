<?php

$id = Request::getIntFromGet('id');

$category =[];

if ($id) {
    $category = Category::getCategoryById($id);
}


if (Request::isPost()) {
    $category = Category::getCategoryFromPost();
    $edited = Category::updateCategoryById($id, $category);

    if ($edited) {
        Response::redirect('/categories/list');
    } else {
        die("some insert error");
    }

}

$smarty->assign('category', $category);
$smarty->display('categories/edit.tpl');