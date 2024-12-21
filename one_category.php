<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="one_category.css">

<body>
    <?php
    $host = "localhost";
    $login = "root";
    $password = "";
    $diviname = "waxom";
    $conect = new mysqli($host, $login, $password, $diviname);
    $class = $_GET["class"];
    ?>

    <div class="hz">
        <div class="filter-buttons">
            <!-- <a href="tab2.php" class="button">All</a>
            <a href="one_category.php?class=web_design" class="button">Web Design</a>
            <a href="one_category.php?class=mobile_app" class="button">Mobile App</a>
            <a href="one_category.php?class=illustration" class="button">Illustration</a>
            <a href="one_category.php?class=photography" class="button">Photography</a> -->
            <a href="tab2.php" class="button">All</a>
            <a href="one_category.php?class=web_design" class="button">Web Design</a>
            <a href="one_category.php?class=mobile_app" class="button">Mobile App</a>
            <a href="one_category.php?class=illustration" class="button">Illustration</a>
            <a href="one_category.php?class=photography" class="button">Photography</a>
        </div>
        <div class="projects">
            <?php
            if (empty($class) == true) {
                echo "ошибка поиска товара";
            }

            $sql = "SELECT * FROM `projects` WHERE `class` = '$class'";
            $resolt = $conect->query($sql);
            for ($i = 0; $i < $resolt->num_rows; $i++) {
                $roo = $resolt->fetch_assoc();
                if ($roo == false) {
                    echo "ошибка поиска товара";
                } else { ?>

                    <div class="project <?php echo  $roo["class"] ?>">
                        <img src="<?= $roo["img"] ?>" alt="<?= $roo["alt"] ?>">
                        <div class="project2">
                            <p><?= $roo["title"] ?></p>
                            <p><?= $roo["id"] ?></p>
                            <em><?= $roo["class"] ?></em>
                        </div>
                    </div>
            <?php }
            } ?>

        </div>
    </div>
    <h3>kgk</h3>
</body>

</html>