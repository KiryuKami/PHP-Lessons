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
    <?php
   echo "I thought i was the best but actually ";
   $name = $_GET['person'];
   echo $name. " Is the best in the world!";

   ?>
   
</body>
</html>