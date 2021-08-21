<?php
    use Utils\ConnectionUtils;


    function init(){
        //Init connection
        global $conn;
        $conn = ConnectionUtils::getInstance()->getConnect();
        if(!$conn){
            die('Không thể kết nối db!!!');
        }

        //Init router
        Router::get('/TDTU/', function(){
        include_once(ROOT_PATH . '/views/homepage.php');
        });
        Router::get('/', function(){
            include_once(ROOT_PATH . '/views/homepage.php');
            });
        Router::get('/gioi-thieu', function(){
            include_once(ROOT_PATH . '/views/introduce.php');
        });
        Router::get('/giao-duc', function(){
            include_once(ROOT_PATH . '/views/academic.php');
        });
        Router::get('/khoa-hoc-cong-nghe', function(){
            include_once(ROOT_PATH . '/views/science-technology.php');
        });
        Router::get('/quoc-te-hoa', function(){
            include_once(ROOT_PATH . '/views/international.php');
        });
        Router::get('/tuyen-sinh', function(){
            include_once(ROOT_PATH . '/views/admission.php');
        });
        Router::get('/su-kien', function(){
            include_once(ROOT_PATH . '/views/events.php');
        });
        Router::get('/su-kien/{page}', function(){
            include_once(ROOT_PATH . '/views/events.php');
        });
        Router::get('/tin-tuc', function(){
            include_once(ROOT_PATH . '/views/news.php');
        });
    }
    function exits(){
        //Close connection
        ConnectionUtils::getInstance()->closeConnect();
    }




    function hashData($data){
        return hash('SHA256', $data, false);
    }

?>