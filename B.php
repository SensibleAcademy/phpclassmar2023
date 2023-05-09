<html>
<body>
    <h1>I am B </h1>
    <?php 
        $x=$_REQUEST["t1"];

    ?>

    <form method="get" action="C.php">
        Enter second number <input type="text" name="t2"> <br>
        <br>

        <input type="hidden" name="t1" value="<?php echo($x); ?>">
        <input type="submit" value="Ok">
     </form>   
</body>
</html>