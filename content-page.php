<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Daily Cooking Custom
 */
?>
<div class="container">
	<div class="row">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
			</header>

			<div class="entry-content col-md-12 col-sm-12">
				<?php the_content(); ?>
				<?php
					wp_link_pages(array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'daily-cooking-custom' ),
						'after'  => '</div>',
					));
				?>
			</div>

			<footer class="entry-footer">
			</footer>
		</article><!-- #post-## -->
	</div>
</div>