<html>
<body>
    <h1>I am C </h1>
    <?php 
        $x=$_REQUEST["t1"];
        $y=$_REQUEST["t2"];
    ?>

    <form method="get" action="D.php">
        <input type="hidden" name="t1" value="<?php echo($x); ?>">
        <input type="hidden" name="t2" value="<?=$y;?>">

        Enter third number <input type="text" name="t3"> <br>
        <br>
        <input type="submit" value="Ok">
     </form>   
</body>
</html>