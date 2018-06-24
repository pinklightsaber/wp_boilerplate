<?php 
	
	function dl_enqueue_style() {
		$theme_data = wp_get_theme();

		/* Register Scripts */


		wp_register_style('reset', get_parent_theme_file_uri('/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen');
		wp_register_style('flickity', get_parent_theme_file_uri('/assets/css/flickity.css'), null, '2.1.0', 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen'); //minimizar diferencias visuales y registrar todo en style css
		wp_register_style('fakeStyle', get_parent_theme_file_uri('/assets/css/fakeStyle.css'), null, null, 'screen');
		// registrando archivos de flexslider
		wp_register_style('flexslider', get_parent_theme_file_uri('/assets/css/flexslider.css'), null, null, 'screen'); 
		wp_register_style('flexslider-rtl', get_parent_theme_file_uri('/assets/css/flexslider-rtl.css'), null, null, 'screen'); 
		wp_register_style('flexslider-rtl-min', get_parent_theme_file_uri('/assets/css/flexslider-rtl-min.css'), null, null, 'screen'); 

		

		
		/* Enqueue Scripts */
		wp_enqueue_style('flickity');
		wp_enqueue_style('mainStyle');

		global $post;

		if (is_page() && ($post->post_parent)) { //solo en el home o front page
			wp_enqueue_style('fakeStyle');
		}
		
		if (is_page('slider')){
			wp_enqueue_style('flexslider');
			wp_enqueue_style('flexslider-rtl');
			wp_enqueue_style('flexslider-rtl-min');
		}
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
?>