<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $username = "sontv";
    // $password = 'hehe';
    // echo $username;

    $username = 'thienth';
    $gender = 'Nam';
    $isAdmin = false;
    /*
        nếu là true thì hiển thị "Admin"
        nếu là false thì hiển thị "User"
    */
    ?>
    <h1>Hello</h1>
    <h2>Tên tài khoản: <?php echo $username ?></h2>
    <p>Giới tính: <?php echo $gender ?></p>
    <p>Quyền: <?php echo $isAdmin == true ? "Admin" : "User" ?></p>
</body>

</html>