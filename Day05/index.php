<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <?php include_once 'data.php' ?>
    <div class="container max-w-[1200px] m-auto">
        <header>
            <div class="banner">
                <img src="https://picsum.photos/1200/500" alt="">
            </div>
            <nav>
                <ul class="text-center">
                    <?php foreach ($menuList as $key => $value) : ?>
                        <li class="inline-block"><a href="<?php echo $value['path'] ?>"><?php echo $value['name'] ?></a></li>
                    <?php endforeach ?>
                </ul>

            </nav>
        </header>
        <main>
            <div class="grid grid-cols-4 gap-4">
                <?php foreach ($members as $key => $value) : ?>
                    <div>
                        <img src="<?php echo $value['image'] ?>" alt="">
                        <h3><?php echo $value['name'] ?></h3>
                        <p><?php echo $value['position'] ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </main>
        <footer></footer>
    </div>
</body>

</html>