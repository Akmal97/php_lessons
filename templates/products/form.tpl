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
            Фото товара: <input type="file" multiple name="images[]">
        </label>
    </div>
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
    <input type="submit" value="{$submit_name|default:'Добавить'}">
</form>
</p>