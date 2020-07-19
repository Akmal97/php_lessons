<?php /* Smarty version 2.6.31, created on 2020-07-19 18:48:13
         compiled from categories/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('h1' => "Cписок категорий")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p>
    <a href="/categories/add">Добавить</a>
</p>

<div class="products_wrapper">
    <div class="products_wrapper__list">
        <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['e']):
?>
            <div class="products_wrapper__list_item">
                <div class="product_image"></div>
                <div class="product_name">
                    <a href="#"><?php echo $this->_tpl_vars['e']['name']; ?>
</a>
                </div>
                <div class="hidden_buttons">
                    <a href="/categories/edit?id=<?php echo $this->_tpl_vars['e']['id']; ?>
">Редактировать</a>
                    <form action="/categories/delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['e']['id']; ?>
">
                        <input type="submit" value="Удалить">
                    </form>
                </div>
            </div>
        <?php endforeach; endif; unset($_from); ?>
    </div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>