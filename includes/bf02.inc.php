<?php
$servername = "localhost";
$dbUsername = "root";
$dbPaswword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername,$dbUsername,$dbPaswword,$dbName);

if (!$conn){
    die("Connection Failed:".mysqli_connect_error());
}