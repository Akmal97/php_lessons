<?php /* Smarty version 2.6.31, created on 2020-08-03 08:11:47
         compiled from header.tpl */ ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список товаров</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/styles.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
<div class="site_wrapper">
    <ul class="top_menu">
        <li><a href="/products/" class="menu_link">Список товаров</a></li>
        <li><a href="/categories/" class="menu_link">Список категорий</a></li>
        <li><a href="/import/index" class="menu_link">Импорт товаров</a></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <nav class="nav flex-column nav-pills">
                    <?php $_from = $this->_tpl_vars['categories_shared']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
                        <a href="/categories/view?id=<?php echo $this->_tpl_vars['e']['id']; ?>
" class="nav-link<?php if ($this->_tpl_vars['current_category']['id'] == $this->_tpl_vars['e']['id']): ?> active<?php endif; ?>"><?php echo $this->_tpl_vars['e']['name']; ?>
</a>
                    <?php endforeach; endif; unset($_from); ?>
                </nav>
            </div>
            <div class="col-9">
                <div class="content">
                    <?php if ($this->_tpl_vars['h1']): ?><h1><?php echo $this->_tpl_vars['h1']; ?>
</h1><?php endif; ?>
