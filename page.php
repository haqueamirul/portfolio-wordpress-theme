<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
	                <h2>Page With <?php the_title(); ?></h2>
	                <ol class="breadcrumb">
	                    <li>
	                        <a href="<?php echo esc_url( home_url() ); ?>">
	                            <i class="ion-ios-home"></i>
	                            Home
	                        </a>
	                    </li>
	                    <li class="active"><?php the_title(); ?></li>
	                </ol>
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
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>		

<?php
get_footer();
