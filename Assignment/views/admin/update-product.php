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
    $currentProduct = getOne("SELECT * FROM products WHERE id = $id")
    ?>
    <form action="../../controllers/update-product.php" enctype="multipart/form-data" method="POST">
        <input type="text" name="product-id" value="<?php echo $currentProduct['id'] ?>" hidden>
        <input type="text" placeholder="Enter product name" name="product-name" value="<?php echo $currentProduct['name'] ?>">
        <input type="file" name="product-image">
        <input type="text" name="old-image" id="" value="<?php echo $currentProduct['image'] ?>" hidden>
        <input type="number" placeholder="Enter product price" name="product-price" value="<?php echo $currentProduct['price'] ?>">
        <button type="submit">Submit</button>
    </form>
</body>

</html>