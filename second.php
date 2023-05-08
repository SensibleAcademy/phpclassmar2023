<html>
<body>
  <h1>

    <?php 
   
   /*
     $a = $_REQUEST["t1"];
     $b = $_REQUEST["t2"];
     $c = $_REQUEST["t3"];
*/

   $a=array(10,20,30.9,"ram",50);

   //print(count($a));
   //print($a[-1]);

   /*
   for($i=0;$i<=count($a)-1;$i++)
   {
      echo($a[$i]." ");
   }
   */

   /*
   foreach($a as $b)
   {
      echo($b."<br>");
   }
   */

//   print_r($b);


// ASSOCIATIVE ARRAY

$m=array("a"=>10,"b"=>20,"c"=>30,"d"=>40,50);

//print(count($m));
/* ERROR
for($i=0;$i<=count($m)-1;$i++)
   {
      echo($m[$i]." ");
   }

   */
/*
   foreach($m as $b=>$c)
   {
      echo($b." -> " . $c. "  , " );
   }
*/

// 2-d array 

$a1=array(array(10,20,30),array(10,20,30,40),array(60,70));

for($i=0;$i<=count($a1)-1;$i++)
{
   for($j=0;$j<=count($a1[$i])-1;$j++)
   {
       print($a1[$i][$j]."  ");
   }
   print("<br>");
}



   

    ?>
  
    </h1>

</body>

</html>