<?php

/*

* Plugin Name: Responsive popup-form

* Plugin URI: https://clarahelleroe.dk/storyscaping/responsive-popup-form

* Description: This is a responsive popup-form plugin for the  company Kogle. The Plugin is based on HTML5, CSS, JS and PHP

* Version: 0.1.2

* Author: Clara Hellerøe

* Author: https://clarahelleroe.dk/storyscaping/responsive-popup-form

* License: GPL2

*/





# Creating a responsive popup form

function responsive_popup_form()

{



    $content = '';

    $content .= '<div id="popupboks">';

    $content .= '<div class="popupwrap">';

    $content .= '<div class="popupindhold">';

    $content .= ' <p id="closepopupbutton">x</p>';

    $content .= '<h3 id="overskrift">Koglebryg Take-Off</h3>';

    $content .= ' <p id="dato">01.05.2020</p>';

    $content .= '<p id="tekst"><img alt="raketkogle" id="indholdanimation" src="'.plugins_url("responsive-popup-form/img/raket.gif").'">Tilmeld dig til vores Take-Off arrangement ved at indtaste din e-mail nedenfor. Herefter får du tilsendt mere information om arrangementet</p>';

    $content .= '<p id="nyhedsbrev">Du tilmelder dig samtidig vores nyhedsbrev</p>';

    $content .= '<div>';

    $content .= '<form id="tilmelding">';

    $content .= '<label for="email"></label>';

    $content .= '<input type="text" id="email" name="email" placeholder="Indtast din e-mail">';

    $content .= '</form>';

    $content .= '<div id="closepopupbutton">';

    $content .= '<button id="tilmeldknap" type="button">Tilmeld</button>';

    $content .= '</div>';

    $content .= '</div>';

    $content .= '</div>';

    $content .= '</div>';

    $content .= '</div>';


    return $content;

    

}

    #Tilføje en shortcode, hvor den første del er et unikt selvvalgt navn og anden del er navnet på funktionen

    add_shortcode('show_responsive_popup_form','responsive_popup_form');



    #Use action Hook to execute wp_enqueue_scripts with the function register_styles_and_scripts_for_responsive_discount_popup_plugin

    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_responsive_popup_form');



    

    # Enqueue stylesheets and javascript files

    function register_styles_and_scripts_for_responsive_popup_form() 

    {

        wp_enqueue_style('CustomFonts','https://fonts.googleapis.com/css2?family=Caveat&family=Work+Sans:wght@300&display=swap');

        

        wp_enqueue_style('CustomStylesheet', plugins_url('responsive-popup-form/css/style.css'));

        

        wp_deregister_script('jquery');



        wp_enqueue_script('CustomJqueryScript','https://code.jquery.com/jquery-2.1.1.min.js', array(), null, true);

        

        wp_enqueue_script('CustomMaterializeScript','https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js', array('CustomJqueryScript'), null, true);
        
        
        wp_enqueue_script('CustomScript', plugins_url('responsive-popup-form/js/script.js'), array('CustomMaterializeScript'), null, true);

    }
    ?>
