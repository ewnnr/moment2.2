<?php

    add_action('init', 'register_my_menus');
    function register_my_menus(){
        register_nav_menus(array(
            'main_menu' => __('Huvudmeny')
        ));
    }
    add_theme_support( 'post-thumbnails' );


    function new_sidebar_widget_init() {
        register_sidebar(array(  
            'id'            => 'home_right_1',
            'name'          => 'home_right_1',
            'description' => 'Widget area',
            'before_widget' => '<div class="sidebar">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        ) );
     
    
}

add_action( 'widgets_init', 'new_sidebar_widget_init' );
    ?>


?>