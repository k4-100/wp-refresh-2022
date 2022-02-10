<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            wp_nav_menu(
                array(
                    // lokacja navbaru
                    "theme_location" => "top-menu",
                    // ustala nazwe klasy dla obiektu nadrzędnego <ul>
                    "menu_class" => "gambit_nav-links"
                )
            )
        ?>
    </header>
<?php 
    wp_head();
?>
<h1> HEADER </h1>
<hr>