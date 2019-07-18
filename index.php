<?php
include 'aksinya/koneksi.php';
$update = mysqli_query($koneksi, "SELECT * FROM  member");
include 'aksinya/fungsi.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Little Closet</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Little Closet template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link rel="stylesheet" href="panel_member/plugins/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>


<!-- Menu -->

<div class="menu">

    <!-- Search -->
    <div class="menu_search">
        <form action="#" id="menu_search_form" class="menu_search_form">
            <input type="text" class="search_input" placeholder="Search Item" required="required">
            <button class="menu_search_button"><img src="images/search.png" alt=""></button>
        </form>
    </div>
    <!-- Navigation -->
    <div class="menu_nav">
        <ul>
            <li><a href="#">Kapsul</a></li>
            <li><a href="#">Salap</a></li>
            <li><a href="#">Tablet</a></li>
            <li><a href="#">Pil</a></li>
            <li><a href="#">Botol</a></li>
        </ul>
    </div>
    <!-- Contact Info -->
    <div class="menu_contact">
        <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
            <!--			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>-->
            <!--			<div>+1 912-252-7350</div>-->
        </div>
        <div class="menu_social">
            <ul class="menu_social_list d-flex flex-row align-items-start justify-content-start">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<div class="super_container">

    <!-- Header -->

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="#">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="images/logo_1.png" alt=""></div>
                        <div>Toko Obat Sehati</div>
                    </div>
                </a>
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li class="active"><a href="#">Tablet</a></li>
                    <li><a href="#">Kapsul</a></li>
                    <li><a href="#">Botol</a></li>
                    <li><a href="#">Tetes</a></li>
                    <li><a href="#">Salap</a></li>
                </ul>
            </nav>
            <div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
                <!-- Search -->
                <div class="header_search">
                    <form action="#" id="header_search_form">
                        <input type="text" class="search_input" placeholder="Search Item" required="required">
                        <button class="header_search_button"><img src="images/search.png" alt=""></button>
                    </form>
                </div>
                <!-- User -->
                <div class="user">

                    <a data-toggle="modal" data-target="#modalLRForm" class="user-profile"  aria-expanded="false"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a>
                    <nav>
                        <ul >
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="#" ></i>Profil</a></li>
                                <li><a href="#" ></i>Produk Suka</a></li>
                                <li><a href="#" ></i>Pembelian</a></li>
                                <li><a href="#" ></i>Transaksi</a></li>
                                <li><a href="#" ></i>Pengaturan</a></li>
                                <li><a href="logout.php" onclick='return confirm(\"Apakah Anda ingin mengedit data ?\")'><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </li>
                            </ul>
                            </li>

                        </ul>

                    </nav>
                </div>

                <!-- Cart -->
                <div class="cart"><a href="cart.html"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
                <!-- Phone -->
                <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                    <!--					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>-->
                    <!--					<div>+62 821-4835-2769</div>-->
                </div>
            </div>
        </div>
    </header>

    <div class="super_container_inner">
        <div class="super_overlay"></div>

        <!-- Home -->

        <div class="home">
            <!-- Home Slider -->
            <div class="home_slider_container">
                <div class="owl-carousel owl-theme home_slider">

                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/ads_herbal.png"></div>
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col fill_height">
                                    <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                        <div class="home_content">
                                            <div class="home_title">PRODUK BARU !</div>
                                            <div class="home_subtitle">HERBALIFE</div>
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                        <div class="home_item_side"><a href="product.html"><img src="images/botol.gif" alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                        <div class="product home_item_large">
                                                            <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                                <div>
                                                                    <div>Mulai dari</div>
                                                                    <div>150<span>.000</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="product_image"><img src="images/tas.png" alt=""></div>
                                                            <div class="product_content">
                                                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                                    <div>
                                                                        <div>
                                                                            <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                            <div class="product_category">In <a href="category.html">Category</a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ml-auto text-right">
                                                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                        <div class="product_price text-right">$3<span>.99</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="product_buttons">
                                                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                            <div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
                                                                        </div>
                                                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                            <div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.html"><img src="images/baju.png" alt=""></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide -->
                    <div class="owl-item">
                        <div class="background_image" style="background-image:url(images/bisnis-apotik-apotek.jpg)"></div>
                        <div class="container fill_height">
                            <div class="row fill_height">
                                <div class="col fill_height">
                                    <div class="home_container d-flex flex-column align-items-center justify-content-start">
                                        <div class="home_content">
                                            <div class="home_title">TOKO OBAT</div>
                                            <div class="home_subtitle">SEHATI</div>
                                            <div class="home_items">
                                                <div class="row">
                                                    <div class="col-sm-3 offset-lg-1">
                                                        <div class="home_item_side"><a href="product.html"><img src="images/obat-hammer-of-thor.png" alt=""></a></div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-8 offset-sm-2 offset-md-0">
                                                        <div class="product home_item_large">
                                                            <div class="product_tag d-flex flex-column align-items-center justify-content-center">
                                                                <div>
                                                                    <div>from</div>
                                                                    <div>Rp.<span>.00</span></div>
                                                                </div>
                                                            </div>
                                                            <div class="product_image"><img src="images/obh madu.png" alt=""></div>
                                                            <div class="product_content">
                                                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                                                    <div>
                                                                        <div>
                                                                            <div class="product_name"><a href="product.html">Cool Clothing with Brown Stripes</a></div>
                                                                            <div class="product_category">In <a href="category.html">Category</a></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ml-auto text-right">
                                                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                                                        <div class="product_price text-right">$3<span>.99</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="product_buttons">
                                                                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                                                        <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                                            <div><div><img src="images/heart.svg" alt=""><div>+</div></div></div>
                                                                        </div>
                                                                        <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                                            <div><div><img src="images/cart_2.svg" alt=""><div>+</div></div></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.html"><img src="images/Varian-Madu-TJ.png" alt=""></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="home_slider_nav home_slider_nav_prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                <div class="home_slider_nav home_slider_nav_next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

                <!-- Home Slider Dots -->

                <div class="home_slider_dots_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_slider_dots">
                                    <ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-center justify-content-center">
                                        <li class="home_slider_custom_dot active">01</li>
                                        <li class="home_slider_custom_dot">02</li>
                                        <li class="home_slider_custom_dot">03</li>
                                        <li class="home_slider_custom_dot">04</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Products -->

        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <div class="section_title text-center">KATEGORI TERSEDIA</div>
                    </div>
                </div>
                <div class="row page_nav_row">
                    <div class="col">
                        <div class="page_nav">
                            <ul class="d-flex flex-row align-items-start justify-content-center">
                                <li class="active"><a href="category.html">Aksesoris <br/>Herbalife</a></li>
                                <li><a style="text-align: center" href="category.html">Obat <br/>Kapsul</a></li>
                                <li><a style="text-align: center" href="category.html">Obat<br/>Tablet</a></li>
                                <li><a style="text-align: center" href="category.html">Obat <br/>Pil</a></li>
                                <li><a style="text-align: center" href="category.html">Obat <br/>Botol</a></li>
                                <li><a style="text-align: center" href="category.html">Obat <br/>Tetes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row products_row">

                    <!-- Product -->
                    <?php
                    $kd_produk = $_GET['kd_produk'];
                    $batas='1';
                    $tabel="produknya";
                    $halaman=$_GET['halaman'];
                    $posisi=null;
                    if(empty($halaman)){
                        $posisi=0;
                        $halaman=1;
                    }else{
                        $posisi=($halaman-1)* $batas;
                    }
                    $sql = " SELECT * from produk order  by kd_produk asc limit $batas";
                    if(!empty($id)) {
                        $sql = " SELECT * from produk";
                    }
                    $hasil = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
                    $no = 1;
                    //proses menampilkan data
                    while($prod = mysqli_fetch_object($hasil)) {
                        ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="product">
                                <div class="product_image"><?php echo "<img  src='images/" . $prod ->foto_file . "'; style='width:270px; height:150px;' /> ";?>
                                </div>
                                <div class="product_content">
                                    <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                        <div>
                                            <div>
                                                <div class="product_name"><a href="product.html"><?=$prod->nama?></a></div>
                                                <div class="product_category">In <a href="category.html">Category</a></div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="rating_r rating_r_5 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                            <div class="product_price text-right">IDR 2.000.99</div>
                                        </div>
                                    </div>
                                    <div class="product_buttons">
                                        <div class="text-right d-flex flex-row align-items-start justify-content-start">
                                            <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                                                <div><div><img src="images/heart_2.svg" class="svg" alt=""><div>+</div></div></div>
                                            </div>
                                            <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                <div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
                <div class="demo-button-toolbar clearfix">

                    <?php //=============CUT HERE for paging====================================
                    $tampil2 = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT kd_produk from produk");

                    $jmldata = mysqli_num_rows($tampil2);
                    $jumlah_halaman = ceil($jmldata / $batas);
                    ?>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

                        <?php pagination($halaman, $jumlah_halaman, "produknya"); ?>

                    </div>
                    <!--                        <div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>-->
                    <div class='well'>Jumlah data :<strong><?= $jmldata; ?> </strong></div>
                </div>
            </div>
        </div>

        <!-- Boxes -->

        <div class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="boxes_container d-flex flex-row align-items-start justify-content-between flex-wrap">


                            <!-- Box -->
                            <div class="box">
                                <div class="background_image" style="background-image:url(images/box_2.jpg)"></div>
                                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="box_left">
                                        <div class="box_image">
                                            <a href="category.html">
                                                <div class="background_image" style="background-image:url(images/box_2_img.jpg)"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box_right text-center">
                                        <div class="box_title">Popular Choice</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Box -->
                            <div class="box">
                                <div class="background_image" style="background-image:url(images/ads_herbal.png)"></div>
                                <div class="box_content d-flex flex-row align-items-center justify-content-start">
                                    <div class="box_left">
                                        <div class="box_image">
                                            <a href="category.html">
                                                <div class="background_image" style="background-image:url(images/botol.gif)"></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="box_right text-center">
                                        <div class="box_title"><h2 style="color: #62e81a">Terlaku <br/> Herbalife</h2></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->

        <div class="features">
            <div class="container">
                <div class="row">

                    <!-- Feature -->
                    <div class="col-lg-4 feature_col">
                        <div class="feature d-flex flex-row align-items-start justify-content-start">
                            <div class="feature_left">
                                <div class="feature_icon"><img src="images/icon_1.svg" alt=""></div>
                            </div>
                            <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                                <div class="feature_title">Metode Pembayaran</div>
                            </div>
                        </div>
                    </div>

                    <!-- Feature -->
                    <div class="col-lg-4 feature_col">
                        <div class="feature d-flex flex-row align-items-start justify-content-start">
                            <div class="feature_left">
                                <div class="feature_icon ml-auto mr-auto"><img src="images/icon_2.svg" alt=""></div>
                            </div>
                            <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                                <div class="feature_title">Member</div>
                            </div>
                        </div>
                    </div>
                    <!--Modal: Login / Register Form-->
                    <div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog cascading-modal" role="document">
                            <!--Content-->
                            <div class="modal-content">

                                <!--Modal cascading tabs-->
                                <div class="modal-c-tabs">

                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab">  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                                                Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab">  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                Register</a>
                                        </li>
                                    </ul>

                                    <!-- Tab panels -->
                                    <div class="tab-content">
                                        <!--Panel 7-->
                                        <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

                                            <!--Body-->
                                            <div class="modal-body mb-1">
                                                <div class="md-form form-sm mb-5">
                                                    <label>Your email</label>
                                                    <input type="email" id="modalLRInput10" class="form-control form-control-sm validate">

                                                </div>

                                                <div class="md-form form-sm mb-4">
                                                    <label>Your password</label>
                                                    <input type="password" id="modalLRInput11" class="form-control form-control-sm validate">

                                                </div>
                                                <div class="text-center mt-2">
                                                    <button class="btn btn-info">Log in <span class="glyphicon glyphicon-ok"></span></i></button>
                                                </div>
                                            </div>
                                            <!--Footer-->
                                            <div class="modal-footer">
                                                <div class="options text-center text-md-right mt-1">
                                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                                </div>
                                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                        <!--/.Panel 7-->

                                        <!--Panel 8-->
                                        <div class="tab-pane fade" id="panel8" role="tabpanel">

                                            <!--Body-->
                                            <form id="form_advanced_validation" action="" enctype="multipart/form-data" method="POST">
                                                <?php
                                                if(isset ($_POST['tambah'])) {
                                                    $nik = $_POST['nik'];
                                                    $n_member = $_POST['n_member'];
                                                    $jk = $_POST['jk'];
                                                    $hp = $_POST['hp'];
                                                    $remail = $_POST['email'];
                                                    $kota = $_POST['kota'];
                                                    $kodepost = $_POST['kodepos'];
                                                    $password = $_POST['password'];
                                                    $alamat = $_POST['alamat'];
                                                    $fotomember = $_POST['fotomember'];

                                                    $nama = "1463";
                                                    $dir_upload = "panel_member/images/";
                                                    $nama_file = $_FILES['fotomember']['name'];
                                                    //    $nama_file = $kd_produk.pathinfo($_FILES['foto_file']['name'], PATHINFO_EXTENSION);
                                                    $x = explode('.', $nama_file);
                                                    $extension = strtolower(end($x));
                                                    $namabaru = $nama_file . '.' . $extension;
                                                    //
                                                    $lokasi_file = $_FILES['fotomember']['tmp_name'];

                                                    if (is_uploaded_file($_FILES['fotomember']['tmp_name'])) {
                                                        //        'Whatevernameyouwant.'.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
                                                        $terupload = move_uploaded_file($lokasi_file, $dir_upload.$nama_file);
                                                        $update = mysqli_query($koneksi, "INSERT INTO member(nik,n_member,jk,hp,email,kota,kodepos,alamat,fotomember,password)
      VALUES('$nik','$n_member','$jk','$hp','$remail','$kota','$kodepost','$alamat','$nama_file','$password')") or die(mysqli_error($koneksi));
                                                        $result = mysqli_query($koneksi, $update);
                                                        echo "<script> alert('Data Berhasil Diperbaharuai');
location='index.php';</script>";

                                                        if ($terupload) {
                                                            echo "<script> alert('Data Berhasil Di Upload');</script>";
                                                        } else {
                                                            die ("File gagal diupload");
                                                        }

                                                    }
                                                    if ((is_uploaded_file($_FILES['fotomember']['tmp_name'])) == '') {
                                                        $update = mysqli_query($koneksi, "INSERT INTO member(nik,n_member,jk,hp,email,kota,kodepos,alamat,password)
      VALUES('$nik','$n_member','$jk','$hp','$remail','$kota','$kodepost','$alamat','$password')") or die(mysqli_error($koneksi));
                                                        $result = mysqli_query($koneksi, $update);
                                                        echo "<script>
			alert('Data Berhasil Diperbaharuai Dan Foto TIDAK DI UBAH');
			
		  </script>";
                                                    }
                                                }

                                                ?>
                                                <div class="modal-body">
                                                    <div class="md-form form-sm mb-7">
                                                        <label>NIK</label>
                                                        <input name="nik" type="text" id="modalLRInput12" class="form-control form-control-sm validate">

                                                        <label>Nama Lengkap</label>
                                                        <input name="n_member" type="text" id="modalLRInput12" class="form-control form-control-sm validate">

                                                        <label  data-success="right" >Jenis Kelamin</label>
                                                        <select name="jk"  id="modalLRInput12" class="form-control selectpicker validate" data-live-search="true" style="width: 100%;" required>
                                                            <option  id="modalLRInput12" value="1">Pria</option>
                                                            <option  id="modalLRInput12" value="2">Wanita</option>
                                                        </select>

                                                        <label  data-success="right" for="modalLRInput12">Kontak Telphone</label>
                                                        <input name="hp" id="modalLRInput12" class="form-control form-control-sm validate">

                                                    </div>
                                                    <div class="md-form form-sm mb-5">
                                                        <label  data-success="right" for="modalLRInput12">email</label>
                                                        <input name="email" type="email" id="modalLRInput12" class="form-control form-control-sm validate">

                                                        <label  data-success="right" for="modalLRInput12">Kota/Kecematan</label>
                                                        <input name="kota" type="text" id="modalLRInput12" class="form-control form-control-sm validate">

                                                        <label  data-success="right" for="modalLRInput12">Kode Pos</label>
                                                        <input name="kodepos" type="text" id="modalLRInput12" class="form-control form-control-sm validate">

                                                        <label  data-success="right" for="modalLRInput12">Alamat</label>
                                                        <textarea name="alamat" type="text" id="modalLRInput12" class="form-control form-control-sm validate"></textarea>

                                                        <label data-success="right" for="modalLRInput12">FOTO</label>
                                                        <input type="file" multiple  name="fotomember"  required>

                                                        <label  data-success="right" for="modalLRInput12">Password</label>
                                                        <input name="password" type="password" id="modalLRInput12" class="form-control form-control-sm validate">

                                                    </div>

                                                    <div class="text-center form-sm mt-2">
                                                        <button type="submit" name="tambah" class="btn btn-info">Sign up <i class="fas fa-sign-in ml-1"></i></button>
                                                    </div>

                                                </div>
                                            </form>
                                            <!--Footer-->
                                            <div class="modal-footer">
                                                <div class="options text-right">
                                                    <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
                                                </div>
                                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                        <!--/.Panel 8-->
                                    </div>

                                </div>
                            </div>
                            <!--/.Content-->
                        </div>
                    </div>
                    <!--Modal: Login / Register Form-->


                    <!-- Feature -->
                    <div class="col-lg-4 feature_col">
                        <div class="feature d-flex flex-row align-items-start justify-content-start">
                            <div class="feature_left">
                                <div class="feature_icon"><img src="images/icon_3.svg" alt=""></div>
                            </div>
                            <div class="feature_right d-flex flex-column align-items-start justify-content-center">
                                <div class="feature_title">Free Delivery 24x 7 Day</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <!-- About -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_about">
                                <div class="footer_logo">
                                    <a href="#">
                                        <div class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="footer_logo_icon"><img src="images/logo_2.png" alt=""></div>
                                            <div>Little Closet</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse potenti. Fusce venenatis vel velit vel euismod.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Links -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_menu">
                                <div class="footer_title">Support</div>
                                <ul class="footer_list">
                                    <li>
                                        <a href="#"><div>Customer Service<div class="footer_tag_1">online now</div></div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Return Policy</div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Size Guide<div class="footer_tag_2">recommended</div></div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Terms and Conditions</div></a>
                                    </li>
                                    <li>
                                        <a href="#"><div>Contact</div></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Contact -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_contact">
                                <div class="footer_title">Stay in Touch</div>
                                <div class="newsletter">
                                    <form action="#" id="newsletter_form" class="newsletter_form">
                                        <input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
                                        <button class="newsletter_button">+</button>
                                    </form>
                                </div>
                                <div class="footer_social">
                                    <div class="footer_title">Social</div>
                                    <ul class="footer_social_list d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer_bar_content d-flex flex-md-row flex-column align-items-center justify-content-start">
                                <div class="copyright order-md-1 order-2"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://kostkoding.student.umm.ac.id/" target="_blank">Kostkoding.student.umm.ac.id</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                                <nav class="footer_nav ml-md-auto order-md-2 order-1">
                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                        <li><a href="category.html">Kapsul</a></li>
                                        <li><a href="category.html">Pil</a></li>
                                        <li><a href="category.html">Tetes</a></li>
                                        <li><a href="category.html">Botol</a></li>
                                        <li><a href="#">Salap</a></li>
                                        <li><a href="#">Tablet</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>