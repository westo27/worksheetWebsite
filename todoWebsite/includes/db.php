<?php

$host = 'localhost';
$dbname = 'todo';
$user = 'root';
$pass = '';

//$host = '172.16.11.22:3306';
//$dbname = 'west1_15_todo';
//$user = 'west1_todo';
//$pass = 'Dog123';

try 
{
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
}
catch(PDOException $e) 
{
    echo $e->getMessage();
}


?>