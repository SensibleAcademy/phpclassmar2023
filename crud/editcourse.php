<html>
    <head>
        <link href="./style.css" type="text/css" rel="stylesheet">
    </head>    
    <body>
        <?php 
  if(isset($_REQUEST["resmsg"]))
  {
     echo("<div id='resmessage'>");
      if($_REQUEST['resmsg']==1)
      {
         echo("Your data has been saved");
      }

     echo("</div>");

  }

  $id=$_REQUEST["did"];
  include("dbconnect.php");
  $sql = "SELECT * FROM course WHERE cid='$id'";

  $rsCourse=mysqli_query($con,$sql) or die("Query Error") ;

  $row=mysqli_fetch_array($rsCourse);




?>



        <h1>Course Registration</h1>
        <form method="get" action="updateCourse.php">

        <?php 
  echo("<input type='hidden' value='$id' name='txtId'>");
        ?>
        Enter course name : <input type="text" name="txtCourseName" value="<?php echo($row['cname']); ?>"><br> <br>

        Enter teacher name : <input type="text" name="txtTeacherName" value="<?=$row['tname']?>"><br> <br>

        Enter course fee : <input type="text" name="txtFee" value="<?=$row['fees']?>"><br> <br>
        
        Enter course reg fee : <input type="text" name="txtRegFee" value="<?=$row['regfees']?>"><br> <br>
        
        <input type="submit" value="Ok">

    </form>

    <br><br> 
<a href="displayCourse.php">
     Display All Courses
   </a>  

    </body>
</html>