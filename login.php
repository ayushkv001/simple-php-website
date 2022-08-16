<?php 
require_once('./sql.php');
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username,password FROM users WHERE username='$username'";
$response = sql($sql);
if($response == NULL)
{
    include './html/error_login.html';
}
else{
    if($password==$response[1])
    {
        include './html/login.html';
    }
    else{
        include './html/error_login.html';
    }
}
?>