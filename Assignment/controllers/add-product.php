<?php
echo "<pre>";
// var_dump($_POST);
// $file = $_FILES['product-image'];
// $avatar = $file['tmp_name'];
// var_dump($_FILES['product-image']["name"]);
$imageName = $_FILES['product-image']["name"];
move_uploaded_file($_FILES['product-image']["tmp_name"], "../image/$imageName");
/*
    hàm move_uploaded_file() sẽ di chuyển file từ thư mục tạm sang thư mục mình muốn
    tham số 1: đường dẫn tạm của file
        $_FILES['product-image']["tmp_name"]
            $_FILES['product-image'] là mảng chứa thông tin của file
            ["tmp_name"] là đường dẫn tạm của file
    tham số 2: đường dẫn mình muốn di chuyển file đến
        "../image/$imageName"
            ../image/ là đường dẫn mình muốn di chuyển file đến
            $imageName là tên file mình muốn di chuyển đến
*/
