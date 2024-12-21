<?php
$host = "localhost";
$login = "root";
$password = "";
$diviname = "waxom";
$conect = new mysqli($host, $login, $password, $diviname);
$sql = "INSERT INTO `projects` (`id`, `img`, `alt`, `title`, `category`, `class`) VALUES (NULL, 'rocks2-450x340.jpg', 'Usus Legentis Videntur', 'maksimka', 'Photography, Holiday', 'illustration');";
$resolt = $conect->query($sql);
print_r($resolt);