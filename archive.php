<?php
/**
 * The template for displaying archive pages
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
				if ( have_posts() ) : ?>

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
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
