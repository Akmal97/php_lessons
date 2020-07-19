<?php

$id = $_GET['id'] ?? 0;
$id = (int) $id;

$category =[];

if ($id) {
    $category = get_category_by_id($connect, $id);
}


if (!empty($_POST)) {
    $category = get_category_from_post();
    $edited = update_category_by_id($connect, $id, $category);

    if ($edited) {
        header('location: /categories/list');
    } else {
        die("some insert error");
    }

}

$smarty->assign('category', $category);
$smarty->display('categories/edit.tpl');