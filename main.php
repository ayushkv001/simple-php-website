<?php
require_once('./sql.php');

//$sql = "CREATE TABLE users(username STRING PRIMARY KEY NOT NULL,fname NOT NULL,password NOT NULL, email);";
//$sql = "INSERT INTO users(username,fname,password,email) VALUES ('ayush10','Ayush','ayush','ayu@gmail.com')";
$sql = "SELECT username,password FROM users WHERE username='ayush10';";
$response = sql($sql); 
// $row = $response->fetchArray();
$tut = $response[1];
echo var_dump($tut);
?>