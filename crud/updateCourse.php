<?php 
  $a=$_REQUEST["txtCourseName"];
  $b=$_REQUEST["txtTeacherName"];
  $c=$_REQUEST["txtFee"];
  $d=$_REQUEST["txtRegFee"];

  $id=$_REQUEST["txtId"];
 
  require_once("dbconnect.php");

  mysqli_query($con,"update course set cname='$a',tname='$b',fees='$c',regfees='$d' where cid='$id'") or die("Query Error -1");

  
  header("location:displayCourse.php?resmsg=2");
   
   
?>