<?php

//en funktion som ser till att vi laddar rätt stilmall till rätt sida:
function load_custom_styles()
{
    // Kontrollerar vilken sida som visas
    // Kollar om det är startsidan
    if (is_front_page()) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/CSS/index.css');
    }
    // Kolla om det är en specifik sidtyp
    elseif (is_page(get_option('page_on_front'))) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/CSS/index.css');
    } elseif (is_page('About')) { // About-sidan
        wp_enqueue_style('about-style', get_template_directory_uri() . '/CSS/about.css');
    } elseif (is_page('sports')) { // Sports-sidan
        wp_enqueue_style('sports-style', get_template_directory_uri() . '/CSS/sports.css');
    } elseif (is_page('schema')) { // Schema-sidan
        wp_enqueue_style('schema-style', get_template_directory_uri() . '/CSS/schema.css');
    } elseif (is_page('kontakt')) { // Kontakt-sidan
        wp_enqueue_style('kontakt-style', get_template_directory_uri() . '/CSS/contact.css');
    } elseif (is_page('booking')) { // boknings-sidan
        wp_enqueue_style('booking-style', get_template_directory_uri() . '/CSS/booking.css');
    } else { // övriga sidor:
        wp_enqueue_style('news-style', get_template_directory_uri() . '/CSS/news.css');
    }
}
add_action('wp_enqueue_scripts', 'load_custom_styles');


//registrerar navigeringsmeny:
function register_my_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu')
        )
    );
}
add_action('init', 'register_my_menus');
add_action('wp_nav_menu', function ($args) {
    echo '<pre>';
    print_r($args);
    echo '</pre>';
});


// Adderar klasser till <li> elementen
function add_additional_class_on_li($classes, $item, $args)
{
    $classes[] = 'link'; // här definieras vilken klass vi ska ha
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 3);


// Samma som ovan fast för ankartags i nav-menyn
function add_link_atts($atts, $item, $args)
{
    $atts['class'] = 'link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts', 10, 3);


//funktion som reglerar längden på excerpts:
function custom_excerpt_length($length)
{
    return 20; // Ange det antal ord du vill ha, t.ex. 20
}
add_filter('excerpt_length', 'custom_excerpt_length');

?>