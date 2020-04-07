<?php

/*

* Plugin Name: Pop-Up Take-Off Plugin

* Plugin URI: https://clarahelleroe.dk/storyscaping/

* Description: This is a WordPress Pop-Up Plugin based on HTML5, CSS, JS and PHP

* Version: 2.3.0

* Author: Clara Hellerøe

* Author: https://clarahelleroe.dk/storyscaping/

* License: GPL2

*/



function popup_takeoff()

{



    $content = '';

    $content .= '<div id="popupboks">';

    $content .= '<div class="popupwrap">';
    
    $content .= '<div class="popupindhold">';
    
    $content .= '<div class="popupCloseButton">X</div>';

    $content .= '<h3 id="overskrift">Koglebryg Take-Off</h3>';

    $content .= '<p id="dato">01.05.2020</p>';

    $content .= '<p id="tekst"><img id="indholdanimation" src=" '.plugins_url("popup-take-off/img/raket.gif").' ">Tilmeld dig til vores Take-Off arrangement ved at indtaste din e-mail nedenfor. Herefter får du tilsendt mere information om arrangementet</p>';

    $content .= '<p id="nyhedsbrev">Du tilmelder dig samtidig vores nyhedsbrev</p>';

    $content .= '<div>';

    $content .= '<form id="tilmelding">';

    $content .= '<label for="email"></label>';

    $content .= '<input type="text" id="email" name="email" placeholder="Indtast din e-mail">';

    $content .= '</form>';

    $content .= '<button id="tilmeldknap" type="button">Tilmeld</button>';

    $content .= '</div>';

    $content .= '</div>';

    $content .= '</div>';

    $content .= '</div>';

    
    return $content;

    

}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the popup

    add_shortcode('show_popup_takeoff','popup_takeoff');



    # Take action - activate it

    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');



    function register_styles_and_scripts_for_plugin() 

    {

        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

        

        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:300,400,800&display=swap');

        

        wp_enqueue_style('CustomFontRoboto','https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap');

        

        wp_enqueue_style('CustomStylesheet', plugins_url('popup-take-off/css/style.css'));

        

        wp_deregister_script('jquery');

        

        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

        

        wp_enqueue_script('CustomScript', plugins_url('popup-take-off/js/script.js'), array('jquery'), null, true);

    }

