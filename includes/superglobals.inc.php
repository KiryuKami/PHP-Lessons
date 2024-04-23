<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
//Cookies aren't that save compared to session
setcookie ("name," "Kiryu," time() + 172800);

$_SESSION ['name'] = "12" ;
?>
</body>
</html>