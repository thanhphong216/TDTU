<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }

    include_once('ConnectionUtils.php');
    include_once('function.php');

    $conn = ConnectionUtils::getInstance()->getConnect();

    if(deleteUser($_GET['id'])){
        header('location:admin.php');
    }else{
        echo 'Lỗi j đó';
    }
?>