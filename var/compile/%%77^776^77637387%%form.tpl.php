<?php /* Smarty version 2.6.31, created on 2020-07-19 19:08:39
         compiled from categories/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'categories/form.tpl', 9, false),)), $this); ?>
<p>
<form method="post">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['category']['id']; ?>
">
    <label>
        Название категории: <input type="text" name="name" required value="<?php echo $this->_tpl_vars['category']['name']; ?>
">
    </label>
    <br>
    <br>
    <input type="submit" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['submit_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Сохранить') : smarty_modifier_default($_tmp, 'Сохранить')); ?>
">
</form>
</p>