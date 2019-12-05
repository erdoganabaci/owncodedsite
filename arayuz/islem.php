<?php
include "config1.php";

if(isset($_POST['bilgiekle'])){
    

    $ad = $_POST['ad_ekle'];
    $soyad = $_POST['soyad_ekle'];
   
    

    $ekle = mysqli_query($url, "insert into user (ad, soyad) values ('$ad', '$soyad')");
    if($ekle){
        echo 'Başarıyla Eklendi';
    } else {
        echo 'Hata Ekleme Başarısız';
    }

}

    if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sil = mysqli_query($url,"DELETE FROM user WHERE id='$id'");
 
    if($sil)
    {
        echo "Kayıt silindi.";
    }
    else
    {
       echo "Hata oluştu";
    }


}



?>