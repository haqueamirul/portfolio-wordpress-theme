<?php 
/**
 * The sidebar containing the top footer section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softall
 */

if ( get_theme_mod('header_text') ) { ?>

<style type="text/css">
	#call-to-action{
		background-color: <?php echo get_theme_mod('footer-bacground-color'); ?>;
	}
</style>
<section id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo get_theme_mod('header_text'); ?></h2>
                    <?php if ( get_theme_mod('header_textarea') ) : ?>
                    <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms"><?php echo get_theme_mod('header_textarea'); ?></p>
                	<?php endif; 

                	if ( get_theme_mod('button_text') ) : ?>

                    <a href="<?php echo get_theme_mod('button_link'); ?>" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms"><?php echo get_theme_mod('button_text'); ?></a>
                	<?php endif; ?>
                </div>
            </div>
            
        </div>
    </div>
</section>
 <?php } ?>
