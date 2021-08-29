<?php
    require_once('utils/constant.php');
    require_once('utils/Utils.php');
    require_once('utils/function.php');
    // Autoload class trong PHP
    spl_autoload_register(function (string $class_name) {
        include_once ROOT_PATH . '/' . $class_name . '.php';
    });
    
    //Init
    init();


    
    // Lấy url hiện tại của trang web. Mặc định la /
    $request_url = !empty($_SERVER['REQUEST_URI']) ? explode('?', $_SERVER['REQUEST_URI'], 2)[0] : '/';

    // Lấy phương thức hiện tại của url đang được gọi. (GET | POST). Mặc định là GET.
    $method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

    // map URL
    $page = Router::map($request_url, $method_url);

    if(!$page){
        include_once(ROOT_PATH . '/views/_404.php');
    }



    //Exit
    exits();
?>