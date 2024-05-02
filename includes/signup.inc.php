<?php
if (isset ($_POST['signup-submit'])){

   require 'bf02.inc.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['pwd'];
 $Repeatpassword = $_POST['pwd-repeat'];
}
if (empty($username) || empty($email) || empty($password) || empty($Repeatpassword)){
    header("Location: ../signup.php?error=emptyfields&username". $username. "&mail=". $email);
    exit();
}
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    header("Location: ../signup.php?error=invalidmail&username". $username. "&mail=". $email);
    exit();
}
else if (!preg_match("/^[a-zA-Z0-9]*$", $username)){
header("Location: ../signup.php?error=invalidusername&mail". $email);
    exit();
}
else if ($password !== $Repeatpassword){
    header("Location: ../signup.php?error=passwordcheck&mail". $email);
    exit();
}
else {
    $sql = "SELECT usernameUsers FROM users WHERE usernameUsers=? AND pwdUsers=?";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_init($stmt, $sql)){
header("Location ../signup.php?error=sqlerror");
exit();
}

else{
    mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
mysqli_stmt_store_result($stmt);
$resultCheck = mysqli_stmt_num_rows($stmt);
if ($resultCheck > 0){
    header("Location ../signup.php?error=usertaken&mail". $email);
exit();
}

else {
    $sql = "INSERT INTO users (usernameUsers, emailUsers, passwordUsers) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_init($stmt, $sql)){
header("Location ../signup.php?error=sqlerror");
exit();
}
else{
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $email, $username);
    mysqli_stmt_execute($stmt);
    header("Location ../signup.php?signup=success");
exit();
        }
    }
}
mysqli_stmt_close($stmt);
mysqli_close($conn);
}
else{
    header("Location ../signup.php");
    exit();  
}

?>
