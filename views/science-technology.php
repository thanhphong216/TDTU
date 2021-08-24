<?php
    $listNewsSience = getListNewestPostDependType(3, 2);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LIB -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/fontawesome-free-5.15.3-web/css/all.css" ?>>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/style.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/science-technology.css" ?>>

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Khoa học-Công nghệ | Đại học Tôn Đức Thắng</title>
</head>
<body>

    <!-- START HEADER -->
    <?php include_once(ROOT_PATH . '/views/layouts/_header.php') ?>
    <!-- END HEADER -->


    <!-- START MAIN -->
    <main class="main">
        
        <!-- START SECTION HOME LINK -->
        <section class="home-link">
            <div class="container">
                <a href="/"><h2>Trang chủ -</h2></a>
            </div>
        </section>
        <!-- END SECTION HOME LINK -->

        <!-- START SECTION SCIENCE TECHNOLOGY -->
        <section class="science-technology">
            <div class="container">

                <div class="row science-technology-title">
                    <div class="col-12 text-center">
                        <h2 class="text-uppercase fw-bold">Khoa Học - Công Nghệ</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 science-technology-block">
                        <div>
                            <a href="#">
                                <img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Research/T%E1%BB%95%20ch%E1%BB%A9c%20KH-CN.jpg">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Tổ chức</h4>

                            <p>Hoạt động Khoa học - Công nghệ tại TDTU với định hướng trở thành đại học nghiên cứu theo chuẩn mực quốc tế</p>

                            <a href="#" class="text-uppercase fw-bold">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 science-technology-block">
                        <div>
                            <a href="#">
                                <img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Research/Ngu%E1%BB%93n%20l%E1%BB%B1c%20KHCN.jpg">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Nguồn lực</h4>

                            <p>Con người, nguồn tài chính, các dịch vụ Khoa học-Công nghệ và tổ chức tài trợ cho hoạt động nghiên cứu tại TDTU</p>

                            <a href="#" class="text-uppercase fw-bold">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 science-technology-block">
                        <div>
                            <a href="#">
                                <img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Research/S%E1%BA%A3n%20ph%E1%BA%A9m%20KHCN.jpg">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Sản phẩm</h4>

                            <p>Bằng sáng chế, bài báo khoa học, sản phẩm chuyển giao Khoa học - Công nghệ và các khóa học chuyên gia</p>

                            <a href="#" class="text-uppercase fw-bold">Chi tiết</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- END SECTION SCIENCE TECHNOLOGY -->

        <!-- START SECTION LINK -->
        <section class="link">
            <div class="container">
                
                <div class="row link-title">
                    <div class="col-12 text-center">
                        <h2 class="text-uppercase fw-bold">Liên kết</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 link-block">
                        <div class="text-center link-icon">
                            <i class="fas fa-landmark"></i>
                        </div>

                        <div class="text-center link-title">
                            <a href="#">
                                <h4 class="fw-bold">Đề tài - Dự án</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 link-block">
                        <div class="text-center link-icon">
                            <i class="fas fa-book-open"></i>
                        </div>

                        <div class="text-center link-title">
                            <a href="#">
                                <h4 class="fw-bold">Tạp chí khoa học</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 link-block">
                        <div class="text-center link-icon">
                            <i class="fas fa-stream"></i>
                        </div>

                        <div class="text-center link-title">
                            <a href="#">
                                <h4 class="fw-bold">Công trình đã công bố</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4 link-block">
                        <div class="text-center link-icon">
                            <i class="far fa-lightbulb"></i>
                        </div>

                        <div class="text-center link-title">
                            <a href="#">
                                <h4 class="fw-bold">Công bố mới</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 link-block">
                        <div class="text-center link-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <div class="text-center link-title">
                            <a href="#">
                                <h4 class="fw-bold">Hội nghị - Hội thảo</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 link-block">
                        <div class="text-center link-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>

                        <div class="text-center link-title">
                            <a href="#">
                                <h4 class="fw-bold">Quỹ phát triển khoa học và công nghệ</h4>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION LINK -->

        <!-- START SECTION SPOTLIGHT -->
        <section class="spotlight">
            <div class="container">
                
                <div class="row spotlight-title">
                    <div class="col-12 text-center">
                        <h2 class="text-uppercase fw-bold">Tiêu điểm</h2>
                    </div>
                </div>

                <div class="row">

                    <?php
                        for($i = 0; $i < count($listNewsSience); $i++){
                    ?>
                        <div class="col-12 col-lg-4 spotlight-block">
                            <div>
                                <a href=<?php echo $listNewsSience[$i]['link']; ?>>
                                    <img src=<?php echo $listNewsSience[$i]['img']; ?> class="img-responsive">
                                </a>
                            </div>

                            <div class="content">
                                <h4 class="fw-bold"><a href=<?php echo $listNewsSience[$i]['link']; ?>><?php echo $listNewsSience[$i]['title']; ?></a></h4>
                                
                                <p><?php echo $listNewsSience[$i]['detail']; ?></p>
                                
                                <p><?php echo date('d/m/y', $listNewsSience[$i]['time_create']); ?></p>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    
                </div>

            </div>
        </section>
        <!-- END SECTION SPOTLIGHT -->

    </main>
    <!-- END MAIN -->

    
    <!-- START FOOTER -->
    <?php include_once(ROOT_PATH . '/views/layouts/_footer.php') ?>
    <!-- END FOOTER -->

    

    <!-- Optional Bootstrap Bundle with Popper -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>