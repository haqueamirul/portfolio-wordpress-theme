<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softall 
 */

get_header(); ?>

<section class="global-page-header">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="block">
	                <h2>Latest Post: <a href="<?php the_permalink(); ?>" title="Click Here"><?php the_title(); ?></a></h2>
	            </div>
	        </div>
	    </div>
	</div>
</section><!--/#Page header-->
<section id="blog-full-width">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

			</div>
			<?php get_sidebar(); ?>	
		</div>
	</div>
</section>

<?php
get_footer();
