<?php
class database
{
    public static $conn=null;
    public static function con()
    {
        if (database::$conn==null) {
            $servername = get_config("Db_servername");
            $username = get_config("Db_username");
            $password = get_config("Db_password");
            $dbname = get_config("Db_name");

            // Create connection
    
            $connect = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connect->connect_error) {
                die("Connection failed: " . $connect->connect_error);
            } else {
                database::$conn=$connect;
                // echo "connection";
                // print_r($connect);
                return database::$conn;
            }
            //echo "$conn->connect_error";
        } else {
            // echo "connected";
            return database::$conn;
        }
    }
}
