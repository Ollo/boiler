<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package boiler
 */
?>

<article>
	<header>
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header>

	<div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'boiler' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<?php edit_post_link( __( 'Edit', 'boiler' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
</article>
