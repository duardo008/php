<?php

$ip = $_SERVER["REMOTE_ADDR"];
$host =  $_SERVER["HTTP_HOST"];
$port =  $_SERVER["REMOTE_PORT"];
$uri = $_SERVER["REQUEST_URI"];

echo "Informações do Servidor: ";
echo "<br>";
echo "ip: " . $ip . "<br>";
echo "Host: " . $host . "<br>";
echo "Port: " . $port . "<br>";
echo "Uri: " . $uri . "<br>";

?>