<?php
include_once 'include/database.class.php';
include_once 'include/user.class.php';
include_once 'include/sessions.class.php';
include_once 'include/loginSession.class.php';

global $__site_config;
$__site_config = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/../Db_service.json');

session_start();
function get_config($key, $default=null)
{
    global $__site_config;
    $array=json_decode($__site_config, true);
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return $default;
    }
}

function load($name)
{
    // print("including");
    include __DIR__."/../_templ/$name.php";
}
function sqlm($name, $email, $pass)
{
    $conn= database::con();
    $sqll="INSERT INTO `signup` (`name`, `email`, `pass`) VALUES ('$name', '$email', '$pass');";
    
    if ($conn->query($sqll) == true) {
        return true;
    } else {
        return false;
    }
}
