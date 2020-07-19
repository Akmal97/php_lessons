{include file="header.tpl" h1="Cписок категорий"}
<p>
    <a href="/categories/add">Добавить</a>
</p>

<div class="products_wrapper">
    <div class="products_wrapper__list">
        {foreach from=$categories item=e}
            <div class="products_wrapper__list_item">
                <div class="product_image"></div>
                <div class="product_name">
                    <a href="#">{$e.name}</a>
                </div>
                <div class="hidden_buttons">
                    <a href="/categories/edit?id={$e.id}">Редактировать</a>
                    <form action="/categories/delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="{$e.id}">
                        <input type="submit" value="Удалить">
                    </form>
                </div>
            </div>
        {/foreach}
    </div>
</div>
{include file="bottom.tpl"}