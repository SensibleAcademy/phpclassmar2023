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

?>

        <h1>Course Registration</h1>
        <form method="get" action="savedata.php">
        Enter course name : <input type="text" name="txtCourseName"><br> <br>

        Enter teacher name : <input type="text" name="txtTeacherName"><br> <br>

        Enter course fee : <input type="text" name="txtFee"><br> <br>
        
        Enter course reg fee : <input type="text" name="txtRegFee"><br> <br>
        
        <input type="submit" value="Ok">

    </form>

    <br><br> 
<a href="displayCourse.php">
     Display All Courses
   </a>  

    </body>
</html>