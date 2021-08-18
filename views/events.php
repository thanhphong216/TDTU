<?php
    $listNewsetEvent = getListNewestEvent(6);
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
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/events.css" ?>>

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Sự kiện | Đại học Tôn Đức Thắng</title>
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

        <!-- START SECTION EVENTS -->
        <section class="events">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center events-title">
                        <h2 class="text-uppercase fw-bold">Trang sự kiện</h2>
                    </div>
                </div>

                <div class="row events-block">

                    <!-- START LIST EVENT -->
                    <div class="col-12 col-lg-9">
                        <ul>
                            <li>
                                <div class="row event-block">
                                    <div class="col-12 col-lg-5">
                                        <div><img src="https://www.tdtu.edu.vn/sites/www/files/events/2019/Seminar-event.jpg" class="img-responsive"></div>
                                    </div>
                                    <div class="col-12 col-lg-7 content">
                                        <a href="#"><h4 class="fw-bold">Seminar khoa học: Cải thiện độ chính xác của AutoDock Vina bằng cách thay đổi các thông số thực nghiệm</h4></a>
    
                                        <p><i class="far fa-calendar-alt"></i> Từ 13:30 đến 15:30 ngày 18/08/2021.</p>
    
                                        <p><i class="fas fa-map-marker-alt"></i> Trường Đại học Tôn Đức Thắng, khách mời tham dự online.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row event-block">
                                    <div class="col-12 col-lg-5">
                                        <div><img src="https://www.tdtu.edu.vn/sites/www/files/events/2019/Seminar-event.jpg" class="img-responsive"></div>
                                    </div>
                                    <div class="col-12 col-lg-7 content">
                                        <a href="#"><h4 class="fw-bold">Seminar khoa học: Cải thiện độ chính xác của AutoDock Vina bằng cách thay đổi các thông số thực nghiệm</h4></a>
    
                                        <p><i class="far fa-calendar-alt"></i> Từ 13:30 đến 15:30 ngày 18/08/2021.</p>
    
                                        <p><i class="fas fa-map-marker-alt"></i> Trường Đại học Tôn Đức Thắng, khách mời tham dự online.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row event-block">
                                    <div class="col-12 col-lg-5">
                                        <div><img src="https://www.tdtu.edu.vn/sites/www/files/events/2019/Seminar-event.jpg" class="img-responsive"></div>
                                    </div>
                                    <div class="col-12 col-lg-7 content">
                                        <a href="#"><h4 class="fw-bold">Seminar khoa học: Cải thiện độ chính xác của AutoDock Vina bằng cách thay đổi các thông số thực nghiệm</h4></a>
    
                                        <p><i class="far fa-calendar-alt"></i> Từ 13:30 đến 15:30 ngày 18/08/2021.</p>
    
                                        <p><i class="fas fa-map-marker-alt"></i> Trường Đại học Tôn Đức Thắng, khách mời tham dự online.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <div class="display-flex align-items-center justify-content-center">
                            <div class="btn-group flex-wrap nav-btns" role="group">
                                <button type="button" class="btn display-flex align-items-center justify-content-center">1</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">2</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">3</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">4</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">5</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">6</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">7</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">8</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">9</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center" disabled>...</button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">>></button>
                                <button type="button" class="btn display-flex align-items-center justify-content-center">>|</button>
                            </div>
                        </div>
                    </div>
                    <!-- END LIST EVENT -->

                    <!-- START EVENT NEW -->
                    <div class="col-12 col-lg-3">
                        
                        <div class="row">
                            <div class="col-12 event-new-title">
                                <h3 class="text-uppercase fw-bold">Sự kiện mới</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 events-new-block">
                                <ul>

                                    <?php 
                                        for($i = 0; $i < count($listNewsetEvent); $i++){
                                    ?>
                                        <li>
                                            <div class="display-flex event-new-block">
                                                <div class="date">
                                                    <span class="display-block day"><?php echo (int)date('d', $listNewsetEvent[$i]['time_start']); ?></span>
                                                    <span class="display-block month">Tháng <?php echo (int)date('m', $listNewsetEvent[$i]['time_create']); ?></span>
                                                </div>
        
                                                <div class="content">
                                                    <a class="fw-bold" href="#"><?php echo $listNewsetEvent[$i]['title']; ?></a>
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
                    <!-- END EVENT NEW -->

                </div>

            </div>
        </section>
        <!-- END SECTION EVENTS -->

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