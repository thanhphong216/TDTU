<?php

    function getListUser(){
        global $conn;
        $data = [];

        $sql = "SELECT user.id, user.name, office.name as office, info_phone.company_number, info_phone.email, info_phone.phone_number 
        FROM user
        LEFT JOIN office
        ON user.office_id = office.id
        LEFT JOIN info_phone
        ON user.info_phone_id = info_phone.id";
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
        ON user.info_phone_id = info_phone.id
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

    function addUser($username, $password, $name, $unit_id, $office_id, $company_number, $email, $phone_number){
        global $conn;
        $data = [];

        $sql = "BEGIN;
        INSERT INTO info_phone (company_number, email, phone_number) 
          VALUES('" . (empty($company_number) ? NULL : $company_number) . "', '" . (empty($email) ? NULL : $email) . "', '" . (empty($phone_number) ? NULL : $phone_number) . "');
        INSERT INTO user (name, unit_id, office_id, info_phone_id) 
          VALUES('" . $name . "', " . (empty($unit_id) ? NULL : $unit_id) . ", " . (empty($office_id) ? NULL : $office_id) . ", LAST_INSERT_ID());
        INSERT INTO account (username, password, uid)
          VALUES('" . $username . "', '" . hashPassword($password) . "', LAST_INSERT_ID());
        COMMIT;";
        if(mysqli_multi_query($conn,$sql))
            return TRUE;
        else
            return FALSE;
    }

    function updateUser($id, $name, $unit_id, $office_id, $company_number, $email, $phone_number){
        global $conn;

        $sql = "UPDATE user, info_phone 
        SET user.name = '" . $name . "', user.unit_id = " . (empty($unit_id) ? NULL : $unit_id) . ", user.office_id = " . (empty($office_id) ? NULL : $office_id) . ", info_phone.company_number = '" . (empty($company_number) ? NULL : $company_number) . "', info_phone.email = '" . (empty($email) ? NULL : $email) . "', info_phone.phone_number = '" . (empty($phone_number) ? NULL : $phone_number) . "' 
        WHERE user.info_phone_id = info_phone.id AND user.id = " . $id;

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