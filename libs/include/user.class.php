<?php
class user
{
    public $Id;
    private $conn;
    public static function signup($name, $email, $pass)
    {
        $options = [
                'cost' => 9,
            ];
        $pass = password_hash($pass, PASSWORD_BCRYPT, $options);
        $conn=database::con();
        // print_r($_SERVER);
        $sqll="INSERT INTO `signup` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$pass');";
        if ($conn->query($sqll) === true) {
            // print("strue");
            // print($pass);
            return true;
        } else {
            // print("");
            return false;
        }
    }


    public static function login($email, $pass)
    {
        $query="SELECT * FROM `signup` WHERE `email`='$email'";
        $conn=database::con();
        $result = $conn->query($query);
        if ($result->num_rows == 1) {
            // output data of each row
            $row = $result->fetch_assoc();
            // print($row['pass']);
            // print($row['email']);
            // if (crypt($pass, $row['pass'])==1) {
            $hash=$row['pass'];
            if (password_verify($pass, $hash) and ($email===$row['email'])) {
                // if ($row['pass']==$pass) {
                // Generator Session Token
                // Insert Session Token in SQL
                // Build Session and give session to User
                return $row;
            }
        } else {
            return 0;
        }
        // $conn->close();
    }


    public function __construct($email)
    {
        $this->conn=database::con();
        $this->email=$email;
        $this->Id=null;
        $sql="SELECT `Id` FROM `signup` WHERE `email`='$this->email'";
        // $sql="SELECT $var FROM `user` WHERE 5";
        // print("$this->conn->query($sql)");
        print("$email<br>");
        $result=$this->conn->query($sql);
        print("<br>construct<br>");
        // print("result:".$result->num_rows['Id']);
        if ($result->num_rows) {
            $row=$result->fetch_assoc();
            print("Id:".$row['Id']);
            $this->Id=$row['Id'];
        }
    }




    public function __call($name, $arguments)
    {
        $property = preg_replace('/[^0-9a-zA-Z]/', "", substr($name, 3));
        $property = strtolower(preg_replace('/\B([A-Z])/', '_$1', $property));
        // echo"$property";
        if (substr($name, 0, 3)=="get") {
            return $this->_get_data($property);
        } elseif (substr($name, 0, 3)=="set") {
            return $this->_set_data($property, $arguments[0]);
        } else {
            throw new Exception("user::__call->$name,function unavailable");
        }
    }
    private function _set_data($var, $data)
    {
        if (!$this->conn) {
            $this->conn=database::con();
        }
        // print"<br>var:$var,data:$data<br>";
        // $sql="INSERT INTO `user`(`$var`) VALUES ('$data')";
        $sql="UPDATE `user` SET `$var`='$data' WHERE 'Id'=$this->Id";
        // echo "$sql<br>";
        if ($this->conn->query($sql)) {
            // echo "done<br>";
            return true;
        } else {
            return false;
        }
    }
    public function _get_data($var)
    {
        if (!$this->conn) {
            $this->conn=database::con();
        }
        // echo"<br>".$var."<br>";
        // $sql="SELECT '$var' FROM `user` WHERE 'Id'=5";
        $sql="SELECT `$var`FROM `user` WHERE `Id`=$this->Id";
        $result=$this->conn->query($sql);
        // print("$result->num_rows");
        if ($result->num_rows==1) {
            print("<br>result:".$result->fetch_assoc()["$var"]);
            print"<br>";
        }
    }
}
