<?php

class Category {
    public static function getCategoryList()
    {
        $query = "SELECT * FROM categories";

        return Db::fetchAll($query);
    }

    public static function getCategoryById($id)
    {
        $query = "SELECT * FROM categories WHERE id = $id";

        return Db::fetchRow($query);
    }

    public static function updateCategoryById(int $id, array $category)
    {
        if (isset($category['id'])) {
            unset($category['id']);
        }

        return Db::update('categories', $category, "id = $id");
    }

    public static function addCategory($category)
    {
        if (isset($category['id'])) {
            unset($category['id']);
        }

        return Db::insert('categories', $category);
    }

    public static function deleteCategoryById(int $id)
    {
        return Db::delete('categories', "id = $id");
    }

    public static function getCategoryFromPost()
    {
        return [
            'id' => Request::getIntFromPost('id', false),
            'name' => Request::getStrFromPost('name'),
        ];
    }

    public static function getByName(string $categoryName)
    {
        $query = "SELECT * FROM categories WHERE name = '$categoryName'";
        return Db::fetchRow($query);
    }
}
