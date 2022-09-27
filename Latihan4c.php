<?php

$negara = [
        "Indonesia" => "DKI Jakarta",
        "Singapura" => "Singapura",
        "Malaysia" => "Kuala Lumpur",
        "Brunei" => "Bandar Seri Begawan",
        "Thailand" => "Bangkok",
        "Laos" => "Vientiane",
        "Filipina" => "Manila",
        "Myanmar" => "Naypyidaw"];


?>
<!DOCTYPE html>
<html  lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Array Asosiatif</title>
</head>
<body>
    <h3>Daftar Negara ASEAN dan Ibukota : </h3>
    <?php  foreach ( $negara  as  $nrp => $nama ) : ?>
        <li><?php echo "$nrp : $nama" ?></li>
    <?php endforeach ?>

    </body>
    </html>