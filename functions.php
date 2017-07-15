<?php

// function change_excerpt_length($numbers){
// 	return 10;
// }
// add_filter('excerpt_length', 'change_excerpt_length');

Include 'post-types/redaktor.php';
// register_sidebars( 2, array( 'name' => 'sidebar %d' ) ); //to rejestruje 2 sidbary
 register_sidebars(1, array('name' => 'Sidebar 1', 'id' => 'sidebar-1'));


register_nav_menus( array(
  'primary'   => __( 'Top Menu', 'top' ),
  'secondary' => __( 'Bottom Menu', 'bottom' ),
) );



add_theme_support('post-thumbnails');
set_post_thumbnail_size(300, 420);
// add_theme_support('redaktor-thumbnails');
add_image_size( 'redaktor-thumbnails', 300, 420 );


add_action( 'wp_enqueue_scripts', 'add_my_script' );
function add_my_script() {
    wp_enqueue_script(
        'app/js', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/js/app.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

?>
