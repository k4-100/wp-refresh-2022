<?php

    function load_css(){
        wp_enqueue_style( 
            "wp-refresh-2022-basic-css", // nazwa stylu
            get_template_directory_uri() . '/style.css', //scieżka do stylu
            array(), //zależności
            "0.0.1" //wersja
        );
    }

    function load_js(){
        wp_enqueue_script(
            "wp-refresh-2022-basic-js",
            get_template_directory_uri() . '/js/main.js',
            array(),
            "0.0.1"
        );
    }


    //##########
    // add_*
    //#########
    add_action(
        "wp_enqueue_scripts",
        "load_css"
    );

    add_action(
        "wp_enqueue_scripts",
        "load_js"
    );

    // pozycje menu 
    register_nav_menus(
        array(
            // nazwa => identyfikator, theme
            "top-menu" => __(
                "Top Menu",
                "theme"
            )
        )
    );
?>