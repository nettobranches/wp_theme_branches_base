<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Daily Cooking Custom
 */
?>
<?php get_header(); ?>

<?php
	if ( have_posts() ) : ?>

	<section class="posts" >
  	<div class="container">
    	<div class="row">
        	<div class="article">
            <h2>Articles</h2>
            	<div >
            		<?php
	 while ( have_posts() ): the_post(); ?>
                    	<div id="post-<?php the_ID(); ?>" class="col-md-12 col-sm-12">
                        <div class=" col-md-6 col-sm-6">
                        <a href="javascript:void(0)"><img class="img-responsive" src="" alt="Article"></a></div>
                        <div class="post-excerpt col-md-6 col-sm-6">
                        <h3><a class="" href="javascript:void(0)"> <?php the_title(); ?> </a></h3>
                        <p>4 feb, 2015</p>
                            <p><?php the_excerpt(); ?>.<br>  <a href="#">Read More</a>
</p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    </div>
                    
            </div>
        </div>
    </div>
  </section>

	

	<?php
	endif;	?>

<?php get_footer(); ?>