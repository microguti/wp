<?php 
/*
* Pro wordpress functions and definitions
* @package prowordpress
*/ 

if(!function_exists('prowordpress_setup')):
	function prowordpress_setup(){
		/*
		Añadimos default posts and comments rss feed links to head
		*/
		add_theme_support('automatic-feed-links');
		
		/*
		* Añadimos soporte a post thumbnails
		*/
		add_theme_support('post-thubnails');
	}
endif;
add_action('after_setup_theme','prowordpress_setup');

/*
* Enqueue scripts and styles
*/
function prowordpress_scripts_and_styles(){
	wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','prowordpress_scripts_and_styles');
?>