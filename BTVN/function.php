<?php

    function getListUser(){
        global $conn;
        $data = [];

        $sql = "SELECT user.id, user.name, office.name as office, info_phone.company_number, info_phone.email, info_phone.phone_number 
        FROM user
        LEFT JOIN office
        ON user.office_id = office.id
        LEFT JOIN info_phone
        ON user.id = info_phone.uid";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function searchUser($key){
        global $conn;
        $data = [];

        $sql = "SELECT user.id, user.name, office.name as office, info_phone.company_number, info_phone.email, info_phone.phone_number 
        FROM user
        LEFT JOIN office
        ON user.office_id = office.id
        LEFT JOIN info_phone
        ON user.id = info_phone.uid 
        WHERE user.name LIKE '%" . $key . "%' OR office.name LIKE '%" . $key . "%' OR info_phone.company_number LIKE '%" . $key . "%' OR info_phone.email LIKE '%" . $key . "%' OR info_phone.phone_number LIKE '%" . $key . "%'";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function login($username, $password){
        global $conn;
        $data = [];

        $sql = "SELECT * FROM account WHERE username = '" . $username . "' and password = '" . hashPassword($password) . "'";
        $result = mysqli_query($conn, $sql);
        
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function getUserByAccountId($id){
        global $conn;
        $data = [];

        $sql = "SELECT user.id, user.name, unit.name as unit, office.name as office, info_phone.company_number, info_phone.email, info_phone.phone_number 
        FROM user
        LEFT JOIN unit
        ON user.unit_id = unit.id
        LEFT JOIN office
        ON user.office_id = office.id
        LEFT JOIN info_phone
        ON user.id = info_phone.uid
        WHERE user.account_id = " . $id;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getUser($id){
        global $conn;
        $data = [];

        $sql = "SELECT user.id, user.name, unit.name as unit, office.name as office, info_phone.company_number, info_phone.email, info_phone.phone_number 
        FROM user
        LEFT JOIN unit
        ON user.unit_id = unit.id
        LEFT JOIN office
        ON user.office_id = office.id
        LEFT JOIN info_phone
        ON user.id = info_phone.uid
        WHERE user.id = " . $id;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function getListOffice(){
        global $conn;
        $data = [];

        $sql = "SELECT office.* FROM office";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function getListUnit(){
        global $conn;
        $data = [];

        $sql = "SELECT * FROM unit";
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }
    function getUnit($id){
        global $conn;
        $data = [];

        $sql = "SELECT * FROM unit WHERE id = " . $id;
        $result = mysqli_query($conn, $sql);

        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    function addUser($name, $unit_id, $office_id, $company_number, $email, $phone_number){
        global $conn;
        $data = [];

        $sql1 = "INSERT INTO user (name, unit_id, office_id) 
        VALUES('" . $name . "', " . (empty($unit_id) ? NULL : $unit_id) . ", " . (empty($office_id) ? NULL : $office_id) . ");";
        $sql2 = "INSERT INTO info_phone (uid, company_number, email, phone_number) 
        VALUES(LAST_INSERT_ID(), '" . (empty($company_number) ? NULL : $company_number) . "', '" . (empty($email) ? NULL : $email) . "', '" . (empty($phone_number) ? NULL : $phone_number) . "');
        ";
        if(mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2))
            return TRUE;
        else
            return FALSE;
    }

    function updateUser($id, $name, $unit_id, $office_id, $company_number, $email, $phone_number){
        global $conn;

        $sql = "UPDATE user, info_phone 
        SET user.name = '" . $name . "', user.unit_id = " . (empty($unit_id) ? NULL : $unit_id) . ", user.office_id = " . (empty($office_id) ? NULL : $office_id) . ", info_phone.company_number = '" . (empty($company_number) ? NULL : $company_number) . "', info_phone.email = '" . (empty($email) ? NULL : $email) . "', info_phone.phone_number = '" . (empty($phone_number) ? NULL : $phone_number) . "' 
        WHERE user.id = info_phone.uid AND user.id = " . $id;

        if(mysqli_query($conn,$sql))
            return TRUE;
        else
            return FALSE;
    }

    function deleteUser($id){
        global $conn;

        $sql = "DELETE FROM user WHERE id = " . $id;

        if(mysqli_query($conn,$sql))
            return TRUE;
        else
            return FALSE;
    }












    function hashPassword($password){
        return hash("SHA256", $password, FALSE);
    }
?>