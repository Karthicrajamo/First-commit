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
            // print"$token";
            $row=$result->fetch_assoc();
            $this->data=$row;
            // print "<br>".$this->data['Uid']."<br>";
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
            // print "<br>ip:".$ip."<br>";
            $browser=$_SERVER['HTTP_USER_AGENT'];
            // print($browser."<br>");
            $token=md5(rand(0, 9999999).$ip.$browser.time());
            $sql="INSERT INTO `session`(`Uid`, `token`, `Ip`, `browser_name`, `active`, `time`) VALUES ('5','$token','$ip','$browser',1,now())";
            if ($conn->query($sql)) {
                Session::set('session_token', $token);
                // print("$token");
                return $token;
            } else {
                return false;
            }
        }
    }
    public static function authorization($token)
    {
        $username=new UserSession($token);
        if ($username->getIP()==$_SERVER['REMOTE_ADDR']) {
            if ($username->login_time() and $username->IsActive()) {
                if ($_SERVER['HTTP_USER_AGENT']==$username->Useragent()) {
                    print"getip success";
                } else {
                    throw new Exception('User Agent not Match');
                }
            } else {
                throw new Exception("Time expires");
            }
        } else {
            throw new Exception("IP not matches");
        }
        // print("token:".$token."<br>");
        $username->login_time();
    }
    public function login_time()
    {
        $login_time = DateTime::createFromFormat('Y-m-d H:i:s', $this->data['time']);
        print "<br>".time()-$login_time->getTimestamp()."<br>";
        if (isset($this->data['token'])) {
            if (1000 > time()-$login_time->getTimestamp()) {
                return true;
            } else {
                throw new Exception('No login_time found');
            }
        } else {
            throw new Exception('Token does not valid in Login_time()');
        }
    }
    public function Useragent()
    {
        return isset($this->data['browser_name']) ? $this->data['browser_name'] : false;
    }
    public function getIP()
    {
        // print "<br>".$this->data['Ip'];
        return isset($this->data["Ip"]) ? $this->data["Ip"] : false;
    }
    public function deactivate()
    {
        if ($this->conn) {
            $conn=database::con();
        }
        $sql="UPDATE `session` SET `active`='0' WHERE 'Uid'=$this->Uid";
        return $result=$conn->query($sql) ? true : false;
    }
    public function IsActive()
    {
        return isset($this->data['active']) ? true : false;
    }
}
