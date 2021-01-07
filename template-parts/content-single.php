<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package softall 
 */

?>

<article id="post-<?php the_ID(); ?>" class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms" <?php post_class(); ?>>
	<?php if ( the_post_thumbnail() ) : ?>
		<div class="blog-post-image">
	        <?php the_post_thumbnail('post-image'); ?>
	    </div>
	<?php endif; ?>
	<div class="blog-content">
        <h2 class="blogpost-title">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif; ?>
			</h2><?php
			

			if ( 'post' === get_post_type() ) : ?>
			<div class="blog-meta">
                <span><?php the_date('F d, Y'); ?></span>
                <span>by <a href=""><?php the_author(); ?></a></span>
            </div>
			<?php
			endif; ?>
	</div><!-- .entry-header -->

	<div class="blog-content">
		<p>
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<a class="screen-reader-text"> "%s"</a>', 'softall' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'softall' ),
				'after'  => '</div>',
			) );
		?>
		</p>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
