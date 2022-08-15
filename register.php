<?php 
require_once('./sql_register.php');
$username = $_POST["username"];
$password = $_POST["password"];
$fname = $_POST["fname"];
$email = $_POST["email"];

$sql = "INSERT INTO users(username,fname,password,email) VALUES ('$username','$fname','$password','$email');";
$response = sql($sql);
if($response == FALSE)
{
    include './html/error_registered.html';
}
else{
    include './html/registered.html';
}
?>