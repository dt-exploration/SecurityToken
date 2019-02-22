<?php
session_start();
$valid = false;

if (isset($_SESSION['token']) && isset($_POST['token']) &&
    $_SESSION['token']== $_POST['token']) {

    $valid = true;

}

if($valid == false) {
    exit('Invalid security token !');
} else {
    setcookie('name',$_POST['name'],time()+120);
    setcookie('email',$_POST['email'],time()+120);
    setcookie('token',$_SESSION['token'],time()+120);

    header('HTTP/1.1 301 Moved Permanently');
    header('Location: results.php');
}


 ?>
