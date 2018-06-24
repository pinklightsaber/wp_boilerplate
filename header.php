<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo('charset') ?>"> <!-- en vez de utf-8 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<title><?php bloginfo('name') | bloginfo('description') ?></title> <!-- ver el titulo -->
	<?php wp_head() ?>
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header_menu' ) ); ?> 
<?php } ?> 