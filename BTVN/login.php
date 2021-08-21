<?php
    include_once('ConnectionUtils.php');
    include_once('function.php');
  

    $message = "";
    if(isset($_POST['login'])){
        if(!isset($_POST['username']) || empty($_POST['username']) || !isset($_POST['password']) || empty($_POST['password'])){
            $message = "Chưa nhập username hoặc password";
        }else{

            $conn = ConnectionUtils::getInstance()->getConnect();

            $usermane = $_POST['username'];
            $password = $_POST['password'];
            
            $result = login($usermane, $password);
            if(count($result) > 0){
                // Start session
                session_start();
                $_SESSION["uid"] = $result[0]['uid'];

                header("location:admin.php");
            }else{
                $message = "Sai username hoặc password";
            }
    
            ConnectionUtils::getInstance()->closeConnect();

        }
    }

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
    
    <main class="main" style="margin-top: 10%;">
        <div class="container">

            <div class="row float-end">
                <div class="col-12">
                    <a href="index.php" class="btn btn-primary"><i class="fas fa-undo"></i></a>
                </div>
            </div>

            <div class="row">
                <div class="col-1 col-lg-3"></div>
                <div class="col-10 col-lg-6">

                    <form method="POST">
                        <div class="form-group">
                            <label class="text-danger"><small><?php echo $message; ?></small></label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary float-end" name="login">Login</button>
                    </form>

                </div>
                <div class="col-1 col-lg-3"></div>
            </div>

        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>