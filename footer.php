<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'header_menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>
<?php if(is_page('slider')){?>
	<script> //js de flexslider
		$(window).load(function() {
  			$('.flexslider').flexslider({
    			animation: "slide"
  			});
		});
	</script>
<?php  } ?>
</body>
</html>