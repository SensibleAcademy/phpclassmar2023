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
         echo("Your data has been deleted");
      }
      else if($_REQUEST['resmsg']==2)
      {
         echo("Your data has been updated");
      }
     

     echo("</div>");

  }

?>

<h1> Course List </h1>

<?php 
  require_once("dbconnect.php");
  $rsCourse=mysqli_query($con,"select * from course");
 echo("<table border='1'>");
 echo("<tr><th>Sl. No.</th><th>Course Name </th> <th> Image </th> <th> Teacher Name</th> <th>Fees </th><th> Reg . Fees </th> <th> Status </th></tr>");
 $cnt=0;
  while($row=mysqli_fetch_array($rsCourse))
  {
    $cnt++;
    echo("<tr>");

    $id=$row["cid"];
  echo("<td>".$cnt."</td>");
  echo("<td>".$row["cname"]."</td>");

  $img=$row["imgpath"];
  echo("<td><img src='.//collection//$img' width='100' height='100' border='1'> </td>");

  echo("<td>".$row["tname"]."</td>");
  echo("<td>".$row["fees"]."</td>");
  echo("<td>".$row["regfees"]."</td>");

  echo("<td><a href='deleteCourse.php?did=$id'>Delete</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;");


  echo("<a href='editCourse.php?did=$id'>Edit</a></td>");

  echo("</tr>");
  }
  echo("</table>");

?>



</body>

</html>