<?php get_header() ?>

<!-- <h1>Body de la página de inicio</h1>
<?php get_sidebar() ?> -->
<ul>
	
<?php
	$args = array(
		'post_type'		 => 'news',
		'posts_per_page' => 10,
	);

	$get_arg = new WP_Query( $args );
	while ( $get_arg->have_posts() ) {
		$get_arg->the_post();
	?>
	<li> 
		<?php the_post_thumbnail('medium') ?>
		<a href="<?php the_permalink() ?>">
		<?php the_title() ?></a>
		<?php the_excerpt() ?>
		<!-- <?php the_content() ?> -->
	</li>
		<!-- Content -->
	<?php } wp_reset_postdata();
?>


</ul>

<?php get_footer() ?>