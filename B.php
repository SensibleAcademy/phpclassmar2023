<?php session_start(); ?><?php 
    
    
    $_SESSION["info"]=$_REQUEST["t1"];
    $a=$_SESSION["info"];
          
          header("location:C.php?txt=$a");

    ?>