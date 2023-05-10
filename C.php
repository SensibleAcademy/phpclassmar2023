<html>
<body>
    <h1>I am C </h1>

<?php 

   //$x=date("d / m / y");
   //$x=date("d / m / Y");
   
   //$x=date("d / M / Y");
  echo(date_default_timezone_get());
   date_default_timezone_set("Asia/Kolkata");
   echo(date_default_timezone_get());

   $x=date("d / m / Y h:i:sa");
   echo($x."<br>");

   $y=time();
   echo($y."<br>");

   $y=$y-100000;


   $z=date("d / m / Y h:i:sa",$y);

   echo("<br> $z");


   
   /*
   echo($_SERVER['PHP_SELF']."<br>");

   echo($_SERVER['SERVER_NAME']."<br>");

   echo($_SERVER['HTTP_HOST']."<br>");


   $nm="sonu";
   function show()
   {
    $GLOBALS["nm"]="monu";
        echo("<br>");
         echo($GLOBALS["nm"]);
         echo("<br>");

          
   }
   echo("$nm");
   echo("<br>");
   show();
   echo("<br>");
   echo("$nm");

   */

?>

    <form method="get" action="D.php">

        Enter third number <input type="text" name="t3"> <br>
        <br>
        <input type="submit" value="Ok">
     </form>   
</body>
</html>