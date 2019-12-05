<?php
include "config.php";


    $ad = $_POST['ad_duzenle'];
    $soyad = $_POST['soyad_duzenle'];
    $id1 = $_POST['id'];

    if(isset($_POST['bilgiduzenle_id'])){
       
    $duzenler = mysqli_query($url,"UPDATE user SET ad='$ad',soyad='$soyad' WHERE id='$id1'");
 
    if($duzenler)
    {
        echo "Kayıt duzenlendi.";
    }
    else
    {
       echo "Hata oluştu";
    }


}



?>



