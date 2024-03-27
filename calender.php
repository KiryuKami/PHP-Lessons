<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calender.css">
</head>
<body>
    <?php
$dayofweek = date("w");
echo $dayofweek;
switch ($dayofweek){
    case 1:
    echo "it is Monday";
    break;
    case 2:
    echo "it is Tuesday";
    break;
    case 3:
    echo "it is Wednesday";
    break;
    case 4:
    echo "it is Thursday";
    break;
    case 5:
    echo "<p> it is Friday </p>";
    break;
    case 6:
    echo "it is Saturday";
    break;
    case 0:
    echo "it is Sunday";
    break;
   
}
    ?>
</body>
</html>