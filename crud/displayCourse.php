<html>
<body>
<h1> Course List </h1>

<?php 
  require_once("dbconnect.php");
  $rsCourse=mysqli_query($con,"select * from course");
 echo("<table border='1'>");
 echo("<tr><th>Course Id</th><th>Course Name </th> <th> Teacher Name</th> <th>Fees </th><th> Reg . Fees </th> </tr>");
  while($row=mysqli_fetch_array($rsCourse))
  {
    echo("<tr>");

  echo("<td>".$row["cid"]."</td>");
  echo("<td>".$row["cname"]."</td>");
  echo("<td>".$row["tname"]."</td>");
  echo("<td>".$row["fees"]."</td>");
  echo("<td>".$row["regfees"]."</td>");

  echo("</tr>");
  }
  echo("</table>");

?>



</body>

</html>