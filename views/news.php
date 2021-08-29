<?php
    $listNewestPost = getListNewestPost(5);
    $listNewsActivity = getListNewestPostDependType(3, 6);
    $listNewsAnnouncement = getListNewestPostDependType(3, 17);
    $listNewsAcademic = getListNewestPostDependType(2, 5);
    $listNewsSience = getListNewestPostDependType(2, 8);
    $listNewsInternational = getListNewestPostDependType(3, 9);
    $listNewsCooperation = getListNewestPostDependType(3, 10);
    $listNewsLecture = getListNewestPostDependType(3, 12);
    $listNewsSustainability = getListNewestPostDependType(3, 11);
    $listNewsMedia = getListNewestPostDependType(4, 16);
    $listNewsExperience = getListNewestPostDependType(4, 13);
    $listNewsUnion = getListNewestPostDependType(3, 15);
    $listNewsStudent = getListNewestPostDependType(3, 14);

    // echo '<pre>';
    // echo print_r($listNewsLecture);
    // echo '</pre>';
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL . '/'; ?>">

    <!-- LIB -->
    <link rel="stylesheet" href="lib/fontawesome-free-5.15.3-web/css/all.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/news.css">

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Tin tức | Đại học Tôn Đức Thắng</title>
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

        <!-- START SECTION NEWS -->
        <section class="news">
            <div class="container">
                
                <div class="row">
                    <div>
                        <div class="col-12 text-center news-title">
                            <h2 class="text-uppercase fw-bold">Trang tin tức</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">

                        <?php
                            if(!empty($listNewestPost)){
                        ?>
                            <div class="post-newest">
                                <div>
                                    <a href="<?php echo $listNewestPost[0]['link']; ?>">
                                        <img src="<?php echo $listNewestPost[0]['img']; ?>" class="img-responsive">
                                    </a>
                                </div>

                                <div class="post-content">
                                    <div class="post-meta">
                                        <span class="post-category">
                                            <a href="<?php echo $listNewestPost[0]['category_link']; ?>" class="text-uppercase"><?php echo $listNewestPost[0]['category_name']; ?></a>
                                        </span>
                                        &nbsp;|&nbsp;
                                        <span><?php echo date('d/m/Y', $listNewestPost[0]['time_create']); ?></span>
                                    </div>

                                    <h4 class="post-title">
                                        <a href="<?php echo $listNewestPost[0]['link']; ?>" class="fw-bold"><?php echo $listNewestPost[0]['title']; ?></a>
                                    </h4>
                                
                                    <p class="post-desc"><?php echo $listNewestPost[0]['detail']; ?></p>
                                </div>
                            </div>
                        <?php
                            }
                        ?>

                    </div>
                    <div class="col-12 col-lg-5">
                        <ul>

                            <?php
                                for($i = 1; $i < count($listNewestPost); $i++){
                            ?>
                                <li>
                                    <div class="row post-item">
                                        <div class="col-12 col-lg-5">
                                            <a href="<?php echo $listNewestPost[$i]['link']; ?>">
                                                <img src="<?php echo $listNewestPost[$i]['img']; ?>" class="img-responsive">
                                            </a>
                                        </div>

                                        <div class="col-12 col-lg-7 post-content">
                                            <h4 class="post-title">
                                                <a href="<?php echo $listNewestPost[$i]['link']; ?>" class="fw-bold"><?php echo $listNewestPost[$i]['title']; ?></a>
                                            </h4>
                                            <div class="post-meta">
                                                <span class="post-category">
                                                    <a href="<?php echo $listNewestPost[$i]['category_link']; ?>" class="text-uppercase"><?php echo $listNewestPost[$i]['category_name']; ?></a>
                                                </span>
                                                &nbsp;|&nbsp;
                                                <span><?php echo date('d/m/Y', $listNewestPost[$i]['time_create']); ?></span>
                                            </div>
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
        </section>
        <!-- END SECTION NEWS -->

        <!-- START SECTION NEW CATEGORY -->
        <section class="news-category">
            <div class="container">
                
                <div class="row category-row">

                    <!-- START BLOCK ACTIVITY -->
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Hoạt động chung</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsActivity); $i++){
                            ?>
                                <div class="col-12 col-lg-4 post-content">
                                    <div>
                                        <a href="<?php echo $listNewsActivity[$i]['link']; ?>"><img src="<?php echo $listNewsActivity[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <h4 class="post-title"><a href="<?php echo $listNewsActivity[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsActivity[$i]['title']; ?></a></h4>

                                    <p><?php echo $listNewsActivity[$i]['detail']; ?></p>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                    <!-- END BLOCK ACTIVITY -->

                    <!-- START BLOCK ANNOUNCEMENT -->
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Thông báo</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsAnnouncement); $i++){
                            ?>
                                <div class="col-12 post-content">
                                    <h4 class="post-title"><a href="<?php echo $listNewsAnnouncement[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsAnnouncement[$i]['title']; ?></a></h4>

                                    <div class="post-meta"><span><?php echo date('d/m/Y', $listNewsAnnouncement[$i]['time_create']); ?></span></div>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                    <!-- END BLOCK ANNOUNCEMENT -->

                </div>

                <div class="row category-row">

                    <!-- START BLOCK ACADEMIC -->
                    <div class="col-12 col-lg-6">
                       
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Giáo dục</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsAcademic); $i++){
                            ?>
                                <div class="col-12 col-lg-6 post-content">
                                    <div>
                                        <a href="<?php echo $listNewsAcademic[$i]['link']; ?>"><img src="<?php echo $listNewsAcademic[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <h4 class="post-title"><a href="<?php echo $listNewsAcademic[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsAcademic[$i]['title']; ?></a></h4>

                                    <p><?php echo $listNewsAcademic[$i]['detail']; ?></p>
                                </div>
                            <?php
                                }
                            ?>

                        </div>

                    </div>
                    <!-- END BLOCK ACADEMIC -->

                    <!-- START BLOCK SIENCE -->
                    <div class="col-12 col-lg-6">
                        
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Khoa học-Công nghệ</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsSience); $i++){
                            ?>
                                <div class="col-12 col-lg-6 post-content">
                                    <div>
                                        <a href="<?php echo $listNewsSience[$i]['link']; ?>"><img src="<?php echo $listNewsSience[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <h4 class="post-title"><a href="<?php echo $listNewsSience[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsSience[$i]['title']; ?></a></h4>

                                    <p><?php echo $listNewsSience[$i]['detail']; ?></p>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>

                    </div>
                    <!-- END BLOCK SIENCE -->

                </div>

                <div class="row category-row">

                    <!-- START BLOCK INTERNATIONAL -->
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Quốc tế hóa</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsInternational); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-12 col-lg-4">
                                        <a href="<?php echo $listNewsInternational[$i]['link']; ?>"><img src="<?php echo $listNewsInternational[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>
                                    
                                    <div class="col-12 col-lg-8">
                                        <h4 class="post-title"><a href="<?php echo $listNewsInternational[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsInternational[$i]['title']; ?></a></h4>

                                        <p><?php echo $listNewsInternational[$i]['detail']; ?></p>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                    <!-- END BLOCK INTERNATIONAL -->

                    <!-- START BLOCK COOPERATION -->
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Quan hệ cộng đồng</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsCooperation); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-12 col-lg-4">
                                        <a href="<?php echo $listNewsCooperation[$i]['link']; ?>"><img src="<?php echo $listNewsCooperation[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>
                                    
                                    <div class="col-12 col-lg-8">
                                        <h4 class="post-title"><a href="<?php echo $listNewsCooperation[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsCooperation[$i]['title']; ?></a></h4>

                                        <p><?php echo $listNewsCooperation[$i]['detail']; ?></p>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                    <!-- END BLOCK COOPERATION -->

                </div>

                <div class="row category-row">

                    <!-- START BLOCK LECTURES -->
                    <div class="col-12 col-lg 4">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Diễn giả công chúng</a></span></h2>
                            </div>
                        </div>

                        <div class="row">
                            
                            <?php
                                if(!empty($listNewsLecture)){
                            ?>
                                <div class="col-12 post-content">
                                    <div>
                                        <a href="<?php echo $listNewsLecture[0]['link']; ?>"><img src="<?php echo $listNewsLecture[0]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <h4 class="post-title"><a href="<?php echo $listNewsLecture[0]['link']; ?>" class="fw-bold"><?php echo $listNewsLecture[0]['title']; ?></a></h4>
                                </div>
                            <?php
                                }

                                for($i = 1; $i < count($listNewsLecture); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-3">
                                        <a href="<?php echo $listNewsLecture[$i]['link']; ?>"><img src="<?php echo $listNewsLecture[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <div class="col-9">
                                        <h4 class="post-title"><a href="<?php echo $listNewsLecture[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsLecture[$i]['title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                    <!-- END BLOCK LECTURES -->

                    <!-- START BLOCK SUSTAINABILITY -->
                    <div class="col-12 col-lg 4">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Phát triển bền vững</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                if(!empty($listNewsSustainability)){
                            ?>
                                <div class="col-12 post-content">
                                    <div>
                                        <a href="<?php echo $listNewsSustainability[0]['link']; ?>"><img src="<?php echo $listNewsSustainability[0]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <h4 class="post-title"><a href="<?php echo $listNewsSustainability[0]['link']; ?>" class="fw-bold"><?php echo $listNewsSustainability[0]['title']; ?></a></h4>
                                </div>
                            <?php
                                }

                                for($i = 1; $i < count($listNewsSustainability); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-3">
                                        <a href="<?php echo $listNewsSustainability[$i]['link']; ?>"><img src="<?php echo $listNewsSustainability[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <div class="col-9">
                                        <h4 class="post-title"><a href="<?php echo $listNewsSustainability[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsSustainability[$i]['title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                    <!-- END BLOCK SUSTAINABILITY -->

                    <!-- START BLOCK MEDIA -->
                    <div class="col-12 col-lg 4">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Tin trên báo</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsMedia); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-5">
                                        <a href="<?php echo $listNewsMedia[$i]['link']; ?>"><img src="<?php echo $listNewsMedia[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <div class="col-7">
                                        <h4 class="post-title"><a href="<?php echo $listNewsMedia[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsMedia[$i]['title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>
                    </div>
                    <!-- END BLOCK MEDIA -->

                </div>

                <div class="row category-row">

                    <!-- START BLOCK EXPERIENCE -->
                    <div class="col-12 col-lg 4">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Viết về TDTU</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                for($i = 0; $i < count($listNewsExperience); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-5">
                                        <a href="<?php echo $listNewsExperience[$i]['link']; ?>"><img src="<?php echo $listNewsExperience[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <div class="col-7">
                                        <h4 class="post-title"><a href="<?php echo $listNewsExperience[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsExperience[$i]['title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                    <!-- END BLOCK EXPERIENCE -->

                    <!-- START BLOCK UNION -->
                    <div class="col-12 col-lg 4">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Đoàn thể</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                if(!empty($listNewsUnion)){
                            ?>
                                <div class="col-12 post-content">
                                    <div>
                                        <a href="<?php echo $listNewsUnion[0]['link']; ?>"><img src="<?php echo $listNewsUnion[0]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <h4 class="post-title"><a href="<?php echo $listNewsUnion[0]['link']; ?>" class="fw-bold"><?php echo $listNewsUnion[0]['title']; ?></a></h4>
                                </div>
                            <?php
                                }

                                for($i = 1; $i < count($listNewsUnion); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-3">
                                        <a href="<?php echo $listNewsUnion[$i]['link']; ?>"><img src="<?php echo $listNewsUnion[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <div class="col-9">
                                        <h4 class="post-title"><a href="<?php echo $listNewsUnion[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsUnion[$i]['title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                    <!-- END BLOCK UNION -->

                    <!-- START BLOCK STUDENTS -->
                    <div class="col-12 col-lg 4">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="category-title"><span><a class="text-uppercase fw-bold" href="#">Sinh viên</a></span></h2>
                            </div>
                        </div>

                        <div class="row">

                            <?php
                                if(!empty($listNewsStudent)){
                            ?>
                                <div class="col-12 post-content">
                                    <div>
                                        <a href="<?php echo $listNewsStudent[0]['link']; ?>"><img src="<?php echo $listNewsStudent[0]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <h4 class="post-title"><a href="<?php echo $listNewsStudent[0]['link']; ?>" class="fw-bold"><?php echo $listNewsStudent[0]['title']; ?></a></h4>
                                </div>
                            <?php
                                }

                                for($i = 1; $i < count($listNewsStudent); $i++){
                            ?>
                                <div class="col-12 post-content row">
                                    <div class="col-3">
                                        <a href="<?php echo $listNewsStudent[$i]['link']; ?>"><img src="<?php echo $listNewsStudent[$i]['img']; ?>" class="img-responsive"></a>
                                    </div>

                                    <div class="col-9">
                                        <h4 class="post-title"><a href="<?php echo $listNewsStudent[$i]['link']; ?>" class="fw-bold"><?php echo $listNewsStudent[$i]['title']; ?></a></h4>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>

                        </div>
                    </div>
                    <!-- END BLOCK STUDENTS -->

                </div>

            </div>
        </section>
        <!-- END SECTION NEW CATEGORY -->

        <!-- START SECTION DISCOVER PAGE -->
        <section class="discover-page">
            <div class="container">
                
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="discover-page-title position-relative display-flex justify-content-center align-items-center">
                            <h2 class="fw-bold">Campus Life</h2>
                        </div>
                        
                        <div class="discover-page-link">
                            <a class="btn text-uppercase fw-bold" href="#">Khám phá</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION DISCOVER PAGE -->

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