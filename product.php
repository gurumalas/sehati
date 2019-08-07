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

<div class="super_container">

    <!-- Header -->
    <?php
    include 'head.php';
    ?>

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
										<div>
                                            <div><a alt="" href="cart.php?act=add&amp;kd_produk=<?=$product->kd_produk;?>&amp;ref=index.php" ><img src="images/cart.svg" class="svg">BELI</a></div>+</div></div></div>

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