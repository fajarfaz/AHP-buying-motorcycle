<?php 
include "../proses/koneksi.php";
session_start(); 
                   if (empty($_SESSION['username']) ){
                    echo "<meta http-equiv='refresh' content='0; url=../proses/login.php'> ";
                   }else{
                  
  @$cari = $_POST['cari'];
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
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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
                        <a class="logo" href="index.html">
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
                        <li >
                             <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>

                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas  fa-desktop"></i>Pengguna</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Sepeda Motor</a>
                        </li>
                          <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Kriteria</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-copy"></i>Hasil Keputusan</a>
                        </li>
                       
                      
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li >
                             <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Beranda</a>

                        </li>
                       
                        <li>
                            <a href="sepeda.php">
                                <i class="far fa-check-square"></i>Sepeda Motor</a>
                        </li>
                          <li>
                            <a href="kriteria.php">
                                <i class="fas fa-table"></i>Kriteria</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-copy"></i>Hasil Keputusan</a>
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
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="../images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">

                    <div class="container-fluid">

                        
                <div class="row">

                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">data kriteria</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                         <form action="pencarian.php" method="POST">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property1">
                                                <option selected="selected">Urutkan</option>
                                                <option value="DESC">Terbaru</option>
                                                <option value="ASC">Terlama</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       
                                        <button class="au-btn-filter" type="submit">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    </form>
                                    <div class="table-data__tool-right">
                                       
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>no</th>
                                                <th>kriteria</th>
                                                <th>sub kriteria</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                         @$property1 = $_POST['property1'];
                        $no = 0;
                        $qu=mysqli_query($conn,"SELECT * FROM tb_kriteria WHERE id_kriteria LIKE '%".$cari."%' OR kriteria LIKE '%".$cari."%' OR sub LIKE '%".$cari."%' ORDER BY id_kriteria $property1");
                        while($has=mysqli_fetch_row($qu)){
                        $no = $no +1;
           
                                ?>
                                          
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><?php echo  $no ;?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $has[1] ;?></span>
                                                </td>
                                               <td ><?php echo $has[2] ;?></td>
                                   
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div><br><br>
                <div class="row">

                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">data sepeda motor</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                         <form action="pencarian.php" method="POST">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property2">
                                                <option selected="selected">Urutkan</option>
                                                <option value="DESC">Terbaru</option>
                                                <option value="ASC">Terlama</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       
                                        <button class="au-btn-filter" type="submit">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    </form>
                                    <div class="table-data__tool-right">
                                       
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>id sepeda</th>
                                                <th>merek</th>
                                                <th>harga</th>
                                                <th>kapasitas</th>
                                                <th>bahan bakar</th>
                                                <th>model</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                        <?php 
                function rupiah($angka){
                    $hasil_rupiah = "Rp " . number_format($angka);
                    return $hasil_rupiah;
                }
                          @$property2 = $_POST['property2'];
                        $qu=mysqli_query($conn,"SELECT * FROM tb_sepeda WHERE id_sepeda LIKE '%".$cari."%' OR merek LIKE '%".$cari."%' OR harga LIKE '%".$cari."%' OR model LIKE '%".$cari."%' ORDER BY id_sepeda $property2");
                        while($has=mysqli_fetch_row($qu)){
                
                $rp =rupiah($has[2]);
                                ?>
                                          
                                            <tr class="spacer"></tr>
                                            <tr class="tr-shadow">
                                                <td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>
                                                <td><?php echo $has[0] ;?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $has[1] ;?></span>
                                                </td>
                                                <td ><?php echo $rp ;?>.00</td>
                                               <td ><?php echo $has[3] ;?></td>
                                               <td ><?php echo $has[4] ;?> Km/ Liter</td>
                                               <td ><?php echo $has[5] ;?></td>
                                                <td>
                                                    <div class="table-data-feature">                                                
                                                        <a href="sepeda_edit.php?id=<?php echo $has[0];?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button></a>
                                                        <a href="../proses/hapus_sepeda.php?id=<?php echo $has[0];?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Hapus" href="">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

                    </div><br><br>
                    </div>

                    </div>

                </div>

            </div>
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
<?php } ?>