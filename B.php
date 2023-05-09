<?php session_start(); ?>
<html>
<body>
    <h1>I am B </h1>
    <?php 
        $_SESSION["info"]=$_REQUEST["t1"];

    ?>

    <form method="get" action="C.php">
        Enter second number <input type="text" name="t2"> <br>
        <br>


        <input type="submit" value="Ok">
     </form>   
</body>
</html>