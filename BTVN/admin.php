<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        header("location:login.php");
    }

    include_once('ConnectionUtils.php');
    include_once('function.php');
    
    $conn = ConnectionUtils::getInstance()->getConnect();
    
    $user;
    if($_SESSION['uid'] == 0 || empty($_SESSION['uid'])){
        $user = "admin";
    }else{
        $user = getUser($_SESSION['uid'])[0]['name'];
    }

    $listUser = getListUser();
    // print_r($listUser);

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
    
    <header class="header">
        <div class="container">
            <div class="col-12">

                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand">Admin</a>
                      <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                      <a href="logout.php" class="btn btn-success" type="button"><?php echo $user; ?>, Logout</a>
                    </div>
                  </nav>

            </div>
        </div>
    </header>

    <main class="main" style="margin-top: 10%;">
        <div class="container">

            <div class="row">
                <div class="col-12">

                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" rowspan="2" class="text-center align-middle">STT</th>
                                <th scope="col" rowspan="2" class="text-center align-middle">Họ và tên</th>
                                <th scope="col" rowspan="2" class="text-center align-middle">Chức vụ</th>
                                <th scope="col" colspan="3" class="text-center">Số điện thoại</th>
                                <th scope="col" rowspan="2" class="text-center align-middle">Sửa</th>
                                <th scope="col" rowspan="2" class="text-center align-middle">Xóa</th>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">Cơ quan</th>
                                <th scope="row" class="text-center">Email</th>
                                <th scope="row" class="text-center">Di động</th>
                            </tr>
                        </thead>
                        <tbody>

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
                            
                        </tbody>
                    </table>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a href="add.php" class="btn btn-success float-end">Thêm</a>
                </div>
            </div>

        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>