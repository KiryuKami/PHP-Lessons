<?php require "includes/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="header.css">
</head>
<body>
   
<main>
   <div class = "wrapper-main">
      <section class = "section-default">
      <h1>Signup</h1>
      <form action="includes/signup.inc.php" method = "post">
        <input type="text" name = "username" placeholder = "Username">
        <input type="text" name = "email" placeholder = "E-mail">
        <input type="password" name = "pwd" placeholder = "Password">
        <input type="password" name = "pwd-repeat" placeholder = "Repeat-password">
        <button type = "submit" name = "signup-submit">Signup</button>
      </form>
      </section>
</div>
   </main>
</body>
</html>