<?php
include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action = "includes/signup.inc.php" method = "POST">
<input type="text" name = "Uid" placeholder = "Username">
<br>
<input type="text" name = "id" placeholder = "Id">
<br>
<input type="password" name = "pwd" placeholder = "Password">
<br>
<button type = "submit" name = "submit">Sign Up</button>

    </form>
  
</body>
</html>