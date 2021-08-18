<?php
    $countStudent = getCountStudent();
    $countTeacher = getCountTeacher();
    $countFaculty = count(getListFaculties());
    $countResearchGroup = getCountResearchGroup();

    $listPageHistoryExpand = getListPageIntroduce(1);
    $listPageLeader = getListPageIntroduce(2);
    $listPageResource = getListPageIntroduce(3);

    $listPageRating = getListPageIntroduceRating();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LIB -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/fontawesome-free-5.15.3-web/css/all.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" ?>>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/style.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/introduce.css" ?>>

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Giới thiệu | Đại học Tôn Đức Thắng</title>
</head>
<body>

    <!-- START HEADER -->
    <?php include_once(ROOT_PATH . '/views/layout/_header.php') ?>
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

        <!-- START SECTION ABOUT -->
        <section class="about">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center about-title">
                        <h2 class="text-uppercase fw-bold">Giới thiệu</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 about-detail">
                        <p class="text-center fw-bold">Đại học Tôn Đức Thắng (Ton Duc Thang University: TDTU) là đại học công lập, thành lập ngày 
                            24/9/1997. Sau hơn 24 năm phát triển, TDTU đã trở thành một cơ sở giáo dục đại học lớn của Việt Nam.</p>
                        <p class="text-center fw-bold">Phương châm hành động của toàn thể giảng viên, viên chức và sinh viên TDTU là:</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 about-detail-block">
                        <div class="display-flex align-items-baseline">
                            <i class="icon fa fa-quote-left"></i>
                            <p>
                                Không gì quan trọng hơn việc bảo đảm HIỆU QUẢ trong mọi hành động.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 about-detail-block">
                        <div class="display-flex align-items-baseline">
                            <i class="icon fa fa-quote-left"></i>
                            <p>
                                Không gì đáng quý hơn sự CÔNG BẰNG trong mọi ứng xử.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 about-detail-block">
                        <div class="display-flex align-items-baseline">
                            <i class="icon fa fa-quote-left"></i>
                            <p>
                                Không có gì đạo đức hơn TINH THẦN PHỤNG SỰ đất nước.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-12 col-lg-3 text-center about-desc-block">
                        <i class="fas fa-graduation-cap"></i>

                        <h3 class=" text-uppercase fw-bold"><?php echo $countStudent; ?></h3>

                        <p class="text-center text-uppercase">Sinh viên/Học viên</p>
                    </div>
                    <div class="col-12 col-12 col-lg-3 text-center about-desc-block">
                        <i class="fas fa-user-friends"></i>

                        <h3 class=" text-uppercase fw-bold"><?php echo $countTeacher; ?></h3>

                        <p class="text-center text-uppercase">Giảng viên/Viên chức</p>
                    </div>
                    <div class="col-12 col-12 col-lg-3 text-center about-desc-block">
                        <i class="fas fa-university"></i>

                        <h3 class=" text-uppercase fw-bold"><?php echo $countFaculty; ?></h3>

                        <p class="text-center text-uppercase">Khoa chuyên môn</p>
                    </div>
                    <div class="col-12 col-12 col-lg-3 text-center about-desc-block">
                        <i class="fas fa-search"></i>

                        <h3 class=" text-uppercase fw-bold"><?php echo $countResearchGroup; ?></h3>

                        <p class="text-center text-uppercase">Nhóm nghiên cứu</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION ABOUT -->

        <!-- START SECTION EXPAND -->
        <section class="expand">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center expand-title">
                        <h2 class="text-uppercase fw-bold">Hình thành và phát triển</h2>
                    </div>
                </div>

                <div class="row">

                    <?php 
                        for($i = 0; $i < count($listPageHistoryExpand); $i++){
                    ?>
                        <div class="col-12 col-md-5 col-lg-3 expand-block">
                            <div class="position-relative">
                                <a href=<?php echo $listPageHistoryExpand[$i]['link_page']; ?>>
                                    <img src=<?php echo $listPageHistoryExpand[$i]['img']; ?> class="img-responsive">
                                </a>

                                <div class="content">
                                    <h4 class="text-uppercase fw-bold"><?php echo $listPageHistoryExpand[$i]['name']; ?></h4>
        
                                    <p><a href=<?php echo $listPageHistoryExpand[$i]['link_page']; ?> class="text-uppercase fw-bold">Chi tiết</a></p>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                </div>

            </div>
        </section>
        <!-- END SECTION EXPAND -->

        <!-- START SECTION LEADER -->
        <section class="leader">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center leader-title">
                        <h2 class="text-uppercase fw-bold">Lãnh đạo trường</h2>
                    </div>
                </div>

                <div class="row">

                    <?php 
                        for($i = 0; $i < count($listPageLeader); $i++){
                    ?>
                        <div class="col-12 col-lg-4 leader-block">
                            <div>
                                <a href=<?php echo $listPageLeader[$i]['link_page']; ?>>
                                    <img src=<?php echo $listPageLeader[$i]['img']; ?> class="img-responsive">
                                </a>
                            </div>

                            <div class="content">
                                <h4 class="fw-bold"><?php echo $listPageLeader[$i]['name']; ?></h4>

                                <p><?php echo $listPageLeader[$i]['detail']; ?></p>
                            
                                <a href=<?php echo $listPageLeader[$i]['link_page']; ?> class="text-uppercase fw-bold">Chi tiết</a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                </div>

            </div>
        </section>
        <!-- END SECTION LEADER -->

        <!-- START SECTION RESOURCE -->
        <section class="resource">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center resource-title">
                        <h2 class="text-uppercase fw-bold">Con người và cơ sở vật chất</h2>
                    </div>
                </div>

                <div class="row">

                    <?php 
                        for($i = 0; $i < count($listPageResource); $i++){
                    ?>
                        <div class="col-12 col-lg-4 resource-block">
                            <div>
                                <a href=<?php echo $listPageResource[$i]['link_page']; ?>>
                                    <img src=<?php echo $listPageResource[$i]['img']; ?> class="img-responsive">
                                </a>
                            </div>

                            <div class="content">
                                <h4 class="fw-bold"><?php echo $listPageResource[$i]['name']; ?></h4>

                                <p><?php echo $listPageResource[$i]['detail']; ?></p>
                            
                                <a href=<?php echo $listPageResource[$i]['link_page']; ?> class="text-uppercase fw-bold">Chi tiết</a>
                            </div>
                        </div>
                    <?php
                        }
                    ?>

                </div>

            </div>
        </section>
        <!-- END SECTION RESOURCE -->

        <!-- START SECTION DISCOVER -->
        <section class="discover">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center discover-title">
                        <h2 class="text-uppercase fw-bold">Khám phá TDTU</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 discover-block">
                        <div class="position-relative overflow-hidden">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/styles/medium/public/articles/2021/Mar/Hoa-Giay/7.jpg?itok=9UhI2gLd" class="img-responsive">
                        
                            <div class="content">
                                <button type="button" class="btn display-flex align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-arrows-alt"></i></button>
                                <p>TDTU - Mùa hoa giấy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 discover-block">
                        <div class="position-relative overflow-hidden">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/styles/medium/public/articles/2021/Mar/Hoa-Giay/7.jpg?itok=9UhI2gLd" class="img-responsive">
                        
                            <div class="content">
                                <button type="button" class="btn display-flex align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-arrows-alt"></i></button>
                                <p>TDTU - Mùa hoa giấy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 discover-block">
                        <div class="position-relative overflow-hidden">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/styles/medium/public/articles/2021/Mar/Hoa-Giay/7.jpg?itok=9UhI2gLd" class="img-responsive">
                        
                            <div class="content">
                                <button type="button" class="btn display-flex align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-arrows-alt"></i></button>
                                <p>TDTU - Mùa hoa giấy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 discover-block">
                        <div class="position-relative overflow-hidden">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/styles/medium/public/articles/2021/Mar/Hoa-Giay/7.jpg?itok=9UhI2gLd" class="img-responsive">
                        
                            <div class="content">
                                <button type="button" class="btn display-flex align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-arrows-alt"></i></button>
                                <p>TDTU - Mùa hoa giấy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 discover-block">
                        <div class="position-relative overflow-hidden">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/styles/medium/public/articles/2021/Mar/Hoa-Giay/7.jpg?itok=9UhI2gLd" class="img-responsive">
                        
                            <div class="content">
                                <button type="button" class="btn display-flex align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-arrows-alt"></i></button>
                                <p>TDTU - Mùa hoa giấy</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 discover-block">
                        <div class="position-relative overflow-hidden">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/styles/medium/public/articles/2021/Mar/Hoa-Giay/7.jpg?itok=9UhI2gLd" class="img-responsive">
                        
                            <div class="content">
                                <button type="button" class="btn display-flex align-items-center justify-content-center" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-arrows-alt"></i></button>
                                <p>TDTU - Mùa hoa giấy</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION DISCOVER -->

        <!-- START SECTION RATING -->
        <section class="rating">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center rating-title">
                        <h2 class="text-uppercase fw-bold">Những đánh gia về trường</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        
                        <div class="owl-carousel owl-theme rating-carousel">

                            <?php 
                                for($i = 0; $i < count($listPageRating); $i++){
                            ?>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-4 rating-block">
                                            <div class="position-relative">
                                                <a href=<?php echo $listPageRating[$i]['link_page']; ?>>
                                                    <img src=<?php echo $listPageRating[$i]['img']; ?> class="img-responsive">
                                                </a>
                                                
                                                <div class="quote">
                                                    <i class="icon fa fa-quote-left"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 rating-block">
                                            <div class="content">
                                                <p class="detail"><?php echo $listPageRating[$i]['rate']; ?></p>
                                                <p class="author">
                                                    <span class="title fw-bold"> <?php echo $listPageRating[$i]['author']; ?></span>
                                                    <span> - </span>
                                                    <span class="job"> <?php echo $listPageRating[$i]['job']; ?></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION RATING -->

    </main>
    <!-- END MAIN -->


    <!-- START FOOTER -->
    <?php include_once(ROOT_PATH . '/views/layout/_footer.php') ?>
    <!-- END FOOTER -->




    <!-- Optional Bootstrap Bundle with Popper -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=<?php echo BASE_URL . "/lib/jquery.min.js" ?>></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src=<?php echo BASE_URL . "/lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js" ?>></script>
    <script src=<?php echo BASE_URL . "/js/rating-slider.js" ?>></script>
</body>
</html>