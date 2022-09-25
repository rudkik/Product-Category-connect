<?php


namespace App\Controllers;


class Category
{
    public function getCategory($id){
        $data_categories = json_decode(file_get_contents("db_json/categories.json"), true);

        foreach ($data_categories as $category){
            if ($category['id'] == $id){
                return $category;
            }
        }
        return 'error';
    }


    public function getCategories(){
        return json_decode(file_get_contents("db_json/categories.json"), true);
    }
}