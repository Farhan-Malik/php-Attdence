<?php
//Devlopment Connection
$host = 'localhost';
$db = 'Registration_db';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

//Remote Database connection
//$host = 'sql6.freemysqlhosting.net';
//$db = 'sql6525343';
//$user = 'sql6525343';
//$pass = 'JMev7Uv1KR';
//$charset = 'utf8mb4';


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
   $pdo = new PDO($dsn, $user, $pass);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   throw new PDOException($e->getMessage());
}


require_once 'crud.php';
require_once 'user.php';
$crud = new crud($pdo);
$user = new user($pdo);

$user->insertUser("admin","password");
?>
