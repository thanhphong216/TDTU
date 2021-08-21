<?php
    session_start();
    if(!isset($_SESSION['account_id'])){
        header("location:login.php");
    }

    session_destroy();
    header("location:login.php");
?>