<?php

if (Request::isPost()) {
    $category = Category::getCategoryFromPost();
    $inserted = Category::addCategory($category);

    if ($inserted) {
        Response::redirect('/categories/list');
    } else {
        die("some insert error");
    }
}

$smarty->display('categories/add.tpl');


