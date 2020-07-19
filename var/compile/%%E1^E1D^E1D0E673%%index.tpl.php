<?php /* Smarty version 2.6.31, created on 2020-07-19 18:15:55
         compiled from products/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'products/index.tpl', 14, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('h1' => "Cписок товаров")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<p>
    <a href="/products/add">Добавить</a>
</p>

<div class="products_wrapper">
    <div class="products_wrapper__list">
        <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['e']):
?>
            <div class="products_wrapper__list_item k<?php echo $this->_tpl_vars['k']; ?>
">
                <div class="product_image"></div>
                <div class="product_name">
                    <a href="#"><?php echo $this->_tpl_vars['e']['name']; ?>
</a>
                </div>
                <div class="product_desc"><?php echo ((is_array($_tmp=$this->_tpl_vars['e']['description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
                <div class="product_category"><?php echo $this->_tpl_vars['e']['category_name']; ?>
</div>
                <div class="product_article">Артикул: <?php echo $this->_tpl_vars['e']['article']; ?>
</div>
                <div class="product_price">Цена <?php echo $this->_tpl_vars['e']['price']; ?>
 руб.</div>
                <div class="product_amount">Кол-во на складе<?php echo $this->_tpl_vars['e']['amount']; ?>
 шт.</div>
                <div class="hidden_buttons">
                    <a href="/products/edit?id=<?php echo $this->_tpl_vars['e']['id']; ?>
">Редактировать</a>
                    <form action="/products/delete" method="post" style="display: inline;">
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