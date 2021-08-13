<?php
    require_once('./config.php');
    require_once(PATH_ROOT . '/utils/Utils.php');
    require_once(PATH_ROOT . '/utils/ConnectionUtils.php');
    require_once(PATH_ROOT . '/includes/functions.php');

    // Autoload class trong PHP
    spl_autoload_register(function (string $class_name) {
        include_once PATH_ROOT . '/' . $class_name . '.php';
    });

    // Lấy url hiện tại của trang web. Mặc định la /
    $request_url = !empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

    // Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
    $method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

    // map URL
    Router::map($request_url, $method_url);
?>