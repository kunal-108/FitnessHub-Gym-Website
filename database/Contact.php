<?php
// PHP Contact Class
class Contact
{
    public $db = null;
    public function __construct(DBController $db)
    {
        if (!isset($db->connection))
            null;
        $this->db = $db;
    }

    public function contactData()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $result = $this->db->connection->query("INSERT INTO contacts (name,email,message) VALUES ('$name','$email','$message')");
        if ($result) {
            header("Location:" . $_SERVER['PHP_SELF']);
        }
    }


}