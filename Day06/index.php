<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<pre>";
    // var_dump($_GET);
    var_dump($_POST);

    ?>
    <form action="" method="POST">
        <input type="text" placeholder="Enter product name" name="name">
        <input type="text" placeholder="Enter price name" name="price">
        <button type="submit" value="submit">Submit</button>
    </form>
    <!-- 
        Request
        Response
        http://localhost:8080/WD18343/Day06/?name=New+Product&price=1000
        query string
     -->
</body>

</html>