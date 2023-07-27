<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "../../models/connect.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id=$id";
    $currentUser = getOne($query);
    ?>
    <form action="../../controllers/update-user.php" method="POST">
        <input type="text" name="id" value="<?php echo $id ?>" readonly hidden>
        <input type="text" placeholder="Enter Username" name="username" value="<?php echo $currentUser['username'] ?>">
        <input type="text" placeholder="Enter Password" name="password" value="<?php echo $currentUser['password'] ?>">
        <input type="text" placeholder="Enter Email" name="email" value="<?php echo $currentUser['email'] ?>">
        <button type="submit" name="btn-add">Update User</button>
    </form>
</body>

</html>