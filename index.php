<?php
session_start();
//require 'aksinya/item.php';
include 'aksinya/koneksi.php';
//$update = mysqli_query($koneksi, "SELECT * FROM  member");
include 'aksinya/fungsi.php';
if(!isset($_SESSION['nik'])){
//    header('location:sss.php');
}


if (isset($_SESSION['nik']) && isset($_SESSION['email']) && isset($_SESSION['n_member']) )
{


    if (($_SESSION['nik'] == "email") || ($_SESSION['nik'] == "n_member"))
    {

    }
}

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
    <link href="backend/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
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

    <?php
    include 'head.php';
    ?>

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
                                                        <div class="home_item_side"><a href="product.php"><img src="images/botol.gif" alt=""></a></div>
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

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.php"><img src="images/baju.png" alt=""></a></div>
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
                                                        <div class="home_item_side"><a href="product.php"><img src="images/obat-hammer-of-thor.png" alt=""></a></div>
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

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="home_item_side"><a href="product.php"><img src="images/Varian-Madu-TJ.png" alt=""></a></div>
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
                                <li class="active">
                                    <?php

                                    list_kategori();
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row products_row">

                    <!-- Product -->
                    <?php
                    // UNtuk banyak tampilan produk
                    $halaman = 1;
                    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                    $result = mysqli_query($koneksi,"SELECT * FROM produk");
                    $total = mysqli_num_rows($result);
                    $pages = ceil($total/$halaman);
                    $query = mysqli_query($koneksi,"select * from produk LIMIT $mulai, $halaman")or die("gagal " . mysqli_error($koneksi))    ;
                    $no =$mulai+1;


                    while ($prod = mysqli_fetch_object($query)) {
                        ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="product">
                                <div class="thumbnail">
                                    <?php echo "<img  src='images/" . $prod ->foto_file . "';/> ";?>
                                </div>
                                <div class="product_content">
                                    <div class="product_info d-flex flex-row align-items-start justify-content-start">

                                        <div>
                                            <div>
                                                <div class="product_name"><a style="align-items: center" href="product.php?cari=produk&kd_produk=<?=$prod->kd_produk;?>"><?=$prod->nama?></a></div>
                                                <div class="product_category">#<a href="kategori.php?cari=kategori&kd_jenis=<?=$prod->kd_jenis?>">
                                                        <?php
                                                        $que = mysqli_query($koneksi,"select * from jenis where kd_jenis='$prod->kd_jenis'");
                                                        while ($cat = mysqli_fetch_object($que)) {
                                                        ?><?=$cat->n_jenis?>
                                                    </a><?php
                                                    }
                                                    ?></div>
                                            </div>
                                        </div>
                                        <div class="ml-auto text-right">
                                            <div class="product_price text-right"><?=format_rupiah($prod->harga); ?></div>
                                        </div>
                                    </div>
                                    <div class="product_buttons">
                                        <div class="text-right d-flex flex-row align-items-start justify-content-start">

                                            <div style="width: 100%" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
                                                <div><div>


                                                        <div><a alt="" href="cart.php?act=add&amp;kd_produk=<?=$prod->kd_produk;?>&amp;ref=index.php" ><img src="images/cart.svg" class="svg">BELI</a></div>
                                                    </div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                </div>
                <div class="demo-button-toolbar clearfix">


                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

                        <nav>
                            <ul class="pagination pagination-lg">
                                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                <li class="active"><?php for ($i=1; $i<=$pages ; $i++){ ?>
                                    <a href="?halaman=<?php echo    $i; ?>"class="waves-effect"><?php echo $i; ?><?php } ?><li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>

                            </ul>
                        </nav>
                    </div>




                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">

<!--                        --><?php //pagination($halaman, $jumlah_halaman, "produknya"); ?>

                    </div>
                    <!--                        <div class="button load_more ml-auto mr-auto"><a href="#">load more</a></div>-->
<!--                    <div class='well'>Jumlah data :<strong>--><?//= $jmldata; ?><!-- </strong></div>-->
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
                                            <a href="kategori.php">
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
                                            <a href="kategori.php">
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



                </div>
            </div>
        </div>

        <!-- Footer -->


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
<script src="backend/plugins/sweetalert/sweetalert.min.js"></script>
<script src="backend/plugins/sweetalert/sweetalert-dev.js"></script>

<script src="backend/plugins/jquery-validation/jquery.validate.js"></script>
</body>
<script>

    function checkNumber(a)
    {
        if(!/^[0-9.]+$/.test(a.value))
        {
            a.value = a.value.substring(0,a.value.length-1000);
        }
    }
</script>

</html>