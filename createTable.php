<?php
require_once('./sql_register.php');

//to create table in "data.db"

$sql = "CREATE TABLE users(username STRING PRIMARY KEY NOT NULL,fname NOT NULL,password NOT NULL, email);";
$response = sql($sql); 
echo var_dump($response);
?>

