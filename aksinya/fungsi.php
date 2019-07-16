<?php
function format_rupiah($rp) {
    $hasil = "<b>IDR." . number_format($rp, 0, "", ".") . ",00-</b>";
    return $hasil;
}

function pagination($halaman, $jumlah_halaman, $tabel) {
    $baselink = "index.php?mod=" . $tabel . "&pg=" . $tabel . "_view&halaman=";
    if($halaman > 1) {
        $previous = $halaman - 1;
        echo "<li><a href='" . $baselink . "1'><i class='icon-fast-backward'></i></a></li>";
        echo "<li><a href='" . $baselink . $previous . "'><i class='icon-step-backward'></i></a></li>";
    } else {
        echo "<li><a href=''><i class='icon-fast-backward'></i></a></li><li><a href=''><i class='icon-step-backward'></i></a></li>";
    }

    $angka = ($halaman > 3) ? "<li><a href=''>...</a></li>" : " ";
    for($i = $halaman - 2; $i < $halaman; $i++) {
        if($i < 1)
            continue ;
        $angka .= "<li><a href='" . $baselink . $i . "'>" . $i . "</a></li>";
    }
    $angka .= "<li> <a href='' class='btn btn-primary'>".$halaman."</a></li>";
    for($i = $halaman + 1; $i < $halaman + 3; $i++) {
        if($i > $jumlah_halaman)
            break;
        $angka .= "<li><a href='" . $baselink . $i . "'>" . $i . "</a></li>";
    }
    $angka .= ($halaman + 2 < $jumlah_halaman ? "<li><a href=''>...</a></li>
	<li><a href='" . $baselink . $jumlah_halaman . "'>$jumlah_halaman</a></li>" : "");
    echo $angka;
    if($halaman < $jumlah_halaman) {
        $next = $halaman + 1;
        echo "<li><a href='" . $baselink . $next . "'><i class='icon-step-forward'></i></a></li>";
        echo "<li><a href='" . $baselink . $jumlah_halaman . "'><i class='icon-fast-forward'></i></a></li>";
    } else {
        echo "<li>	<a href=''><i class='icon-step-forward'></i></a></li><li><a href=''> <i class='icon-fast-forward'></i></a></li>";
    }

}

?>
