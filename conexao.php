<?php
$host = "switchback.proxy.rlwy.net";
$user = "root";
$pass = "XefxavDuyjAaywUbeKhpLUVxIwsJzpuC";
$bd   = "railway";
$port = 13475; // Adiciona a porta

$mysqli = new mysqli($host, $user, $pass, $bd, $port); 

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} else {
    echo "Conectado com sucesso!";
}

?>

