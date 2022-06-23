<?php
include 'libs/load.php';

// if ($a=sqlm("raja", "karthic", "98765432")) {
//     print($a);
// }
// include_once 'include/database.class.php';
// database::con();
// database::con();database::con();
?><br><?php
// session_start();
// $name='raja';
// $pass='98765432';
// $result= user::login($name, $pass);
// if ($result) {
//     echo "<br>success";
// } else {
//     echo "fail";
// }
// session::set("karthic", "6");
// print(session::get("karthic"));
function check()
{
    // $result=user::login('haikarthicraja4@gmail.com', 87654321);

    if (isset($_GET['destroy'])) {
        session_destroy();
        echo "destroyed<br>";
    }
    if (session::get('loggedin')) {
        $userdata=session::get('session_user');
        $userobj=new user($userdata);
        $userobj->setbio('Hai I Am Karthic');
        $userobj->getbio();
        $ses=new UserSession(5);
        $ses->authenticate('haikarthicraja4@gmail.com', 87654321);
        // $userobj->hiii();
        // print("hai");
        // print("Welcome back,$userdata");
        print("welcome back,".session::get('session_user'));
    } else {
        print('No Session found');
        $result=user::login('haikarthicraja4@gmail.com', 87654321);
        // $Id=5;
        if ($result) {
            echo "<br>Login Success,$result[name]<br>";
            session::set('loggedin', true);
            session::set('session_user', $result['email']);
        }
    }
}
check();
// database::con();
// database::con();
