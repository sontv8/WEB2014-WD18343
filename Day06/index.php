<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // echo "<pre>";
    // var_dump($_GET);
    // var_dump($_POST);

    $errors = [];
    if (isset($_POST['btnSubmit'])) {
        if (empty($_POST['name'])) {
            $errors['name'] = "Vui lòng nhập tên sản phẩm";
        }
        if (empty($_POST['price'])) {
            $errors['price'] = "Vui lòng nhập giá tiền";
        }
        // var_dump($errors);
    }



    ?>
    <form action="" method="POST">
        <input type="text" placeholder="Enter product name" name="name">
        <?php echo isset($errors['name']) ? $errors['name'] : "" ?>
        <input type="text" placeholder="Enter price name" name="price">
        <?php echo isset($errors['price']) ? $errors['price'] : "" ?>
        <button type="submit" value="submit" name="btnSubmit">Submit</button>
    </form>
    <div>
        <h3>Tên sản phẩm: <?php echo isset($_POST['name']) ? $_POST['name'] : "" ?></h3>
        <p>Giá sản phẩm: <?php echo isset($_POST['price']) ? $_POST['price'] : "" ?></p>
    </div>
    <!-- 
        Request
        Response
        http://localhost:8080/WD18343/Day06/?name=New+Product&price=1000
        query string
     -->
</body>

</html>