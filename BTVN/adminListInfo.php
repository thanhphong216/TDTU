<?php
    include_once('ConnectionUtils.php');
    include_once('function.php');

    $conn = ConnectionUtils::getInstance()->getConnect();
    $office = json_decode($_GET['data']);
    $unit = $_GET['unit'];

    $listUser = [];
    if(empty($office) && $unit == null){
        $listUser = getListUser();
    }else{
        $sql = "SELECT user.id, user.name, office.name as office, info_phone.company_number, info_phone.email, info_phone.phone_number 
        FROM user
        LEFT JOIN office
        ON user.office_id = office.id
        LEFT JOIN info_phone
        ON user.id = info_phone.uid 
        WHERE ";
        for($i = 0; $i < count($office); $i++){
            if($i == 0){
                $sql = $sql . "office.id = " . $office[$i];
            }else{
                $sql = $sql . " OR office.id = " . $office[$i];
            }
        }
        if($unit != null){
            if(empty($office)){
                $sql = $sql . "office.id = " . $unit;
            }else{
                $sql = $sql . " AND office.id = " . $unit;
            }
        }
        $result = mysqli_query($conn, $sql);
        while($row = $result->fetch_assoc()) {
            $listUser[] = $row;
        }
    }


    ConnectionUtils::getInstance()->closeConnect();
?>

<?php
    for($i = 0; $i < count($listUser); $i++){
?>
    <tr>
        <th scope="row" class="text-center"><?php echo $i + 1; ?></th>
        <td><?php echo $listUser[$i]['name']; ?></td>
        <td class="text-center"><?php echo $listUser[$i]['office']; ?></td>
        <td class="text-center"><?php echo $listUser[$i]['company_number']; ?></td>
        <td class="text-center"><?php echo $listUser[$i]['email']; ?></td>
        <td class="text-center"><?php echo $listUser[$i]['phone_number']; ?></td>
        <td class="text-center"><a href="edit.php?id=<?php echo $listUser[$i]['id']; ?>"><i class="fas fa-edit"></i></a></td>
        <td class="text-center"><a href="delete.php?id=<?php echo $listUser[$i]['id']; ?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
<?php
    }
?>