<?php
// PHP Order Class
class Order
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->connection))
            null;
        $this->db = $db;
    }

    public function getSum($arr)
    {
        if (isset($arr)) {
            $sum = 0;
            foreach ($arr as $item) {
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f', $sum);
        }
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

    public function orderData()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pincode = $_POST['pincode'];
        $address = $_POST['address'];
        $tracking_no = "gym" . rand(100, 999) . substr($name, 2);


        foreach ($this->getData('cart') as $item):
            $cart = $this->getProduct($item['product_id']);
            $subTotal[] = array_map(function ($item) {
                return $item['product_offer_price'];
            }, $cart); //closing array_map function
        endforeach;

        $total_price = $this->getSum($subTotal);

        $result = $this->db->connection->query("INSERT INTO orders (tracking_no,name, email, phone,	address, pincode,total_price) VALUES ('$tracking_no','$name','$email','$phone','$address','$pincode','$total_price')");

        if ($result) {
            header("Location: success.php");
        }
    }
}

