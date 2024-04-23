<?php
if (isset ($_POST['signup-submit'])){

    require 'bf02.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $Repeatpassword = $_POST['pwd-repeat'];

    if (empty($username)|| empty($email)|| empty($password)|| empty($Repeatpassword)) {
header ("Location../signup.php?error=emptyfields&uid=". $username."&mail=". $email);
exit();
}
elseif (!filter_var ($email, FILTER_VALIDATE_EMIAL) && !preg_match ("/^[a-zA-Z0-9]*$", $username)){
    header ("Location../signup.php?error=invalidmail&uid=". $username."&mail=". $email);
    exit();
}
elseif (!filter_var ($email, FILTER_VALIDATE_EMIAL)) { 
    header ("Location../signup.php?error=invalidmail&uid=". $username."&mail=". $email);
exit(); 
}

elseif (!preg_match ("/^[a-zA-Z0-9]*$", $username)) { 
    header ("Location../signup.php?error=invaliduid&mail=". $username."&mail=". $email);
exit(); 
}
elseif ($password !== $Repeatpassword){
    header ("Location../signup.php?error=passwordcheckuid=". $username."&mail=". $email);
exit(); 
}
else{

$sql = "SELECT usernameUsers FROM users WHERE usernameUsers=?";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
    header ("Location../signup.php?error=sqlerror". $username."&mail=". $email);
    exit();    
}
else{
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_excute($stmt);
}
}
}