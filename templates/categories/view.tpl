{include file="header.tpl" h1=$current_category.name}
{*}<p>
    <a href="/products/add">Добавить</a>
</p>{*}

<div class="products_wrapper">
    <div class="products_wrapper__list">
        {foreach from=$products item=e key=k}
            <div class="products_wrapper__list_item k{$k}">
                <div class="product_image"></div>
                <div class="product_name">
                    <a href="#">{$e.name}</a>
                </div>
                <div class="product_desc">{$e.description|nl2br}</div>
                <div class="product_category">{$e.category_name}</div>
                <div class="product_article">Артикул: {$e.article}</div>
                <div class="product_price">Цена {$e.price} руб.</div>
                <div class="product_amount">Кол-во на складе{$e.amount} шт.</div>
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

