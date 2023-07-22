<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    var_dump($_POST);

    $menus = [
        ["id" => 1, "name" => "Home", "path" => "/"],
        ["id" => 2, "name" => "Features", "path" => "/features"],
        ["id" => 3, "name" => "Recept", "path" => "/recept"],
        ["id" => 4, "name" => "Dessert", "path" => "/dessert"],
        ["id" => 5, "name" => "Contact", "path" => "/contact"],
    ];
    $foods = [
        ["id" => 1, "image" => "https://picsum.photos/448/448", "name" => "Delish Lemon Bars for Any Occasion", "date" => "JAN 12, 2020"],
        ["id" => 1, "image" => "https://picsum.photos/448/448", "name" => "Tortilla & Ricotta Cheese Salad", "date" => "JAN 13, 2020"],
        ["id" => 1, "image" => "https://picsum.photos/448/448", "name" => "Summer Breakfast for Healthy Mornings", "date" => "JAN 14, 2020"]
    ];
    ?>
</body>

</html>