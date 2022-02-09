<?php
    wp_enqueue_style( 
        "wp-refresh-2022-basic-css", // nazwa stylu
        get_template_directory_uri() . '/style.css', //scieżka do stylu
        array(), //zależności
        "0.0.1" //wersja
    );
    wp_enqueue_script(
        "wp-refresh-2022-basic-js",
        get_template_directory_uri() . '/js/main.js',
        array(),
        "0.0.1"
    );
?>