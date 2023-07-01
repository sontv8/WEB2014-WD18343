<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            "quantity" => 500
        ],
        [
            "id" => 2,
            "name" => "Product 2",
            "price" => 2000,
            "quantity" => 1000
        ]
    ];
    foreach ($products as $key => $value) {
        echo "<h3>$value[name]</h3>";
    }


    ?>
    <!-- <ul>
        <?php
        foreach ($menuList as $item => $value) {
            echo "<li><a href='#'>$value</a></li>";
        }
        ?>
    </ul> -->

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