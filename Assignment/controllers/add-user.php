<?php
include_once "../models/connect.php";
var_dump($_POST);
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$query = "INSERT INTO users(username, password, email) VALUES ('$username', '$password', '$email')";
connect($query);
