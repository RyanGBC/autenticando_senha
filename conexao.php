<?php
$host = "localhost";
$user = "root";
$pass = "nova_senha"; 
$bd = "senhas";

$mysqli = new mysqli($host, $user, $pass, $bd); 

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
