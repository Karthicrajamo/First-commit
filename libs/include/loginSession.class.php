<?php
class UserSession
{
    public $data=0;
    public $token=0;
    public $Uid=0;
    public function __construct($token)
    {
        $this->conn=database::con();
        $this->token=$token;
        $this->data=null;
        $sql="SELECT * FROM `session` WHERE `token`='$token'";
        $result=$this->conn->query($sql);
        
        if ($result->num_rows) {
            print"$token";
            $row=$result->fetch_assoc();
            $this->data=$row;
            print "<br>".$this->data['Uid']."<br>";
            $this->Uid=$row['Uid'];
        } else {
            print"<br>No row inserted<br>";
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
            if ($conn->query($sql)) {
                Session::set('session_token', $token);
                print("$token");
                return $token;
            } else {
                return false;
            }
        }
    }
    public static function authorization($token)
    {
        $username=new UserSession($token);
        print("token:".$token."<br>");
        print(time());
        print "hai";
        $username->login_time();
        // print($username->$this->data["IP"]);
    }
    public function login_time()
    {
        // $time=new UserSession($this->Uid);
        print "<br>".$this->data["time"];
        // echo(time()-$this->data['time']);
        if (isset($this->data['token'])) {
            if (time()-$this->data['time']) {
                print"<br>time";
            }
        }
    }
    // public function getUser()
    // {
    //     // $get=new UserSession($this->Uid);
    //     print($this->data["browser_name"]);
    //     print "hai";
    // }
    public function getIP()
    {
        return isset($this->data["Ip"]) ? $this->data["Ip"] : false;
    }
}
