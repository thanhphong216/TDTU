
<h1>Day la test</h1>
<?php

    require_once('utils/constant.php');

    // Autoload class trong PHP
    spl_autoload_register(function (string $class_name) {
        include_once ROOT_PATH . '/' . $class_name . '.php';
    });

    use Utils\ConnectionUtils;

    $test = ConnectionUtils::getInstance();
?>