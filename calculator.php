<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
   <input type="text" name = "num1" placeholder = "Number 1">
<input type="text" name = "num2" placeholder = "Number 2">
<select name ="operator">
<option value="">None</option>
<option value="">Add</option>
<option value="">Subtract</option>
<option value="">Multiply</option>
<option value="">Divide</option>
</select>
<br>
<button type ="submit" name ="submit" value = "submit">Calculate</button>
   </form>
    <p>the answer is:</p>

    <?php
if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator= $_GET['operator'];
    switch ($operator){
case "None": 
    echo "you must choose a method!";
    break;
    case "Add": 
        echo $result1 + $result2;
        break;
        case "Subtract": 
            echo $result1 - $result2;
            break;
            case "Multiply": 
                echo $result1 * $result2;
                break;
                case "Divide": 
                    echo $result1 / $result2;
                    break;
    }
}
   ?>
   
</body>
</html>