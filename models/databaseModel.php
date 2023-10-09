<?php 
global $pdo;

$host = 'localhost';
$dbName = 'twish';
$username = 'root';
$password = '';

if (!isset($pdo)) $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);

?>