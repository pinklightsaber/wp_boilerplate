<?php get_header() ?>
<main class="content">
	<article>
		<div class="container">
			<?php if ( have_posts() ) { ?>
				<?php while ( have_posts() ) { ?>
					<?php the_post(); ?>
					<?php $image = get_field('img'); 
					$availability = get_field('availability');
					$rating = get_field_object('rating');
					$value_rating = $rating('value');
					$label = $rating['choices'][$value_rating]; //sacar el value p.e. Muy bueno, en vez de mb
					?>
					<!-- acf título -->
					<h1> <?php the_title() ?></h1> 
					<!-- acf img field-->
					<img src=" <?php echo $image ['url'] ?>" width="400">
					<!-- acf marca -->
					<p>marca: <?php the_field('marca') ?></p>
					<!-- dispinibilidad acf booleano -->
					<?php if ($availability) {
						echo "<p> Disponible </p>";
					} else {
						echo "<p> No disponible</p>"
					} ?>
					<!-- acf rating con rbuttom -->
					<p>Valoración del producto; <?php echo $label ?></p>
					<!-- acf descripción -->
					<?php the_field('descripcion') ?>


				<?php } ?>
			<?php } else { ?>
				<!-- Content -->
			<?php } wp_reset_query(); ?>
		</div>
	</article>
	
</main>

<?php get_footer() ?>