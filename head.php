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

                <a data-toggle="modal" data-target="#modalLRForm" class="user-profile"  aria-expanded="false"><div><img src="images/user.svg" alt="https://www.flaticon.com/authors/freepik"><div>4</div></div></a>
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
            <div><div><img src="images/phone.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
            <div><a href="https://wa.widget.web.id/a3e6bd" target="_blank">+628123456789</a></div>
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
                                    <label>NIK</label>
                                    <input type="text" id="modalLRInput10" name="nik" class="form-control form-control-sm validate">

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
                                <div class="options text-center text-md-right mt-1">
                                    <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                                    <p>Forgot <a href="#" class="blue-text">Password?</a></p>
                                </div>
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

                    <div class="tab-pane fade" id="panel9" role="tabpanel">
                        <div class="modal-body">
                            <div class="md-form form-sm mb-7">
                                <h2><a href="aksinya/logout.php">Keluar</a></h2>
                            </div></div>
                    </div>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->
