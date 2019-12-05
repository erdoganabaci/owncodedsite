<?php
    include "config.php";
    if(isset($_POST['secret'])){
    $regemail=$_POST['reg_email'];
    $regadsoyad = $_POST['reg_adsoyad'];
    $regpass=$_POST['reg_pass'];
    
    

    $ekle = mysqli_query($url, "insert into users (reg_email,ad_soyad,pass) values ('$regemail', '$regadsoyad','$regpass')");
    
    if($ekle){
        echo 'Kayıt Başarılı';
    } else {
        echo 'Hata';
    }
}
?>