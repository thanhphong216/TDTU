<?php 
    function getListSubSchool(){
        global $conn;
        $data = [];

        $sql = "select * from sub_school";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListFaculties(){
        global $conn;
        $data = [];

        $sql = "select * from faculty";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListInstitution(){
        global $conn;
        $data = [];

        $sql = "select * from institution";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListCenter(){
        global $conn;
        $data = [];

        $sql = "select * from center";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getCountEvent(){
        global $conn;

        $sql = "SELECT count(id) AS count FROM post, post_post_category WHERE post.id = post_post_category.post_id AND post_post_category.category_id = 4";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getListCurrentEvent($count = 2, $page = 0){
        global $conn;
        $data = [];

        $sql = "SELECT * FROM post
        LEFT JOIN post_time_during
        ON post.id = post_time_during.post_id
        LEFT JOIN post_location
        ON post.id = post_location.post_id
        INNER JOIN post_post_category
        ON post.id = post_post_category.post_id
        WHERE post_post_category.category_id = 4
        ORDER BY post_time_during.time_start DESC LIMIT " . $page * $count . "," . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListNewestEvent($count = 4){
        global $conn;
        $data = [];

        $sql = "SELECT * FROM post
        LEFT JOIN post_time_during
        ON post.id = post_time_during.post_id
        INNER JOIN post_post_category
        ON post.id = post_post_category.post_id
        WHERE post_post_category.category_id = 4
        ORDER BY post.time_create DESC LIMIT " . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListNewestPost($count = 3){
        global $conn;
        $data = [];

        $sql = "SELECT post.*, post_category.name as category_name, post_category.link as category_link
        FROM post, post_category, post_post_category 
        WHERE post.id = post_post_category.post_id AND post_category.id = post_post_category.category_id AND post_category.under_id = 3
        ORDER BY post.time_create DESC LIMIT " . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListNewestPostDependType($count = 3, $type){
        global $conn;
        $data = [];

        $sql = "SELECT * FROM post, post_post_category WHERE post.id = post_post_category.post_id AND post_post_category.category_id = " . $type . " order by post.time_create desc limit " . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getCountStudent(){
        global $conn;

        $sql = "SELECT count(id) AS count FROM user WHERE office_id = 2";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getCountTeacher(){
        global $conn;

        $sql = "SELECT count(id) AS count FROM user WHERE office_id = 1";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getCountResearchGroup(){
        global $conn;

        $sql = "SELECT count(id) AS count FROM research_group";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getListPageIntroduce($title){
        global $conn;
        $data = [];

        $sql = "SELECT * FROM post_category WHERE under_id = " . $title;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListPageIntroduceRating(){
        global $conn;
        $data = [];

        $sql = "SELECT post.*, post_author.name as author, post_author.job as job FROM post 
        LEFT JOIN post_author ON post.id = post_author.post_id 
        INNER JOIN post_post_category ON post.id = post_post_category.post_id 
        WHERE post_post_category.category_id = 24";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
?>