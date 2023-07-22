<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- 
        id
        name
        image
        price
        desc
        categoryId
     -->
</head>

<body>
    <?php
    $connection = new PDO("mysql:host=localhost;dbname=we18343;charset=utf8", "root", "");
    $query = "SELECT * FROM users";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll();
    ?>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $value) : ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $value['username'] ?></td>
                    <td>
                        <?php
                        $roleId = $value['roleId'];
                        $connection = new PDO("mysql:host=localhost;dbname=we18343;charset=utf8", "root", "");
                        $query = "SELECT * FROM roles where id = $roleId ";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        $role = $stmt->fetch();
                        echo $role['name'];
                        ?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>