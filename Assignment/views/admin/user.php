<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    include_once "../../models/connect.php";
    $query = "SELECT * FROM users";
    $users = getAll($query);
    ?>
    <button class="bg-green-500 text-white px-4 rounded my-8 m-auto block">Add New User</button>
    <table class="border w-full">
        <thead>
            <tr class="border bg-orange-500 text-white">
                <th class="border">STT</th>
                <th class="border">Username</th>
                <th class="border">Email</th>
                <th class="border">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $value) : ?>
                <tr>
                    <td class="border"><?php echo $key + 1 ?></td>
                    <td class="border"><?php echo $value['username'] ?></td>
                    <td class="border"><?php echo $value['email'] ?></td>
                    <td class="border">
                        <a href="../../controllers/delete-user.php?id=<?php echo $value['id'] ?>"><button class="bg-red-500 rounded px-4 ">Delete</button></a>
                        <button class="bg-blue-700 text-white px-4 rounded">Update</button>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>