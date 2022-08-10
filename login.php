<?php 
require_once('./sql.php');
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT username,password FROM users WHERE username='$username'";
$response = sql($sql);
if($response == NULL)
{
    echo "wrong username";
}
else{
    if($password==$response[1])
    {
        echo "USER LOGGED IN";
    }
    else{
        echo "WRONG PASSWORD";
    }
}
?>