<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../../controllers/add-product.php" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="Enter product name" name="product-name">
        <input type="file" name="product-image">
        <input type="number" placeholder="Enter product price" name="product-price">
        <button type="submit">Submit</button>
    </form>
</body>

</html>