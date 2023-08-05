<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>image</th>
                <th>price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once "../../models/connect.php";
            $query = "SELECT * FROM products";
            $products = getAll($query);
            ?>
            <?php foreach ($products as $key => $value) : ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><img src="../../image/<?php echo $value['image'] ?>" alt=""></td>
                    <td><?php echo $value['price'] ?></td>
                    <td>
                        <a href="../admin/update-product.php?id=<?php echo $value['id'] ?>"><button>Update</button></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>

</html>