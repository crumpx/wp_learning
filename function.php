<?php 

function learning_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts', 'learning_resources');

//Navigation Menus
//to register theme location with wp

register_nav_menus(array{
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
	// 'footer' => __('Footer Menu')
	// where ' Footer Menu ' will show in wp dashboard

})


 ?>