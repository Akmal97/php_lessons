<?php /* Smarty version 2.6.31, created on 2020-07-19 20:32:19
         compiled from products/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'products/form.tpl', 40, false),)), $this); ?>
<p>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['e']['id']; ?>
">
    <label>
        Название товара: <input type="text" name="name" required value="<?php echo $this->_tpl_vars['e']['name']; ?>
">
    </label>
    <br>
    <br>
    <label>
        Категория:
        <select name="category_id">
            <option value="0">Не выбрано</option>
            <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
                <option <?php if ($this->_tpl_vars['e']['category_id'] == $this->_tpl_vars['t']['id']): ?>selected<?php endif; ?> value="<?php echo $this->_tpl_vars['t']['id']; ?>
"><?php echo $this->_tpl_vars['t']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
    </label>
    <br>
    <br>
    <label>
        Артикул: <input type="text" name="article" required value="<?php echo $this->_tpl_vars['e']['article']; ?>
">
    </label>
    <br>
    <br>
    <label>
        Цена: <input type="number" name="price" required value="<?php echo $this->_tpl_vars['e']['price']; ?>
">
    </label>
    <br>
    <br>
    <label>
        Кол-во на складе: <input type="number" name="amount" required value="<?php echo $this->_tpl_vars['e']['amount']; ?>
">
    </label>
    <br>
    <br>
    <label>
        Описание: <br><textarea name="description" required><?php echo $this->_tpl_vars['e']['description']; ?>
</textarea>
    </label>
    <br>
    <br>
    <input type="submit" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['submit_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Добавить') : smarty_modifier_default($_tmp, 'Добавить')); ?>
">
</form>
</p>