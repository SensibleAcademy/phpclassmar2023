<html>
    <body>

    <?php 
  $a=$_REQUEST["txtCourseName"];
  $b=$_REQUEST["txtTeacherName"];
  $c=$_REQUEST["txtFee"];
  $d=$_REQUEST["txtRegFee"];

 
  require_once("dbconnect.php");

  mysqli_query($con,"insert into course(cname,tname,fees,regfees) values('$a','$b','$c','$d')") or die("Query Error -1");

  
  header("location:coursereg.php?resmsg=1");
   
   
?>


    </body>
</html>