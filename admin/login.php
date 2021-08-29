<?php
    $message = '';
    if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){
        $user = login($_POST['username'], $_POST['password']);
        if($user == null){
            $message = '*Sai tên đăng nhập hoặc mật khẩu';
        }else{
            session_start();
            $_SESSION['account_id'] = $user['id'];
            header('Location:/admin');
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL . '/admin/'; ?>">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Login | Admin</title>
</head>
<body>
    
    <!-- START HEADER -->
    <main class="main">

        <section class="form-login">
            <div class="container">

                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <div class="login-form bg-light mt-4 p-4">
                            <form method="POST" class="row g-3">
                                <h4>Admin</h4>
                                <div class="col-12">
                                    <label>Username&emsp;<span class="text-danger" style="font-size: 0.7rem"><?php echo $message; ?></span></label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                                </div>
                                <div class="col-12">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe"> Remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="login" class="btn btn-dark float-end">Login</button>
                                </div>
                            </form>
                            <hr class="mt-4">
                            <div class="col-12">
                                <p class="text-center mb-0">Don't remember your account? <a href="#">Support</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>
    <!-- END HEADER -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>