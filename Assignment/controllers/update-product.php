<?php
include_once "../models/connect.php";
$productName = $_POST['product-name'];


$image = $_POST['old-image'];

// kiểm tra xem có chọn ảnh mới không, sau đó mới lấy ảnh mới để cập nhật vào database
// if (isset($_FILES['product-image'])) {
//     $image = $_FILES['product-image']['name'];
//     move_uploaded_file()
// }

$price = $_POST['product-price'];
$id = $_POST['product-id'];
$query = "UPDATE products SET name='$productName', image='$image', price='$price' WHERE id=$id";
connect($query);
header("location:../views/admin/product.php");
