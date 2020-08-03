<p>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{$e.id}">
    <div>
        <label>
            Название товара: <input type="text" name="name" required value="{$e.name}">
        </label>
    </div>
    <div>
        <label>
            Категория:
            <select name="category_id">
                <option value="0">Не выбрано</option>
                {foreach from=$categories item=t}
                    <option {if $e.category_id == $t.id}selected{/if} value="{$t.id}">{$t.name}</option>
                {/foreach}
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
    {if $e.images}
        <div style="display: flex; flex-wrap: wrap;">
            {foreach from=$e.images item=t}
            <div class="card" style="width: 90px; display: flex; justify-content: space-between;">
                <img src="{$t.path}" class="card-img-top" alt="{$t.name}">
                <div class="card-body" style="flex: none;">
                    <button data-image-id="{$t.id}" class="btn btn-danger btn-sm" onclick="return deleteImage(this)">Удалить</button>
                </div>
            </div>
            {/foreach}
        </div>
        {literal}
            <script>
                function deleteImage(button) {
                    let imageId = $(button).attr('data-image-id');
                    imageId = parseInt(imageId);

                    if (!imageId) {
                        alert('Проблема с image_id');
                        return false;
                    }
                    let url = '/products/delete_image';
                    const formData = new FormData();
                    formData.append('product_image_id', imageId);
                    fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then((response) => {
                        response.text()
                        .then((text) => {
                            if (text.indexOf('error') > -1) {
                                alert('Ошибка при удалении');
                            } else {
                                document.location.reload();
                            }
                        })
                    });

                    return  false;
                }
            </script>
        {/literal}
    {/if}
    <div>
        <label>
            Артикул: <input type="text" name="article" required value="{$e.article}">
        </label>
    </div>
    <div>
        <label>
            Цена: <input type="number" name="price" required value="{$e.price}">
        </label>
    </div>
    <div>
        <label>
            Кол-во на складе: <input type="number" name="amount" required value="{$e.amount}">
        </label>
    </div>
    <div>
        <label>
            Описание: <br><textarea name="description" required>{$e.description}</textarea>
        </label>
    </div>
    <button class="btn btn-primary" type="submit">{$submit_name|default:'Добавить'}</button>
</form>
</p>

