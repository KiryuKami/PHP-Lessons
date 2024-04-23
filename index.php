
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    <?php
    include 'includes/header.php';
    
    ?>
    <?php
    
   // Video 8 Code (Aritmeic Operations)
   echo 5+5;
   echo 6%5;
   echo 5**2;
   //End Of Video 8 Code

// Video 9 Code (Assigment Operators)
$x = 100;
$x += 20; 
// End of Video 9 Code

//Video 10 Code (Comparsion Operations)
$x = 10;
$y = "10";
if ($x == $y) {   // "===" checks for data type and same number value it is true//
   echo "True!";
}
else {
   echo "False";
}
//End of Video 10 Code

//Video 11 Code (Increment/Decrement Operators)
$x = 10;
echo $x--; // The postion for "++" and "--" matters, in the front it subtracts or adds one 
echo $x;
// End of Video 11 Code

//Video 12 Code (Logical Operators)
$x = 20;
$y = 20;
if ($x == $y or 1 == 1) { // "||" and "or" do the same function
   echo "True";
}

   ?>
  <main>
   <div class = "wrapper-main">
      <section class = "section-default">
      <p class = "login-status">you are logged out!</p>
      <p class = "login-status">you are logged in!</p>
      </section>
   </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>