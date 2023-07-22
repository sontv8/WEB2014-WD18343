<?php
include_once '../models/connect.php';
$id = $_GET['id'];
$deleteQuery = "DELETE FROM products WHERE id = $id";
connect($deleteQuery);
header('location:../views/dashboard.php');
