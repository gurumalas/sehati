<html>
<head><title>Upload File</title></head>
<body>
<?php
if (isset($_POST["upload"])) {
    $nama = "1463";
    $dir_upload = "js/";
    $nama_file = '1463.'.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    //

    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
//        'Whatevernameyouwant.'.pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $cek = move_uploaded_file($_FILES['file']['tmp_name'],
            $dir_upload.$nama_file);
        if ($cek) {
            die ("File berhasil diupload");
        } else {
            die ("File gagal diupload");
        }
    }
}
?>
<FORM ACTION="" METHOD="POST" ENCTYPE="multipart/form-data"/>
Upload File : <input type="file" name="file"><br>
<input type="submit" name="upload" value="UPLOAD">
</FORM>
</body>
</html>