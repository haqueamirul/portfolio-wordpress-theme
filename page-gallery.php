<?php 
/*
Template Name: Gallery
*/

get_header(); ?>

<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php _e('Gallery','softall'); ?></h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo esc_url( home_url() ); ?>">
                                <i class="ion-ios-home"></i>
                                <?php _e('Home','softall'); ?>
                            </a>
                        </li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </section><!--/#Page header-->
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row">

                <?php 
                $portfolio = new WP_Query(array(
                    'post_type'      => 'portfolio',
                    'posts_per_page' => 6
                ));

                while ( $portfolio->have_posts() ) : $portfolio->the_post(); 

                $secondimage = get_post_meta( get_the_ID(), '_softall_porfolio_second_image', true);
                $textarea = get_post_meta( get_the_ID(), '_softall_portfolio_des', true);
                $details_link = get_post_meta( get_the_ID(), '_softall_button_details', true);
            ?>
                <div class="col-sm-4 col-xs-12">
                    <figure class="wow fadeInLeft animated portfolio-item animated" data-wow-duration="500ms" data-wow-delay="0ms" style="visibility: visible; animation-duration: 300ms; -webkit-animation-duration: 300ms; animation-delay: 0ms; -webkit-animation-delay: 0ms; animation-name: fadeInLeft; -webkit-animation-name: fadeInLeft;">
                        <div class="img-wrapper">
                            <?php the_post_thumbnail(); ?>
                            <div class="overlay">
                                <div class="buttons">
                                    <a rel="gallery" class="fancybox" href="<?php echo $secondimage; ?>"><?php _e('Demo','softall'); ?></a>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
                <?php endwhile; ?>
               
            </div>
        </div>
    </section>
<?php get_footer(); ?>