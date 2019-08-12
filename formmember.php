<?php
<?php
                $nik = $_GET['nik'];
                $sqlinvoice = mysqli_query($koneksi, "SELECT * FROM invoice where nik='$nik'");
                while($rowsinvoice=mysqli_fetch_object($sqlinvoice)) { ?>?>