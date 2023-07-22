<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once '../models/connect.php';
    $productQuery = "SELECT * FROM products";
    $products = getAll($productQuery);
    // var_dump($products);
    ?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $key => $value) : ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td> <img src="<?php echo $value['image'] ?>" alt=""></td>
                    <td><?php echo $value['name'] ?></td>
                    <td><?php echo $value['price'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><?php
                        $cateId = $value['categoryId'];
                        $categoryQuery = "SELECT * FROM categories WHERE id = $cateId";
                        $category = getOne($categoryQuery);
                        echo $category['name'];
                        ?></td>
                    <td>
                        <button id="btn-delete"><a href="../controllers/delete.php?id=<?php echo $value['id'] ?>" onclick="() => {
                            if (confirm('Ban co chac muon xoa chu?')) {
                                return true
                            } else {
                                return false;
                            }
                        }">Delete</a></button>
                        <button>Update</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script>
        // const btnDelete = document.querySelector('#btn-delete')
        // btnDelete.addEventListener('click', () => {
        //     if (confirm('Ban co chac muon xoa chu?')) {
        //         return true
        //     } else {
        //         return false;
        //     }
        // })
    </script>
</body>

</html>