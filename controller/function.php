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
    }




    function getListSubSchool(){
        global $conn;

        $sql = "select * from sub_school";
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function getListFaculties(){
        global $conn;

        $sql = "select * from faculty";
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function getListInstitution(){
        global $conn;

        $sql = "select * from institution";
        $result = mysqli_query($conn, $sql);

        return $result;
    }
    function getListCenter(){
        global $conn;

        $sql = "select * from center";
        $result = mysqli_query($conn, $sql);

        return $result;
    }
?>