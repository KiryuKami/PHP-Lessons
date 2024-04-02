<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
<input type="text" name = "person">
<button>SUBMIT</button>
   </form>
    <h1>Karter</h1>
    
    <a href="calculator.php">calculator page</a>
    <a href="calender.php">Calender</a>
   <a href="condtionionals.php">condtionionals</a>
    <a href="loops.php">Loops</a>
   
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
   
</body>
</html>