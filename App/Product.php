<?php

class Product {
    public static function getListCount()
    {
        $query = "SELECT COUNT(1) as c FROM products p LEFT JOIN categories c ON p.category_id = c.id";
        return Db::fetchOne($query);
    }

    public static function getList(int $limit = 100, int $offset = 0)
    {
        $query = "SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id LIMIT $offset, $limit";

        $products = Db::fetchAll($query);

        foreach ($products as &$product) {
            $images = ProductImage::getListByProductId($product['id']);
            $product['images'] = $images;
        }
        return $products;
    }

    public static function getProductListByCategoryId($category_id)
    {
        $query = "SELECT p.*, c.name AS category_name FROM products p LEFT JOIN categories c ON p.category_id = c.id WHERE p.category_id = $category_id";

        return Db::fetchAll($query);
    }

    public static function getProductById($id)
    {
        $query = "SELECT p.*, c.id AS category_id FROM products p LEFT JOIN categories c ON p.category_id = c.id WHERE p.id = $id";
        $product = Db::fetchRow($query);

        $product['images'] = ProductImage::getListByProductId($id);

        return $product;
    }

    public static function updateById(int $id, array $product): int
    {
        return Db::update('products', $product, "id = $id");
    }

    public static function add(array $product): int
    {
        if (isset($product['id'])) {
            unset($product['id']);
        }
        return Db::insert('products', $product);
    }

    public static function deleteById(int $id)
    {
        $path = APP_UPLOAD_PRODUCT_DIR . '/' . $id;
        //deleteDir($path);

        //ProductImage::deleteByProductId($id);

        return Db::delete('products', "id = $id");
    }

    public static function getDataFromPost()
    {
        return [
            'id' => Request::getIntFromPost('id', false),
            'name' => Request::getStrFromPost('name'),
            'category_name' => Request::getStrFromPost('category_name', ''),
            'article' => Request::getStrFromPost('article'),
            'price' => Request::getIntFromPost('price'),
            'amount' => Request::getIntFromPost('amount'),
            'description' => Request::getStrFromPost('description', ''),
            'category_id' => Request::getIntFromPost('category_id'),
        ];
    }

    public static function getByField(string $mainField, string $value)
    {
        $mainField = Db::escape($mainField);
        $value = Db::escape($value);
        $query ="SELECT * FROM products WHERE `$mainField` = '$value'";

        return Db::fetchRow($query);
    }
}

