<?php
include_once "../models/connect.php";
$query = "DELETE FROM users WHERE id = $_GET[id]";
connect($query);
header("location:../views/admin/user.php");
