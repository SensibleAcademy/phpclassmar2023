<html>
    <body>

    <?php 
   
   $dt="ram is my friend,\n he is doing BCA from BIT.";

//   $con=fopen(".//ram.txt","w");
$con=fopen(".//ram.txt","a");
   fwrite($con,$dt);
   fclose($con);


?>

    </body>
</html>