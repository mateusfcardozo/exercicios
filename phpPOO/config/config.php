<?php

$host = 'localhost';
$dbname = 'banco_usuarios';
$username = 'root';
$password = '';

$db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $db;
?>