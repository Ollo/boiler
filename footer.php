<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>

		<footer class="site_footer">
			<div class="wrapper">
				<div class="site-info">
					<?php echo get_theme_mod( 'site-info' ); ?>
				</div>
				<p class="copy">&copy; <?php echo date('Y'); ?> Singularity Interactive LLC </p>
				<ul class="social">
					<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
				</ul>
			</div>
		</footer>
	</div> <?php // .container ?>

<?php wp_footer(); ?>

</body>
</html>