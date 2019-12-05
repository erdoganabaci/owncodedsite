<?php
    include "config1.php";

    $ad = $_POST['ad_ekle'];
    $soyad = $_POST['soyad_ekle'];
    

    $ekle = mysqli_query($url, "insert into user (ad, soyad) values ('$ad', '$soyad')");
    if($ekle){
        echo 'SUCCESS';
    } else {
        echo 'ERROR';
    }
?>