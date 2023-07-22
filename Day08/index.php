<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $connection = new PDO("mysql:host=localhost;dbname=wd18343", "root", "");
    $query = "SELECT * FROM users";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll();
    // echo "<pre>";
    // var_dump($users);

    ?>


    <table>
        <thead>
            <tr>
                <th>Stt</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key => $value) : ?>
                <tr>
                    <td><?php echo $key + 1 ?></td>
                    <td><?php echo $value['username'] ?></td>
                    <td><?php echo $value['password'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</body>

</html>