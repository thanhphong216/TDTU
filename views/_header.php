<?php
    $listSubSchool = getListSubSchool();
    $listFaculties = getListFaculties();
    $listInstitution = getListInstitution();
    $listCenter = getListCenter();
?>



<header class="header">

    <!-- START SECTION HEADER TOP -->
    <section class="header-top">
        <div class="container">
        
            <div class="row">
                <div class="col-12 col-lg-6 display-flex align-items-center justify-content-start cursor-pointer header-top-left">
                    <div>
                        <i class="fas fa-university"></i>
                    </div>
    
                    <ul>    
                        <li class="display-inline dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Trường</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <ul>

                                    <?php
                                        if(mysqli_num_rows($listSubSchool) > 0){
                                            while($row = mysqli_fetch_assoc($listSubSchool)){
                                    ?>
                                                <li class="display-block"><a href=<?php echo $row['link_page']; ?>><?php echo $row['name']; ?></a></li>
                                    <?php
                                            }
                                        }
                                    ?>
                                    
                                </ul>
                            </div>
                        </li>
                        <li class="display-inline">
                            |
                        </li>
                        <li class="display-inline dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Khoa</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <ul>

                                    <?php
                                        if(mysqli_num_rows($listFaculties) > 0){
                                            while($row = mysqli_fetch_assoc($listFaculties)){
                                    ?>
                                                <li class="display-block"><a href=<?php echo $row['link_page']; ?>><?php echo $row['name']; ?></a></li>
                                    <?php
                                            }
                                        }
                                    ?>       

                                </ul>
                            </div>
                        </li>
                        <li class="display-inline">
                            |
                        </li>
                        <li class="display-inline dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Viện</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <ul>

                                    <?php
                                        if(mysqli_num_rows($listInstitution) > 0){
                                            while($row = mysqli_fetch_assoc($listInstitution)){
                                    ?>
                                                <li class="display-block"><a href=<?php echo $row['link_page']; ?>><?php echo $row['name']; ?></a></li>
                                    <?php
                                            }
                                        }
                                    ?>    

                                </ul>
                            </div>
                        </li>
                        <li class="display-inline">
                            |
                        </li>
                        <li class="display-inline dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">Trung tâm</a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <ul>

                                    <?php
                                        if(mysqli_num_rows($listCenter) > 0){
                                            while($row = mysqli_fetch_assoc($listCenter)){
                                    ?>
                                                <li class="display-block"><a href=<?php echo $row['link_page']; ?>><?php echo $row['name']; ?></a></li>
                                    <?php
                                            }
                                        }
                                    ?>  

                                </ul>
                            </div>
                        </li>
                        <li class="display-inline">
                            |
                        </li>
                        <li class="display-inline">
                            <a href="#">Thư viện</a>
                        </li>
                    </ul>
                </div>

                <div class="col-12 col-lg-6 d-none d-lg-flex display-flex align-items-center justify-content-end cursor-pointer header-top-right">
                    <div>
                        <i class="fas fa-user"></i>
                    </div>
    
                    <ul>
                        <li class="display-inline">
                            <a href="#">Giảng viên/Viên chức</a>
                        </li>
                        <li class="display-inline">
                            |
                        </li>
                        <li class="display-inline">
                            <a href="#">Sinh viên</a>
                        </li>
                        <li class="display-inline">
                            |
                        </li>
                        <li class="display-inline">
                            <a href="#">Cựu sinh viên</a>
                        </li>
                    </ul>
    
                    <a href="#">
                        <div>
                            <img src="https://www.tdtu.edu.vn/themes/_logo/flag-en.png" alt="Language">
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- END SECTION HEADER TOP -->

    <!-- START SECTION LOGO -->
    <section class="logo">
        <div class="container">
            
            <div class="row">
                <div class="col-12 col-lg-6 display-flex align-items-center justify-content-start">
                    <a href="/"><img class="img-responsive" src="https://www.tdtu.edu.vn/sites/www/files/Brand-left-vi-1_0_0.png" alt="Logo"></a>
                </div>

                <div class="col-12 col-lg-6 d-none d-lg-block display-flex align-items-center justify-content-end">
                    <a href="#"><img class="img-responsive" src="https://tdtu.edu.vn/sites/www/files/Brand-10-vi.png" alt="Logo"></a>
                </div>
            </div>

        </div>
    </section>
    <!-- END SECTION LOGO -->

    <!-- START SECTION NAVBAR -->
    <section class="navbar-p">
        <div class="container">
            
            <div class="display-flex align-items-center justify-content-end navbar-content">
                <!-- START NAVBAR LINK -->
                <nav class="navbar navbar-expand-lg navbar-light navbar-link">
                    <ul class="navbar-nav d-none d-lg-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="/gioi-thieu">Giới thiệu<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/giao-duc">Giáo dục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/khoa-hoc-cong-nghe">Khoa học-Công nghệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/quoc-te-hoa">Quốc tế hóa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tuyen-sinh">Tuyển sinh</a>
                        </li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
                <!-- END NAVBAR LINK -->

                <!-- START OFFCANVAS -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                    <div class="offcanvas-header display-flex align-items-center justify-content-center">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="container">

                            <div class="row">
                                <div class="col-12">
                                    <a href="/gioi-thieu" class="text-uppercase">Giới thiệu</a>
                                </div>
                                <div class="col-12">
                                    <a href="/giao-duc" class="text-uppercase">Giáo dục</a>
                                </div>
                                <div class="col-12">
                                    <a href="/khoa-hoc-cong-nghe" class="text-uppercase">Khoa học-Công nghệ</a>
                                </div>
                                <div class="col-12">
                                    <a href="/quoc-te-hoa" class="text-uppercase">Quốc tế hóa</a>
                                </div>
                                <div class="col-12">
                                    <a href="/tuyen-sinh" class="text-uppercase">Tuyển sinh</a>
                                </div>
                                <div class="col-12">
                                    <a href="#"><p>Giảng viên/Viên chức</p></a>
                                    <a href="#"><p>Sinh viên</p></a>
                                    <a href="#"><p>Cựu sinh viên</p></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- START OFFCANVAS -->

                <!-- START NAVBAR SEARCH -->
                <div class="navbar-search">
                    <i class="fas fa-search" data-bs-toggle="dropdown" aria-expanded="false"></i>

                    <div class="dropdown-menu dropdown-menu-lg-end">
                        <div class="input-group display-flex">
                            <input type="search" class="form-control rounded btn-outline-none" placeholder="Nhập từ khóa" aria-label="Search"
                            aria-describedby="search-addon" />
                            <button type="button" class="btn text-uppercase fw-bold">Tìm</button>
                        </div>
                    </div>
                </div>
                <!-- START NAVBAR SEARCH -->
            </div>   

        </div>
    </section>
    <!-- END SECTION NAVBAR -->

</header>