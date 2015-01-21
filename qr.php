<?php
include('assets/phpqrcode/qrlib.php');
    // outputs image directly into browser, as PNG stream 
    //QRcode::png('PHP QR Code :)');
 $codigo = htmlspecialchars($_GET["id"]);
 QRcode::png($codigo);
?>