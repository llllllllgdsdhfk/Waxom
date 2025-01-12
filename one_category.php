
    <?php
    include 'components/header.php';
   include 'components/database.php';
    if (empty($_GET['class']) == false) {
        $class = $_GET["class"];
    } else {
        $class = false;
    }
    ?>
    <link rel="stylesheet" href="one_category.css">

    <div class="hz">
        <div class="filter-buttons">
            <!-- <a href="tab2.php" class="button">All</a>
            <a href="one_category.php?class=web_design" class="button">Web Design</a>
            <a href="one_category.php?class=mobile_app" class="button">Mobile App</a>
            <a href="one_category.php?class=illustration" class="button">Illustration</a>
            <a href="one_category.php?class=photography" class="button">Photography</a> -->

            <?php
            $button_bar = [
                ['All', ''],
                ['Web Design', 'web_design'],
                ['Mobile App', 'mobile_app'],
                ['Illustration', 'illustration'],
                ['Photography', 'photography']
            ];
            for ($i = 0; $i < 5; $i++) {
                $button_active = '';
                if ($class == $button_bar[$i][1]) {
                    $button_active = 'active';
                }
            ?>
                <a
                    href="one_category.php?class=<?= $button_bar[$i][1] ?>"
                    class="button <?= $button_active ?>"><?= $button_bar[$i][0] ?></a>
            <?php    } ?>
            <!-- <a href="one_category.php" class="button <?php if ($class == '') { ?>
                active
         <?php   } ?>">All</a>
            <a href="one_category.php?class=web_design" class="button <?php if ($class == 'web_design') { ?>
                active
         <?php   } ?>">Web Design</a>
            <a href="one_category.php?class=mobile_app" class="button">Mobile App</a>
            <a href="one_category.php?class=illustration" class="button">Illustration</a> -->
            <!-- <a href="one_category.php?class=photography" class="button">Photography</a> -->
        </div>
        <div class="projects">
            <?php

            if ($class == true) {
                $sql = "SELECT * FROM `projects` WHERE `class` = '$class'";
            } else {
                $sql = "SELECT * FROM `projects`";
            }
            $resolt = $conect->query($sql);
            for ($i = 0; $i < $resolt->num_rows; $i++) {
                $roo = $resolt->fetch_assoc();
                if ($roo == false) {
                    echo "ошибка поиска товара";
                } else { 
                    include 'components/cards_projects.php';

                 }
            } ?>

        </div>
    </div>
    <h3>kgk</h3>
<?php
include 'components/footer.php';
?>