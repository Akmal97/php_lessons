<p>
<form method="post">
    <input type="hidden" name="id" value="{$e.id}">
    <label>
        Название товара: <input type="text" name="name" required value="{$e.name}">
    </label>
    <br>
    <br>
    <label>
        Категория:
        <select name="category_id">
            <option value="0">Не выбрано</option>
            {foreach from=$categories item=t}
                <option {if $e.category_id == $t.id}selected{/if} value="{$t.id}">{$t.name}</option>
            {/foreach}
        </select>
    </label>
    <br>
    <br>
    <label>
        Артикул: <input type="text" name="article" required value="{$e.article}">
    </label>
    <br>
    <br>
    <label>
        Цена: <input type="number" name="price" required value="{$e.price}">
    </label>
    <br>
    <br>
    <label>
        Кол-во на складе: <input type="number" name="amount" required value="{$e.amount}">
    </label>
    <br>
    <br>
    <label>
        Описание: <br><textarea name="description" required>{$e.description}</textarea>
    </label>
    <br>
    <br>
    <input type="submit" value="{$submit_name|default:'Добавить'}">
</form>
</p>