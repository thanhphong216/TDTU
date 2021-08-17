<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LIB -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/lib/fontawesome-free-5.15.3-web/css/all.css" ?>>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/style.css" ?>>
    <link rel="stylesheet" href=<?php echo BASE_URL . "/css/admission.css" ?>>

    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" type="image/png">
    <title>Tuyển sinh | Đại học Tôn Đức Thắng</title>
</head>
<body>
    
    <!-- START HEADER -->
    <?php include_once('_header.php') ?>
    <!-- END HEADER -->


    <!-- START MAIN -->
    <main class="main">

        <!-- START SECTION ADMISSION LINK -->
        <section class="admission-link">
            <div class="container">

                <a href="#">
                    <img src="https://www.tdtu.edu.vn/sites/www/files/Admission/ts-2021.jpg" class="img-responsive">
                </a>

            </div>
        </section>
        <!-- END SECTION ADMISSION LINK -->

        <!-- START SECTION ADMISSION MODE -->
        <section class="admission-mode">
            <div class="container">

                <div class="row">
                    <div class="col-12 col-lg-6 admission-mode-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Admission/ts1.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Sau đại học</h4>

                            <p>Tuyển sinh cao học và nghiên cứu sinh</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 admission-mode-block">
                        <div>
                            <a href="#">
                                <img src="https://www.tdtu.edu.vn/sites/www/files/Admission/ts2.jpg" class="img-responsive">
                            </a>
                        </div>

                        <div class="content">
                            <h4 class="fw-bold">Đại học</h4>

                            <p>Tuyển sinh các chương trình giáo dục đại học</p>

                            <a class="text-uppercase fw-bold" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- END SECTION ADMISSION MODE -->

    </main>
    <!-- END MAIN -->


    <!-- START FOOTER -->
    <?php include_once('_footer.php') ?>
    <!-- END FOOTER -->




    <!-- Optional Bootstrap Bundle with Popper -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>