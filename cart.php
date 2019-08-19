
<?php
session_start();

if (!isset($_SESSION)) {


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
        $nik = $_SESSION['nik'];
        $ongkir = $_POST['ongkir'];
        $kd_transaksi = autonumber("invoice", "kd_transaksi", "5", "T");
        if (isset($_SESSION['items'])) {
            foreach ($_SESSION['items'] as $key => $value) {
                $kd_produk = $_POST['kd_produk'.$key];
                $kuantitas = $value;
//                $nik = $_POST['nik'];
                $status = 0;
                $ojek = $_POST['100'];
                $query_barang = mysqli_query($koneksi, "SELECT * FROM produk WHERE `kd_produk` = '$key'");
//                $query_ongkir = mysqli_query($koneksi, "SELECT * FROM ongkir WHERE  harga= '$ojek'");

//                $rs_ojek = mysqli_fetch_array($query_ongkir);
                $rs_barang = mysqli_fetch_array($query_barang);
                $harga = $rs_barang['harga'];
                $ongkir = $_POST['ongkir'];
                $tanpaojek = $harga * $kuantitas;
                $totalbyar = $tanpaojek + $ongkir;
                //$total += $jumlah_harga;
                $bakul =mysqli_query($koneksi, "INSERT INTO invoice (kd_transaksi,kd_produk,quantity,harga,tgl,totalbyar,status,nik,ongkir)
     VALUES ('$kd_transaksi','$kd_produk$key','$value','$harga','$tgl','$totalbyar','$status','$nik','$ongkir')");

            }
        }
}

    header ("location: cart.php");
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
<link rel="stylesheet" type="text/css" href="styles/checkout.css">
<link rel="stylesheet" type="text/css" href="styles/cart_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/checkout_responsive.css">




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
					<div class="home_title">Shopping Cart</div>
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

		<!-- Cart -->

		<div class="cart_section">
			<div class="container">
				<div class="row">
					<div class="col">
                        <div class="cart_container">

                            <div class="cart_bar">
                                <h3>Kode Transaksi - <?php echo autonumber("invoice", "kd_transaksi", "5", "T");?></h3>
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
<!--                                    <form action="" method="post" enctype="multipart/form-data">-->

                                        <!-- Cart Item -->
                                        <li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
                                            <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                                 <div>
                                                    <div class="product_image">
                                                        <img src="images/<?php echo $keranjang->foto_file; ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="product_name_container">
                                                    <div class="product_name"><a
                                                                href="product.php?cari=produk&kd_produk=<?php echo $keranjang->kd_produk;?>"><?php echo $keranjang->nama; ?></a>
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

                                            <div class="product_price product_text">
                                                <span>Harga: </span><?php echo format_rupiah($jumlah_harga); ?></div>
                                            <div class="product_price product_text">
                                                <a  href="cart.php?act=del&amp;kd_produk=<?php echo $key; ?>&amp;ref=index.php"> <span>Hapus</a>

                                            </div>

                                        </li>

                                </ul>
                            </div>
                            <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="button button_clear trans_200"><a lass="button button_clear trans_200"
                                                                              href="cart.php?act=clear&amp;ref=index.php">Clear</a>
                                </div>
                            <?php
$a++;
                            //((mysqli_free_result($query) || (is_object($query) && (get_class($query) == "mysqli_result"))) ? true : false);
                            }
                            }
    }?>


<!--profil penerima-->
                            <div class="col-lg-12">
                                <div class="billing">
                                    <div class="checkout_title">Data Pembeli</div>
                                    <div class="checkout_form_container">
                                        <?php

