<html>
<body>
  <h1>Data from file</h1>
  <pre>
  <?php
  
  $con=fopen(".//ram.txt","r") or die("file not found");
  $s=fgets($con);
  echo($s);
/*
  $c=0;
  while(!feof($con))
  {
    $d=fgetc($con);
    if(ord($d)>=48 and ord($d)<=57)
    {
          $c++;
    } 
}
   echo($c);
*/

  
  fclose($con);




  ?>

</pre>


</body>    
</html>