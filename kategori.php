<?php
include 'aksinya/koneksi.php';
include 'aksinya/fungsi.php';
$kd_jenis = $_GET['kd_jenis'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Category</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/category.css">
<link rel="stylesheet" type="text/css" href="styles/category_responsive.css">
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
					<div class="home_title">Kategori</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
                            <li><?php
                                list_kategori();
                                ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Products -->

		<div class="products">
			<div class="container">

				<div class="row products_row products_container grid">
					
					<!-- Product -->
					<div class="col-xl-4  col-md-4 grid-item new">
                        <?php

                        $halaman = 5;
                        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
                        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
                        $result = mysqli_query($koneksi,"SELECT * FROM produk");
                        $total = mysqli_num_rows($result);
                        $pages = ceil($total/$halaman);
                        if (($kd_jenis)=='') {
                            $query = mysqli_query($koneksi, "select * from produk LIMIT $mulai, $halaman") or die("gagal " . mysqli_error($koneksi));
                        } else  $query = mysqli_query($koneksi, "select * from produk where kd_jenis='$kd_jenis' LIMIT $mulai, $halaman") or die("gagal " . mysqli_error($koneksi));
                        $no =$mulai+1;


                        while ($prod = mysqli_fetch_object($query)) {
                        ?>
						<div class="product">

							<div class="product_image">
                                <?php echo "<img  src='images/" . $prod ->foto_file . "';/> ";?>
                            </div>
							<div class="product_content">
								<div class="product_info d-flex flex-row align-items-start justify-content-start">
									<div>
										<div>
                                            <div class="product_name"><a href="product.php"><?=$prod->nama?></a></div>
											<div class="product_category">#<a href="kategori.php?cari=kategori&kd_jenis=<?=$prod->kd_jenis?>">
                                                    <?php
                                                    $que = mysqli_query($koneksi,"select * from jenis where kd_jenis='$kd_jenis'");
                                                    while ($cat = mysqli_fetch_object($que)) {
                                                    ?><?=$cat->n_jenis?>
                                                </a><?php
                                                }
                                                ?></div>
										</div>
									</div>
									<div class="ml-auto text-right">
<!--										<div class="rating_r rating_r_4 home_item_rating">-->
<!--                                            <i></i><i></i><i></i><i></i><i></i>-->
<!--                                        </div>-->
										<div class="product_price text-right"><span><?=format_rupiah($prod->harga);?></span></div>
									</div>
								</div>
								<div class="product_buttons">
									<div class="text-right d-flex flex-row align-items-start justify-content-start">

										<div style="width: 100%" class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center">
											<div><div><img src="images/cart.svg" class="svg" alt=""><div>+</div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>


                        <?php } ?>
					</div>
				</div>
				<div class="row page_nav_row">
					<div class="col">
						<div class="page_nav">
							<ul class="d-flex flex-row align-items-start justify-content-center">
								<li class="active">
                                    <?php for ($i=1; $i<=$pages ; $i++){ ?>
                                    <a href="?halaman=<?php echo $i; ?>&cari=kategori&kd_jenis=<?=$prod -> kd_jenis;?>"class="waves-effect"><?php echo $i; ?><?php } ?><li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
							</ul>
						</div>
					</div>
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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/Isotope/fitcolumns.js"></script>
<script src="js/category.js"></script>
</body>
</html>