<?php
session_start();
class Item{
    var $kd_produk;
    var $banyak;
    var $nama;
    var $harga;
    var $quantity;
    var $foto_file;
}

if (!isset($_SESSION)) {

    $quantity = $_GET['quantity'];
}
include '../aksinya/koneksi.php';
include '../aksinya/fungsi.php';
if(isset($_GET['kd_produk']) && !isset($_POST['update']))  {
    $sql = "SELECT * FROM produk WHERE kd_produk=".$_GET['kd_produk'];
    $sqlstok = "SELECT * FROM stok WHERE kd_produk=".$_GET['kd_produk'];
    $result = mysqli_query($koneksi, $sql);
    $resultstok = mysqli_query($koneksi, $sqlstok);
    $stock = mysqli_fetch_object($resultstok);
    $product = mysqli_fetch_object($result);
    $item = new Item();
    $item->kd_produk = $product->kd_produk;
    $item->foto_file = $product->foto_file;
    $item->nama = $product->nama;
    $item->harga = $product->harga;
    $item->banyak = $stock->banyak;
    $iteminstock = $product->quantity;
    $item->quantity = 1;
    // Check product is existing in cart
    $index = -1;
    $cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
    for($i=0; $i<count($cart);$i++)
        if ($cart[$i]->kd_produk == $_GET['kd_produk']){
            $index = $i;
            break;
        }
    if($index == -1)
        $_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
    else {

        if (($cart[$index]->quantity) < $iteminstock)
            $cart[$index]->quantity ++;
        $_SESSION['cart'] = $cart;
    }
}
?>
<?php

$id_onkir = $_GET['id_onkir'];

$onkirnya = mysqli_query($koneksi, "select * from ongkir where id_onkir='$id_onkir'");
$bacaonkir=mysqli_fetch_object($onkirnya);



?>

