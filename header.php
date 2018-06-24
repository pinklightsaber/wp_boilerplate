<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo('charset') ?>"> <!-- en vez de utf-8 -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<title><?php bloginfo('name') | bloginfo('description') ?></title> <!-- ver el titulo -->
	<?php wp_head() ?>

	<?php if(is_page('slider')) { ?>
		<!-- css del flex -->
	<style type="text/css"> 
		.flex-caption {
		  width: 96%;
		  padding: 2%;
		  left: 0;
		  bottom: 0;
		  background: rgba(0,0,0,.5);
		  color: #fff;
		  text-shadow: 0 -1px 0 rgba(0,0,0,.3);
		  font-size: 14px;
		  line-height: 18px;
		}
	</style>
	<?php } ?>
		
</head>
<body>

<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<!-- adicionando parametros -->
	<?php wp_nav_menu( array( 
		'theme_location' => 'header-menu', 
		'container_class' => 'header_menu' ) ); ?> 
<?php } ?> 