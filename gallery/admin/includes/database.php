<?php
require_once('dbconfig.php');

class Database
{
    public $connection;


    public function __construct()
    {
        $this->open_db_connection();
    }


    public function open_db_connection()
    {
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if (mysqli_connect_errno()) {
            die('Database connection failed ' . mysqli_error());
        }
    }


    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);

        return $result;
    }


    private function confirm_query($result)
    {
        if (!$result) {
            die('Query Failed');
        }
    }


    public function escape_string($string)
    {
        $escaped_string = mysqli_real_escape_string($this->connection, $string);

        return $escaped_string;
    }
}


$database = new Database();