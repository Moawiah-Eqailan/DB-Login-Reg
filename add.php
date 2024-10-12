<?php

include "./registration.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($connect,"insert into `db`( `user_name`, `user_email`, `password`) VALUES ('name','email','password')");


header('location:login.php');
?>