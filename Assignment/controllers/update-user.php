<?php
include_once "../models/connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$id = $_POST['id'];
$query = "UPDATE users SET username='$username', password='$password', email='$email' WHERE id=$id";
connect($query);
header("location:../views/admin/user.php");
