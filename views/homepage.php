<?php
    $listCurrentEvent = getListCurrentEvent(2, 0);
    $listNewestEvent = getListNewestEvent(4, 0);
    $listNewestPost = getListNewestPost(3);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- LIB -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/fontawesome-free-5.15.3-web/css/all.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" ?>>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/assets/css/style.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/assets/css/homepage.css" ?>>

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Đại học Tôn Đức Thắng</title>
</head>
<body>
    
    <!-- START HEADER -->
    <?php include_once(ROOT_PATH . '/views/layouts/_header.php') ?>
    <!-- END HEADER -->


    <!-- START MAIN -->
    <main class="body">

        <!-- START SECTION SLIDE INTRODUCE -->
        <section class="slide-introduce display-flex align-items-center justify-content-center">
            <div id="carouselIntroduceControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.tdtu.edu.vn/sites/www/files/gva-sliderlayer-upload/TSV-K25-in7nj5.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.tdtu.edu.vn/sites/www/files/Faculty/new/Khoa-luat-new.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselIntroduceControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselIntroduceControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- END SECTION SLIDE INTRODUCE -->

        <!-- START SECTION NEWS -->
        <section class="news">
            <div class="container">
                
                <div class="row">
                    <div class="col">
                        <h2 class="text-center text-uppercase fw-bold news-title">Tin Tức</h2>
                    </div>
                </div>

                <div class="row news-content">

                    <?php 
                        for($i = 0; $i < count($listNewestPost); $i++){
                    ?>
                        <div class="col-12 col-lg-4 post-block">
                            <div class="display-flex align-items-center justify-content-center post-img">
                                <img class="img-responsive" src=<?php echo $listNewestPost[$i]['img']; ?>>
                            </div>

                            <div class="post-content">
                                <div class="post-title">
                                    <a class="fw-bold" href=<?php echo $listNewestPost[$i]['link']; ?>><?php echo $listNewestPost[$i]['title']; ?></a>
                                </div>

                                <div class="post-meta">
                                    <span class="post-categories"><a class="text-uppercase" href=<?php echo $listNewestPost[$i]['category_link']; ?>><?php echo $listNewestPost[$i]['category_name']; ?></a></span>
                                    &nbsp;|&nbsp;
                                    <span class="post-created"><?php echo date('d/m/y', $listNewestPost[$i]['time_create']); ?></span>
                                </div>

                                <div class="post-sum">
                                    <?php echo $listNewestPost[$i]['detail']; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                    
                </div>

                <div class="row">
                    <div class="col news-link">
                        <a href="/tin-tuc" class="btn btn-lg text-uppercase">Trang tin tức >></a>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION NEWS -->

        <!-- START SECTION ADMISSIONS -->
        <section class="admissions">
            <div class="container">
                <h2 class="text-center text-uppercase fw-bold admissions-title">Tuyển sinh 2021</h2>

                <div class="row">
                    <div class="col-12 col-lg-4 admissions-block">
                        <a href="https://www.youtube.com/watch?v=eRKrwM6QpY0"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/image_video.jpg"></a>
                    </div>
                    <div class="col-12 col-lg-4 admissions-block">
                        <a href="#"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/Cam-nang.jpg"></a>
                        <a href="https://www.facebook.com/tuyensinhtdtu"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/Tu-van.jpg"></a>
                        <a href="#"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/Kham-pha.jpg"></a>
                    </div>
                    <div class="col-12 col-lg-4 admissions-block">
                        <a href="#"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/ts2021.PNG"></a>
                        <a href="#"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/ptts.PNG"></a>
                        <a href="#"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/hdtnk.PNG"></a>
                        <a href="#"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Admission/admission_front/dmn.PNG"></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION ADMISSIONS -->

        <!-- START SECTION EVENTS -->
        <section class="events">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center text-uppercase fw-bold events-title">Sự kiện</h2>
                    </div>
                </div>

                <div class="row">

                    <?php 
                        for($i = 0; $i < count($listCurrentEvent); $i++){
                    ?>
                            <div class="col-12 col-lg-4">

                                <div class="event-post-block">
                                    <div class="position-relative">
                                        <a href=<?php echo $listCurrentEvent[$i]['link']; ?>><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/events/2019/Seminar-event.jpg"></a>
                                        <span class="btn-time-event-img"><i class="fas fa-history"></i> <?php echo (int)date('d', $listCurrentEvent[$i]['time_end']); ?> - Tháng <?php echo (int)date('m', $listCurrentEvent[$i]['time_end']); ?></span>
                                    </div>

                                    <div class="event-post-content">
                                        <div class="event-post-title fw-bold">
                                            <?php echo $listCurrentEvent[$i]['title']; ?>
                                        </div>

                                        <div class="event-post-desc">
                                            <?php echo $listCurrentEvent[$i]['detail']; ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                    <?php
                        }
                    ?>
                    
                    <div class="col-12 col-lg-4">
                        
                        <div class="events-block">
                            <ul>

                                <?php 
                                    for($i = 0; $i < count($listNewestEvent); $i++){
                                ?>
                                    <li>
                                        <div class="display-flex event-item">
                                            <div class="event-date">
                                                <span class="display-block day"><?php echo (int)date('d', $listNewestEvent[$i]['time_start']); ?></span>
                                                <span class="display-block month">Tháng <?php echo (int)date('m', $listNewestEvent[$i]['time_start']); ?></span>
                                            </div>

                                            <div class="event-content">
                                                <a class="fw-bold" href=<?php echo $listNewestEvent[$i]['link']; ?>><?php echo $listNewestEvent[$i]['title']; ?></a>
                                            </div>
                                        </div>
                                    </li>
                                <?php
                                    }
                                ?>

                            </ul>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 events-link">
                        <a href="/su-kien" class="btn btn-lg text-uppercase">Trang sự kiện >></a>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION EVENTS -->

        <!-- START SECTION FACULTY -->
        <section class="faculty">
            <div class="container">

                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center text-uppercase fw-bold faculty-title"><?php echo count($listFaculties); ?> Khoa</h2>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="owl-carousel owl-theme faculty-carousel">

                            <?php
                                for($i = 0; $i < count($listFaculties); $i++){
                            ?>
                                <div class="item">
                                    <div class="position-relative faculty-carousel-img">
                                        <img class="img-responsive" src=<?php echo BASE_URL . $listFaculties[$i]['img']; ?>>

                                        <div class="img-bg"></div>

                                        <div class="faculty-link text-center">
                                            <a class="fw-bold text-uppercase" href=<?php echo $listFaculties[$i]['link_page']; ?>>Visit the website</a>
                                        </div>
                                    </div>

                                    <div class="faculty-carousel-title">
                                        <a class="fw-bold" href=<?php echo $listFaculties[$i]['link_page']; ?>><?php echo $listFaculties[$i]['short_name']; ?></a>
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
        <!-- END SECTION FACULTY -->

    </main>
    <!-- END MAIN -->


    <!-- START FOOTER -->
    <?php include_once(ROOT_PATH . '/views/layouts/_footer.php') ?>
    <!-- END FOOTER -->


    
    <!-- Optional Bootstrap Bundle with Popper -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=<?php echo BASE_URL . "/lib/jquery.min.js" ?>></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src=<?php echo BASE_URL . "/lib/OwlCarousel2-2.3.4/dist/owl.carousel.min.js" ?>></script>
    <script src=<?php echo BASE_URL . "/assets/js/faculty-silder.js" ?>></script>
</body>
</html>