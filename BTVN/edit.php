<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }

    include_once('ConnectionUtils.php');
    include_once('function.php');
    $conn = ConnectionUtils::getInstance()->getConnect();


    $message = "";
    if(isset($_GET['edit'])){

        $id = $_GET['id'];
        $name = $_GET['name'];
        $unit = $_GET['unit'];
        $office = $_GET['office'];
        $companyNumber = $_GET['company_number'];
        $email = $_GET['email'];
        $phoneNumber = $_GET['phone_number'];

        if(updateUser($id, $name, $unit, $office, $companyNumber, $email, $phoneNumber)){
            header('location:admin.php');
        }else{
            $message = "Lỗi j đó";
        }
    }

    
    $user = getUser($_GET['id'])[0];
    $listUnit = getListUnit();
    $listOffice = getListOffice();
    // print_r($user);

    ConnectionUtils::getInstance()->closeConnect();
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    
    <main class="main" style="margin-top: 10%;">
        <div class="container">

            <div class="row float-end">
                <div class="col-12">
                    <a href="admin.php" class="btn btn-primary"><i class="fas fa-undo"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-1 col-lg-3"></div>
                <div class="col-10 col-lg-6">

                    <form method="GET">
                        <div class="form-group">
                            <label class="text-danger"><small><?php echo $message; ?></small></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Họ và tên</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Full name" name="name" value="<?php echo $user['name'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đơn vị</label>
                            <select class="form-select form-select-sm md-selected" aria-label=".form-select-sm example" name="unit">
                                
                                <?php
                                    $have = false;
                                    for($i = 0; $i < count($listUnit); $i++){
                                        if($listUnit[$i]['name'] == $user['unit']){
                                ?>
                                            <option value="<?php echo $listUnit[$i]['id']; ?>" selected><?php echo $listUnit[$i]['name']; ?></option>
                                <?php
                                            $have = true;
                                        }
                                    }
                                ?>
                                        <option value="NULL"></option>
                                <?php
                                    for($i = 0; $i < count($listUnit); $i++){
                                        if($listUnit[$i]['name'] != $user['unit']){
                                ?>
                                            <option value="<?php echo $listUnit[$i]['id']; ?>"><?php echo $listUnit[$i]['name']; ?></option>
                                <?php
                                        }
                                    }

                                ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Chức vụ</label>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="office">
                                
                                <?php
                                    $have = false;
                                    for($i = 0; $i < count($listOffice); $i++){
                                        if($listOffice[$i]['name'] == $user['office']){
                                ?>
                                            <option value="<?php echo $listOffice[$i]['id']; ?>" selected><?php echo $listOffice[$i]['name']; ?></option>
                                <?php
                                            $have = true;
                                        }
                                    }
                                ?>
                                        <option value="NULL"></option>
                                <?php
                                    for($i = 0; $i < count($listOffice); $i++){
                                        if($listOffice[$i]['name'] != $user['office']){
                                ?>
                                            <option value="<?php echo $listOffice[$i]['id']; ?>"><?php echo $listOffice[$i]['name']; ?></option>
                                <?php
                                        }
                                    }

                                ?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số cơ quan</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Company phone" name="company_number" value="<?php echo $user['company_number'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" value="<?php echo $user['email'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Số điện thoại</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone number" name="phone_number" value="<?php echo $user['phone_number'] ?>">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $user['id']; ?>"></input>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary float-end" name="edit">Sửa</button>
                    </form>

                </div>
                <div class="col-1 col-lg-3"></div>
            </div>

        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>