<?php
   /*
   Plugin Name: Prolo Finder
   Plugin URI: http://www.prolofinder.com
   Description: Prolo is the best way to add a product finder to your website. Use this plugin to embed a Prolo Finder on your WordPress site! 
   Version: 1.0
   Author: Prolo
   Author URI: http://www.prolofinder.com
   License: GPL2
   */

function prolofinder_init(){
	
	/*
		Only Run Code if this is a post or single page
	*/
	if(is_page() || is_single()){
		
		
		/* 		
			Runs when the shortcode is registered
			Pulls in collection_id attribute
		*/
		function prolo_mv_shortcode($atts){
			
			extract( shortcode_atts( array(
				'key' => 'invalid finder key',
			), $atts, 'prolo_mv_shortcode' ) );
			
			
			/* 
				Print values to page 
			*/
			return '<div id="ProloFinder"></div><script src="//embed.prolofinder.com/js/prolo.js?collection='.$key.'"></script>';
		}
		
		/* 
			Register the shortcode to the wp build 
		*/
		add_shortcode( 'prolofinder', 'prolo_mv_shortcode' );
		
	}
}


/* 
	Admin Menu
	Registers the plugin to the admin menu 
*/
function prolo_menu_page(){
    add_menu_page( 'Prolo Finder', 'Prolo', 'manage_options', 'prolo-finder/config.php', '', plugins_url( 'prolo-finder/img/prolo-brand.svg' ), 66 );
}

/*
	Register Events to fire with wp head
	Register Admin Menu
*/
add_action("wp_head", "prolofinder_init");
add_action( 'admin_menu', 'prolo_menu_page' );


?>