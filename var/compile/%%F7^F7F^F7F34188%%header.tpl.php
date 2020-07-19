<?php /* Smarty version 2.6.31, created on 2020-07-19 17:57:11
         compiled from header.tpl */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список товаров</title>

    <link rel="stylesheet" href="/assets/styles.css">

</head>
<body>
<div class="site_wrapper">
    <ul class="top_menu">
        <li><a href="/products/" class="menu_link">Список товаров</a></li>
        <li><a href="/categories/" class="menu_link">Список категорий</a></li>
    </ul>
    <?php if ($this->_tpl_vars['h1']): ?><h1><?php echo $this->_tpl_vars['h1']; ?>
</h1><?php endif; ?>