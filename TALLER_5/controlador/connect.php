<?php
$host = 'localhost'; 
$db = 'G'; 
$usr = 'root';
$pass = '';

$con = new mysqli($host,$usr,$pass,$db);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}  
else {
    echo "Connected successfully :d " . $host . ' ' . $db . ' ' . $usr . ' ' . $pass . '<br>' ;
}


?>