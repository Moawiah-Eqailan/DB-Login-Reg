<?php
$host = "localhost";
$dbname = "db";
$userName = "root";
$password = "";


$connect = mysqli_connect($host, $userName, $password, $dbname);


if ($connect) {
    echo "";
} else {
    die("No" . mysqli_connect_errno());
}


?>


<!-- 
$dsn = "mysql:host=$host;dbname=$dbname";
try { $dbConnection = new PDO($dsn, $userName, $password); } catch (PDOException $error) {
echo $error->getCode();
} -->