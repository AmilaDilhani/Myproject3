<?php

session_start();
include 'db.php'; //contain the database connection
$message = array();
if (isset($_POST['uname']) && !empty($_POST['uname'])) {
    $uname = $_POST['uname']; // the ajax post username
} else {
    $message[] = 'Please enter username';
}

if (isset($_POST['password']) && !empty($_POST['password'])) {
    $password = $_POST['password']; // the ajax post password
} else {
    $message[] = 'Please enter password';
}

$countError = count($message);
if ($countError > 0) {
    for ($i = 0; $i < $countError; $i++) {
        echo ucwords($message[$i]) . '<br/><br/>';
    }
} else {
    $query = "SELECT *  FROM login where username =? AND password =?";
    $STH = $DBH->prepare($query);
    //use bind param
    $STH->bindParam(1, $uname);
    $STH->bindParam(2, $password);
    $STH->execute();
    $result = $STH->fetchAll();
    $count = $STH->rowCount();
    if ($count > 0) {
        $_SESSION['LOGIN_STATUS'] = true;
        $_SESSION['UNAME'] = $uname;
        echo 'correct';
    } else {
        echo ucwords('please enter correct user details');
    }
}
?>

