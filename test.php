
<a href="index.php?haha=Kimetsu"><h1>Day la test</h1></a>
<?php

    // require_once('utils/constant.php');
    // require_once('controller/function.php');
    // // Autoload class trong PHP
    // spl_autoload_register(function (string $class_name) {
    //     include_once ROOT_PATH . '/' . $class_name . '.php';
    // });

    // init();

    echo explode('?', $_SERVER['REQUEST_URI'], 2)[0];
    echo '<br>';
    echo $_GET['id'];
    echo '<br>';
    // echo $_GET('du');
    echo '<br>';
    
?>