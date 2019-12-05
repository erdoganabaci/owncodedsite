<?php
    include "config1.php";
    session_start();
    $ad=$_POST['ad_ekle'];
    $soyad=$_POST['soyaad_ekle'];
    
    $sorgu="SELECT * FROM user WHERE username = '$ad' AND pass = '$soyad'";
    
    $find=mysqli_query($url,$sorgu);
    $result=mysqli_num_rows($find);
    //$ver = mysqli_fetch_assoc($find);
    //$_SESSION['username'] = $username;
    
    if($result>0){
        echo 'TAMAM';
    } else {
        echo 'HATA';
    }
?>