<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="one_project.css">

<body>
    <?php
    $host = "localhost";
    $login = "root";
    $password = "";
    $diviname = "waxom";
    $conect = new mysqli($host, $login, $password, $diviname);
    ?>

    <div class="hz">
        <div class="projects">
            <?php
            $id = $_GET["id"];
            if (empty($id) == true) {
                echo "ошибка поиска товара";
            }

            $sql = "SELECT * FROM `projects` WHERE `id` = '$id'";
            $resolt = $conect->query($sql);
            $roo = $resolt->fetch_assoc();
            if ($roo == false) {
                echo "ошибка поиска товара";
            } else {

            ?>
                <div class="project <?php echo  $roo["class"] ?>">
                    <img src="<?= $roo["img"] ?>" alt="<?= $roo["alt"] ?>">
                    <div class="project2">
                        <p><?= $roo["title"] ?></p>
                        <em><?= $roo["category"] ?></em>
                    </div>
                </div>
                <div>
                    <p><?= $roo["description"] ?></p>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>