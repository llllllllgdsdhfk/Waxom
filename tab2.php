<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style_top2.css">

<body>
    <?php
    $host = "localhost";
    $login = "root";
    $password = "";
    $diviname = "waxom";
    $conect = new mysqli($host, $login, $password, $diviname);
    // print_r($conect);
    ?>

<div class="preloader">
<div class="loading-container">
        <div class="loading-text">Loading</div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
    <div class="cube">
        <div class="face front"></div>
        <div class="face back"></div>
        <div class="face right"></div>
        <div class="face left"></div>
        <div class="face top"></div>
        <div class="face bottom"></div>
    </div>
</div>

<div class="filter-buttons">
        <a href="tab2.php" class="<?php if ('tab2.php' == 'tab2.php') {?>
                button active
           <?php } ?>">All</a>
        <a href="one_category.php?category=Photography,Nature" class="button">Web Design</a>
        <a href="one_category.php?category=Graphic_Design,Mock-Up" class="button">Mobile App</a>
        <a href="one_category.php?category=Photography,Holiday" class="button">Illustration</a>
        <a href="one_category.php?category=Photography" class="button">Photography</a>
    </div>
    <div class="projects">

        <?php

        $sql = "SELECT * FROM `projects`";
        $resolt = $conect->query($sql);
        for ($i = 0; $i < $resolt->num_rows; $i++) {
            $roo = $resolt->fetch_assoc();
        ?>

            <div class="project <?php echo  $roo["class"] ?>">
                <img src="<?= $roo["img"] ?>" alt="<?= $roo["alt"] ?>"><div class="project2">
                    <p><?= $roo["title"] ?></p>
                    <em><?= $roo["category"] ?></em>
                </div>
            </div>
        <?php }

        ?>
    </div>
    <script src="script_top2.js"></script>
</body>

</html>