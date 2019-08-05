<?php

if (!isset($_SESSION)) {
    session_start();

}
//require 'aksinya/item.php';
include 'aksinya/koneksi.php';


include 'aksinya/fungsi.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TOKO SEHATI template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" href="styles/product.css">
    <link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
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
            <?php

            list_kategori();
            ?>
        </ul>
    </div>
    <!-- Contact Info -->
    <div class="menu_contact">
        <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
            <div>
                <div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div>
            </div>
            <div>+1 912-252-7350</div>
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
                        <div>TOKO SEHATI</div>
                    </div>
                </a>
            </div>
            <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
            <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                    <?php

                    list_kategori();
                    ?>
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
				<div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.php"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div></a></div>
				<!-- Phone -->
				<div class="header_phone d-flex flex-row align-items-center justify-content-start">
					<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
					<div>+1 912-252-7350</div>
				</div>
			</div>
		</div>
	</header>

	<div class="super_container_inner">
		<div class="super_overlay"></div>

		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Product Page</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <?php
                            list_kategori();
                            ?>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Product -->

		<div class="product">
			<div class="container">
				<div class="row">
					
					<!-- Product Image -->
					<div class="col-lg-6">
						<div class="product_image_slider_container">
							<div id="slider" class="flexslider">
                                <?php

                                $kd_produk = $_GET['kd_produk'];
                                $cekproduk = mysqli_query($koneksi,"SELECT * FROM produk where kd_produk='$kd_produk'");
                                $product = mysqli_fetch_object($cekproduk);
                                ?>
								<ul class="slides">
									<li>
                                        <?php echo "<img  src='images/" . $product ->foto_file . "';/> ";?>

									</li>

								</ul>
							</div>
<!--							<div class="carousel_container">-->
<!--								<div id="carousel" class="flexslider">-->
<!--									<ul class="slides">-->
<!--										<li>-->
<!--											<div><img src="images/product_1.jpg" /></div>-->
<!--										</li>-->
<!--										<li>-->
<!--											<div><img src="images/product_2.jpg" /></div>-->
<!--										</li>-->
<!--										<li>-->
<!--											<div><img src="images/product_3.jpg" /></div>-->
<!--										</li>-->
<!--										<li>-->
<!--											<div><img src="images/product_4.jpg" /></div>-->
<!--										</li>-->
<!--										<li>-->
<!--											<div><img src="images/product_5.jpg" /></div>-->
<!--										</li>-->
<!--										<li>-->
<!--											<div><img src="images/product_6.jpg" /></div>-->
<!--										</li>-->
<!--										<li>-->
<!--											<div><img src="images/product_7.jpg" /></div>-->
<!--										</li>-->
<!--										<li>-->
<!--											<div><img src="images/product_8.jpg" /></div>-->
<!--										</li>-->
<!--									</ul>-->
<!--								</div>-->
<!--								<div class="fs_prev fs_nav disabled"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>-->
<!--								<div class="fs_next fs_nav"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>-->
<!--							</div>-->
						</div>
					</div>

					<!-- Product Info -->
					<div class="col-lg-6 product_col">

						<div class="product_info">

							<div class="product_name"><?= $product->nama;?></div>
							<div class="product_category">#<a href="kategori.php?cari=kategori&kd_jenis=<?=$product->kd_jenis?>">
                                    <?php
                                    $que = mysqli_query($koneksi,"select * from jenis where kd_jenis='$product->kd_jenis'");
                                    while ($cat = mysqli_fetch_object($que)) {
                                    ?><?=$cat->n_jenis?>
                                </a><?php
                                }
                                ?></div>
<!--							<div class="product_rating_container d-flex flex-row align-items-center justify-content-start">-->
<!--								<div class="rating_r rating_r_4 product_rating"><i></i><i></i><i></i><i></i><i></i></div>-->
<!--								<div class="product_reviews">4.7 out of (3514)</div>-->
<!--								<div class="product_reviews_link"><a href="#">Reviews</a></div>-->
<!--							</div>-->
							<div class="product_price"><?=format_rupiah($product->harga);?><span></span></div>
<!--							<div class="product_size">-->
<!--								<div class="product_size_title">Select Size</div>-->
<!--								<ul class="d-flex flex-row align-items-start justify-content-start">-->
<!--									<li>-->
<!--										<input type="radio" id="radio_1" disabled name="product_radio" class="regular_radio radio_1">-->
<!--										<label for="radio_1">XS</label>-->
<!--									</li>-->
<!--									<li>-->
<!--										<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2" checked>-->
<!--										<label for="radio_2">S</label>-->
<!--									</li>-->
<!--									<li>-->
<!--										<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">-->
<!--										<label for="radio_3">M</label>-->
<!--									</li>-->
<!--									<li>-->
<!--										<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">-->
<!--										<label for="radio_4">L</label>-->
<!--									</li>-->
<!--									<li>-->
<!--										<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5">-->
<!--										<label for="radio_5">XL</label>-->
<!--									</li>-->
<!--									<li>-->
<!--										<input type="radio" id="radio_6" disabled name="product_radio" class="regular_radio radio_6">-->
<!--										<label for="radio_6">XXL</label>-->
<!--									</li>-->
<!--								</ul>-->
<!--							</div>-->
							<div class="product_text">
								<p><?=$product->deskripsi;?></p>
							</div>
							<div class="product_buttons">
								<div class="text-right d-flex flex-row align-items-start justify-content-start">
                                    <div style="width: 100%;" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
										<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Boxes -->

		<div class="boxes">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="box d-flex flex-row align-items-center justify-content-start">
							<div class="mt-auto"><div class="box_image"><img src="images/boxes_1.png" alt=""></div></div>
							<div class="box_content">
								<div class="box_title">Size Guide</div>
								<div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 box_col">
						<div class="box d-flex flex-row align-items-center justify-content-start">
							<div class="mt-auto"><div class="box_image"><img src="images/boxes_2.png" alt=""></div></div>
							<div class="box_content">
								<div class="box_title">Shipping</div>
								<div class="box_text">Phasellus sit amet nunc eros sed nec tellus.</div>
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
											<div>TOKO SEHATI</div>
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
								<div class="footer_title">JENIS OBAT</div>
                                <?php
                                $cekjenis = mysqli_query($koneksi,"SELECT * FROM jenis order by n_jenis");
                               while ($jenisproduct = mysqli_fetch_object($cekjenis)) {
                                   ?>
                                   <ul class="footer_list">
                                       <li>
                                           <a href="kategori.php?cari=kategori&kd_jenis=<?= $jenisproduct->kd_jenis ?>">

                                               <div><?= $jenisproduct->n_jenis ?>
                                                   <div class="footer_tag_1">Open Now</div>
                                               </div>
                                           </a>
                                       </li>

                                   </ul>
                                   <?php
                               }
                                ?>
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
								<nav class="footer_nav ml-md-auto order-md-2 order-1">
									<ul class="d-flex flex-row align-items-center justify-content-start">
                                        <?php

                                        list_kategori();
                                        ?>
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
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<script src="js/product.js"></script>
</body>
</html>