<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
    <style>
        .header img {width:100%;height:50%; float:; text-align:center; }
        .header h3{font-family:Times, serif;font-size:14px; line-height:30px; text-align:center; margin-top:20px; font-weight:bold; text-transform:uppercase}
        .header p {text-align:center; font-weight:bold; margin:auto;padding:1px!important;}
        .header span {padding-top:10px;}
        .table {border: solid 1px #eeeeee; width:100%;margin:auto;}
        .table th {border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;
            text-transform:uppercase}
        .table td {border-right: 1px #eeeeee;border-bottom:solid 1px #eeeeee; padding:8px;word-wrap:break-word;
            font-family:Arial, Helvetica, sans-serif;font-size:15px;color:#000;}
        p {margin:0px;padding:4px!important; font-size:15px;font-family:Arial, Helvetica, sans-serif;text-transform:capitalize}
        .ttd {margin-top:50px; line-height:25px;}
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<div class="header">
    <p><img align="left" src="../images/logoapotek.png" /></p><span>

  <h3 >Toko Sehati<br/>
Jl. A. Yani Km 28 Landasan Ulin, 70724<br/>
Telp. 082148352769</h3>
  </span>
</div>

<!--</table style="border-bottom:solid 1px #000;">-->



<table width="100%" cellpadding="0" cellspacing="0" class="table"style="background-image: url('#')">

    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="7">Laporan Data Transaksi <?php echo autonumber("invoice", "kd_transaksi", "5", "T");?></th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle">No</th>
        <th width="" align="center" valign="middle">Kode Transaksi</th>
        <th width="" align="center" valign="middle">Harga</th>
        <th width="" align="center" valign="middle">Banyak</th>
        <th width="" align="center" valign="middle">Sub Total</th>
    </tr></thead><tbody>
    <br/>
    <?php
    $total=0;
    if (is_array($_SESSION['cart'])) {
    session_start();
    $cart = unserialize(serialize($_SESSION['cart']));
    $s = 0;
    $index = 0;

    for($i=0; $i<count($cart); $i++){
    //    $jumlah_harga = $keranjang->harga * $val;
    //    $total += $jumlah_harga;
    ?>    <tr>
        <td  align="center"> <img height="130" width="130" src="../images/<?php echo $cart[$i]->foto_file; ?>" alt=""></td>
        <td  align="center"><?PHP echo $_SESSION['cart'][$i]['kd_produk'];?></td>
        <td  align="center"><?PHP echo format_rupiah($cart[$i]->harga);?></td>
        <td  align="center"><?PHP echo '';?></td>
        <td  align="center"><?php echo format_rupiah(); ?></td>
        <br/>


    </tr>


    </tbody>
    <?PHP
    //    $index++;
    }}
    ?>
</table>
<table>
    <thead>
    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th width="100%" colspan="5" align="left" valign="left"><?php
            echo '<p style="text-align: right">Harga Pengiriman '.format_rupiah($id_onkir).'</p>';
            ?></th><tr></tr>
    <th colspan="5" align="left" ><p style="text-align: right">Jumlah : <?php $hitungsemua = $id_onkir + $total;
            echo format_rupiah($id_onkir) . '   +  '  .format_rupiah($total) .'  =  '. format_rupiah($hitungsemua);
            ?></p></th>
    </tr>
    <tr >
        <th width="" align="center" valign="middle"></th>
        <th colspan="5" align="left" ></th>
    </tr></thead><tbody><tr>

    </tr>
    </tbody>
</table><br/>

<br/>
<br/>


<table style="width:100%; border-right:1px #eeeeee; border-bottom:1px #eeeeee;  border-left:1px  #eeeeee; ">

    <tr style="border-right:1px #eeeeee; background:#EF4135;color:#ffffff;font-size:16px; padding:5px;text-align:center;">
        <th  style="width: 100%; text-align:center; background:#000;color:#ffffff;" colspan="3">BIODATA</th>
    </tr>
    <?php
    if(!isset($_SESSION['nik']))
    {
        $nik = $_GET['nik'];
        $addnama = $_GET['addnama'];
        $addalamat = $_GET['addalamat'];
        $addhp = $_GET['addhp'];
        $addpos = $_GET['addpos'];
        ?>
        <tr style="border-left:1px text-align:left;">
            <td width="10%">NIK</td>
            <td width="">:</td>
            <td width="75%"><?php
                if(($nik)=='') { echo 'Bukan Member';
                } else {
                    echo $nik;
                } ?></td>
        </tr>
        <tr style="border-left:1px text-align:left;">
            <td width="10%">NAMA</td>
            <td width="">:</td>
            <td width="75%"><?php echo $addnama; ?></td>
        </tr>
        <tr style="border-left:1px text-align:left;">
            <td width="10%">Alamat</td>
            <td width="">:</td>
            <td width="75%"><?php echo $addalamat; ?></td>
        </tr>
        <tr style="border-left:1px text-align:left;">
            <td width="10%">Kode Pos</td>
            <td width="">:</td>
            <td width="75%"><?php echo $addpos; ?></td>
        </tr>
        <tr style="border-left:1px text-align:left;">
            <td width="10%">Handphone</td>
            <td width="">:</td>
            <td width="75%"><?php echo $addhp; ?></td>
        </tr>

        <?php
    }  else
    {
        $nik = $_GET['nik'];
        $beli = mysqli_query($koneksi, "select * from member where  nik='$nik'");
        $no =0;
        while($profil=mysqli_fetch_object($beli)){
            $no++;
            ?>
            <tr style="border-left:1px text-align:left;">
                <td width="10%">NIK</td>
                <td width="">:</td>
                <td width="75%"><?php echo $profil->nik;?></td>
            </tr>
            <tr style="border-left:1px text-align:left;">
                <td width="10%">NAMA</td>
                <td width="">:</td>
                <td width="75%"><?php echo $profil->n_member; ?></td>
            </tr>
            <tr style="border-left:1px text-align:left;">
                <td width="10%">Alamat</td>
                <td width="">:</td>
                <td width="75%"><?php echo $profil->alamat; ?></td>
            </tr>
            <tr style="border-left:1px text-align:left;">
                <td width="10%">Kode Pos</td>
                <td width="">:</td>
                <td width="75%"><?php echo $profil->kodepos; ?></td>
            </tr>
            <tr style="border-left:1px text-align:left;">
                <td width="10%">Handphone</td>
                <td width="">:</td>
                <td width="75%"><?php echo $profil->hp; ?></td>
            </tr>
            <?php
        }}
    ?>
</table style="border-bottom:solid 1px #000;">
</body>
</html>