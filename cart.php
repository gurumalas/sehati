
<?php

if (!isset($_SESSION)) {
    session_start();

}
include 'aksinya/koneksi.php';
include 'aksinya/fungsi.php';



//include 'aksinya/item.php';
if (isset($_GET['act']) && isset($_GET['ref'])) {
    $act = $_GET['act'];
    $ref = $_GET['ref'];

    if ($act == "add") {

        if (isset($_GET['kd_produk'])) {

            $kd_produk = $_GET['kd_produk'];
            if (isset($_SESSION['items'][$kd_produk])) {
                $_SESSION['items'][$kd_produk] += 1;
            } else {
                $_SESSION['items'][$kd_produk] = 1;
            }
            $quantity = $_SESSION['items'][$kd_produk];
            $status = $_POST['status'];
            $total = $_POST['total'];
            $totalbyar = $quantity;
            ((bool)mysqli_query($koneksi, "USE " . $database));
            $query = mysqli_query( $koneksi, "INSERT INTO invoice  (kd_produk, quantity, tgl, status, totalbyar) 
VALUES ('$kd_produk', '$quantity', '$tgl', '$status', '$totalbyar')") or die(((is_object($koneksi)) ? mysqli_error($koneksi) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
        }
    } elseif ($act == "plus") {
        if (isset($_GET['kd_produk'])) {
            $kd_produk = $_GET['kd_produk'];
            if (isset($_SESSION['items'][$kd_produk])) {
                $_SESSION['items'][$kd_produk] += 1;
            }
        }
    } elseif ($act == "min") {
        if (isset($_GET['kd_produk'])) {
            $kd_produk = $_GET['kd_produk'];
            if (isset($_SESSION['items'][$kd_produk])) {
                $_SESSION['items'][$kd_produk] -= 1;
            }
        }
    } elseif ($act == "del") {
        if (isset($_GET['kd_produk'])) {
            $kd_produk = $_GET['kd_produk'];
            if (isset($_SESSION['items'][$kd_produk])) {
                unset($_SESSION['items'][$kd_produk]);
            }
        }
    } elseif ($act == "clear") {
        if (isset($_SESSION['items'])) {
            foreach ($_SESSION['items'] as $key => $val) {
                unset($_SESSION['items'][$key]);
            }
            unset($_SESSION['items']);
        }
    } elseif ($act == "full") {

        if (isset($_SESSION['items'])) {
            foreach ($_SESSION['items'] as $key => $value) {
                $kd_produk = $_POST['kd_produk'.$key];
                $kuantitas = $value;
                $query_barang = mysqli_query($koneksi, "SELECT * FROM produk WHERE `kd_produk` = '$key'");

                $rs_barang = mysqli_fetch_array($query_barang);
                $harga = $rs_barang['harga'];

                $totalbyar = $harga * $kuantitas;
                //$total += $jumlah_harga;
                mysqli_query($koneksi, "INSERT INTO invoice (kd_produk,quantity,harga,tgl,totalbyar,status)
     VALUES ('$kd_produk$key','$value','$harga','$tgl','$totalbyar',0)");
            }
        }
}

    header ("location: cart.php");
//    ((bool)mysqli_query($koneksi, "USE " . $database));
//    $query = mysqli_query( $koneksi, "INSERT INTO invoice  (kd_produk, quantity, tgl, status)
//VALUES ('$kd_produk', '$quantity', '$tgl', '$status')") or die(((is_object($koneksi)) ? mysqli_error($koneksi) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
<title>Cart</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/cart.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
</head>
<body>

<!-- Menu -->

<div class="menu">

	<!-- Search -->
	<div class="menu_search">

			<input type="text" class="search_input" placeholder="Search Item" required="required">
			<button class="menu_search_button"><img src="images/search.png" alt=""></button>

	</div>
	<!-- Navigation -->
	<div class="menu_nav">
		<ul>
			<li><a href="#">Women</a></li>
			<li><a href="#">Men</a></li>
			<li><a href="#">Kids</a></li>
			<li><a href="#">Home Deco</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- Contact Info -->
	<div class="menu_contact">
		<div class="menu_phone d-flex flex-row align-items-center justify-content-start">
			<div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
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
						<div>Little Closet</div>
					</div>
				</a>	
			</div>
			<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Kids</a></li>
					<li><a href="#">Home Deco</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
			<div class="header_right d-flex flex-row align-items-center justify-content-start ml-auto">
				<!-- Search -->
				<div class="header_search">

						<input type="text" class="search_input" placeholder="Search Item" required="required">
						<button class="header_search_button"><img src="images/search.png" alt=""></button>

				</div>
				<!-- User -->
				<div class="user"><a href="#"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>1</div></div></a></div>
				<!-- Cart -->
				<div class="cart"><a href="cart.php"><div><img src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                        <?php
                        if (count($_SESSION['items']) == '') {
                            echo '';
                        }
                        else{
                            echo  count($_SESSION['items']);}?></a></div>
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
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Your Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Cart -->

		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
                        <div class="cart_container">
                            <!-- Cart Bar --><p><?=autonumber("invoice", "kd_invoice", "5", "NP") ?></p>
                            <div class="cart_bar">
                                <ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
                                    <li class="mr-auto">Product</li>
                                    <li>Kode Produk</li>
                                    <li>Harga</li>
                                    <li>Tambah</li>
                                    <li>Sub Total</li>
                                    <li>Hapus</li>
                                </ul> <?php
                                $total=0;
                                if (isset($_SESSION['items'])) {
                                foreach ($_SESSION['items'] as $key => $val) {
                                $que = mysqli_query($koneksi, "select * from produk where produk.kd_produk = '$key'");
                                $a = 1;
                                while($keranjang=mysqli_fetch_object($que)){

                                $jumlah_harga = $keranjang->harga * $val;
                                $total += $jumlah_harga;




                                ?>
                            </div>

                            <!-- Cart Items -->
                            <div class="cart_items">

                                <ul class="cart_items_list">
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <!-- Cart Item -->
                                        <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
                                            <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                                <div>
                                                    <div class="product_image">
                                                        <p><?php echo $a; ?></p>
                                                    </div>
                                                </div> <div>
                                                    <div class="product_image">
                                                        <img src="images/<?php echo $keranjang->foto_file; ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="product_name_container">
                                                    <div class="product_name"><a
                                                                href="product.php"><?php echo $keranjang->nama; ?></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="product_price product_text">
                                                <span>Kode: </span><input type="hidden" name='kd_produk' value="<?php echo $keranjang->kd_produk;?>"><?php echo $keranjang->kd_produk;?>
                                            </div>
                                            <div class="product_price product_text">
                                                <span>Harga: </span><input type="hidden" name="harga" value="<?php echo $keranjang->harga; ?>"><?php echo format_rupiah($keranjang->harga); ?>
                                            </div>

                                            <div class="product_quaproduct_price product_textntity ml-lg-auto mr-lg-auto text-center">
                                                <div class="qty_sub qty_button trans_200 text-center"><a
                                                            href="cart.php?act=min&amp;kd_produk=<?php echo $key; ?>&amp;ref=index.php">&blacktriangledown;</a></span>
                                                </div>
                                                <input name="quantity" type="hidden" value="<?php echo $val; ?>"/><?php echo $val; ?>
                                                <div class="qty_add qty_button trans_200 text-center"><a
                                                            href="cart.php?act=plus&amp;kd_produk=<?php echo $key; ?>&amp;ref=index.php">&blacktriangle;</a></span>
                                                </div>
                                            </div>

                                            <div class="">
                                                <span>Harga: </span><?php echo format_rupiah($jumlah_harga); ?></div>
                                            <div class="button btn-success">
                                                <a  href="cart.php?act=del&amp;kd_produk=<?php echo $key; ?>&amp;ref=index.php"> <span><i class="fa fa-trash" aria-hidden="true"></i></span></a>

                                            </div>

                                        </li>

                                </ul>
                            </div>
                            <?php
$a++;
                            //((mysqli_free_result($query) || (is_object($query) && (get_class($query) == "mysqli_result"))) ? true : false);
                            }
                            }
    }?>
                            <div class="product_size product_text "><p style="text-align: right"><?php echo format_rupiah($total); ?></div>


                            <!-- Cart Buttons -->
                            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
                                <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">

                                    <div class="button button_clear trans_200"><a lass="button button_clear trans_200"href="cart.php?act=clear&amp;ref=index.php">Clear</a></div>
                                    <div class="button button_continue trans_200"><a href="index.php">continue shopping</a></div>
                                    <div class="button button_continue trans_200"><a class="btn btn-primary btn-lg btn-block" name="" href="cart.php?act=full&amp;ref=index.php">checkout</a></div>
                                </div>
                            </div>
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
                        <h4 class="mb-3">Data Pengiriman</h4>

                            <div class="mb-3">
                                <label for="username">Nama Lengkap</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">@</span>
                                    </div>
                                    <input type="text" name="nama" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="">Kontak <span class="text-muted">(Optional)</span></label>
                                <input type="text"  name="hp" class="form-control" id="" placeholder="+62">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="address" placeholder="1234 Main St" required>
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-3 mb-3">
                                    <label for="zip">Kode Pos</label>
                                    <input type="text" class="form-control"  name="kodepos" id="zip" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Zip code required.
                                    </div>
                                </div>
                            </div>
                            <hr class="mb-4">

                        </form>
                    </div>

                    <!-- Footer Links -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_menu">
                            <div class="footer_title">Kategori Produk</div>
                            <ul class="footer_list">
                                <?php
                                list_kategori();
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Contact -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_contact">
                            <div class="footer_title">Stay in Touch</div>
                            <div class="newsletter">

                                    <input type="email" class="newsletter_input" placeholder="Subscribe to our Newsletter" required="required">
                                    <button class="newsletter_button">+</button>

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
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="http://www.kostkoding.student.umm.ac.id/" target="_blank">Kostkoding.student.umm.ac.id</a>
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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
</body>
</html>