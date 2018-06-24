<?php get_header() ?>

	<main class="content">
		<article>
			<div class="flexslider">
			  <ul class="slides">
				<?php
					$arg = array(
						'post_type'		 => 'post',
						'post_per_page'	 => 5,
						
					);
					$get_arg = new WP_Query( $arg );
					while ( $get_arg->have_posts() ) {
						$get_arg->the_post();
					?>
			    <li>
			    	<?php the_post_thumbnail('slideshow') ?>
			    	<p class="flex-caption"><?php the_title(); ?></p>
			    </li>

			    	<?php } wp_reset_postdata(); ?>
			  </ul>
			</div>
			
		</article>
	</main>

<?php get_footer() ?>