<?php
include '../libs/load.php';
$user='haikarthicraja4@gmail.com';
$pass="87654321";
if (session::get('session_token')) {
    if (UserSession::authorization(session::get("session_token"))) {
        print("Login");
        // UserSession->
    }
} else {
    print(UserSession::authenticate($user, $pass));
    if (UserSession::authenticate($user, $pass)) {
        print("login success,Welcome".$user."<br>");
        session::set("loggedin", true);
    }
}
