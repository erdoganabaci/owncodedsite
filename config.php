<?php
    $server="localhost";
    $username="root";
    $pass="";
    $database="blog";

    $url=mysqli_connect($server,$username,$pass);
    $db=mysqli_select_db($url,$database);
    mysqli_query($url,"set names utf8");
?>