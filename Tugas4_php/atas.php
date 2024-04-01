<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENJOY COFFEE</title>
</head>
<body>
    <h1 align="center" >SELAMAT DATANG DI ENJOY COFFEE</h1>

    <div style="text-align:center; background-color:orange; color:blue">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
            //looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $value <br>";
                echo "<a href='index.php?hal=$key'>$value</a>  |  ";
            }
        ?>
    </div>