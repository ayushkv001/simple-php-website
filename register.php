<?php 
require_once('./sql.php');
$username = $_POST["username"];
$password = $_POST["password"];
$fname = $_POST["fname"];
$email = $_POST["email"];

$sql = "INSERT INTO users(username,fname,password,email) VALUES ('$username','$fname','$password','$email');";
$response = sql($sql);
if($response == NULL)
{
    echo "NOT REGISTERED";
}
else{
    echo "registered";
}
?>