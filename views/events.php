<?php
    $page = 1;
    if(isset($_GET['page'])){
        $page = ((int)$_GET['page']) > 0 ? (int)$_GET['page'] : 1;
    }

    
    $newsDisplay = 3;
    $countEvent = getCountEvent();
    $countPageEvent = ceil($countEvent / $newsDisplay);
    $maxDisplayPageEvent = 9;
    $rangeDisplayPageEvent = floor($maxDisplayPageEvent / 2);
    $listEvent = getListCurrentEvent($newsDisplay, $page - 1);
    $listNewestEvent = getListNewestEvent(6);
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
    <?php include_once(ROOT_PATH . '/views/layout/_header.php') ?>
    <!-- END HEADER -->


    <!-- START MAIN -->
    <main class="main">

        <!-- START SECTION HOME LINK -->
        <section class="home-link">
            <div class="container">
                <a href="/su-kien?page=2"><h2>Trang chủ -</h2></a>
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

                            <?php
                                for($i = 0; $i < count($listEvent); $i++){
                            ?>
                                <li>
                                    <div class="row event-block">
                                        <div class="col-12 col-lg-5">
                                            <div><img src="https://www.tdtu.edu.vn/sites/www/files/events/2019/Seminar-event.jpg" class="img-responsive"></div>
                                        </div>
                                        <div class="col-12 col-lg-7 content">
                                            <a href=<?php echo $listEvent[$i]['link']; ?>><h4 class="fw-bold"><?php echo $listEvent[$i]['title']; ?></h4></a>
        
                                            <p><i class="far fa-calendar-alt"></i> Từ <?php echo date('H:i - d/m/y', $listEvent[$i]['time_start']); ?> đến <?php echo date('H:i - d/m/y', $listEvent[$i]['time_end']); ?>.</p>
        
                                            <p><i class="fas fa-map-marker-alt"></i> <?php echo $listEvent[$i]['locate']; ?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php
                                }
                            ?>
                            
                        </ul>

                        <div class="display-flex align-items-center justify-content-center">
                            <div class="btn-group flex-wrap nav-btns" role="group">

                                <?php
                                    if(1 < $page){
                                        echo '<button type="button" page="1" class="btn display-flex align-items-center justify-content-center">|<</button>';
                                        echo '<button type="button" page="' . ($page - 1) . '" class="btn display-flex align-items-center justify-content-center"><<</button>';
                                    }
                                    if(1 < $page - $rangeDisplayPageEvent){
                                        echo '<button type="button" class="btn display-flex align-items-center justify-content-center" disabled>...</button>';
                                    }

                                    $start = $page - $rangeDisplayPageEvent;
                                    $end = $page + $rangeDisplayPageEvent;
                                    if($start <= 0){
                                        $end = ($end - $start + 1 < $countPageEvent) ? $end - $start + 1 : $countPageEvent;
                                        $start = 1;
                                    }else if($end > $countPageEvent){
                                        $start = ($start - ($end - $countPageEvent) > 0) ? $start - ($end - $countPageEvent) : 1;
                                        $end = $countPageEvent;
                                    }


                                    for($i = $start; $i <= $end; $i++){
                                        if($i == $page){
                                ?>
                                            <button type="button" page=<?php echo $i; ?> class="btn display-flex align-items-center justify-content-center" style="background-color: #eeeeee;"><?php echo $i; ?></button>
                                <?php
                                        }else{
                                ?>
                                            <button type="button" page=<?php echo $i; ?> class="btn display-flex align-items-center justify-content-center"><?php echo $i; ?></button>
                                <?php
                                        }
                                    }
                                

                                    if($page + $rangeDisplayPageEvent < $countPageEvent){
                                        echo '<button type="button" class="btn display-flex align-items-center justify-content-center" disabled>...</button>';
                                    }
                                    if($page < $countPageEvent){
                                        echo '<button type="button" page="' . ($page + 1) . '" class="btn display-flex align-items-center justify-content-center">>></button>';
                                        echo '<button type="button" page="' . $countPageEvent . '" class="btn display-flex align-items-center justify-content-center">>|</button>';
                                    }
                                ?>

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
                                        for($i = 0; $i < count($listNewestEvent); $i++){
                                    ?>
                                        <li>
                                            <div class="display-flex event-new-block">
                                                <div class="date">
                                                    <span class="display-block day"><?php echo (int)date('d', $listNewestEvent[$i]['time_start']); ?></span>
                                                    <span class="display-block month">Tháng <?php echo (int)date('m', $listNewestEvent[$i]['time_create']); ?></span>
                                                </div>
        
                                                <div class="content">
                                                    <a class="fw-bold" href="#"><?php echo $listNewestEvent[$i]['title']; ?></a>
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
    <?php include_once(ROOT_PATH . '/views/layout/_footer.php') ?>
    <!-- END FOOTER -->




    <!-- Optional Bootstrap Bundle with Popper -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=<?php echo BASE_URL . "/lib/jquery.min.js" ?>></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src=<?php echo BASE_URL . "/js/pagination-event.js" ?>></script>
</body>
</html>