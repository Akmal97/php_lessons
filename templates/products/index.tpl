{include file="header.tpl" h1="Cписок товаров"}

<p>
    <a href="/products/add">Добавить</a>
</p>

<div class="products_wrapper">
    <nav>
        <ul class="pagination">
            {section loop=$pages_count name=pagination}
                <li class="page-item{if $smarty.get.p == $smarty.section.pagination.iteration} active{/if}">
                    <a href="{$smarty.server.PATH_INFO}?p={$smarty.section.pagination.iteration}" class="page-link">{$smarty.section.pagination.iteration}</a>
                </li>
            {/section}
        </ul>
    </nav>
    <div class="products_wrapper__list">
        {foreach from=$products item=e key=k}
            <div class="products_wrapper__list_item k{$k}">
                <div class="product_image">
                    {foreach from=$e.images item=image}
                    <img src="{$image.path}" alt="{$image.name}">
                    {/foreach}
                </div>
                <div class="product_name">
                    <a href="#">{$e.name}</a>
                </div>
                <div class="product_desc">{$e.description|nl2br}</div>
                <div class="product_category">{$e.category_name}</div>
                <div class="product_article">Артикул: {$e.article}</div>
                <div class="product_price">Цена {$e.price} руб.</div>
                <div class="product_amount">Кол-во на складе {$e.amount} шт.</div>
                <div class="hidden_buttons">
                    <a href="/products/edit?id={$e.id}">Редактировать</a>
                    <form action="/products/delete" method="post" style="display: inline;">
                        <input type="hidden" name="id" value="{$e.id}">
                        <input type="submit" value="Удалить">
                    </form>
                </div>
            </div>
        {/foreach}
    </div>
</div>
{include file="bottom.tpl"}

