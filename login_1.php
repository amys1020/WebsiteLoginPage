<?php include('login_2.php') ?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <title> Login </title>
  <link rel="stylesheet" type="text/css" href="style_1.css">
</head>
<body>
  <div class= "loginbox">
  <img src="pic1.png" class= "pic1">
    <h1> Login </h1>
    <form action="login_1.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="submit_btn" id="submit_btn">Submit</button>
        <?php
          $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

          if(strpos($fullUrl, "login=error") == true){
            echo "<p class='error'>Incorrect Username or Password</p>";
          }
        ?>
    </form>
  </div>
</body>
</html>
