<?php

$categories = Category::getCategoryList();

$smarty->assign('categories', $categories);
$smarty->display('categories/index.tpl');
