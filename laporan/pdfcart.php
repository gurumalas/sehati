<?php
ob_start();

include('sc_cart.php');
$content = ob_get_clean();

require_once('../html2pdf/html2pdf.class.php');
try {
    $html2pdf = new HTML2PDF('L','FOLIO','en', false, 'ISO-8859-15',array(1, 1, 1, 0));
    // $html2pdf = new HTML2PDF('L','FOLIO','en', false, 'ISO-8859-15',array(5, 10, 10, 0));
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    ob_end_clean();
    $html2pdf->Output('Keranjang.pdf');
}
catch(HTML2PDF_exception $e) { echo $e; }


?>
