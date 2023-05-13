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
         echo("Invalid user name");
      }
     else if($_REQUEST['resmsg']==2)
     {
        echo("Invalid password");
     }

     echo("</div>");

  }

?>
    <h1>Login Form </h1>
    <form method="post" action="checkLogin.php">
  Enter user name : <input type="text" name="txtName"> <br><br>
  Enter password : <input type="password" name="txtPass"> <br><br>

  <input type="submit" value="ok">


    </form>

    </body>
</html>