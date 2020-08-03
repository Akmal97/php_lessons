<?php /* Smarty version 2.6.31, created on 2020-08-02 22:50:48
         compiled from products/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'products/form.tpl', 94, false),)), $this); ?>
<p>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['e']['id']; ?>
">
    <div>
        <label>
            Название товара: <input type="text" name="name" required value="<?php echo $this->_tpl_vars['e']['name']; ?>
">
        </label>
    </div>
    <div>
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
    </div>
    <div>
        <label>
            Ссылка на изображение: <input type="text" name="image_url">
        </label>
    </div>
    <div>
        <label>
            Фото товара: <input type="file" multiple name="images[]">
        </label>
    </div>
    <?php if ($this->_tpl_vars['e']['images']): ?>
        <div style="display: flex; flex-wrap: wrap;">
            <?php $_from = $this->_tpl_vars['e']['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['t']):
?>
            <div class="card" style="width: 90px; display: flex; justify-content: space-between;">
                <img src="<?php echo $this->_tpl_vars['t']['path']; ?>
" class="card-img-top" alt="<?php echo $this->_tpl_vars['t']['name']; ?>
">
                <div class="card-body" style="flex: none;">
                    <button data-image-id="<?php echo $this->_tpl_vars['t']['id']; ?>
" class="btn btn-danger btn-sm" onclick="return deleteImage(this)">Удалить</button>
                </div>
            </div>
            <?php endforeach; endif; unset($_from); ?>
        </div>
        <?php echo '
            <script>
                function deleteImage(button) {
                    let imageId = $(button).attr(\'data-image-id\');
                    imageId = parseInt(imageId);

                    if (!imageId) {
                        alert(\'Проблема с image_id\');
                        return false;
                    }
                    let url = \'/products/delete_image\';
                    const formData = new FormData();
                    formData.append(\'product_image_id\', imageId);
                    fetch(url, {
                        method: \'POST\',
                        body: formData
                    })
                    .then((response) => {
                        response.text()
                        .then((text) => {
                            if (text.indexOf(\'error\') > -1) {
                                alert(\'Ошибка при удалении\');
                            } else {
                                document.location.reload();
                            }
                        })
                    });

                    return  false;
                }
            </script>
        '; ?>

    <?php endif; ?>
    <div>
        <label>
            Артикул: <input type="text" name="article" required value="<?php echo $this->_tpl_vars['e']['article']; ?>
">
        </label>
    </div>
    <div>
        <label>
            Цена: <input type="number" name="price" required value="<?php echo $this->_tpl_vars['e']['price']; ?>
">
        </label>
    </div>
    <div>
        <label>
            Кол-во на складе: <input type="number" name="amount" required value="<?php echo $this->_tpl_vars['e']['amount']; ?>
">
        </label>
    </div>
    <div>
        <label>
            Описание: <br><textarea name="description" required><?php echo $this->_tpl_vars['e']['description']; ?>
</textarea>
        </label>
    </div>
    <button class="btn btn-primary" type="submit"><?php echo ((is_array($_tmp=@$this->_tpl_vars['submit_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Добавить') : smarty_modifier_default($_tmp, 'Добавить')); ?>
</button>
</form>
</p>
