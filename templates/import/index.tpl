{include file="header.tpl" h1="Загрузка товаров"}

<p>
    <form method="POST" action="/import/upload" enctype="multipart/form-data">
        <div>
            <label>
                Файл импорта (csv):
                <input name="import_file" type="file">
            </label>
        </div>
        <button class="btn btn-primary" type="submit">{$submit_name|default:'Загрузить'}</button>
    </form>
</p>

{include file="bottom.tpl"}

