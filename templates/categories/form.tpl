<p>
<form method="post">
    <input type="hidden" name="id" value="{$category.id}">
    <label>
        Название категории: <input type="text" name="name" required value="{$category.name}">
    </label>
    <br>
    <br>
    <input type="submit" value="{$submit_name|default:'Сохранить'}">
</form>
</p>