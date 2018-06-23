<?php 

	$theme_functions = glob(get_template_directory() . '/functions/*.php');
	$wc_functions    = glob(get_template_directory() . '/functions/woocommerce/*.php');

	$files = array_merge($theme_functions, $wc_functions); //almacena información de la carpeta de la carpeta function

	foreach($files as $file) {
		if (basename($file, ".php") != 'back-compat') {
			require_once $file;
		}
	} //revisa los archivos y los incorpora en function para ser usado.


	/**
	 * This Theme only works in WordPress 4.8 or later.
	*/

	$GLOBALS['wp_min_version'] = '4.8';

	if ( version_compare( $GLOBALS['wp_version'], $GLOBALS['wp_min_version'], '<' ) ) {
		require get_template_directory() . '/functions/back-compat.php';
		return;
	}

?>