<?php

// Use to fetch Product Data
class Product
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->connection))
            null;
        $this->db = $db;
    }

    //fetch product data using getData Method
    public function getData($table = "products")
    {
        $result = $this->db->connection->query("SELECT * FROM {$table}");
        $resultArray = array();

        //fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }
        return $resultArray;
    }

    // get product using item id
    public function getProduct($item_id = null, $table = 'products')
    {
        if (isset($item_id)) {
            $result = $this->db->connection->query("SELECT * FROM {$table} WHERE product_id={$item_id}");
            $resultArray = array();

            //fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }

}