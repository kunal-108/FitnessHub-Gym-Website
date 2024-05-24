<?php


class DBController
{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'ignou_project';

    // Connection Property
    public $connection = null;

    // Call constructor
    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->connection->connect_error) {
            echo "Fail " . $this->connection->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnetion();
    }

    // for mysqli closing connection 
    protected function closeConnetion()
    {
        if ($this->connection != null) {
            $this->connection->close();
            $this->connection = null;
        }
    }
}
