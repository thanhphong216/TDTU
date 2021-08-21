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

        $sql = "select count(id) as count from event_page";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getListCurrentEvent($count = 2, $page = 0){
        global $conn;
        $data = [];

        $sql = "select * from event_page order by time_start desc limit " . $page * $count . "," . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListNewestEvent($count = 4){
        global $conn;
        $data = [];

        $sql = "select * from event_page order by time_create desc limit " . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListNewestPost($count = 3){
        global $conn;
        $data = [];

        $sql = "select news_page.*, news_category.* 
        from news_page, news_category, news_page_category 
        where news_page.id = news_page_category.page_id and news_category.id = news_page_category.category_id 
        group by news_page_category.page_id 
        order by time_create desc 
        limit " . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListNewestPostDependType($count = 3, $type){
        global $conn;
        $data = [];

        $sql = "select * from news_page, news_page_category where news_page.id = news_page_category.page_id and news_page_category.category_id = " . $type . " order by time_create desc limit " . $count;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getCountStudent(){
        global $conn;

        $sql = "select count(id) as count from user where office_id = 2";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getCountTeacher(){
        global $conn;

        $sql = "select count(id) as count from user where office_id = 1";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getCountResearchGroup(){
        global $conn;

        $sql = "select count(id) as count from research_group";
        $result = mysqli_query($conn, $sql);

        return $result->fetch_assoc()['count'];
    }
    function getListPageIntroduce($title){
        global $conn;
        $data = [];

        $sql = "select * from introduce_page where category_id = " . $title;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getListPageIntroduceRating(){
        global $conn;
        $data = [];

        $sql = "select * from introduce_rating_page ";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
?>