if(!isset($_SESSION['nik']))
{
// Jika buka member


                                        $sqltemukan = mysqli_query($koneksi, "select * from member");

                                        ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Name -->

                                                <input type="hidden" value="0" id="nik" name="nik" onkeyup="checkNumber(this)"
                                                       class="checkout_input" placeholder="NIK KTP"
                                                       >
                                                <label style="font-size: medium; color:#e8271b ">Nama Lengkap ANDA</label>
                                                <input type="text" id="nama"
                                                       class="checkout_input" placeholder="Nama Lengkap" name="nama"
                                                       >
                                            </div>

                                        </div>
                                        <div>
                                            <label style="font-size: medium; color:#e8271b ">LOKASI ANDA</label>
                                            <select name="ongkir"
                                                    class="dropdown_item_select checkout_input">
                                                <option>Pilih Kota</option>
                                                <?php
                                                include "aksinya/koneksi.php";
                                                $queryongkir = "SELECT * from ongkir";
                                                $hasilonkir = mysqli_query($koneksi,$queryongkir);
                                                while ($dataongkir = mysqli_fetch_array($hasilonkir)) {
                                                    echo "<option value=$dataongkir[ongkir]>$dataongkir[kec]&nbsp;-&nbsp;$dataongkir[ongkir]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div>
                                            <label style="font-size: medium; color:#e8271b ">Alamat ANDA</label>
                                            <textarea type="text"
                                                      class="checkout_input checkout_address_2"
                                                      id="alamat" name="alamat" "></textarea>
                                        </div>
                                        <div>
                                            <label style="font-size: medium; color:#e8271b ">Kode Pos</label>
                                            <input type="text"  id="kodepos" class="checkout_input"name="kodepos" >
                                        </div>
                                        <div>
                                            <label style="font-size: medium; color:#e8271b ">Telphone</label>
                                            <input type="phone" id="hp" class="checkout_input"
                                                   name="hp"  onkeyup="checkNumber(this)"
                                            >
                                        </div>
                                        <div class="product_size product_text "><p
                                                    style="text-align: right"><?php echo  format_rupiah($total); ?></div>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php

                        }  else
{
// jika member
                                        $nik = $_SESSION['nik'];
                                        $sqltemukan = mysqli_query($koneksi, "select * from member where nik='$nik'");
                                        while ($temukan=mysqli_fetch_object($sqltemukan)){
                                        ?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Name -->
                                                <input type="text" id="" name="kd_transaksi"
                                                       class="checkout_input" placeholder="NIK KTP"
                                                       value="<?php echo autonumber("invoice", "kd_transaksi", "5", "T"); ?>">
                                                <input type="text" id="nik" name="nik"
                                                       class="checkout_input" placeholder="NIK KTP" onkeyup="checkNumber(this)"
                                                       value="<?php echo $nik = $_SESSION['nik']; ?>">
                                                <input type="text" id="nama"
                                                       class="checkout_input" placeholder="Nama Lengkap" name="nama"
                                                       value="<?php echo $temukan->n_member; ?>">
                                            </div>

                                        </div>
                                        <div>
                                            <select name="hargaojek"
                                                    class="dropdown_item_select checkout_input">
                                                <option >Pilih Kota</option>
                                                <?php
                                                $queryongkir = "SELECT * from ongkir";
                                                $hasilonkir = mysqli_query($koneksi,$queryongkir);
                                                while ($dataongkir = mysqli_fetch_array($hasilonkir)) {
                                                    echo  "<option value=$dataongkir[hargaojek]>$dataongkir[kec]&nbsp;-&nbsp;$dataongkir[hargaojek]</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div>
                                            <!-- Address -->

                                            <textarea type="text" id="checkout_address_2"
                                                      class="checkout_input checkout_address_2"
                                                      name="alamat" "><?php
                                            echo $temukan->alamat;
                                            ?></textarea>
                                        </div>
                                        <div>
                                            <!-- Zipcode -->
                                            <input type="text"  class="checkout_input" value="<?php
                                            echo $temukan->kodepos;
                                            ?>" name="kodepos" >
                                        </div>
                                        <div>
                                            <!-- Phone no -->
                                            <input type="phone" id="checkout_phone" class="checkout_input" onkeyup="checkNumber(this)"
                                                   value="<?php
                                                   echo $temukan->hp;
                                                   ?>" name="hp" id="txtSecond"
                                            >
                                        </div>
                                        <div class="product_size product_text "><p
                                                    style="text-align: right"><?php echo  format_rupiah($total); ?></div>

                                    </div>
                                </div>
                            </div><?php
            } }

            ?>
                            <!-- Cart Buttons -->
                            <div class="cart_buttons d-flex flex-row align-items-start justify-content-start">

                                    <div class="button button_continue trans_200"><a href="index.php">continue
                                            shopping</a></div>
                                    <div class="dropdown">

                                        <a
                                                class="btn btn-primary btn-lg btn-block" name=""
                                                href="cart.php?act=full&amp;ref=index.php">checkout</a></div>
                                   <form method="get" action="/sehati/laporan/pdfcart.php?">
                                    <div class="dropdown">
&nbsp;
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pilih Area
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                            <?php
                                            $queryongkir = "SELECT * from ongkir";
                                            $hasilonkir = mysqli_query($koneksi,$queryongkir);
                                            while ($dataongkir = mysqli_fetch_array($hasilonkir)) {

//                                                echo '<button class="dropdown-item" href="/sehati/laporan/sc_cart.php?id_onkir='.$dataongkir['hargaojek'].'">'.$dataongkir['kec'].'-'.$dataongkir['hargaojek'].''.'</button>';

                                                ?>

                                                <button formtarget="_blank" class="dropdown-item" name="id_onkir" value="<?php
                                                echo $dataongkir['hargaojek'];
                                                ?>"><?php
                                                    echo $dataongkir['kec'].'-'.$dataongkir['hargaojek'];
                                                    ?></button>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                       <input id="addnik" name="addnik" type="hidden" />
                                       <input id="addnama" name="addnama" type="hidden" />
                                       <input type="hidden" name="addalamat" id="addalamat" />
                                       <input type="hidden" name="addpos" id="addpos" />
                                       <input type="hidden" name="addhp" id="addhp" />
                                   </form>
                                </div>

                            </div>
                        </div>

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
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/cart.js"></script>
<script>

    function checkNumber(a)
    {
        if(!/^[0-9.]+$/.test(a.value))
        {
            a.value = a.value.substring(0,a.value.length-1000);
        }
    }
</script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery.autofill.min.js"></script>
<script type="text/javascript">
    $().ready(function() {
        $("#nik").autofill({
            fieldId : "addnik",
            overrideFieldEverytime : true
        });
        $("#nama").autofill({
            fieldId : "addnama",
            overrideFieldEverytime : true
        });
        $("#alamat").autofill({
            fieldId : "addalamat",
            overrideFieldEverytime : true
        });
        $("#kodepos").autofill({
            fieldId : "addpos",
            overrideFieldEverytime : true
        });
        $("#hp").autofill({
            fieldId : "addhp",
            overrideFieldEverytime : true
        });
        // $("#nik").autofill({
        //     fieldId : "addnik",
        //     overrideFieldEverytime : true
        // });

    });
</script>

</body>
</html>
