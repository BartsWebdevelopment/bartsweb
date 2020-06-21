<?php





function barts_files(){
    wp_enqueue_script('main-barts-javascript', get_theme_file_uri('/js/top-navigation.js'), NULL, '1.0', true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100&display=swap');
    wp_enqueue_style('barts_main_styles', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'barts_files');

