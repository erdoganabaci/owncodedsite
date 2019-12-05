<?php
session_start();
include "config.php";
//include "insert.php";
$password=$_POST['sign_pass'];
$email=$_POST['sign_email'];
$sorgu="select * from users WHERE reg_email='$email' and pass='$password'";
$find=mysqli_query($url,$sorgu);
$result=mysqli_num_rows($find);



if($result>0){
    echo "Hoşgeldin";
    $_SESSION['message'] = $email;
    


    /*$_SESSION['message']="Giriş Başarılı";
header("Location: login.php");

}
else{
$_SESSION['message']="Giriş Başarısız";
header("Location: index.php");
}

  */  
  
}
else{
    echo "Hatalı giriş";
    }
?>