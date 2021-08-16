<?php
    require_once('utils/constant.php');

    // Autoload class trong PHP
    spl_autoload_register(function (string $class_name) {
        include_once ROOT_PATH . '/' . $class_name . '.php';
    });

    Router::get('/TDTU/haha', function(){
        include_once(ROOT_PATH . '/views/homepage.php');
    });

    // Lấy url hiện tại của trang web. Mặc định la /
    $request_url = !empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

    // Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
    $method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

    // map URL
    $page = Router::map($request_url, $method_url);

    if(!$page){
        include_once(ROOT_PATH . '/views/_404.php');
    }
?>