
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
//        $ongkir = $_POST['ongkir'];
        $kd_transaksi = autonumber("invoice", "kd_transaksi", "5", "T");
        if (isset($_SESSION['items'])) {
            foreach ($_SESSION['items'] as $key => $value) {
                $kd_produk = $_POST['kd_produk'.$key];
                $kuantitas = $value;
//                $nik = $_POST['nik'];
                $status = 0;
//                $ongkir = $_POST['ongkir'];
                $query_barang = mysqli_query($koneksi, "SELECT * FROM produk WHERE `kd_produk` = '$key'");
                $query_ongkir = mysqli_query($koneksi, "SELECT * FROM ongkir WHERE");

                $rs_ojek = mysqli_fetch_array($query_ongkir);
                $rs_barang = mysqli_fetch_array($query_barang);
                $harga = $rs_barang['harga'];
                $ongkir = $rs_ojek['ongkir'];
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
    <style>
        /*==============================
        TEMPLATE NAME: APP BUSINESS
        AUTHOR: BASRI MATINDAS
        DESIGN: http://www.goomsite.net
        License: PREMIUM
        ================================*/
        /* http://meyerweb.com/eric/tools/css/reset/ */
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;text-decoration:none}

        /* HTML5 display-role reset for older browsers */
        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}
        table{border-collapse:collapse;border-spacing:0}
        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 300;
            src: local('Quicksand Light'), local('Quicksand-Light'), url(https://fonts.gstatic.com/s/quicksand/v9/6xKodSZaM9iE8KbpRA_pgHYYT8L5.woff) format('woff');
        }
        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 400;
            src: local('Quicksand Regular'), local('Quicksand-Regular'), url(https://fonts.gstatic.com/s/quicksand/v9/6xKtdSZaM9iE8KbpRA_hK1QL.woff) format('woff');
        }
        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 500;
            src: local('Quicksand Medium'), local('Quicksand-Medium'), url(https://fonts.gstatic.com/s/quicksand/v9/6xKodSZaM9iE8KbpRA_p2HcYT8L5.woff) format('woff');
        }
        @font-face {
            font-family: 'Quicksand';
            font-style: normal;
            font-weight: 700;
            src: local('Quicksand Bold'), local('Quicksand-Bold'), url(https://fonts.gstatic.com/s/quicksand/v9/6xKodSZaM9iE8KbpRA_pkHEYT8L5.woff) format('woff');
        }

        /* Reset and More */
        a,abbr,acronym,address,applet,b,big,blockquote,body,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,form,h1,h2,h3,h4,h5,h6,html,i,iframe,img,ins,kbd,label,legend,li,object,p,pre,q,s,samp,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,tr,tt,u,ul,var{padding:0;border:none;outline:none;vertical-align:baseline;background:none;text-decoration:none}
        ins{text-decoration:underline}
        del{text-decoration:line-through}
        blockquote{font-style:italic;color:#888}
        caption,th{text-align:center}
        img{border:none;position:relative}
        a,a:visited{text-decoration:none}
        .section,.widget,.widget ul,#PopularPosts1 ul,.ready-box ul,ul.custom-widget,.related-magz ul,h3.title-video,h3.list-title-wp,p.list-summary,.related li h3{margin:0;padding:0}
        :focus{outline:none}
        a img{border:none}
        brc{color:#444}
        .ready-box ul,ul.custom-widget{margin:0!important;padding:0!important}
        .CSS_LIGHTBOX{z-index:999999!important}
        .separator a{clear:none!important;float:none!important;margin-left:0!important;margin-right:0!important}
        span.item-control,a.quickedit{display:none!important}
        .archive .home-link,.index .home-link,.home-link{display:none!important}
        *{outline:none;transition:all .3s ease;-webkit-transition:all .3s ease;-moz-transition:all .3s ease;-o-transition:all .3s ease}
        :after,:before{transition:all .0s ease;-webkit-transition:all .0s ease;-moz-transition:all .0s ease;-o-transition:all .0s ease}
        .status-msg-wrap{margin:0 auto 25px}.status-msg-border{border: #2740ee solid 1px;opacity:0.699999988079071044921875;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px}
        .status-msg-bg{background-color: #1325f8;opacity:1;filter:none}
        .icon:before,.postags a:before{font-family:FontAwesome;font-weight:400;font-style:normal;line-height:1;padding-right:4px}
        .feed-links{clear:both;display:none;line-height:2.5em}
        ::selection {background:#fb1e8b;color: #61ff8e;}
        ::-moz-selection {background:#fb1e8b;color: #ff758d
        }
        ::-webkit-selection {background:#fb1e8b;color: #1f30ff
        }
        ::-o-selection {background:#fb1e8b;color: #ff7ad8
        }
        :after, :before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
        svg{vertical-align: middle;}
        h1{font-size:1.8rem}
        h2{font-size:1.6rem}
        h3{font-size:1.4rem}
        h4{font-size:1.2rem}
        h5{font-size:1rem}
        h6{font-size:0.9rem}
        .h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:Quicksand,sans-serif;font-family:inherit;font-weight:500;line-height:1.1;color:inherit}
        p{margin: 0 0 10px;}
        #navbar-iframe,a.quickedit,.blog-pager,#blog-pager{height:0;visibility:hidden;display:none}
        body{background: #ff2026;color:#444;height:100%;font-family: Quicksand,sans-serif;font-weight:400;line-height:22px;text-decoration:none;margin:0;padding:0}
        a,a:link,a:visited{color:#fb1e8b;text-decoration:none}
        a:hover,a:active{color:#444;text-decoration:none}
        h2.date-header{display:none}
        #cssmenu ul,#cssmenu ul li,#cssmenu ul li a,#cssmenu #head-mobile{border:0;list-style:none;line-height:1;display:block;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
        #cssmenu ul li a{position:relative}
        #cssmenu #head-mobile{position:relative}
        #cssmenu{width:auto;line-height:1;float:right}#cssmenu ul{margin:0;display:block;height:48px}#cssmenu #head-mobile{display:none;position:relative}#cssmenu>ul>li{float:left;margin:0}#cssmenu>ul>li>a{padding:15px 15px 22px 15px;font-size:13px;font-weight:500;text-decoration:none;text-transform:uppercase;color: #ff1e4d;-webkit-transition:color .2s ease;-moz-transition:color .2s ease;-ms-transition:color .2s ease;-o-transition:color .2s ease;transition:color .2s ease}
        #cssmenu ul li.active a{color: #ff2a47
        }
        #cssmenu ul li.active:hover,#cssmenu ul li.active,#cssmenu ul li.has-sub.active:hover{background:rgba(64,64,64,0.1);-webkit-transition:background .2s ease;-ms-transition:background .2s ease;transition:background .2s ease}
        #cssmenu ul ul li.has-sub>a:after{content:"+";font-style:normal;font-weight:normal;text-decoration:inherit;margin-left:10px}
        #cssmenu ul ul li.has-sub>a:after{content:"-"}
        #cssmenu>ul>li.has-sub:hover>a:after{content:""}
        #cssmenu ul ul{width:240px;height:auto;position:absolute;left:-9999px;z-index:1;-webkit-box-shadow:0 8px 15px rgba(0,0,0,.2);-moz-box-shadow:0 8px 15px rgba(0,0,0,.2);-ms-box-shadow:0 8px 15px rgba(0,0,0,.2);-o-box-shadow:0 8px 15px rgba(0,0,0,.2);box-shadow:0 8px 15px rgba(0,0,0,.2);opacity:0;transform: translateY(-2em);transition: all 0.3s ease-in-out 0s;border-top:3px solid #ff728c}
        #cssmenu ul ul:before{border-color:transparent transparent #ff728c transparent;content:'';position:absolute;width:0;height:0;left:-68%;border-style:solid;border-width:0 8px 8px;right:0;margin:-8px auto 0}
        #cssmenu li:hover>ul{left:auto;opacity:1;transform: translateY(0%);transition-delay: 0s, 0s, 0.3s;}
        #cssmenu ul ul li{background:#000;margin:0}
        #cssmenu ul ul li:hover{background:#ff728c;}
        #cssmenu ul ul li a:hover{color:#000}
        #cssmenu ul ul ul{margin-left:100%;top:0}
        #cssmenu ul ul li a{font-size:13px;padding:0 15px;line-height:45px;max-width:100%;text-decoration:none;color:#555;white-space:nowrap;text-overflow:ellipsis;overflow:hidden}
        #cssmenu ul ul li:last-child>a,#cssmenu ul ul li.last-item>a{border-bottom:0}
        #cssmenu ul ul li.has-sub:hover,#cssmenu ul li.has-sub ul li.has-sub ul li:hover{background:#efefef}
        .colum-left,.colum-right{z-index:30;height:auto;position:relative}
        #particle-canvas:after,span.wa-x::before{content:""}
        .colum-left a,.inner a,a.submit{text-transform:uppercase}
        .jadwal,.mfp-container:before,.mfp-content,a.btn-wa{vertical-align:middle}
        .mfp-arrow,.slick-slider{-webkit-tap-highlight-color:transparent}
        .comment-content,.main-wrapper,.mfp-title,.sidebar-wrapper{word-wrap:break-word}
        .hero-center{padding:10rem 0}
        .colum-left{float:left;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:1;margin:0;padding-top:2%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}
        .colum-left h1{font-size:85px;color:#000;font-weight:600;letter-spacing:-2px;padding:0;margin:0}
        .colum-left p{color:#000;font-family:inherit;font-size:15px;font-weight:400;line-height:2;margin-bottom:1.875em;}
        .colum-left a{display:inline-block;padding:10px 20px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;font-weight:800;font-size:13px;color:#f3f3f3;margin:0 10px 0 0;box-shadow:0 10px 35px 2px rgba(61,61,61,.3);background:#ff65a5;background:-moz-linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);background:-webkit-linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);background:linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff65a5',endColorstr='#ff866a',GradientType=1)}
        .colum-left a.slide-button{color:#000;box-shadow:0 10px 15px 0 rgba(102,204,150,.3);background:#6c9;background:-moz-linear-gradient(45deg,rgba(102,204,153,1) 0,rgba(108,205,148,1) 19%,rgba(136,209,125,1) 72%,rgba(146,211,117,1) 100%);background:-webkit-linear-gradient(45deg,rgba(102,204,153,1) 0,rgba(108,205,148,1) 19%,rgba(136,209,125,1) 72%,rgba(146,211,117,1) 100%);background:linear-gradient(45deg,rgba(102,204,153,1) 0,rgba(108,205,148,1) 19%,rgba(136,209,125,1) 72%,rgba(146,211,117,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#6c9',endColorstr='#92d375',GradientType=1)}
        #particle-canvas:after,.header-wrap{background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%)}
        .colum-left a svg{width:22px;fill:#000}
        .colum-right{float:right;-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-box-flex:1;margin:0;padding-right:5%;-ms-flex:0 0 40%;flex:0 0 40%;max-width:40%}
        .mfp-container,.team-box,.team-details,.wa-body,img.mfp-img{box-sizing:border-box}
        .colum-right img{width:100%;height:100%;visibility:visible;animation-duration:.8s;animation-name:fadeInRight}
        .animated{animation-duration:1s;animation-fill-mode:both}.animated.infinite{animation-iteration-count:infinite}.animated.hinge{animation-duration:2s}.animated.bounceIn,.animated.bounceOut,.animated.flipOutX,.animated.flipOutY{animation-duration:.75s}@keyframes bounce{0%,20%,53%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1);transform:translateZ(0)}40%,43%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-30px,0)}70%{animation-timing-function:cubic-bezier(.755,.05,.855,.06);transform:translate3d(0,-15px,0)}90%{transform:translate3d(0,-4px,0)}}.bounce{animation-name:bounce;transform-origin:center bottom}@keyframes flash{0%,50%,to{opacity:1}25%,75%{opacity:0}}.flash{animation-name:flash}@keyframes pulse{0%{transform:scaleX(1)}50%{transform:scale3d(1.05,1.05,1.05)}to{transform:scaleX(1)}}.pulse{animation-name:pulse}@keyframes rubberBand{0%{transform:scaleX(1)}30%{transform:scale3d(1.25,.75,1)}40%{transform:scale3d(.75,1.25,1)}50%{transform:scale3d(1.15,.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scaleX(1)}}.rubberBand{animation-name:rubberBand}@keyframes shake{0%,to{transform:translateZ(0)}10%,30%,50%,70%,90%{transform:translate3d(-10px,0,0)}20%,40%,60%,80%{transform:translate3d(10px,0,0)}}.shake{animation-name:shake}@keyframes headShake{0%{transform:translateX(0)}6.5%{transform:translateX(-6px) rotateY(-9deg)}18.5%{transform:translateX(5px) rotateY(7deg)}31.5%{transform:translateX(-3px) rotateY(-5deg)}43.5%{transform:translateX(2px) rotateY(3deg)}50%{transform:translateX(0)}}.headShake{animation-timing-function:ease-in-out;animation-name:headShake}@keyframes swing{20%{transform:rotate(15deg)}40%{transform:rotate(-10deg)}60%{transform:rotate(5deg)}80%{transform:rotate(-5deg)}to{transform:rotate(0deg)}}.swing{transform-origin:top center;animation-name:swing}@keyframes tada{0%{transform:scaleX(1)}10%,20%{transform:scale3d(.9,.9,.9) rotate(-3deg)}30%,50%,70%,90%{transform:scale3d(1.1,1.1,1.1) rotate(3deg)}40%,60%,80%{transform:scale3d(1.1,1.1,1.1) rotate(-3deg)}to{transform:scaleX(1)}}.tada{animation-name:tada}@keyframes wobble{0%{transform:none}15%{transform:translate3d(-25%,0,0) rotate(-5deg)}30%{transform:translate3d(20%,0,0) rotate(3deg)}45%{transform:translate3d(-15%,0,0) rotate(-3deg)}60%{transform:translate3d(10%,0,0) rotate(2deg)}75%{transform:translate3d(-5%,0,0) rotate(-1deg)}to{transform:none}}.wobble{animation-name:wobble}@keyframes jello{0%,11.1%,to{transform:none}22.2%{transform:skewX(-12.5deg) skewY(-12.5deg)}33.3%{transform:skewX(6.25deg) skewY(6.25deg)}44.4%{transform:skewX(-3.125deg) skewY(-3.125deg)}55.5%{transform:skewX(1.5625deg) skewY(1.5625deg)}66.6%{transform:skewX(-.78125deg) skewY(-.78125deg)}77.7%{transform:skewX(.390625deg) skewY(.390625deg)}88.8%{transform:skewX(-.1953125deg) skewY(-.1953125deg)}}.jello{animation-name:jello;transform-origin:center}@keyframes bounceIn{0%,20%,40%,60%,80%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:scale3d(.3,.3,.3)}20%{transform:scale3d(1.1,1.1,1.1)}40%{transform:scale3d(.9,.9,.9)}60%{opacity:1;transform:scale3d(1.03,1.03,1.03)}80%{transform:scale3d(.97,.97,.97)}to{opacity:1;transform:scaleX(1)}}.bounceIn{animation-name:bounceIn}@keyframes bounceInDown{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(0,-3000px,0)}60%{opacity:1;transform:translate3d(0,25px,0)}75%{transform:translate3d(0,-10px,0)}90%{transform:translate3d(0,5px,0)}to{transform:none}}.bounceInDown{animation-name:bounceInDown}@keyframes bounceInLeft{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(-3000px,0,0)}60%{opacity:1;transform:translate3d(25px,0,0)}75%{transform:translate3d(-10px,0,0)}90%{transform:translate3d(5px,0,0)}to{transform:none}}.bounceInLeft{animation-name:bounceInLeft}@keyframes bounceInRight{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(3000px,0,0)}60%{opacity:1;transform:translate3d(-25px,0,0)}75%{transform:translate3d(10px,0,0)}90%{transform:translate3d(-5px,0,0)}to{transform:none}}.bounceInRight{animation-name:bounceInRight}@keyframes bounceInUp{0%,60%,75%,90%,to{animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;transform:translate3d(0,3000px,0)}60%{opacity:1;transform:translate3d(0,-20px,0)}75%{transform:translate3d(0,10px,0)}90%{transform:translate3d(0,-5px,0)}to{transform:translateZ(0)}}.bounceInUp{animation-name:bounceInUp}@keyframes bounceOut{20%{transform:scale3d(.9,.9,.9)}50%,55%{opacity:1;transform:scale3d(1.1,1.1,1.1)}to{opacity:0;transform:scale3d(.3,.3,.3)}}.bounceOut{animation-name:bounceOut}@keyframes bounceOutDown{20%{transform:translate3d(0,10px,0)}40%,45%{opacity:1;transform:translate3d(0,-20px,0)}to{opacity:0;transform:translate3d(0,2000px,0)}}.bounceOutDown{animation-name:bounceOutDown}@keyframes bounceOutLeft{20%{opacity:1;transform:translate3d(20px,0,0)}to{opacity:0;transform:translate3d(-2000px,0,0)}}.bounceOutLeft{animation-name:bounceOutLeft}@keyframes bounceOutRight{20%{opacity:1;transform:translate3d(-20px,0,0)}to{opacity:0;transform:translate3d(2000px,0,0)}}.bounceOutRight{animation-name:bounceOutRight}@keyframes bounceOutUp{20%{transform:translate3d(0,-10px,0)}40%,45%{opacity:1;transform:translate3d(0,20px,0)}to{opacity:0;transform:translate3d(0,-2000px,0)}}.bounceOutUp{animation-name:bounceOutUp}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.fadeIn{animation-name:fadeIn}@keyframes fadeInDown{0%{opacity:0;transform:translate3d(0,-100%,0)}to{opacity:1;transform:none}}.fadeInDown{animation-name:fadeInDown}@keyframes fadeInDownBig{0%{opacity:0;transform:translate3d(0,-2000px,0)}to{opacity:1;transform:none}}.fadeInDownBig{animation-name:fadeInDownBig}@keyframes fadeInLeft{0%{opacity:0;transform:translate3d(-100%,0,0)}to{opacity:1;transform:none}}.fadeInLeft{animation-name:fadeInLeft}@keyframes fadeInLeftBig{0%{opacity:0;transform:translate3d(-2000px,0,0)}to{opacity:1;transform:none}}.fadeInLeftBig{animation-name:fadeInLeftBig}@keyframes fadeInRight{0%{opacity:0;transform:translate3d(100%,0,0)}to{opacity:1;transform:none}}.fadeInRight{animation-name:fadeInRight}@keyframes fadeInRightBig{0%{opacity:0;transform:translate3d(2000px,0,0)}to{opacity:1;transform:none}}.fadeInRightBig{animation-name:fadeInRightBig}@keyframes fadeInUp{0%{opacity:0;transform:translate3d(0,100%,0)}to{opacity:1;transform:none}}.fadeInUp{animation-name:fadeInUp}@keyframes fadeInUpBig{0%{opacity:0;transform:translate3d(0,2000px,0)}to{opacity:1;transform:none}}.fadeInUpBig{animation-name:fadeInUpBig}@keyframes fadeOut{0%{opacity:1}to{opacity:0}}.fadeOut{animation-name:fadeOut}@keyframes fadeOutDown{0%{opacity:1}to{opacity:0;transform:translate3d(0,100%,0)}}.fadeOutDown{animation-name:fadeOutDown}@keyframes fadeOutDownBig{0%{opacity:1}to{opacity:0;transform:translate3d(0,2000px,0)}}.fadeOutDownBig{animation-name:fadeOutDownBig}@keyframes fadeOutLeft{0%{opacity:1}to{opacity:0;transform:translate3d(-100%,0,0)}}.fadeOutLeft{animation-name:fadeOutLeft}@keyframes fadeOutLeftBig{0%{opacity:1}to{opacity:0;transform:translate3d(-2000px,0,0)}}.fadeOutLeftBig{animation-name:fadeOutLeftBig}@keyframes fadeOutRight{0%{opacity:1}to{opacity:0;transform:translate3d(100%,0,0)}}.fadeOutRight{animation-name:fadeOutRight}@keyframes fadeOutRightBig{0%{opacity:1}to{opacity:0;transform:translate3d(2000px,0,0)}}.fadeOutRightBig{animation-name:fadeOutRightBig}@keyframes fadeOutUp{0%{opacity:1}to{opacity:0;transform:translate3d(0,-100%,0)}}.fadeOutUp{animation-name:fadeOutUp}@keyframes fadeOutUpBig{0%{opacity:1}to{opacity:0;transform:translate3d(0,-2000px,0)}}.fadeOutUpBig{animation-name:fadeOutUpBig}@keyframes flip{0%{transform:perspective(400px) rotateY(-1turn);animation-timing-function:ease-out}40%{transform:perspective(400px) translateZ(150px) rotateY(-190deg);animation-timing-function:ease-out}50%{transform:perspective(400px) translateZ(150px) rotateY(-170deg);animation-timing-function:ease-in}80%{transform:perspective(400px) scale3d(.95,.95,.95);animation-timing-function:ease-in}to{transform:perspective(400px);animation-timing-function:ease-in}}.animated.flip{-webkit-backface-visibility:visible;backface-visibility:visible;animation-name:flip}@keyframes flipInX{0%{transform:perspective(400px) rotateX(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateX(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateX(10deg);opacity:1}80%{transform:perspective(400px) rotateX(-5deg)}to{transform:perspective(400px)}}.flipInX{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInX}@keyframes flipInY{0%{transform:perspective(400px) rotateY(90deg);animation-timing-function:ease-in;opacity:0}40%{transform:perspective(400px) rotateY(-20deg);animation-timing-function:ease-in}60%{transform:perspective(400px) rotateY(10deg);opacity:1}80%{transform:perspective(400px) rotateY(-5deg)}to{transform:perspective(400px)}}.flipInY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipInY}@keyframes flipOutX{0%{transform:perspective(400px)}30%{transform:perspective(400px) rotateX(-20deg);opacity:1}to{transform:perspective(400px) rotateX(90deg);opacity:0}}.flipOutX{animation-name:flipOutX;-webkit-backface-visibility:visible!important;backface-visibility:visible!important}@keyframes flipOutY{0%{transform:perspective(400px)}30%{transform:perspective(400px) rotateY(-15deg);opacity:1}to{transform:perspective(400px) rotateY(90deg);opacity:0}}.flipOutY{-webkit-backface-visibility:visible!important;backface-visibility:visible!important;animation-name:flipOutY}@keyframes lightSpeedIn{0%{transform:translate3d(100%,0,0) skewX(-30deg);opacity:0}60%{transform:skewX(20deg);opacity:1}80%{transform:skewX(-5deg);opacity:1}to{transform:none;opacity:1}}.lightSpeedIn{animation-name:lightSpeedIn;animation-timing-function:ease-out}@keyframes lightSpeedOut{0%{opacity:1}to{transform:translate3d(100%,0,0) skewX(30deg);opacity:0}}.lightSpeedOut{animation-name:lightSpeedOut;animation-timing-function:ease-in}@keyframes rotateIn{0%{transform-origin:center;transform:rotate(-200deg);opacity:0}to{transform-origin:center;transform:none;opacity:1}}.rotateIn{animation-name:rotateIn}@keyframes rotateInDownLeft{0%{transform-origin:left bottom;transform:rotate(-45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.rotateInDownLeft{animation-name:rotateInDownLeft}@keyframes rotateInDownRight{0%{transform-origin:right bottom;transform:rotate(45deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.rotateInDownRight{animation-name:rotateInDownRight}@keyframes rotateInUpLeft{0%{transform-origin:left bottom;transform:rotate(45deg);opacity:0}to{transform-origin:left bottom;transform:none;opacity:1}}.rotateInUpLeft{animation-name:rotateInUpLeft}@keyframes rotateInUpRight{0%{transform-origin:right bottom;transform:rotate(-90deg);opacity:0}to{transform-origin:right bottom;transform:none;opacity:1}}.rotateInUpRight{animation-name:rotateInUpRight}@keyframes rotateOut{0%{transform-origin:center;opacity:1}to{transform-origin:center;transform:rotate(200deg);opacity:0}}.rotateOut{animation-name:rotateOut}@keyframes rotateOutDownLeft{0%{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate(45deg);opacity:0}}.rotateOutDownLeft{animation-name:rotateOutDownLeft}@keyframes rotateOutDownRight{0%{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate(-45deg);opacity:0}}.rotateOutDownRight{animation-name:rotateOutDownRight}@keyframes rotateOutUpLeft{0%{transform-origin:left bottom;opacity:1}to{transform-origin:left bottom;transform:rotate(-45deg);opacity:0}}.rotateOutUpLeft{animation-name:rotateOutUpLeft}@keyframes rotateOutUpRight{0%{transform-origin:right bottom;opacity:1}to{transform-origin:right bottom;transform:rotate(90deg);opacity:0}}.rotateOutUpRight{animation-name:rotateOutUpRight}@keyframes hinge{0%{transform-origin:top left;animation-timing-function:ease-in-out}20%,60%{transform:rotate(80deg);transform-origin:top left;animation-timing-function:ease-in-out}40%,80%{transform:rotate(60deg);transform-origin:top left;animation-timing-function:ease-in-out;opacity:1}to{transform:translate3d(0,700px,0);opacity:0}}.hinge{animation-name:hinge}@keyframes jackInTheBox{0%{opacity:0;transform:scale(.1) rotate(30deg);transform-origin:center bottom}50%{transform:rotate(-10deg)}70%{transform:rotate(3deg)}to{opacity:1;transform:scale(1)}}.jackInTheBox{animation-name:jackInTheBox}@keyframes rollIn{0%{opacity:0;transform:translate3d(-100%,0,0) rotate(-120deg)}to{opacity:1;transform:none}}.rollIn{animation-name:rollIn}@keyframes rollOut{0%{opacity:1}to{opacity:0;transform:translate3d(100%,0,0) rotate(120deg)}}.rollOut{animation-name:rollOut}@keyframes zoomIn{0%{opacity:0;transform:scale3d(.3,.3,.3)}50%{opacity:1}}.zoomIn{animation-name:zoomIn}@keyframes zoomInDown{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-1000px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInDown{animation-name:zoomInDown}@keyframes zoomInLeft{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(-1000px,0,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(10px,0,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInLeft{animation-name:zoomInLeft}@keyframes zoomInRight{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(1000px,0,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-10px,0,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInRight{animation-name:zoomInRight}@keyframes zoomInUp{0%{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,1000px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}60%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomInUp{animation-name:zoomInUp}@keyframes zoomOut{0%{opacity:1}50%{opacity:0;transform:scale3d(.3,.3,.3)}to{opacity:0}}.zoomOut{animation-name:zoomOut}@keyframes zoomOutDown{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,-60px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutDown{animation-name:zoomOutDown}@keyframes zoomOutLeft{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(-2000px,0,0);transform-origin:left center}}.zoomOutLeft{animation-name:zoomOutLeft}@keyframes zoomOutRight{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(-42px,0,0)}to{opacity:0;transform:scale(.1) translate3d(2000px,0,0);transform-origin:right center}}.zoomOutRight{animation-name:zoomOutRight}@keyframes zoomOutUp{40%{opacity:1;transform:scale3d(.475,.475,.475) translate3d(0,60px,0);animation-timing-function:cubic-bezier(.55,.055,.675,.19)}to{opacity:0;transform:scale3d(.1,.1,.1) translate3d(0,-2000px,0);transform-origin:center bottom;animation-timing-function:cubic-bezier(.175,.885,.32,1)}}.zoomOutUp{animation-name:zoomOutUp}@keyframes slideInDown{0%{transform:translate3d(0,-100%,0);visibility:visible}to{transform:translateZ(0)}}.slideInDown{animation-name:slideInDown}@keyframes slideInLeft{0%{transform:translate3d(-100%,0,0);visibility:visible}to{transform:translateZ(0)}}.slideInLeft{animation-name:slideInLeft}@keyframes slideInRight{0%{transform:translate3d(100%,0,0);visibility:visible}to{transform:translateZ(0)}}.slideInRight{animation-name:slideInRight}@keyframes slideInUp{0%{transform:translate3d(0,100%,0);visibility:visible}to{transform:translateZ(0)}}.slideInUp{animation-name:slideInUp}@keyframes slideOutDown{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(0,100%,0)}}.slideOutDown{animation-name:slideOutDown}@keyframes slideOutLeft{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(-100%,0,0)}}.slideOutLeft{animation-name:slideOutLeft}@keyframes slideOutRight{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(100%,0,0)}}.slideOutRight{animation-name:slideOutRight}@keyframes slideOutUp{0%{transform:translateZ(0)}to{visibility:hidden;transform:translate3d(0,-100%,0)}}.slideOutUp{animation-name:slideOutUp}
        #particle-canvas{position:relative;display:block;overflow:hidden;width:100%;z-index:10;height:100%}
        #particle-canvas:after{position:absolute;left:0;top:0;width:100%;height:100%;z-index:1}
        .header-wrap{position:fixed;width:100%;padding-top:5px;z-index:999;transition:all .5s ease-in-out;-webkit-transition:all .5s ease-in-out}
        .header-wrap.fixed{z-index:9999;padding:10px 0 0;box-shadow:0 .25rem .375rem -.375rem rgba(76,76,76,.6901960784313725)}
        .circles,.section-shape{left:0;z-index:20;position:absolute;right:0}
        .section-shape{bottom:-8px}
        .circles{top:0;bottom:0;overflow:hidden;margin:0}
        .circles li{position:absolute;display:block;list-style:none;width:20px;height:20px;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;background:rgba(255,255,255,.13);animation:animate 45s linear infinite;bottom:-150px;z-index:0}
        .circles li:nth-child(1){left:25%;width:60px;height:60px;animation-delay:0}
        .circles li:nth-child(2){left:10%;width:10px;height:10px;animation-delay:2s;animation-duration:12s}
        .circles li:nth-child(3){left:70%;width:10px;height:10px;animation-delay:4s}
        .circles li:nth-child(4){left:40%;width:40px;height:40px;animation-delay:0;animation-duration:18s}
        .circles li:nth-child(5){left:65%;width:10px;height:10px;animation-delay:0}
        .circles li:nth-child(6){left:75%;width:90px;height:90px;animation-delay:3s}
        .circles li:nth-child(7){left:35%;width:130px;height:130px;animation-delay:7s}
        .circles li:nth-child(8){left:50%;width:15px;height:15px;animation-delay:15s;animation-duration:45s}
        .circles li:nth-child(9){left:20%;width:5px;height:5px;animation-delay:2s;animation-duration:35s}
        .circles li:nth-child(10){left:85%;width:130px;height:130px;animation-delay:0;animation-duration:11s}
        @keyframes animate{0{transform:translateY(0) rotate(0);opacity:1;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
        100%{transform:translateY(-1000px) rotate(720deg);opacity:0;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;}}
        .header-wrapper{width:1100px;color:#777;min-height:50px;position:relative;z-index:999;margin:0 auto}
        div#pelajar,div#whatsapp{position:fixed;transition:.5s}
        #header{float:left;width:auto;overflow:hidden;margin:0;padding:0}
        #header-inner{margin:5px 0;padding:0}
        #header h1,#header p{font-size:26px;line-height:38px;color:#000;margin:-3px 0 0;font-weight:700}
        #header h1 a,#header h1.title a:hover,#header p a{color:#000;text-decoration:none}
        #header img{border:0;background:none;width:auto;height:35px;margin:0 auto}
        #header .description{display:none}
        div#pelajar{top:0;left:0;right:0;bottom:0;z-index:-99;opacity:0;background:rgba(0,0,0,.74)}
        div#whatsapp,span.wa-x::before{left:50%;transform:translate(-50%,-50%)}
        div#pelajar.active{z-index:9999;opacity:1}
        div#whatsapp{top:50%;max-width:600px;width:100%;background:#000;border-radius:5px;box-shadow:0 2px 5px rgba(0,0,0,.5);z-index:-1;opacity:0}
        div#whatsapp.active{z-index:999999;opacity:1}
        p.wa-title{margin:0;padding:15px;font-size:14px;text-transform:uppercase;text-align:center;font-weight:700;background:#067f97;color:#000}.link-sk{color:#000!important;text-decoration:underline!important}.wa-body{padding:20px;display:block;width:100%;border:10px solid #000;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;background:radial-gradient(farthest-corner at 40px 40px,#285fb1,#116ca0,#008793,#00bf72,#a8eb12);color:#000}
        .wa-input,.wa-option{padding:10px;outline:0}
        .wa-input{border:none;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;line-height:1.2em}
        .wa-option{border:none;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;line-height:32px;width:100%}
        .wa-input.bagi{width:92%;margin:0;outline:0}
        .wa-option.kolom{width:68%;margin:1% 1% 10px}
        .jadwal{margin-right:5px;display:inline}
        .mr-10{margin-right:10px!important;font-size:14px}
        .wa-label.bagi,.wa-label.full{padding:0;font-size:15px;font-weight:700}
        .wa-label.bagi{line-height:1.2em;display:block;margin-bottom:10px}
        .bagil{display:block;font-weight:700}
        .wa-label.full{width:100%;line-height:32px;display:inline}
        .p-info,a.submit{font-size:13px;text-align:center}
        .form-whatsapp{display:inline-block;width:100%;margin-bottom:18px}
        .left,.right{width:48%}
        .right{float:right}
        .box-tanggal{width:100%;text-align:center;margin:15px;line-height:1.6em}
        .wa-input.full{width:96%;resize:none;min-height:70px;margin:0}
        a.submit{line-height:24px;padding:10px 15px;width:100%;max-width:100px;font-weight:700;background:#000;margin:14px auto 0;display:block;color:#20a94b!important;border-radius:3px;cursor:pointer}
        span.wa-x{position:absolute;top:5px;right:5px;height:30px;width:30px;border:2px solid #000;border-radius:50px;cursor:pointer}
        span.wa-x::before{position:absolute;top:50%;height:3px;width:50%;background:#000}
        .p-info{color:#000}
        @media(max-width:768px){.wa-input.bagi{width:100%;margin:0 0 10px}
            .wa-body{overflow-y:scroll;max-height:500px}
            .wa-input.full{width:100%;margin:0}}
        .box-list,.box1,.box10,.box11,.box12,.box2,.box3,.box4,.box5,.box6,.box7,.box8,.box9,.mfp-bg,.team-details,.team-img img{overflow:hidden}
        @media(max-width:640px){.left,.right{width:100%}}
        a.btn-wa{border-radius:35px;letter-spacing:0;line-height:35px;display:block;font-size:13px;font-weight:500;text-transform:uppercase;color:#000;float:right;position:relative;transition:.3s ease-out;-moz-transition:.3s ease-out;-webkit-transition:.3s ease-out;border:1px solid #ff66a3;padding:1px 15px!important;margin-top:0;margin-left:0;box-shadow:0 5px 5px 0 rgba(107,66,83,.16);background:#ff65a5;background:-moz-linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);background:-webkit-linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);background:linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%)}
        a.btn-wa span{display:block}
        a.btn-wa i{display:none}
        .about-content h6,.box1 .right .about-content ul li i{-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-color:transparent}
        .box1{margin:0 auto;padding:3rem 0 1rem}
        .box1 .left,.box1 .right{width:50%}
        .left{float:left}
        .box1 .right{float:right}
        .box1 .right .about-content ul li i{font-size:15px;color:#74e5a5;padding-right:2px;background-image:-webkit-gradient(linear,right top,left top,from(#75e9a0),to(#75bae4));background-image:linear-gradient(-90deg,#75e9a0 0,#75bae4 100%)}
        #about-area{padding:110px 0 50px}
        .about-content h6{font-weight:600;background-image:-webkit-gradient(linear,right top,left top,from(#0985f9),to(#6809dc));background-image:linear-gradient(-90deg,#0985f9 0,#6809dc 100%);margin:0 0 5px}
        .about-content h2{font-weight:700;margin-bottom:10px}
        .about-content ul li{font-size:14px;display:block;padding:5px 0;font-weight:600}
        .about-content a{display:inline-block;background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%);background-size:100% auto;padding:12px 30px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;color:#000;margin-top:30px;font-weight:500;box-shadow:0 18px 32px rgba(0,0,0,.28)}
        .about-content a:hover{background-size:200% auto}
        .video-content{margin:0 auto;background:url(https://3.bp.blogspot.com/-uhsU5kSbRbY/XL7M9C6qVQI/AAAAAAAAANY/c6OHApmuiIw8RhOiVChDDPjWAnvAHsgDwCLcBGAs/s1600/over.jpg) center no-repeat;background-origin:initial;background-clip:initial;background-size:cover;z-index:1;padding:0;height:380px;max-width:738px;width:100%}
        .video-content .bg-opacity{background-color:rgba(21,21,21,.79);height:100%}
        .video-content a{display:inline-block;width:80px;height:80px;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;font-size:30px;text-align:center;line-height:80px;padding:0;background-color:#fb1e8b;color:#000;position:relative}
        .video-content a:after,.video-content a:before{content:"";position:absolute;left:-5px;top:-5px;height:90px;width:90px}
        .video-content a:after{border:3px solid #fb1e8b;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;-webkit-animation:icon-bubble 1s infinite forwards linear;animation:icon-bubble 1s infinite forwards linear}
        .video-content a:before{border:3px solid #fb1e8b;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;-webkit-animation:icon-bubble 1s infinite forwards linear .5s;animation:icon-bubble 1s infinite forwards linear .5s}
        .mfp-arrow:after,.mfp-arrow:before,.mfp-container:before,.mfp-figure:after{content:''}
        .box-list li i,.box5,.box8{position:relative}
        .d-table-cell{padding:150px 0}
        @-webkit-keyframes icon-bubble{0{-webkit-transform:scale(.85);transform:scale(.85);opacity:1}
        25%{-webkit-transform:scale(1.05);transform:scale(1.05);opacity:.8}
        50%{-webkit-transform:scale(1.2);transform:scale(1.2);opacity:.55}
        75%{-webkit-transform:scale(1.32);transform:scale(1.32);opacity:.3}
        100%{-webkit-transform:scale(1.4);transform:scale(1.4);opacity:0}}
        @keyframes icon-bubble{0{-webkit-transform:scale(.85);transform:scale(.85);opacity:1}
        25%{-webkit-transform:scale(1.05);transform:scale(1.05);opacity:.8}
        50%{-webkit-transform:scale(1.2);transform:scale(1.2);opacity:.55}
        75%{-webkit-transform:scale(1.32);transform:scale(1.32);opacity:.3}
        100%{-webkit-transform:scale(1.4);transform:scale(1.4);opacity:0}}
        #footer h2,#footer h6,#footer p,.box12 .section-heading h2,.box12 .section-heading h6,.box12 .section-heading p,.box3 .section-heading h2,.box3 .section-heading h6,.box3 .section-heading p.text-light,.box5 .section-heading h2,.box5 .section-heading h6,.box5 .section-heading p.text-light,.box8 .section-heading h2,.box8 .section-heading h6,.box8 .section-heading p{color:#000}
        .section-heading h6{font-weight:500;color:#555;margin:0 0 5px}
        .section-heading h2,.section-heading1 h2{font-weight:700;color:#555;margin:0}
        .section-heading p,.section-heading1 p{color:#555;font-size:14px}
        .section-heading{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;margin:0 auto 60px}
        .section-heading1{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;margin:40px auto 20px}
        .box12 .section-heading{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;margin:0 auto 20px}
        #footer .section-heading{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;margin:0 auto}
        .text-center{text-align:center}
        .box2{background:#f9f9f9;margin:0 auto;padding:3rem 0 1rem}
        .box-list{list-style:none;margin:15px 0 30px;padding:0 0 30px;color:#6a6969;font-size:13px;display:block;line-height:18px;text-align:center}
        .box-list li{float:left;display:block;background:#000;width:25.15%;padding:40px 30px;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;box-shadow:0 1px 15px 1px rgba(0,0,0,.04),0 1px 6px rgba(0,0,0,.04);border:0;margin:15px;-webkit-transition:all .5s ease;-o-transition:all .5s ease;transition:all .5s ease}
        .box-list li i,.box3{background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%)}
        .box-list li span{font-size:16px;color:#000;font-weight:600;line-height:1.2em}
        .box-list li p{padding:0;margin:5px 0 0}
        .box-list h3{font-size:16px;padding:15px 0}
        .box-list li i{font-size:35px;color:#fcfcfc;padding:0;width:75px;height:75px;margin:0 auto 20px;line-height:75px;border-radius:100%;box-shadow:0 18px 32px rgba(0,0,0,.28);display:block;-webkit-transition:all .5s;-o-transition:all .5s;transition:all .5s}
        .box10,.box11,.box3,.box4,.box5,.box6,.box7,.box8,.box9{padding:3rem 0}
        .about-wrap,.box10,.box11,.box3,.box4,.box5,.box6,.box7,.box8,.box9{margin:0 auto}
        .box4{background:url(https://3.bp.blogspot.com/-PRpLC63zKvQ/XL681YeStZI/AAAAAAAAALg/4IyT3zWJKf0kYdh0RMSdCOn6KZ3doEaxACLcBGAs/s1600/bg.png) left bottom no-repeat #000}
        .box5{background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%)}
        .box7{background:#fbfbfb}
        .box8{background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%)}
        .box9{background-image:url(https://2.bp.blogspot.com/-R2so0uzhLM4/XL68_uNxbtI/AAAAAAAAALk/C20G-Znm7PY9Aoea-bfvzUEYu68uBnWMgCLcBGAs/s1600/bg2.png);background-repeat:no-repeat;background-position:left bottom}
        .team-img,.team-member{position:relative;overflow:hidden}
        .about-title{margin-bottom:35px}
        .about-title h4{font-size:35px;line-height:45px;color:#303030}
        .socials a,.team-details p{color:#000}
        .team-box{width:23.1%;float:left;padding:0;margin:10px;height:324px}
        .overlay,.team-img img{width:100%;-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}
        .team-img img{height:100%}
        .team-img{height:246px}
        .overlay,.socials,.team-details{position:absolute}
        .team-title{padding:11px 0 11px 51px;margin:0;font-size:16px}
        .overlay{background-color:rgba(20,20,20,.7);top:0;height:100%;opacity:0}
        .team-details{opacity:0;top:40%;left:0;padding:5%;z-index:2;-webkit-transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out}
        .team-box:hover .socials{opacity:1}
        .socials{top:0;bottom:0;right:0;opacity:0;background:rgba(56,44,54,.45);z-index:2;height:246px;-webkit-transition:all .5s ease-in-out 0;-moz-transition:all .5s ease-in-out 0;-o-transition:all .5s ease-in-out 0;transition:all .5s ease-in-out 0}
        .socials a,.socials i{height:34px;text-align:center}
        .mfp-bg,.mfp-container,.mfp-wrap{height:100%;width:100%}
        .socials a{display:block;width:36px;padding:7px}
        .socials i{line-height:34px;color:rgba(243,41,151,.61);font-size:14px;width:34px;background-color:#000;border-radius:50%;-webkit-transition:all .2s linear;-moz-transition:all .2s linear;-o-transition:all .2s linear;-ms-transition:all .2s linear;transition:all .2s linear}
        .team-details .socials i{color:#000}
        .phone_trigger{border-left:1px solid #f2f2f2;font-size:25px;display:block;float:right;color:#505050;width:49px;cursor:pointer;-webkit-transition:all .3s ease-in-out 0;transition:all .3s ease-in-out 0}
        .inner{background:#f1f1f1;padding:12px 0;text-align:center}
        .inner a{color:#555;font-size:18px}
        .subscribe-wrapper,h2,h3.date-header{text-transform:none}
        .inner p{color:#555;font-size:13px}
        .box12{background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%);margin:0 auto;padding:3rem 0}
        .mfp-bg{top:0;left:0;z-index:1042;position:fixed!important;background:#000;opacity:.8}
        .mfp-wrap{top:0;left:0;z-index:1043;position:fixed;outline:0!important;-webkit-backface-visibility:hidden}
        .mfp-container{text-align:center;position:absolute;left:0;top:0;padding:0 8px}
        .mfp-container:before{display:inline-block;height:100%}
        .mfp-align-top .mfp-container:before{display:none}
        .mfp-content{position:relative;display:inline-block;margin:0 auto;text-align:left;z-index:1045}
        .mfp-ajax-holder .mfp-content,.mfp-inline-holder .mfp-content{width:100%;cursor:auto}
        .mfp-ajax-cur{cursor:progress}
        .mfp-zoom-out-cur,.mfp-zoom-out-cur .mfp-image-holder .mfp-close{cursor:-moz-zoom-out;cursor:-webkit-zoom-out;cursor:zoom-out}
        .mfp-zoom{cursor:pointer;cursor:-webkit-zoom-in;cursor:-moz-zoom-in;cursor:zoom-in}
        .mfp-auto-cursor .mfp-content{cursor:auto}
        .mfp-arrow,.mfp-close,.mfp-counter,.mfp-preloader{-webkit-user-select:none;-moz-user-select:none;user-select:none}
        .mfp-loading.mfp-figure{display:none}
        .mfp-hide{display:none!important}
        .mfp-preloader{color:#ccc;position:absolute;top:50%;width:auto;text-align:center;margin-top:-.8em;left:8px;right:8px;z-index:1044}
        .mfp-preloader a{color:#ccc}
        .mfp-close,.mfp-preloader a:hover{color:#000}
        .mfp-s-error .mfp-content,.mfp-s-ready .mfp-preloader{display:none}
        button.mfp-arrow,button.mfp-close{overflow:visible;cursor:pointer;background:none;border:0;-webkit-appearance:none;display:block;outline:0;padding:0;z-index:1046;box-shadow:none;touch-action:manipulation}
        button::-moz-focus-inner{padding:0;border:0}
        .mfp-close{width:44px;height:44px;line-height:44px;position:absolute;right:0;top:0;text-decoration:none;text-align:center;opacity:.65;padding:0 0 18px 10px;font-style:normal;font-size:28px;font-family:Arial,Baskerville,monospace}
        .mfp-close:focus,.mfp-close:hover{opacity:1}
        .mfp-close:active{top:1px}
        .mfp-close-btn-in .mfp-close{color:#333}
        .mfp-iframe-holder .mfp-close,.mfp-image-holder .mfp-close{color:#000;right:-6px;text-align:right;padding-right:6px;width:100%}
        .mfp-counter{position:absolute;top:0;right:0;color:#ccc;font-size:12px;line-height:18px;white-space:nowrap}
        .mfp-figure,img.mfp-img{line-height:0}
        .mfp-arrow{position:absolute;opacity:.65;margin:-55px 0 0;top:50%;padding:0;width:90px;height:110px}
        .mfp-arrow:active{margin-top:-54px}
        .mfp-arrow:focus,.mfp-arrow:hover{opacity:1}
        .mfp-arrow:after,.mfp-arrow:before{display:block;width:0;height:0;position:absolute;left:0;top:0;margin-top:35px;margin-left:35px;border:inset transparent}
        .mfp-arrow:after{border-top-width:13px;border-bottom-width:13px;top:8px}
        .mfp-arrow:before{border-top-width:21px;border-bottom-width:21px;opacity:.7}
        .mfp-arrow-left{left:0}
        .mfp-arrow-left:after{border-right:17px solid #000;margin-left:31px}
        .mfp-arrow-left:before{margin-left:25px;border-right:27px solid #3f3f3f}
        .mfp-arrow-right{right:0}
        .mfp-arrow-right:after{border-left:17px solid #000;margin-left:39px}
        .mfp-arrow-right:before{border-left:27px solid #3f3f3f}
        .mfp-iframe-holder{padding-top:40px;padding-bottom:40px}
        .mfp-iframe-holder .mfp-content{line-height:0;width:100%;max-width:900px}
        .mfp-image-holder .mfp-content,img.mfp-img{max-width:100%}
        .mfp-iframe-holder .mfp-close{top:-40px}
        .mfp-iframe-scaler{width:100%;height:0;overflow:hidden;padding-top:56.25%}
        .mfp-iframe-scaler iframe{position:absolute;display:block;top:0;left:0;width:100%;height:100%;box-shadow:0 0 8px rgba(0,0,0,.6);background:#000}
        .mfp-figure:after,img.mfp-img{width:auto;height:auto;display:block}
        img.mfp-img{padding:40px 0;margin:0 auto}
        .mfp-figure:after{position:absolute;left:0;top:40px;bottom:40px;right:0;z-index:-1;box-shadow:0 0 8px rgba(0,0,0,.6);background:#444}
        .mfp-figure small{color:#bdbdbd;display:block;font-size:12px;line-height:14px}
        .mfp-figure figure{margin:0}
        .mfp-bottom-bar{margin-top:-36px;position:absolute;top:100%;left:0;width:100%;cursor:auto}
        .mfp-title{text-align:left;line-height:18px;color:#f3f3f3;padding-right:36px}
        .mfp-gallery .mfp-image-holder .mfp-figure{cursor:pointer}
        @media screen and(max-width:800px) and(orientation:landscape),screen and(max-height:300px){.mfp-img-mobile .mfp-image-holder{padding-left:0;padding-right:0}
            .mfp-img-mobile img.mfp-img{padding:0}
            .mfp-img-mobile .mfp-figure:after{top:0;bottom:0}
            .mfp-img-mobile .mfp-figure small{display:inline;margin-left:5px}
            .mfp-img-mobile .mfp-bottom-bar{background:rgba(0,0,0,.6);bottom:0;margin:0;top:auto;padding:3px 5px;position:fixed;box-sizing:border-box}
            .mfp-img-mobile .mfp-bottom-bar:empty{padding:0}
            .mfp-img-mobile .mfp-counter{right:5px;top:3px}
            .mfp-img-mobile .mfp-close{top:0;right:0;width:35px;height:35px;line-height:35px;background:rgba(0,0,0,.6);position:fixed;text-align:center;padding:0}}
        @media all and(max-width:900px){.mfp-arrow{-webkit-transform:scale(.75);transform:scale(.75)}
            .mfp-arrow-left{-webkit-transform-origin:0;transform-origin:0}
            .mfp-arrow-right{-webkit-transform-origin:100%;transform-origin:100%}
            .mfp-container{padding-left:6px;padding-right:6px}}
        #subscribe-css{position:relative;padding:0;overflow:hidden;display:block;margin:0 auto;width:100%;max-width:607px}
        .subscribe-wrapper{color:#444;font-size:16px;line-height:normal;-moz-border-radius:2px;-webkit-border-radius:2px;border-radius:2px;margin:0;text-align:center;font-weight:400}
        .contact-form-button-submit,.subscribe-css-email-button{text-transform:uppercase;text-align:center;cursor:pointer}
        .subscribe-form{clear:both;display:block;overflow:hidden}
        form.subscribe-form{clear:both;display:block;margin:0;width:auto;overflow:hidden}
        .subscribe-css-email-field{min-width:560px;max-width:100%;margin:0;padding:23px;border:none;color:#000;background:#000;outline:0;-moz-border-radius:50px;-webkit-border-radius:50px;border-radius:50px;line-height:1}
        .subscribe-css-email-button{padding:18px 30px;border:0;color:#000;right:8px;top:6px;position:absolute;line-height:1;font-weight:900;background-color:#f92792;outline:0;-webkit-border-radius:27px;-moz-border-radius:27px;border-radius:27px;}
        div#landing_form{padding:50px 0;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;color:#1d1d1d;font-size:15px;font-weight:700;position:relative;margin:0 auto;overflow:hidden}
        div#landing_form .wrap-me{margin:0;display:block;max-width:500px;width:100%;float:left;box-sizing:border-box;background:rgba(0,0,0,.24);padding:40px 40px 5px}
        .contact-title{text-align:center;margin:25px 0}
        .contact-title h4{font-size:35px;line-height:45px;color:#303030}
        .contact-title span{color:#606060}
        .contact_list_wrapper{text-align:center}
        .contact-list-info{list-style:none;padding:0;margin:0;text-align:center}
        .contact_list_wrapper .contact-list-info li{padding:0 15px;display:inline-block;line-height:25px;color:#606060}
        .contact_list_wrapper .contact-list-info li i{display:inline;margin-right:5px;font-size:15px;vertical-align:-2px;color:#303030}
        .contact_list_wrapper .contact-list-info li p{display:inline}
        #ContactForm1_contact-form-email,#ContactForm1_contact-form-email:active,#ContactForm1_contact-form-email:hover,input#ContactForm1_contact-form-name{padding:5px;margin-top:4px!important;box-shadow:none!important;width:100%;max-width:100%;background:none!important;color:#000;border-color:rgba(238, 238, 238, 0.3411764705882353);border-width:0 0 1px;line-height:1em;min-height:31px;margin-bottom:15px;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
        .contact-form-email-message,.contact-form-email-message:active,.contact-form-email-message:hover{padding:5px;margin-top:4px!important;box-shadow:none!important;width:100%;max-width:100%;line-height:1em;min-height:80px;background:none!important;color:#000;border-color:rgba(238, 238, 238, 0.3411764705882353);border-width:0 0 1px;margin-bottom:10px;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;}
        #ContactForm1_contact-form-email-message:focus,#ContactForm1_contact-form-email:focus,#ContactForm1_contact-form-name:focus{outline:0;background:none!important;color:#000;border-color:#ffbd2f!important;border-width:0 0 1px;box-shadow:none!important;transition:all .3s ease-in-out!important}
        .contact-form-button-submit{border:none;display:table;font-size:12px;margin:0!important;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;max-width:100%;width:100%;min-width:100%;line-height:.2em;letter-spacing:.5px;font-weight:700;position:relative;outline:0!important;color:#000;box-shadow:0 10px 15px 0 rgba(255,101,165,.3);background:#ff65a5;background:-moz-linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);background:-webkit-linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);background:linear-gradient(45deg,rgba(255,101,165,1) 0,rgba(255,101,165,1) 13%,rgba(255,107,154,1) 35%,rgba(255,134,106,1) 100%);padding:18px 47px;transition:all .3s ease-in-out;-webkit-transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out}
        .contact-form-success-message,.contact-form-success-message-with-border{color:#000!important;margin-top:55px!important}
        .contact-form-button-submit.disabled,.contact-form-button-submit.disabled:active,.contact-form-button-submit.disabled:hover{opacity:.9}
        .contact-form-error-message-with-border{background:#000;border:none;bottom:0;box-shadow:none;color:#fdfdfd;font-size:15px;font-weight:400;line-height:35px;margin-left:0;opacity:1;position:static;text-align:center;height:35px;margin-top:60px}
        .contact-form-cross{height:14px;margin:5px;vertical-align:-8.5%;float:right;width:14px;border-radius:50px;border:0!important;cursor:pointer}
        .contact-form-widget{max-width:100%}
        .contact-form-success-message-with-border{font-weight:400;background-color:#52ad48;border:none;color:#000;line-height:35px;margin-left:0;font-size:13px;opacity:1;position:static;text-align:center;height:35px;margin-top:60px}
        div#landing_form span.email-bg,div#landing_form span.message-bg,div#landing_form span.name-bg{line-height:21px;padding:3px 0;height:30px;margin:0 0 4px;letter-spacing:0;font-weight:400;display:inline-block;width:100%;box-sizing:border-box}
        div#landing_form span.email-bg,div#landing_form span.name-bg{color:#000}
        div#landing_form span.message-bg{color:#eee}
        div#landing_form span.send-bg{height:32px;display:inline-block;float:left;transition:all .4s ease-in-out!important}
        div#landing_form .clear-button,div#landing_form span.clear-bg{display:none}
        input.contact-form-button.contact-form-button-submit.clear-button:hover{background-color:#e83434!important}
        .map-me{margin:0;display:block;max-width:500px;width:100%;float:left;padding:40px;box-sizing:border-box}
        .map-me .con-title{font-weight:700;letter-spacing:-1px;line-height:48px;color:#000;margin:0;text-transform:capitalize}
        .map-me .con-text{font-weight:100;line-height:24px;color:#555;margin:0 0 10px}
        .map-me .con-list{list-style-type:none;padding:0}
        .map-me .con-list li{list-style-type:none;color:#000;line-height:45px;margin-bottom:15px;font-weight:400}
        .map-me .con-list li i{font-size:2em;margin-right:20px;padding:0;vertical-align:middle;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;color:rgba(255,255,255,.93)}
        #search-wrapper{padding:20px 0 25px;margin:0 auto;width:100%;display:block;background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%);border-radius:5px;overflow:hidden}
        #search-wrapper h4{color:#000;font-weight:700;font-size:14px;text-transform:uppercase;line-height:1.3em;text-align:center;padding:0 0 10px;margin:auto}
        #search-box{width:80%;height:50px;padding:0;margin:0 auto;text-align:center;position:relative}
        #search-box form{border:1px solid #000;line-height:40px;background:#000;border-radius:5px}
        .search-button,.search-form{line-height:25px;margin:0;border:none}
        .search-form{color:#272727;width:100%;padding:0 30px 0 10px;height:25px;font-size:12px;font-weight:400;-moz-box-sizing:border-box;box-sizing:border-box}
        .search-button{background:none;width:40px;height:30px;padding:10px 0;text-align:center;top:0;right:0;font-size:19px;color:#f22a9b;position:absolute;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;text-shadow:none;box-shadow:none;cursor:pointer}
        .search-button:focus,.search-button:hover,.search-form:focus,.search-form:hover{border:none;outline:0;color:#1f253d}
        .container{position:relative;max-width:1100px;margin:0 auto}
        .outer-wrapper{position:relative;width:100%;padding:0}
        .main-wrapper{width:780px;margin:0;float:left;overflow:hidden}
        .clr{clear:both;float:none}
        h2{line-height:1.4em;color:#333;margin:.5em 0 .25em}
        h3.date-header{color:#666;line-height:1.2em;margin:.1em 0}
        .post{margin:0;padding:0}
        .post h1{font-size:200%;line-height:1.2em;color:#333;margin:0;padding:4px 0;font-weight:400;text-transform:uppercase}
        .post h1 a,.post h1 a:visited,.post h1 strong{display:block;text-decoration:none;color:#333}
        .post-body{margin:0;line-height:1.8em}
        .post-body blockquote{line-height:1.5em;margin:15px 0;font-size:15px;background:#f1f1f1;padding:10px 20px;border-left:5px solid #f42997}
        .post ol,.post ul{margin:5px 0 5px 10px;padding:0 0 0 20px}
        #header2 img,.post img,.sidebar img{max-width:100%;width:auto;border:0}
        .post ul{list-style-type:inherit}
        .post ol{list-style-type:decimal}
        .line-left,.line-right{width:50%}
        .line-left{float:left}
        .line-right{float:right}
        .timeline-item{padding:2.8125rem 3rem 3rem;position:relative;color:rgba(0,0,0,.7);border-left:.125rem solid #f92892}
        .timeline-item::before{content:attr(date-time);display:block;position:absolute;top:.75rem;font-size:.8125rem}
        .timeline-item::after{content:'';display:block;width:1rem;height:1rem;position:absolute;top:1em;left:-.5rem;border-radius:1rem;margin-left:-.0625rem}
        .timeline__section .timeline-item:first-child:before{top:0}
        .timeline__section .timeline-item:first-child:before,.timeline__section .timeline-item:last-child:before{content:"";width:.5rem;height:.5rem;background:#8315d6;display:block;position:absolute;left:-.3125rem;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;}
        .timeline-centered{display:flex;flex-wrap:wrap}
        .timeline-centered .timeline-item{max-width:50%;flex:0 0 50%}
        .timeline-centered .timeline-item:not(:nth-child(even)){border-left:0;border-right:.125rem solid #f92892;text-align:right}
        .timeline-centered .timeline-item:not(:nth-child(even))::before{right:3rem}
        .timeline-centered .timeline-item:not(:nth-child(even))::after{left:auto;right:-.5rem;margin-left:auto;margin-right:-.0625rem}
        .timeline-centered .timeline-item:nth-child(even){margin-left:calc(50% - .125rem)}
        .timeline-horizontal{display:flex}
        .timeline-horizontal .timeline-item{border-left:0;border-top:.125rem solid #f92892;padding-top:3.3125rem}
        .timeline-horizontal .timeline-item::before{top:1.25rem}
        .timeline-horizontal .timeline-item::after{left:3rem;top:-.5rem;margin-top:-.0625rem}
        .timeline-vertical-x .timeline-item{border-left:0;border-left:.125rem solid #f92892;border-bottom:.125rem solid #f92892;padding-top:2.8125rem}
        .timeline-vertical-x .timeline-item::before{top:2.3125rem}
        .timeline-vertical-x .timeline-item::after{top:2.8125rem}
        .timeline-vertical-x .timeline-item:not(:nth-child(even)){margin-right:2rem;border-bottom-left-radius:2rem;padding-right:0}
        .timeline-vertical-x .timeline-item:not(:nth-child(even)):not(:first-child){border-top-left-radius:2rem;border-top:.125rem solid #f92892;margin-top:-.125rem}
        .timeline-vertical-x .timeline-item:nth-child(even){border-left:0;border-top-right-radius:30px;border-bottom-right-radius:30px;border-top:.125rem solid #f92892;border-right:.125rem solid #f92892;margin-top:-.125rem;padding-left:0;margin-left:2rem;text-align:right}
        .timeline-vertical-x .timeline-item:nth-child(even):before{right:3rem}
        .timeline-vertical-x .timeline-item:nth-child(even):after{left:auto;margin-left:0;right:-.5rem;margin-right:-.0625rem}
        .timeline-vertical-x .timeline-item:last-child:not(:nth-child(even)){border-bottom:0;border-bottom-left-radius:0}
        [data-step].timeline-item::after{content:attr(data-step);display:flex;align-items:center;justify-content:center;width:3rem;height:3rem;left:-1.5rem;border-radius:3rem;font-weight:500;background:#ce33c1;background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%);color:#000}
        .future-timeline-right:after,.future-timeline:after,.timeline-right:before,.timeline:before{content:""}
        .timeline p,.timeline-right p{line-height:1.8em;font-weight:300}
        [data-step].timeline-item:nth-child(even)::after{left:auto;right:-1.5rem}
        .timeline-horizontal [data-step].timeline-item::after{top:-1.5rem;left:1.875rem}
        .animation-circle-inverse i{top:50%;left:0;margin:0 auto;background:#eee;right:0;box-shadow:0 15px 30px 0 rgba(0,0,0,.11);position:absolute;height:100px;width:100px;border-radius:100%;opacity:.3;transform:scale(1.3);-webkit-animation:ripple1 3s linear infinite;animation:ripple1 3s linear infinite}
        .animation-circle-inverse i:nth-child(2){-webkit-animation:ripple2 3s linear infinite;animation:ripple2 3s linear infinite}
        .animation-circle-inverse i:nth-child(3){-webkit-animation:ripple3 3s linear infinite;animation:ripple3 3s linear infinite}
        @keyframes ripple1{0{transform:scale(5.5);opacity:.3}
        to{transform:scale(8.5);opacity:0}}
        @-webkit-keyframes ripple1{0{-ms-transform:scale(5.5);-webkit-transform:scale(5.5);transform:scale(5.5);opacity:.3}
        to{-ms-transform:scale(8.5);-webkit-transform:scale(8.5);transform:scale(8.5);opacity:0}}
        @keyframes ripple2{0{-ms-transform:scale(3.5);-webkit-transform:scale(3.5);transform:scale(3.5)}
        to{-ms-transform:scale(5.5);-webkit-transform:scale(5.5);transform:scale(5.5)}}
        @-webkit-keyframes ripple2{0{-ms-transform:scale(3.5);-webkit-transform:scale(3.5);transform:scale(3.5)}
        to{-ms-transform:scale(5.5);-webkit-transform:scale(5.5);transform:scale(5.5)}}
        @keyframes ripple3{0{-ms-transform:scale(1.5);-webkit-transform:scale(1.5);transform:scale(1.5)}
        to{-ms-transform:scale(3.5);-webkit-transform:scale(3.5);transform:scale(3.5)}}
        @-webkit-keyframes ripple3{0{-ms-transform:scale(1.5);-webkit-transform:scale(1.5);transform:scale(1.5)}
        to{-ms-transform:scale(3.5);-webkit-transform:scale(3.5);transform:scale(3.5)}}
        .timelist-left,.timelist-right{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}
        .timelist-left{float:left;position:relative}
        .timelist-right{float:right;position:relative}
        .future-mobile{margin:0 auto 0 6.5%;float:left;text-align:center;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;display:block;max-width:33.333333%}
        .future-mobile img{width:80%;margin:20px auto}
        .future-box{padding:60px 0}
        .img-fluid{max-width:100%;height:auto}
        .future-timeline-right:after{background-color:rgba(238, 238, 238, 0.27058823529411763);position:absolute;height:100%;width:1px;left:-15px;background-size:cover;border-radius:12px;top:0}
        .future-timeline{text-align:right}
        .text-left{text-align:left!important}
        .timeline h4{color:#000!important;margin-top:0}
        .timeline p{color:#000;margin-bottom:55px;margin-left:12px;margin-right:15px}
        .sub-title{font-size:20px;margin-bottom:0}
        ul{list-style-type:none;padding:0;margin:0}
        .timeline:before{background:#9647db;position:relative;height:12px;width:12px;right:-21px;background-size:cover;top:15px;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;z-index:2;float:right;padding:0;border:3px solid rgba(238, 238, 238, 0.7294117647058823);}
        .future-timeline:after{background-color:rgba(238, 238, 238, 0.27058823529411763);position:absolute;height:100%;width:1px;right:-15px;background-size:cover;border-radius:12px;top:0}
        .timeline-right:before{background:#9647db;position:relative;height:12px;width:12px;left:-21px;top:15px;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;z-index:2;float:left;padding:0;border:3px solid rgba(238, 238, 238, 0.7294117647058823);}
        .timeline-right h4{color:#000!important;margin-top:0}
        .timeline-right p{color:#000;margin-bottom:55px;margin-left:12px}
        .ac-left{float:left;padding:10px;border:1px solid #e6f0fa;-webkit-box-shadow:0 0 30px #ddd;box-shadow:0 0 30px #ddd;border-radius:6px}
        .ac-right{text-align:center;float:right}
        .ac-left,.ac-right{width:48%}
        .ac-right img{max-width:260px;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;border:5px solid #f1f1f1;-webkit-box-shadow:0 10px 30px #ccc;box-shadow:0 10px 30px #ccc}
        .accordion{font-size:1rem;margin:0 auto}
        .accordion-header{padding:10px 20px;background:#6410f7;color:#000;cursor:pointer;font-size:15px;font-weight:700;transition:all .3s}
        .accordion-body{background:#fcfcfc;color:#3f3c3c;display:none}
        .accordion-body__contents{padding:1.5em;font-size:.85em}
        .accordion__item.active:last-child .accordion-header{border-radius:none}
        .accordion:first-child>.accordion__item>.accordion-header{border-bottom:1px solid transparent}
        .accordion__item>.accordion-header:after{content:"\f107";font-family:FontAwesome;font-size:1.2em;float:right;position:relative;top:-2px;transition:.3s all;transform:rotate(0)}
        .accordion__item.active>.accordion-header:after{transform:rotate(-180deg)}
        .accordion__item.active .accordion-header{background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%)}
        .accordion__item .accordion__item .accordion-header{background:#f1f1f1;color:#000}
        @media screen and(max-width:1000px){.accordion{width:100%}}
        .col_fourth{width:23.5%;position:relative;display:inline;display:inline-block;float:left;margin-right:1.7585%;margin-bottom:20px}
        .count-text,.count-title{font-weight:400;margin-top:10px;margin-bottom:0;text-align:center}
        .end{margin-right:0!important}
        .counter{background-color:#000;padding:20px 0;text-align:center;border-radius:5px;border:1px solid #ffd8fe;-webkit-box-shadow:0 0 10px #e6f0f1;box-shadow:0 0 10px #e6f0f1}
        .count-title{font-size:40px}
        .count-text{font-size:13px}
        .fa-2x{margin:0 auto;float:none;display:table;color:#fb2790}
        .phone,.slider .slick-dots{position:absolute;display:block}
        .phone{background-image:url(https://1.bp.blogspot.com/-ha5dccte93w/XL2SiyWdn5I/AAAAAAAAALU/w6UKg2xyUf0BEGg7-HCV_IOatEiSVZzKACLcBGAs/s1600/bgm.png);background-repeat:no-repeat;background-size:100% 100%;height:616px;width:400px;left:calc(50% + 8.5px);top:-12%;-webkit-transform:translateX(-50%);transform:translateX(-50%);z-index:1}
        [dir=rtl] .slick-slide{float:right}
        .slick-slide img{height:100%;width:100%}
        .slick-slidedd:after{content:'';position:absolute;z-index:2;top:0;left:0;right:0;bottom:0;background:rgba(0,0,0,.5);transition:transform .4s}
        .slider .slick-dots{width:100%;padding:0;z-index:1;bottom:-22%;margin:40px 0 0;list-style:none;text-align:center}
        .slider .slick-dots li{position:relative;display:inline-block;width:20px;height:20px;margin:0 2px;padding:0;cursor:pointer}
        .slider .slick-dots li button{font-size:0;line-height:0;display:block;width:20px;height:20px;padding:5px;cursor:pointer;color:#999;border:none;outline:0;background:none}
        .slider .slick-dots li button:focus,.slider .slick-dots li button:hover{color:#f9d000;outline:0}
        .slider .slick-dots li button:focus:before,.slider .slick-dots li button:hover:before{font-size:18px;color:#f9d000;opacity:1}
        .slider .slick-dots li button:before{font-family:FontAwesome;font-size:10px;line-height:20px;position:absolute;top:0;left:0;width:20px;height:20px;content:'\f111';text-align:center;opacity:1;color:#e0dfe0;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
        .slider .slick-dots li.slick-active button:before{opacity:.75;font-size:18px;color:#f9d000}
        .slider .NextArrow,.slider .PrevArrow{position:absolute;top:10%;min-width:0;bottom:11%;margin:0;font-size:2.5em;cursor:pointer;text-align:center}
        .slider .NextArrow{outline:0;right:0;background:rgba(17,17,17,.82);border:none;z-index:5;width:47px;height:auto;-webkit-transform:none;transform:none;border-radius:initial;visibility:visible}
        .slider .NextArrow:before,.slider .PrevArrow:before{content:"";height:40px;display:block}
        .slider .NextArrow:hover,.slider .PrevArrow:hover{opacity:.6}
        .slider .NextArrow:before{background:url(https://4.bp.blogspot.com/-5n7BID6V3kg/XI8wpCyShlI/AAAAAAAAIFc/eqqHp7qGQF8qZmDcnTEnrVps5cfZmcrBACPcBGAYYCw/s1600/arrow-right.png) 100% no-repeat;width:34px}
        .slider .PrevArrow:before{background:url(https://3.bp.blogspot.com/-GFaiej_1hfk/XI8wpH2lHVI/AAAAAAAAIFg/gO1yk2CnIwA3deeWLTelOzYPAoPgwqmtwCPcBGAYYCw/s1600/arrow-left.png)-1% no-repeat;width:40px}
        .slider .PrevArrow{outline:0;left:0;background:rgba(17,17,17,.82);border:none;z-index:5;width:47px;height:auto;-webkit-transform:none;transform:none;border-radius:initial;visibility:visible}
        .item.slick-slide,.item.slick-slide.slick-center:after,.slick-list,.slick-slider,.slick-track,.slider,.pricing_table .plan,.pricing_table header,.testimonial{position:relative}
        .slick-loading .slick-slide,.slick-loading .slick-track{visibility:hidden}
        .slider{padding:0;margin:5rem auto;width:100%}
        .item.slick-slide{width:265px;margin:0 15px;height:443px!important;transition:-webkit-transform .4s;transition:transform .4s;transition:transform .4s,-webkit-transform .4s}
        .item.slick-slide img{width:100%;height:100%}
        .item.slick-slide.slick-center{-webkit-transform:scale(1);transform:scale(1);z-index:10;opacity:.9;box-shadow:0 3px 5px -1px rgba(0,0,0,.2),0 5px 8px 0 rgba(0,0,0,.14),0 1px 14px 0 rgba(0,0,0,.12);background:rgba(0,0,0,.8)}
        .slick-center:after{opacity:0}
        .slick-slider{display:block;box-sizing:border-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-touch-callout:none;-khtml-user-select:none;-ms-touch-action:pan-y;touch-action:pan-y}
        .slick-list{display:block;overflow:hidden;margin:0;padding:0}
        .slick-list:focus{outline:0}
        .slick-list.dragging{cursor:pointer;cursor:hand}
        .slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}
        .slick-track{top:0;left:0;display:block;margin-left:auto;margin-right:auto}
        .slick-track:after,.slick-track:before{display:table;content:''}
        .slick-track:after{clear:both}
        .slick-slide{display:none;float:left;height:100%;min-height:1px}
        [dir=rtl] .slick-slide{float:right}
        .slick-slide img{display:block}
        .slick-slide.slick-loading img{display:none}
        .slick-slide.dragging img{pointer-events:none}
        .slick-initialized .slick-slide{display:block}
        .slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}
        .slick-arrow.slick-hidden{display:none}
        .pricing_table{color:#000;text-align:center;font-size:16px;width:100%;margin:0}
        .pricing_table .plan{margin:8px;width:23.546%;float:left;background-color:#000;box-shadow:0 1px 15px 1px rgba(0,0,0,.04),0 1px 6px rgba(0,0,0,.04)}
        .pricing_table .plan-cost,.pricing_table .plan-select a{background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%)}
        .pricing_table .plan.hover .plan-cost,.pricing_table .plan:hover .plan-cost{-webkit-transform:scale(1.1);transform:scale(1.1)}
        .pricing_table *{-webkit-box-sizing:border-box;box-sizing:border-box;-webkit-transition:all .25s ease-out;transition:all .25s ease-out}
        .pricing_table header{color:#616161;font-weight:700;padding:20px}
        .pricing_table .plan-title{font-size:1.4em;font-weight:500;padding:10px 0;margin:0;text-transform:uppercase}
        .pricing_table .plan-cost{-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;text-align:center;line-height:90px;width:90px;height:90px;margin:15px auto 0}
        .pricing_table .plan-price{font-weight:800;font-size:1.3em;color:#000}
        .pricing_table .plan-type{opacity:.8;color:#000;font-size:.7em}
        .pricing_table .plan-features{padding:0;margin:0;text-align:center;list-style:none;font-size:.8em}
        .pricing_table .plan-features li{padding:10px 5%}
        .pricing_table .plan-features i{margin-right:8px;opacity:.4}
        .pricing_table .plan-select{padding:20px}
        .pricing_table .plan-select a{color:#000;text-decoration:none;padding:10px 30px;font-size:12px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;font-weight:500;text-transform:uppercase;display:inline-block}
        .pricing_table .featured{margin-top:-10px;background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%);color:#000;box-shadow:0 0 20px rgba(0,0,0,.4);z-index:1}
        .pricing_table .featured .plan-cost{background:#000}
        .pricing_table .featured .plan-select{padding:20px;margin:20px 0}
        .pricing_table .featured .plan-price,.pricing_table .featured .plan-type{color:#555}
        .pricing_table .featured .plan-select a{background:#000;color:#555}
        .pricing_table .featured header{color:#000}
        @media only screen and(max-width:767px){.pricing_table .plan{width:50%}
            .pricing_table .featured .plan-select a,.pricing_table .plan-select a{padding:20px}
            .pricing_table .featured{margin-top:0}}
        @media only screen and(max-width:440px){.pricing_table .plan{width:100%}}
        .testimonial{outline:0;background-color:#ac43e9;text-align:center;padding:30px 30px 50px;margin:0 15px 160px}
        .testimonial::after,.testimonial::before{content:"";border-top:40px solid #a13cdc;border-right:125px solid transparent;position:absolute;bottom:-40px;left:0}
        .testimonial::after{border-right:none;border-left:125px solid transparent;left:auto;right:0}
        .testimonial .icon{display:inline-block;font-size:28px;color:#000;margin-bottom:20px}
        .testimonial .description{font-size:14px;color:#000;text-align:justify;margin-bottom:30px;opacity:.9}
        .testimonial .testimonial-content{width:100%;left:0;position:absolute}
        .testimonial .pic{display:inline-block;border:4px solid #000;-webkit-border-radius:50%;-moz-border-radius:50%;border-radius:50%;box-shadow:0 0 4px 4px rgba(84,84,84,.12156862745098039);overflow:hidden;z-index:1;position:relative}
        .testimonial .pic img{width:100%;height:auto}
        .testimonial .name{font-size:15px;font-weight:700;color:#333;text-transform:capitalize;margin:10px 0 5px}
        .footer h2,.sidebar h2{text-transform:uppercase}
        .testimonial .title{display:block;font-size:14px;color:#505050}
        #testimonial-slider .slick-dots{position:absolute;display:block;width:100%;padding:0;z-index:1;bottom:-10%;margin:40px 0 0;list-style:none;text-align:center}
        #testimonial-slider .slick-dots li{position:relative;display:inline-block;width:20px;height:20px;margin:0 2px;padding:0;cursor:pointer}
        #testimonial-slider .slick-dots li button{font-size:0;line-height:0;display:block;width:20px;height:20px;padding:5px;cursor:pointer;color:#999;border:none;outline:0;background:none}
        #testimonial-slider .slick-dots li button:focus,#testimonial-slider .slick-dots li button:hover{color:#fb1e8b;outline:0}
        #testimonial-slider .slick-dots li button:focus:before,#testimonial-slider .slick-dots li button:hover:before{font-size:18px;color:#fb1e8b;opacity:1}
        #testimonial-slider .slick-dots li button:before{font-family:FontAwesome;font-size:10px;line-height:20px;position:absolute;top:0;left:0;width:20px;height:20px;content:'\f111';text-align:center;opacity:1;color:#e4e4e4;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
        .slick-dots li.slick-active button:before{opacity:.75;font-size:18px;color:#f9d000}
        .sidebar-wrapper{width:280px;float:right;top:10%;position:sticky;overflow:hidden}
        .sidebar h2{font-size:20px;margin:0;padding:5px 0}
        .sidebar{color:#999;line-height:1em;margin:5px 0}
        .sidebar li{line-height:1.3em;margin:0;padding:5px 0 4px}
        .sidebar .widget{margin:0 0 30px;padding:0}
        .sidebar .widget-content{margin:0 auto;padding:0}
        .sidebar a:link,.sidebar a:visited{color:#00a0a;text-decoration:none;font-weight:500;font-size:14px}
        .sidebar li a:hover{color:#fb1e8b}
        .sidebar ul{list-style:none;margin:0;padding:5px 0}
        .PopularPosts li,.PopularPosts li a,.PopularPosts li a img,.PopularPosts li img,.PopularPosts ul{margin:0;padding:0;list-style:none;border:none;background:none;outline:0}
        .PopularPosts ul{margin:10px 0 0;list-style:none;color:#333}
        .PopularPosts ul li img{display:block;width:100%;height:auto}
        .PopularPosts .item-snippet,.PopularPosts ul li:nth-child(n+6){display:none}
        .PopularPosts ul li{margin:0 2px;position:relative;line-height:1.4em!important}
        .PopularPosts ul li:first-child{border-top:none}
        .PopularPosts ul li:last-child{border-bottom:none}
        .PopularPosts ul li a:hover{color:#ef2929!important}
        .PopularPosts ul li .item-title a,.PopularPosts ul li a{color:#333;transition:all .3s}
        .PopularPosts ul li .item-title a:hover,.PopularPosts ul li a:hover{color:#ef2929}
        .PopularPosts .item-thumbnail{margin:0 10px 0 0;width:72px;height:72px;float:left}
        .PopularPosts .item-title{padding:0 5px}
        #share_btnper{margin:15px auto;padding:0}
        .share_btn{position:relative;margin:0;padding:0;text-align:center;display:block;overflow:hidden}
        .share_btn ul{position:relative;margin:0;padding:0;font-size:12px}
        .share_btn ul li{margin:8px;display:inline-block;overflow:hidden;background-color:#000;box-shadow:0 2px 4px rgba(0,0,0,.04),0 12px 28px rgb(248,249,250)}
        .share_btn li a{color:#000;padding:0;width:55px;display:block;text-align:center;height:55px;line-height:55px;overflow:hidden}
        .share_btn li a svg{height:25px;text-align:center;width:auto}
        #Label1{padding-bottom:10px}
        #Label1 ul{margin:10px 0 20px 0}
        #Label1 li{float:left;display:inline;margin:0 5px 5px 0;padding:0 5px;height:24px;line-height:24px;color:#aaa;background-color:#e2e2e2;-webkit-transition:background-color .5s linear;-moz-transition:background-color .5s linear;-o-transition:background-color .5s linear;transition:background-color .5s linear}
        #Label1 li a{padding:0 8px;color:#333;-webkit-transition:color .5s linear;-moz-transition:color .5s linear;-o-transition:color .5s linear;transition:color .5s linear;text-shadow:0 1px 0 #000}
        #Label1 a:hover{color:#f95759}
        #footer{width:100%;margin:30px 0 0;position:relative;overflow:hidden;display:block;padding:110px 0 55px}
        #footer:before{border-radius:750px;background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%);content:"";height:1250px;left:-360px;position:absolute;top:40px;-webkit-transform:rotate(-184deg);transform:rotate(-184deg);width:2250px}
        .footer-wrapper{color:#000;height:100%;line-height:2em;overflow:hidden;padding:0;font-size:13.3px}
        .footer{float:left;width:31%;margin:10px}
        .footer .widget{margin-bottom:30px}
        .footer h2{border-bottom:3px solid #333;padding-bottom:8px;margin-top:15px;margin-bottom:8px;line-height:1.3em;color:#000}
        .footer .widget-content{line-height:21px}
        .footer ul{list-style:none;color:#777;margin:0;padding:0}
        .footer li{color:#777;line-height:1.2em;margin:0;padding:12px 0 12px 18px;border-bottom:1px solid #2c2c2c}
        .footer a:link,.footer li a:visited{color:#999;text-decoration:none;font-weight:600;position:relative;text-indent:-18px}
        .footer li a:hover{color:#ccc}
        #credit{background:#000;font-size:13px;color:#f61e90;width:100%;overflow:hidden;clear:both;padding:20px 0;font-weight:500;line-height:18px;text-align:center;text-transform:capitalize;position:relative}
        #credit a,#credit a:hover{color:#555;text-decoration:none}
        .comments{clear:both;padding-top:40px;border-top:1px solid #eee;margin-bottom:0}
        .comment-thread .user a{font-weight:700;color:#000;padding:0;font-size:13px;text-decoration:none}
        .comment-thread .user a:hover{color:inherit}
        .comment-thread .datetime{font-weight:400}
        .comment-thread .user{text-decoration:none;padding:0;font-size:13px;font-weight:700;position:relative}
        .comment-thread .datetime{color:#a9a9a9;font-size:12px!important;margin-top:-3px}
        .comment-thread .datetime a{text-decoration:none;color:#a9a9a9;font-size:12px!important;font-weight:400}
        .comment-thread .datetime a:hover{color:#000}
        .comment-content{line-height:1.5em;margin:4px 0 5px;color:#444;font-weight:400;font-size:13px;padding:0}
        .item-control a,a.comment-reply{color:#aaa!important;font-size:12px!important;font-weight:400!important}
        .item-control a:hover,a:hover.comment-reply{color:#000!important}
        .item-control{margin-left:0}
        .thread-chrome a.comment-reply{color:#000!important;display:block;margin-top:20px!important;border:none;text-align:center;background:linear-gradient(to right,rgba(251,30,139,.96) 0,#ab44ec 50%,#6410f7 100%);margin:0 auto;width:23%;font-weight:500!important;border-radius:5px}
        .thread-chrome a:hover.comment-reply{border-color:#bbb}
        .comment-block{margin-left:65px;background:#f4f4f4;padding:10px;text-align:left;border:1px solid #f5f5f5;border-radius:5px;position:relative;display:block}
        #comments .comments-content .icon.blog-author{width:16px;height:16px;margin-left:5px;vertical-align:2px;display:inline-block;background:url(data:image/svg+xml,<svg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'><path d='M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1Z' fill='%23118ff9'></path></svg>) center center no-repeat}
        a.allbtn{background-color:#9534ef;font-size:13px;font-weight:600;text-transform:uppercase;color:#000;text-align:center;box-shadow:0 4px 5px 0 rgba(153,55,239,.32);padding:10px;width:160px;-webkit-border-radius:30px;-moz-border-radius:30px;border-radius:30px;display:block;transition:all .2s ease-in-out;margin:18px auto}

        #toTop{position:absolute;right:0;top:0;background:#a33eee;padding:17px 20px;cursor:pointer}
        #toTop i{color:#000;font-size:22px;line-height:32px}

        @media screen and (max-width: 1100px){
            .header-wrapper {width:100%;}
            #header-inner {margin:5px 10px;}
            .container {max-width:98%;}
            .box-list li {width:24.8%;}
            .col_fourth {width:23.4%;}
            .pricing_table .plan {width:23.4%;}
            .main-wrapper {width:71.5%;}
        }
        @media screen and (max-width: 1024px){
            .box-list li {width:24.2%;}
            .line-left, .line-right {width:42%;}
            .timeline-vertical-x .timeline-step{margin-right:30px}
            .future-mobile {margin:0 auto 0 4%;}
            .pricing_table .plan {width:23.3%;}
            div#landing_form .wrap-me {max-width:460px;}
            .team-box {width:22.9%;}
            .main-wrapper {width:69%;}
        }
        @media screen and (max-width: 960px){
            .box-list li {width:23.5%;}
            .colum-left h1 {font-size: 60px;}
            .future-mobile {margin:0 auto 0 3%;}
            .pricing_table .plan {width:23.2%;}
            .team-box {width:22.8%;}
            .team-img {height:205px;}
            .socials {display:none}
            .map-me {max-width:40%;}
            .main-wrapper {width:68%;}
        }
        @media screen and (max-width: 800px){
            .container{position:relative;width:100%;margin:0 auto}
            .headerpic-wrapper{width:100%;margin:0 auto}
            .header-wrapper{margin-right:0;min-height:0;width:100%}
            #header img {top:-5px;}
            #header{text-align:center;width:100%;max-width:none}
            #header-inner{margin:10px}
            #cssmenu{float:none;
                max-resolution: res;gin:0;width:100%;}
            #cssmenu ul{background:#f8f8f8;width:100%;display:none;height:auto;margin-top:43px;-webkit-box-shadow:0 2px 8px 0 rgba(0,0,0,0.15);box-shadow:0 2px 8px 0 rgba(0,0,0,0.15)}
            #cssmenu>ul{max-height:calc(100vh - 48px);overflow-y:auto}
            #cssmenu ul ul{-webkit-box-shadow:none;box-shadow:none;display:none;opacity:1;transform:translateY(0);transition:unset}
            #cssmenu li:hover>ul{transition-delay:0,0,0}
            #cssmenu ul li{border-top:1px solid rgba(150,150,150,0.15);background:#f8f8f8}
            #cssmenu>ul>li:hover,#cssmenu ul li.active:hover,#cssmenu ul li.active,#cssmenu ul li.has-sub.active:hover{background:#efefef}
            #cssmenu>ul>li:hover>a,#cssmenu ul li.active a{color:#777}
            #cssmenu ul ul li a{padding:0 25px}
            #cssmenu ul li a {width:100%;border-bottom:0;color:#777;line-height:1;padding:13px;}
            #cssmenu ul ul li a{width:100%;border-bottom:0;color:#333;line-height:50px}
            #cssmenu>ul>li{float:none;position:relative}
            #cssmenu ul ul ul li a{padding-left:35px}
            #cssmenu ul ul,#cssmenu ul ul ul{position:relative;left:0;width:100%;margin:0;text-align:left}
            #cssmenu>ul>li.has-sub>a:after,#cssmenu ul ul>li.has-sub>a:after{display:none}
            #cssmenu #head-mobile{display:block;padding:8px;color:#f8f6f6;font-size:0;font-weight:500}
            #cssmenu ul ul:before{left:-76%}
            #cssmenu .button{width:25px;height:20px;position:absolute;left:15px;top:14px;cursor:pointer;z-index:2;outline:none}
            .mline1,.mline2,.mline3{position:absolute;left:0;display:block;height:3px;width:22px;background:#000;content:"";border-radius:5px;transition:all .2s}
            .mline1{top:0}
            .mline2{top:7px}
            .mline3{top:14px}
            .button.menu-opened .mline1{top:8px;border:0;height:3px;width:22px;background:#000;-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg)}
            .button.menu-opened .mline2{top:8px;background:#000;width:22px;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}
            .button.menu-opened .mline3{display:none;height:0}
            #cssmenu .submenu-button{position:absolute;z-index:99;right:0;top:0;cursor:pointer}
            #cssmenu .submenu-button:after{content:"+";font-style:normal;font-weight:normal;text-decoration:inherit;margin:0 20px;font-size:20px;color:#777;line-height:50px}
            #cssmenu .submenu-opened:after{content:"-"}
            #cssmenu ul ul .submenu-button:after{line-height:36px}
            #cssmenu ul ul ul li.active a{border-left:none}
            #cssmenu>ul>li.has-sub>ul>li.active>a,#cssmenu>ul ul>li.has-sub>ul>li.active>a{border-top:none}
            a.btn-wa {text-align:center;position:absolute;right:15px;top:0px;padding:0!important;}
            a.btn-wa span{display:none}
            a.btn-wa i {display: block;height:30px;padding:5px;line-height:30px;width:30px;font-size:24px;}
            .main-wrapper{margin-left:0;width:100%;}
            .post {margin:0;padding:15px;}
            .sidebar-wrapper{width:100%;margin:0 auto;}
            .box1 .left, .box1 .right {width:100%;margin-bottom:30px;}
            .box1 .right, .box1 .left {float: none;text-align: center;}
            .box-list li {width:23.9%;padding:20px;}
            .line-left, .line-right {width:87%;}
            .line-right {float:none;clear:both;margin:0 auto;}
            .line-left {float: none;text-align: center;}
            .ac-left, .ac-right {width: 90%;float: none;margin: 0 auto 30px;}
            .pricing_table .plan {width: 47.9%;}
            .pricing_table .featured {margin-top:10px}
            .pricing_table .featured .plan-select {padding:19px;margin:0;}
            .team-box {width: 47.3%;}
            .team-box,.team-img {height: auto;}
            div#landing_form .wrap-me {max-width:initial;margin:0 auto;display:block;width:100%;float:none;}
            .map-me {max-width:100%;}
            .colum-left h1 {font-size:55px;}
            .colum-left p {margin-top:1em;font-family:inherit;font-size:15px;font-weight:400;line-height:1.4;margin-bottom: 1em;}
            .timelist-left,.timelist-right{float:none;text-align:center;position:relative;max-width:90%;margin:0 auto}.future-timeline,.timelist-left .text-left,.timelist-right .text-left,.text-left{text-align:center!important}.future-mobile{margin:0 auto;float:none;text-align:center;display:block;max-width:51%}.timeline:before,.future-timeline:after,.timeline-right:before,.future-timeline-right:after{display:none}.text-left{text-align:center}.future-box{padding:0}.timeline p,.timeline-right p{color:#000;margin-bottom:20px;margin-left:0;margin-right:0}
        }
        @media screen and (max-width: 768px){
            .box-list li {padding: 19px;}
            .line-left{width:100%!important;}
            .line-left,.line-right {width:80%;}
            .pricing_table .plan {width: 47.8%;}
            .team-box {width:47.2%;}
        }
        @media screen and (max-width: 760px){
        }
        @media screen and (max-width: 680px){
            .box-list li {width:39.5%;}
            .col_fourth {margin:10px;width:46.6%;}
            .pricing_table .plan {width:47.5%;}
            .team-box {width:46.8%;}
        }
        @media screen and (max-width: 640px){
            .colum-right{display:none}
            .hero-center {padding: 6rem 0;}
            .colum-left {float:none;text-align:center;max-width:100%;}
            .colum-left h1 {font-size:45px;}
            .box-list li {width:38.7%;}
            .section-heading,.box12 .section-heading,.section-heading1,#footer .section-heading{max-width:98%;}
            .col_fourth {width:46.3%;}
            .pricing_table .plan {width:47.3%;}
            .team-box {width:46.7%;}
            .map-me {padding:40px 40px 0;}
            .box1 .left img,.line-left img,.ac-right img{width:55%;height:auto}
        }
        @media screen and (max-width: 515px){
            .box-list li {width:36%;}
            .col_fourth {width:45%;}
            .pricing_table .plan {width:97%;}
            .team-box {width:45.7%;}
            .subscribe-css-email-field {min-width:90%;}
        }
        @media screen and (max-width: 480px){
            .box-list li {width:35%;}
            .team-box {width:95%;}
            .subscribe-css-email-field {min-width:89%;}
        }
        @media screen and (max-width: 414px){
            .box-list li {width:83%;}
            .col_fourth {width:44%;}
            .count-title {font-size:30px;}
            .subscribe-css-email-field {min-width:80%;}
            .subscribe-css-email-button {padding:18px 20px;right:23px;font-size:12px;}
        }
        @media screen and (max-width: 384px){
            .colum-left h1 {font-size:40px;}
            .colum-left p {font-size:14px;}
            .col_fourth {width:43.5%;}
        }
        @media screen and (max-width: 360px){
            .colum-left h1 {font-size:38px;}
            .box-list li {width:80%;}
            .col_fourth {width:43.4%;}
            .team-box {width:94%;}
            .map-me {padding:40px 20px 0;}
            .map-me .con-list li {line-height:23px;}
            .map-me .con-list li i {float:left;}
            .subscribe-css-email-field {min-width:77%;}
        }
        @media screen and (max-width: 320px){
            #header img {height:27px;}
            .colum-left a {margin:0;}
            .about-content h2 {line-height:1;font-size:20px;}
            .section-heading h2,.section-heading1 h2{font-size:25px;}
            .box-list li {width:78%;}
            .col_fourth {width:93%;}
            .pricing_table .plan {width:95%;}
            .subscribe-css-email-button {padding:19px 10px;right:18px;font-size:10px;}
            #credit {padding:20px 0;text-align:left;}
        }
    </style>

    <header class="header">
        <div class="header_overlay"></div>
        <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo">
                <a href="index.php">
                    <div class="d-flex flex-row align-items-center justify-content-start">
                        <div><img src="images/logo_1.png" alt=""></div>
                        <div>Toko Obat Sehati</div>
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
                <!--            <div class="header_search">-->
                <!--                <form action="#" id="header_search_form">-->
                <!--                    <input type="text" class="search_input" placeholder="Search Item" required="required">-->
                <!--                    <button class="header_search_button"><img src="images/search.png" alt=""></button>-->
                <!--                </form>-->
                <!--            </div>-->
                <!-- User -->
                <div class="user">
                    <?php


                    if('location:../cart.php'){

                        echo '';}

                    ?>

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
                <div class="cart"><a  href="cart.php"><div><img class="svg" src="images/cart.svg" alt="https://www.flaticon.com/authors/freepik"></div><div></a></div></div>

            <!-- Phone -->
            <!-- Phone -->
            <div class="header_phone d-flex flex-row align-items-center justify-content-start">
                <div><div><a href="tel:+628123456789" target="_blank"><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik" ></a></div></div>
                <div><a </a></div>
                <a class='btn-wa' href='javascript:void(0)' onclick='openModal()'><i aria-hidden='true' class='fa fa-whatsapp'></i><span>Form Pesanan WhatsApp</span></a>
            </div>
        </div>
</div>
</header>
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

                    </li> <?php if(!isset($_SESSION['nik'])){
//    header('location:sss.php');
                    }else
                        echo
                            '.<li class="nav-item">
                        <a class="nav-link" href="panel_member/index.php?nik='.$_SESSION['nik'].'"> 
                            PANEL MEMBER <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            </a>
                    </li>
                    .';
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel10" role="tab">  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            Pembayaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel9" role="tab">  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                            Keluar</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <form action="ceklogin.php" enctype="multipart/form-data" method="POST">
                            <!--Body-->
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm mb-5">
                                    <label>NIK</label><?php
                                    if(!isset($_SESSION['nik'])){

                                    }
                                    ?>
                                    <input type="text" id="modalLRInput10" name="nik" class="form-control form-control-sm validate" name="minmaxvalue" min="10" max="200" onkeyup="checkNumber(this)" required>

                                </div>

                                <div class="md-form form-sm mb-4">
                                    <label>Your password</label>
                                    <input type="password" id="modalLRInput11" name="password" class="form-control form-control-sm validate">

                                </div>
                                <div class="text-center mt-2">
                                    <button name="log" class="btn btn-info">Log in <span class="glyphicon glyphicon-ok"></span></i></button>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer">

                                <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            </div>
                        </form>
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
                                $password = md5($_POST['password']);
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


                                }
                                if ((is_uploaded_file($_FILES['fotomember']['tmp_name'])) == '') {

                                    $update = mysqli_query($koneksi, "INSERT INTO member(nik,n_member,jk,hp,email,kota,kodepos,alamat,password)
      VALUES('$nik','$n_member','$jk','$hp','$remail','$kota','$kodepost','$alamat','$password')") or die(mysqli_error($koneksi));
                                    $result = mysqli_query($koneksi, $update);
                                    echo "<script>
			alert('Data Berhasil Diperbaharuai Dan Foto TIDAK DI UBAH');
			location='index.php';</script>";
                                }
                            }

                            ?>
                            <div class="modal-body">
                                <div class="md-form form-sm mb-7">
                                    <label>NIK</label>
                                    <input name="nik" type="text" id="modalLRInput12" class="form-control form-control-sm validate" name="minmaxvalue" min="10" max="200" required onkeyup="checkNumber(this)">

                                    <label>Nama Lengkap</label>
                                    <input name="n_member" type="text" id="modalLRInput12" class="form-control form-control-sm validate">

                                    <label  data-success="right" >Jenis Kelamin</label>
                                    <select name="jk"  id="modalLRInput12" class="form-control selectpicker validate" data-live-search="true" style="width: 100%;" required>
                                        <option  id="modalLRInput12" value="">Pilih Jenis Kelamin</option>
                                        <option  id="modalLRInput12" value="1">Pria</option>
                                        <option  id="modalLRInput12" value="2">Wanita</option>
                                    </select>

                                    <label  data-success="right" for="modalLRInput12">Kontak Telphone</label>
                                    <input name="hp" id="modalLRInput12" class="form-control form-control-sm validate">

                                </div>
                                <div class="md-form form-sm mb-5">
                                    <!--                                    <label  data-success="right" for="modalLRInput12">email</label>-->
                                    <!--                                    <input name="email" type="email" id="modalLRInput12" class="form-control form-control-sm validate">-->

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
                    <iv class="tab-pane fade" id="panel10" role="tabpanel">
                        <div class="modal-body">
                            <div class="md-form form-sm mb-7">
                                <h2>Cara Pembayaran</h2><br/>
                                ----------------------<br/>
                                Kami Dari Toko Sehati<br/>
                                Bila ingin beli Obat dan Aksesoris Herbalife, Silakan Transfer Ke:<br/>
                                ----------------------<br/>
                                Rekening Toko Sehati<br/>
                                BNI 067-3981-973<br/>
                                Atas Nama Muhammad Iqbal<br/>
                                -----------------------<br/>
                                Setelah Transfer Segera Konfirmasi:<br/>
                                1. Kirim Bukti Transfer <br/>
                                2. Barang Yang di Beli<br/>
                                4. Kode Transaksi<br/>
                                3. Jumlah transfer<br/>
                            </div></div>
                    </iv>
                    <iv class="tab-pane fade" id="panel9" role="tabpanel">
                        <div class="modal-body">
                            <div class="md-form form-sm mb-7">
                                <h2><a href="aksinya/logout.php">Keluar</a></h2>
                            </div></div>
                    </iv>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->
<div class='pelajar' id='pelajar'></div>
<div id='whatsapp'>
    <span class='wa-x' onclick='closeModal()'></span>
    <p class='wa-title'>Form WhatsApp</p>
    <div class='wa-body'>
        <input class='tujuan' type='hidden' value='+628123456789'/>
        <div class='left'>
            <div class='form-whatsapp'>
                <label class='wa-label bagi'>Name</label>
                <input class='nama wa-input bagi' name='nama' placeholder='Name' type='text'/>
            </div>
        </div>
        <div class='right'>
            <div class='form-whatsapp'>
                <label class='wa-label bagi'>Mobile Phone Number</label>
                <input aria-labelledby='number-00000014-acc number-00000014-error-acc number-00000014-instr-acc' class='hp wa-input bagi' data-role='i123-input' data-size='full' name='hp' placeholder='Your cellphone number' step='any' type='tel'/>
            </div>
        </div>
        <div class='form-whatsapp'>
            <label class='wa-label bagi'>Transaksi</label>
            <select class='asal wa-option bagi' placeholder='Barang' required=''>
                <option data-index='0' name='asal' value=''>Pilih Transaksi</option>
                <option data-index='0' name='asal' value='0'>COD</option>
                <?php
                $query = " SELECT DISTINCT kd_transaksi FROM invoice";
                $hasil = mysqli_query($koneksi,$query);
                while ($data = mysqli_fetch_array($hasil))
                {
                    echo "<option name='asal' value=$data[kd_transaksi]>$data[kd_transaksi]</option>";
                }
                ?>
            </select>
        </div>
        <div class='left'>
            <div class='form-whatsapp'>
                <label class='wa-label bagi'>Total</label>
                <input class='jumlah wa-input bagi' max='10' min='1' name='jumlah' placeholder='The amount of goods' type='number'/>
            </div>
        </div>
        <div class='right'>
            <div class='form-whatsapp'>
                <label class='wa-label bagi'>Date</label>
                <input class='tanggal wa-input bagi' name='tanggal' placeholder='Message Date' required='' type='date'/>
            </div>
        </div>
        <div class='form-whatsapp'>
            <label class='wa-label full'>Comment</label>
            <textarea class='jemput wa-input full' name='jemput' placeholder='Comment'></textarea>
        </div>
        <div class='form-whatsapp'>
            <p class='p-info'>This order requires the WhatsApp application.</p>
            <a class='submit' target='_blank'>Order now</a>
        </div>
    </div>
</div>

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
                                    <li  class="mr-auto">Kode Produk</li>
                                    <li  class="mr-auto">Harga</li>
                                    <li  class="mr-auto">Tambah</li>
                                    <li class="mr-auto">Sub Total</li>
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


                                                    <div class="product_image">
                                                        <img src="images/<?php echo $keranjang->foto_file; ?>" alt="">
                                                    </div>

                                                <div class="product_name_container">
                                                    <div class="product_name"><a
                                                                href="product.php?cari=produk&kd_produk=<?php echo $keranjang->kd_produk;?>"><?php echo $keranjang->nama; ?></a>
                                                    </div>

                                                </div>

                                                <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                                <input type="hidden" name='kd_produk' value="<?php echo $keranjang->kd_produk;?>"><?php echo $keranjang->kd_produk;?>
                                            </div>
                                            <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                                <input type="hidden" name="harga" value="<?php echo $keranjang->harga; ?>"><?php echo format_rupiah($keranjang->harga); ?>
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

                                            <div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
                                                <?php echo format_rupiah($jumlah_harga); ?></div>
                                            <div class="product_price product_text">
                                                <a  href="cart.php?act=del&amp;kd_produk=<?php echo $key; ?>&amp;ref=index.php"> <span>Hapus</a>

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
                            <div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
                                <div class="button button_clear trans_200"><a lass="button button_clear trans_200"
                                                                              href="cart.php?act=clear&amp;ref=index.php">Clear</a>
                                </div>

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
                                                <option >Pilih Kota</option>
                                                <option name="ongkir" value="0">COD</option>
                                                <?php
                                                include "aksinya/koneksi.php";
                                                $queryongkir = "SELECT * from ongkir";
                                                $hasilonkir = mysqli_query($koneksi,$queryongkir);
                                                while ($dataongkir = mysqli_fetch_array($hasilonkir)) {
                                                    echo "<option name='ongkir' value=$dataongkir[ongkir]>$dataongkir[kec]&nbsp;-&nbsp;$dataongkir[ongkir]</option>";
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
                                            <select name="ongkir"
                                                    class="dropdown_item_select checkout_input">
                                                <option >Pilih Kota</option>
                                                <option name="ongkir"value="0">COD</option>
                                                <?php
                                                $queryongkir = "SELECT * from ongkir";
                                                $hasilonkir = mysqli_query($koneksi,$queryongkir);
                                                while ($dataongkir = mysqli_fetch_array($hasilonkir)) {
                                                    echo  "<option name='ongkir' value='$dataongkir[ongkir]'>$dataongkir[kec]&nbsp;-&nbsp;$dataongkir[ongkir]</option>";
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
                                                href="cart.php?act=full&amp;ref=index.php" href="">checkout</a></div>

                                <?php
                                if(!isset($_SESSION['nik'])) {
                                    echo'<form method = "get" action = "/sehati/laporan/sc_cart.php?nik=" >';
                                }
else {
    echo'<form method = "get" action = "/sehati/laporan/sc_cart.php?addnik=" >';
}
                                   ?>
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
                                                echo $dataongkir['ongkir'];
                                                ?>"><?php
                                                    echo $dataongkir['kec'].'-'.$dataongkir['ongkir'];
                                                    ?></button>
                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
<?php
if(!isset($_SESSION['nik'])) {

    echo '<input id="addnik" name="addnik" value="0" type="hidden" />';
} else
{
    $nik = $_SESSION['nik'];
    echo'
    <input id="addnik" name="nik" type="hidden" value="'.$nik.'" />
    ';
}?>

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
<script>
    /*<![CDATA[*/
    // head
    // $(function(){$(window).scroll(function(){$(this).scrollTop()>80?$(".header-wrap").addClass("fixed"):$(".header-wrap").removeClass("fixed")})});

    // timer
    !function(t){function e(t,e){return t.toFixed(e.decimals)}t.fn.countTo=function(e){return e=e||{},t(this).each(function(){function n(){u+=l,f++,o(u),"function"==typeof a.onUpdate&&a.onUpdate.call(i,u),f>=r&&(c.removeData("countTo"),clearInterval(d.interval),u=a.to,"function"==typeof a.onComplete&&a.onComplete.call(i,u))}function o(t){var e=a.formatter.call(i,t,a);c.html(e)}var a=t.extend({},t.fn.countTo.defaults,{from:t(this).data("from"),to:t(this).data("to"),speed:t(this).data("speed"),refreshInterval:t(this).data("refresh-interval"),decimals:t(this).data("decimals")},e),r=Math.ceil(a.speed/a.refreshInterval),l=(a.to-a.from)/r,i=this,c=t(this),f=0,u=a.from,d=c.data("countTo")||{};c.data("countTo",d),d.interval&&clearInterval(d.interval),d.interval=setInterval(n,a.refreshInterval),o(u)})},t.fn.countTo.defaults={from:0,to:0,speed:1e3,refreshInterval:100,decimals:0,formatter:e,onUpdate:null,onComplete:null}}(jQuery),jQuery(function(t){function e(e){var n=t(this);e=t.extend({},e||{},n.data("countToOptions")||{}),n.countTo(e)}t(".count-number").data("countToOptions",{formatter:function(t,e){return t.toFixed(e.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g,",")}}),t(".timer").each(e)});

    // nav
    $(function() {
        var navHeight = $("nav").outerHeight();
        $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - navHeight
                    }, 1000);
                    return false;
                }
            }
        });
    });

    // whatsapp
    function closeModal(){document.getElementById("pelajar").classList.remove("active"),document.getElementById("whatsapp").classList.remove("active")}function openModal(){document.getElementById("pelajar").classList.add("active"),document.getElementById("whatsapp").classList.add("active")}

    // Onclick Whatsapp Sent!
    function WhatsApp(){var a="";if(""==$("#whatsapp .asal").val())return a=$("#whatsapp .asal").attr("name"),alert("Please select the city of origin "+a),$("#whatsapp .nama").focus(),!1;if(""==$("#whatsapp .ke").val())return a=$("#whatsapp .ke").attr("name"),alert("Please select the destination city "+a),$("#whatsapp .ke").focus(),!1;if(""==$("#whatsapp .tanggal").val())return a=$("#whatsapp .tanggal").attr("name"),alert("Please Specify Order Date "),$("#whatsapp .tanggal").focus(),!1;if(""==$("#whatsapp .jadwal").val())return a=$("#whatsapp .jadwal").attr("name"),alert("Please select a departure schedule "+a),$("#whatsapp .jadwal").focus(),!1;if(""==$("#whatsapp .nama").val())return a=$("#whatsapp .nama").attr("name"),alert("Please write name"),$("#whatsapp .nama").focus(),!1;if(""==$("#whatsapp .hp").val())return a=$("#whatsapp .hp").attr("name"),alert("Please write the active mobile number "+a),$("#whatsapp .hp").focus(),!1;if(""==$("#whatsapp .jumlah").val())return a=$("#whatsapp .jumlah").attr("name"),alert("Please specify the number of items "),$("#whatsapp .jumlah").focus(),!1;if(""==$("#whatsapp .jemput").val())return a=$("#whatsapp .jemput").attr("name"),alert("Please write the message "),$("#whatsapp .jemput").focus(),!1;if(""==$("#whatsapp .antar").val())return a=$("#whatsapp .antar").attr("name"),alert("Please write the complete destination address "+a),$("#whatsapp .antar").focus(),!1;if(confirm("Already installed WhatsApp?"))
    {var t="https://wa.me/";/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)&&(t="whatsapp://send/");var e=$("#whatsapp .tujuan").val(),p=(location.href,$("#whatsapp .asal").val()),s=($("#whatsapp .ke").val(),$("#whatsapp .tanggal").val()),r=($("#whatsapp .jadwal").val(),$("#whatsapp .nama").val()),h=$("#whatsapp .hp").val(),l=$("#whatsapp .jumlah").val(),n=$("#whatsapp .jemput").val();$("#whatsapp .antar").val();$(this).attr("href",t+"?phone=62 "+e+"&text=*Pesanan: "+p+" "+s+" %0A "+r+" %0A "+h+" %0A "+l+" %0A%0A "+n);var w=960,i=540,o=Number(screen.width/2-w/2),u=Number(screen.height/2-i/2),m=window.open(this.href,"","toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width="+w+", height="+i+", top="+u+", left="+o);return m.focus(),!1}window.open("https://www.whatsapp.com/download/")}$("#whatsapp .submit").click(WhatsApp);var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    // youvideo
    function toggleVideo(e){var o=document.getElementById("youvideo"),i=o.getElementsByTagName("iframe")[0].contentWindow;o.style.display="hide"==e?"none":"",func="hide"==e?"pauseVideo":"playVideo",i.postMessage('{"event":"command","func":"'+func+'","args":""}',"*")}$(document).ready(function(){$(".play-trailer").click(function(){toggleVideo("show"),$(".moviecard").addClass("movie-view-trailer")}),$(".back-btn").click(function(){$(".moviecard").removeClass("movie-view-trailer"),toggleVideo("hide")})}),$(function(){$(".popup-youtube, .popup-vimeo").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1})});

    /*! WOW wow.js - v1.3.0 - 2016-10-04
    * https://wowjs.uk
    * Copyright (c) 2016 Thomas Grainger; Licensed MIT */!function(a,b){if("function"==typeof define&&define.amd)define(["module","exports"],b);else if("undefined"!=typeof exports)b(module,exports);else{var c={exports:{}};b(c,c.exports),a.WOW=c.exports}}(this,function(a,b){"use strict";function c(a,b){if(!(a instanceof b))throw new TypeError("Cannot call a class as a function")}function d(a,b){return b.indexOf(a)>=0}function e(a,b){for(var c in b)if(null==a[c]){var d=b[c];a[c]=d}return a}function f(a){return/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a)}function g(a){var b=arguments.length<=1||void 0===arguments[1]?!1:arguments[1],c=arguments.length<=2||void 0===arguments[2]?!1:arguments[2],d=arguments.length<=3||void 0===arguments[3]?null:arguments[3],e=void 0;return null!=document.createEvent?(e=document.createEvent("CustomEvent"),e.initCustomEvent(a,b,c,d)):null!=document.createEventObject?(e=document.createEventObject(),e.eventType=a):e.eventName=a,e}function h(a,b){null!=a.dispatchEvent?a.dispatchEvent(b):b in(null!=a)?a[b]():"on"+b in(null!=a)&&a["on"+b]()}function i(a,b,c){null!=a.addEventListener?a.addEventListener(b,c,!1):null!=a.attachEvent?a.attachEvent("on"+b,c):a[b]=c}function j(a,b,c){null!=a.removeEventListener?a.removeEventListener(b,c,!1):null!=a.detachEvent?a.detachEvent("on"+b,c):delete a[b]}function k(){return"innerHeight"in window?window.innerHeight:document.documentElement.clientHeight}Object.defineProperty(b,"__esModule",{value:!0});var l,m,n=function(){function a(a,b){for(var c=0;c<b.length;c++){var d=b[c];d.enumerable=d.enumerable||!1,d.configurable=!0,"value"in d&&(d.writable=!0),Object.defineProperty(a,d.key,d)}}return function(b,c,d){return c&&a(b.prototype,c),d&&a(b,d),b}}(),o=window.WeakMap||window.MozWeakMap||function(){function a(){c(this,a),this.keys=[],this.values=[]}return n(a,[{key:"get",value:function(a){for(var b=0;b<this.keys.length;b++){var c=this.keys[b];if(c===a)return this.values[b]}}},{key:"set",value:function(a,b){for(var c=0;c<this.keys.length;c++){var d=this.keys[c];if(d===a)return this.values[c]=b,this}return this.keys.push(a),this.values.push(b),this}}]),a}(),p=window.MutationObserver||window.WebkitMutationObserver||window.MozMutationObserver||(m=l=function(){function a(){c(this,a),"undefined"!=typeof console&&null!==console&&(console.warn("MutationObserver is not supported by your browser."),console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content."))}return n(a,[{key:"observe",value:function(){}}]),a}(),l.notSupported=!0,m),q=window.getComputedStyle||function(a){var b=/(\-([a-z]){1})/g;return{getPropertyValue:function(c){"float"===c&&(c="styleFloat"),b.test(c)&&c.replace(b,function(a,b){return b.toUpperCase()});var d=a.currentStyle;return(null!=d?d[c]:void 0)||null}}},r=function(){function a(){var b=arguments.length<=0||void 0===arguments[0]?{}:arguments[0];c(this,a),this.defaults={boxClass:"wow",animateClass:"animated",offset:0,mobile:!0,live:!0,callback:null,scrollContainer:null,resetAnimation:!0},this.animate=function(){return"requestAnimationFrame"in window?function(a){return window.requestAnimationFrame(a)}:function(a){return a()}}(),this.vendors=["moz","webkit"],this.start=this.start.bind(this),this.resetAnimation=this.resetAnimation.bind(this),this.scrollHandler=this.scrollHandler.bind(this),this.scrollCallback=this.scrollCallback.bind(this),this.scrolled=!0,this.config=e(b,this.defaults),null!=b.scrollContainer&&(this.config.scrollContainer=document.querySelector(b.scrollContainer)),this.animationNameCache=new o,this.wowEvent=g(this.config.boxClass)}return n(a,[{key:"init",value:function(){this.element=window.document.documentElement,d(document.readyState,["interactive","complete"])?this.start():i(document,"DOMContentLoaded",this.start),this.finished=[]}},{key:"start",value:function(){var a=this;if(this.stopped=!1,this.boxes=[].slice.call(this.element.querySelectorAll("."+this.config.boxClass)),this.all=this.boxes.slice(0),this.boxes.length)if(this.disabled())this.resetStyle();else for(var b=0;b<this.boxes.length;b++){var c=this.boxes[b];this.applyStyle(c,!0)}if(this.disabled()||(i(this.config.scrollContainer||window,"scroll",this.scrollHandler),i(window,"resize",this.scrollHandler),this.interval=setInterval(this.scrollCallback,50)),this.config.live){var d=new p(function(b){for(var c=0;c<b.length;c++)for(var d=b[c],e=0;e<d.addedNodes.length;e++){var f=d.addedNodes[e];a.doSync(f)}});d.observe(document.body,{childList:!0,subtree:!0})}}},{key:"stop",value:function(){this.stopped=!0,j(this.config.scrollContainer||window,"scroll",this.scrollHandler),j(window,"resize",this.scrollHandler),null!=this.interval&&clearInterval(this.interval)}},{key:"sync",value:function(){p.notSupported&&this.doSync(this.element)}},{key:"doSync",value:function(a){if("undefined"!=typeof a&&null!==a||(a=this.element),1===a.nodeType){a=a.parentNode||a;for(var b=a.querySelectorAll("."+this.config.boxClass),c=0;c<b.length;c++){var e=b[c];d(e,this.all)||(this.boxes.push(e),this.all.push(e),this.stopped||this.disabled()?this.resetStyle():this.applyStyle(e,!0),this.scrolled=!0)}}}},{key:"show",value:function(a){return this.applyStyle(a),a.className=a.className+" "+this.config.animateClass,null!=this.config.callback&&this.config.callback(a),h(a,this.wowEvent),this.config.resetAnimation&&(i(a,"animationend",this.resetAnimation),i(a,"oanimationend",this.resetAnimation),i(a,"webkitAnimationEnd",this.resetAnimation),i(a,"MSAnimationEnd",this.resetAnimation)),a}},{key:"applyStyle",value:function(a,b){var c=this,d=a.getAttribute("data-wow-duration"),e=a.getAttribute("data-wow-delay"),f=a.getAttribute("data-wow-iteration");return this.animate(function(){return c.customStyle(a,b,d,e,f)})}},{key:"resetStyle",value:function(){for(var a=0;a<this.boxes.length;a++){var b=this.boxes[a];b.style.visibility="visible"}}},{key:"resetAnimation",value:function(a){if(a.type.toLowerCase().indexOf("animationend")>=0){var b=a.target||a.srcElement;b.className=b.className.replace(this.config.animateClass,"").trim()}}},{key:"customStyle",value:function(a,b,c,d,e){return b&&this.cacheAnimationName(a),a.style.visibility=b?"hidden":"visible",c&&this.vendorSet(a.style,{animationDuration:c}),d&&this.vendorSet(a.style,{animationDelay:d}),e&&this.vendorSet(a.style,{animationIterationCount:e}),this.vendorSet(a.style,{animationName:b?"none":this.cachedAnimationName(a)}),a}},{key:"vendorSet",value:function(a,b){for(var c in b)if(b.hasOwnProperty(c)){var d=b[c];a[""+c]=d;for(var e=0;e<this.vendors.length;e++){var f=this.vendors[e];a[""+f+c.charAt(0).toUpperCase()+c.substr(1)]=d}}}},{key:"vendorCSS",value:function(a,b){for(var c=q(a),d=c.getPropertyCSSValue(b),e=0;e<this.vendors.length;e++){var f=this.vendors[e];d=d||c.getPropertyCSSValue("-"+f+"-"+b)}return d}},{key:"animationName",value:function(a){var b=void 0;try{b=this.vendorCSS(a,"animation-name").cssText}catch(c){b=q(a).getPropertyValue("animation-name")}return"none"===b?"":b}},{key:"cacheAnimationName",value:function(a){return this.animationNameCache.set(a,this.animationName(a))}},{key:"cachedAnimationName",value:function(a){return this.animationNameCache.get(a)}},{key:"scrollHandler",value:function(){this.scrolled=!0}},{key:"scrollCallback",value:function(){if(this.scrolled){this.scrolled=!1;for(var a=[],b=0;b<this.boxes.length;b++){var c=this.boxes[b];if(c){if(this.isVisible(c)){this.show(c);continue}a.push(c)}}this.boxes=a,this.boxes.length||this.config.live||this.stop()}}},{key:"offsetTop",value:function(a){for(;void 0===a.offsetTop;)a=a.parentNode;for(var b=a.offsetTop;a.offsetParent;)a=a.offsetParent,b+=a.offsetTop;return b}},{key:"isVisible",value:function(a){var b=a.getAttribute("data-wow-offset")||this.config.offset,c=this.config.scrollContainer&&this.config.scrollContainer.scrollTop||window.pageYOffset,d=c+Math.min(this.element.clientHeight,k())-b,e=this.offsetTop(a),f=e+a.clientHeight;return d>=e&&f>=c}},{key:"disabled",value:function(){return!this.config.mobile&&f(navigator.userAgent)}}]),a}();b["default"]=r,a.exports=b["default"]});
    new WOW().init();

    // features
    var containerHeight=$(window).height()/2;$(".spacer").css("height",containerHeight);var x=$(".features").prev().height()/4;$(window).scroll(function(){$(window).scrollTop()>=x&&$(".skill-percent").each(function(){$(this).animate({width:$(this).data("percent")+"%"},1e3)})});

    // slider
    $(document).ready(function(){$(".slider").slick({slidesToShow:3,slidesToScroll:1,autoplay:!1,centerMode:!0,variableWidth:!0,autoplaySpeed:1500,arrows:!1,dots:!0,pauseOnHover:!1,responsive:[{breakpoint:768,settings:{slidesToShow:4}},{breakpoint:520,settings:{slidesToShow:3}}]})});

    // testimonial
    $(document).ready(function(){$("#testimonial-slider").slick({slidesToShow:3,slidesToScroll:1,autoplay:!1,autoplaySpeed:1500,arrows:!1,dots:!0,pauseOnHover:!1,responsive:[{breakpoint:800,settings:{slidesToShow:2}},{breakpoint:520,settings:{slidesToShow:1}}]})});

    // accordion
    var accordion=function(){var o=$(".js-accordion"),c=o.find(".js-accordion-header"),e=($(".js-accordion-item"),{speed:400,oneOpen:!1});return{init:function(o){c.on("click",function(){accordion.toggle($(this))}),$.extend(e,o),e.oneOpen&&$(".js-accordion-item.active").length>1&&$(".js-accordion-item.active:not(:first)").removeClass("active"),$(".js-accordion-item.active").find("> .js-accordion-body").show()},toggle:function(o){e.oneOpen&&o[0]!=o.closest(".js-accordion").find("> .js-accordion-item.active > .js-accordion-header")[0]&&o.closest(".js-accordion").find("> .js-accordion-item").removeClass("active").find(".js-accordion-body").slideUp(),o.closest(".js-accordion-item").toggleClass("active"),o.next().stop().slideToggle(e.speed)}}}();$(document).ready(function(){accordion.init({speed:300,oneOpen:!0})});$("#toTop").click(function () {$("html,body").animate({scrollTop: 0}, 500);});

    // menu
    !function(s){s.fn.menumaker=function(n){var e=s(this),o=s.extend({format:"dropdown",sticky:!1},n);return this.each(function(){s(this).find(".button").on("click",function(){s(this).toggleClass("menu-opened");var n=s(this).next("ul");n.hasClass("open")?n.slideToggle(150).removeClass("open"):(n.slideToggle(150).addClass("open"),"dropdown"===o.format&&n.find("ul").show())}),e.find("li ul").parent().addClass("has-sub"),multiTg=function(){e.find(".has-sub").prepend('<span class="submenu-button"></span>'),e.find(".submenu-button").on("click",function(){s(this).toggleClass("submenu-opened"),s(this).siblings("ul").hasClass("open")?s(this).siblings("ul").removeClass("open").slideToggle(150):s(this).siblings("ul").addClass("open").slideToggle(150)})},"multitoggle"===o.format?multiTg():e.addClass("dropdown"),!0===o.sticky&&e.css("position","fixed")})}}(jQuery),function(s){s(document).ready(function(){s("#cssmenu").menumaker({format:"multitoggle"})})}(jQuery);

    // breadcrumbs
    document.getElementById("bread-crumbs").appendChild(document.getElementById("breadcrumbs"));
    /*]]>*/
</script>
</body>
</html>
