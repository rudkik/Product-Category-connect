<?php


namespace App\Controllers;


class Product
{
    private $data_product;

    public function __construct()
    {
        $this->data_product = file_get_contents("db_json/products.json");
    }

    /**
     * @param $data
     */
    public function createProduct($data)
    {

       $arr = json_decode($this->data_product, true);
       $in_array = false;

       foreach ($arr as $array){
           if (in_array($data[0]['name'], $array)){
               $in_array = true;
           }
           continue;
       }
       if ($in_array == false){
           $id = $arr[count($arr)-1]['id'] + 1;
           $data = array_merge(['id' => $id], $data);
           $data = array_merge($arr,[$data]);
           $this->saveJson($data);
       }
       header("Location: http://localhost/Product-Category-connect/products");
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProduct($id){
        foreach (json_decode($this->data_product, true) as $product){
            if ($product['id'] == $id){
                return $product;
            }
        }
    }


    /**
     * @return mixed
     */
    public function getProducts(){
        return json_decode($this->data_product, true);
    }

    /**
     * @param $array
     */
    public function saveJson($array){
        $json = json_encode($array, JSON_UNESCAPED_UNICODE);

        file_put_contents("db_json/products.json", $json);
    }

}