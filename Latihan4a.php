<?php

$warna = ["hijau", "kuning", "kelabu", "merah muda", "biru"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>warna</title>
</head>
<body>
    <p>

        balonku ada lima </br>
        rupa-rupa warnanya </br>

        <?php
        for ($i = 0; $i < 4; $i++){
            echo " $warna[$i],";
           
        }

        ?>
        dan
        <?php
        echo $warna [4];
        ?>
        </br>
        meletus balon
        <?php
        echo $warna [0];
        ?> DOR!!!!
        </br>
        hatiku sangat kacau
</body>
</html>