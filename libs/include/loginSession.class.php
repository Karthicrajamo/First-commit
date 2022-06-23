<?php
class UserSession
{
    public function __construct($Id)
    {
        $this->conn=database::con();
        $this->Id=$Id;
        $this->data=null;
        $sql="SELECT * FROM `session` WHERE `Id`='$this->Id'";
        $result=$this->conn->query($sql);
        if ($result->num_rows) {
            $row=$result->fetch_assoc();
            $this->data=$row;
            $this->Uid=$row['Uid'];
        }
    }
    public static function authenticate($email, $pass)
    {
        $username=user::login($email, $pass);  //It returns Username From login()
        if ($username) {
            // $Uid=$this->Uid;
            $conn=database::con();
            $ip=$_SERVER['REMOTE_ADDR'];
            $browser=$_SERVER['HTTP_USER_AGENT'];
            print($browser."<br>");
            $token=md5(rand(0, 9999999).$ip.$browser.time());
            $sql="INSERT INTO `session`(`Uid`, `token`, `Ip`, `browser_name`, `active`, `time`) VALUES ('5','$token','$ip','$browser',1,now())";
            if ($conn->query($sql));
            {
                print  $token."<br>";
                return $token;
           }
        }
    }
}
