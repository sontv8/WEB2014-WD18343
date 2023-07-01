<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>



    <?php
    // array
    // $products = ["iphone", "samsung", "oppo", "xiaomi"];
    // //              0         1         2        3
    // // echo $products[1]
    // foreach ($products as $item => $value) {
    //     echo "<pre/>";
    //     echo "<h2>$value</h2>";
    // }
    // echo "<pre/>";
    // print_r($products);
    // var_dump($products);

    // $menuList = ["Home Page", "About Us", "Contact Us", "Login", "Register"];

    // $menuList = [
    //     ["Home Page", "https://picsum.photos/"],
    //     ["About Us", "https://classroom.google.com/"],
    //     ["Contact Us", "https://www.google.com/"]
    // ];
    // echo "<pre>";
    // var_dump($menuList);
    // foreach ($menuList as $item => $value) {
    //     echo "<li><a href='$value[1]'>$value[0]</a></li>";
    // }


    // $menuList = [
    //     [
    //         "name" => "Home Page",
    //         "path" => "https://picsum.photos/"
    //     ],
    //     [
    //         "name" => "About",
    //         "path" => "https://picsum.photos/"
    //     ]
    // ];
    // echo "<pre>";
    // var_dump($menuList[0]["path"]);
    // foreach ($menuList as $item => $value) {
    //     echo "<li><a href='$value[1]'>$value[0]</a></li>";
    // }


    // $products = [
    //     [1, "Product 1", 1000, 500],
    //     [2, "Product 2", 2000, 1000],
    //     [3, "Product 3", 3000, 1500]
    // ]
    $products = [
        [
            "id" => 1,
            "name" => "Product 1",
            "price" => 1000,
            "quantity" => 500,
            "image" => "https://picsum.photos/200/300",
            "description" => "Description 1",
            "status" => true
        ],
        [
            "id" => 2,
            "name" => "Product 2",
            "price" => 2000,
            "quantity" => 1000,
            "image" => "https://picsum.photos/200/300",
            "description" => "Description 2",
            "status" => false
        ],
        [
            "id" => 3,
            "name" => "Product 3",
            "price" => 2000,
            "quantity" => 1000,
            "image" => "https://picsum.photos/200/300",
            "description" => "Description 3",
            "status" => true
        ]
    ];
    // foreach ($products as $key => $value) {
    //     echo "<h3>$value[name]</h3>";
    // }


    ?>
    <!-- <ul>
        <?php
        foreach ($menuList as $item => $value) {
            echo "<li><a href='#'>$value</a></li>";
        }
        ?>
    </ul> -->



    <?php foreach ($products as $key => $value) : ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $value['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['name'] ?></h5>
                <p class="card-text">Description 1</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    <?php endforeach ?>

    <script>
        const menuList = [{
                id: 1,
                name: "Home Page",
                link: "https://picsum.photos/"
            },
            {
                id: 2,
                name: "About",
                link: "https://picsum.photos/"
            },
            {
                id: 3,
                name: "Contact",
                link: "https://picsum.photos/"
            },
        ]
        for (let item of menuList) {
            console.log(item.name);
        }
    </script>
</body>

</html>