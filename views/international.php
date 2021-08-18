<?php
    $listNewsIntercational = getListNewestPostDependType(3, 5);
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
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/international.css" ?>>

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Quốc tế hóa | Đại học Tôn Đức Thắng</title>
</head>
<body>
    
    <!-- START HEADER -->
    <?php include_once('layout/_header.php') ?>
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

        <!-- START SECTION PARNER -->
        <section class="parner">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-2">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/Banner%20Member%20of%20UCI.jpg" class="img-responsive">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-10">
                        <p>
                            Được sự khởi xướng của Đại học Tôn Đức Thắng (TDTU); các đại học thân hữu của TDTU đã nhất trí thành lập Mạng lưới hợp tác 
                            đại học quốc tế. 10 đại học đầu tiên (còn gọi là các Thành viên sáng lập) đã quyết định ký kết để hình thành mạng lưới này với 
                            tên gọi tiếng Anh là: University Consortium International (UCI). <span><a href="#">>> Xem thêm</a></span>
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION PARNER -->

        <!-- START SECTION NEWS -->
        <section class="news">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center news-title">
                        <h2 class="text-uppercase fw-bold">Hoạt động quốc tế hóa</h2>
                    </div>
                </div>

                <div class="row">

                    <?php 
                        for($i = 0; $i < count($listNewsIntercational); $i++){
                    ?>
                        <div class="col-12 col-lg-4 news-block">
                            <div>
                                <a href=<?php echo $listNewsIntercational[$i]['link']; ?>>
                                    <img src=<?php echo $listNewsIntercational[$i]['img']; ?> class="img-responsive">
                                </a>
                            </div>

                            <div class="content">
                                <h4 class="fw-bold">
                                    <a href=<?php echo $listNewsIntercational[$i]['link']; ?>><?php echo $listNewsIntercational[$i]['title']; ?></a>
                                </h4>

                                <p class="date"><?php echo date('d/m/y', $listNewsIntercational[$i]['time_create']); ?></p>

                                <p class="desc"><?php echo $listNewsIntercational[$i]['detail']; ?></p>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    
                </div>

                <div class="row">
                    <div class="col-12 display-flex justify-content-end">
                        <a class="btn text-uppercase fw-bold news-link" href="/tin-tuc/quoc-te-hoa">Tin khác >></a>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION NEWS -->

        <!-- START SECTION COOPERATION -->
        <section class="cooperation">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center cooperation-title">
                        <h2 class="text-uppercase fw-bold">Hợp tác quốc tế</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 cooperation-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/GV-quoc-te.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Hợp tác quốc tế về giáo dục</h4>

                            <p>Hợp tác giáo dục bậc sau đại học, đại học và trao đổi ngắn hạn</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 cooperation-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/International-400x300-4.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Hợp tác quốc tế về nghiên cứu</h4>

                            <p>Các chương trình và dự án hợp tác nghiên cứu với các đại học và tổ chức quốc tế khác</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 cooperation-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/Hop-tac-quoc-te.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Phát triển đối tác quốc tế</h4>

                            <p>Mở rộng hợp tác với các đại học top 500 thế giới</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION COOPERATION -->

        <!-- START SECTION HUMAN RESOURCE -->
        <section class="human-resource">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center human-resource-title">
                        <h2 class="text-uppercase fw-bold">Nhân lực quốc tế</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 human-resource-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/International-400x300-6.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Chính sách phát triển nguồn nhân lực quốc tế</h4>

                            <p>Tăng cường tuyển dụng nhân sự quốc tế và quốc tế hóa nguồn nhân lực tại chỗ</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 human-resource-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/International-400x300-5.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Thông tin nhân sự quốc tế</h4>

                            <p>Thông tin về giảng viên, chuyên gia quốc tế đang làm việc tại TDTU</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 human-resource-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/International-400x300-7.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Thông tin tuyển dụng quốc tế</h4>

                            <p>Tuyển dụng giảng viên, nghiên cứu viên, chuyên gia quốc tế</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION HUMAN RESOURCE -->

        <!-- START SECTION STUDENT -->
        <section class="student">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center student-title">
                        <h2 class="text-uppercase fw-bold">Sinh viên quốc tế</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 student-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/International-400x300-1.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Các chương trình tuyển sinh quốc tế</h4>

                            <p>Thông tin tuyển sinh quốc tế bậc sau đại học, đại học và các chương trình ngắn hạn</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 student-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/International-400x300-2.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Hỗ trợ tài chính cho sinh viên quốc tế</h4>

                            <p>Học bổng và các chính sách hỗ trợ dành cho sinh viên quốc tế</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 student-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Internationalization/image/International-400x300-3.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Sinh viên quốc tế tại TDTU</h4>

                            <p>Hoạt động của sinh viên quốc tế tại TDTU</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION STUDENT -->

        <!-- START SECTION INTERNATIONAL PAGE -->
        <section class="international-page">
            <div class="container">

                <div class="row">
                    <div class="col-12 text-center">
                        <div class="international-page-title position-relative display-flex justify-content-center align-items-center">
                            <h2 class="fw-bold">Chuyên trang quốc tế hóa</h2>
                        </div>
                        
                        <div class="international-page-link">
                            <a class="btn text-uppercase fw-bold" href="#">Trang chủ</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION INTERNATIONAL PAGE -->

    </main>
    <!-- END MAIN -->


    <!-- START FOOTER -->
    <?php include_once('layout/_footer.php') ?>
    <!-- END FOOTER -->




    <!-- Optional Bootstrap Bundle with Popper -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>