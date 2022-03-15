<?php 
include "../proses/koneksi.php"; 
session_start(); 
                   if (empty($_SESSION['username'])){ // session gawe cek gak iso d back lek wes logout
                    echo "<meta http-equiv='refresh' content='0; url=../proses/login.php'> ";
                   }else{
   $qu=mysqli_query($conn," SELECT COUNT(id_user) FROM tb_user");
   $has=mysqli_fetch_row($qu);
   $qu1=mysqli_query($conn," SELECT COUNT(id_sepeda) FROM tb_sepeda");
   $has1=mysqli_fetch_row($qu1);    
   $qu2=mysqli_query($conn," SELECT COUNT(id_kriteria) FROM tb_kriteria");
   $has2=mysqli_fetch_row($qu2);                     
   // $qu3=mysqli_query($conn," SELECT COUNT(id_kriteria) FROM tb_kriteria");
   // $has3=mysqli_fetch_row($qu3);                  
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
         <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="../images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                             <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li >
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Pengguna</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="pengguna_input.php">Tambah</a>
                                </li>
                                <li>
                                    <a href="pengguna.php">Edit</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li >
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Sepeda Motor</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="sepeda_input.php">Tambah</a>
                                </li>
                                <li>
                                    <a href="sepeda.php">Edit</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="kriteria.php">
                                <i class="fas fa-table"></i>Kriteria</a>
                           
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Hasil Penggunaan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="sepeda_input.php">Tambah</a>
                                </li>
                                <li>
                                    <a href="sepeda.php">Edit</a>
                                </li>
                              
                            </ul>
                        </li>
                       
                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->   <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                             <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Pengguna</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="pengguna_input.php">Tambah</a>
                                </li>
                                <li>
                                    <a href="pengguna.php">Edit</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li  >
                            <a class="js-arrow" href="#">
                                <i class="far fa-check-square"></i>Sepeda Motor</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="sepeda_input.php">Tambah</a>
                                </li>
                                <li>
                                    <a href="sepeda.php">Edit</a>
                                </li>
                              
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="kriteria.php">
                                <i class="fas fa-table"></i>Kriteria</a>
                           
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Hasil Penggunaan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="sepeda_input.php">Tambah</a>
                                </li>
                                <li>
                                    <a href="sepeda.php">Edit</a>
                                </li>
                              
                            </ul>
                        </li>
                         </ul>
                </nav>
            </div>
        </aside>
       
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="pencarian.php" method="POST">
                                <input class="au-input au-input--xl" type="text" name="cari" placeholder="Pencarian data &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                    
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/avatar-03.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/avatar-03.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin</a>
                                                    </h5>
                                                    <span class="email">Admin@kjm.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="../proses/logout.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                             <div class="col-md-12">
                                <!-- teks-->
                                <div class="map-data m-b-40">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-map"></i>Selamat Datang Administator di <b>KJM Trenggalek</b></h3>
                                     <img src="../images/2.jpg" width="350px" >
                                     <h5 style="float: right;width: 50%;">Aplikasi ini merupakan aplikasi untuk Sistem Pendukung Keputusan dalam pemilihan sepeda motor Honda yang sesuai dengan keinginan dan kebutuhan pengguna. Aplikasi ini dibangun dengan menggunakan Metode Analytical Hierarchy Process (AHP) Aplikasi ini dibuat oleh Adinta Yuliarifin  sebagai salah satu syarat kelulusan untuk mendapatkan gelar S-1 di Kampus Institut Teknologi Nasional Malang. Semoga aplikasi ini berguna bagi para penggunannya.  </h5>
                                    <div class="map-wrap m-t-45 m-b-20">
                                         
                                    </div>
                                </div>
                                <!-- END teks-->
                            </div>
                  
                        </div>
                        
                       
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php

}
?>
