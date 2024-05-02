<?php
if(isset($_POST['login-submit'])) {
require 'bf02.inc.php';

$username = $_POST['username'];
$password = $_POST ['pwd'];

if(empty($username) || empty($password)){
    header("Location ../index.php?error=emptyfields");
    exit();
}

else{
    $sql = "SELECT * FROM users WHERE usernameUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location ../index.php?error=emptyfields");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt, "ss", $username, $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc()){
            $pwdCheck = password_verify($password, $row['pwdUsers'])
            if ($pwdCheck == false){
                header("Location ../index.php?error=wrongpwd");
                exit();
            }
            else if ($pwdCheck == true) {
session_start();
$_SESSION['Userid']= $row['idUsers']
$_SESSION['Userusername']= $row['usernameUsers']
header("Location ../index.php?login=success");
exit(); }
        }
        else{
header("Location ../index.php?error=nouser");
exit();
 }
    }
}
}