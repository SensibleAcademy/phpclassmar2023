<html>
    <body>

    <?php 
  $a=$_REQUEST["txtCourseName"];
  $b=$_REQUEST["txtTeacherName"];
  $c=$_REQUEST["txtFee"];
  $d=$_REQUEST["txtRegFee"];


  $img=$_FILES["flImage"];

  //echo($img["type"]);
  //echo($img["size"]);

  $imgname=time() ."_".  $img["name"];

  //echo($img["tmp_name"]);

 move_uploaded_file($img["tmp_name"],".\\collection\\$imgname");

  


 
  require_once("dbconnect.php");

  mysqli_query($con,"insert into course(cname,tname,fees,regfees,imgpath,reg_date) values('$a','$b','$c','$d','$imgname',now())") or die("Query Error -1");

  
  header("location:coursereg.php?resmsg=1");

   
?>


    </body>
</html>