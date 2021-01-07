<?php 
/*
Template Name: Service
*/

get_header(); ?>

<?php global $soft_all; ?>

<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2><?php _e('Service','softall'); ?></h2>
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


<!-- 
================================================== 
    Service Page Section  Start
================================================== -->

			<?php 
                $services = new WP_Query(array(
                    'post_type'      => 'service',
                    'posts_per_page' => 6
                ));

                while ( $services->have_posts() ) : $services->the_post(); 

                $service_group_meta = get_post_meta( get_the_ID(), '_softall_services_group_meta', true);
            ?>

			<section id="service-page" class="pages service-page">
			    <div class="container">
			        <div class="row">
			            <div class="col-md-6">
			                <div class="block">
			                    <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"><?php the_title(); ?></h2>
			                    <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms"><?php the_content(); ?></p>
			                    <div class="row service-parts">


			                    	<?php  if( is_array($service_group_meta)) { 

                               				foreach($service_group_meta as $single) { ?>

			                        <div class="col-md-6">
			                            <div class="block wow fadeInUp animated" data-wow-duration="400ms" data-wow-delay="600ms">
			                                <i class="ion-ios-paper-outline"></i>
			                                <h4><?php echo $single['_softall_service_title']; ?></h4>
			                                <p><?php echo $single['_softall_service_description']; ?></p>
			                            </div>
			                        </div>

			                        <?php } } ?>
			                        
			                    </div>
			                </div>
			            </div>
			            <div class="col-md-6">
			                <div class="block">
			                    <?php the_post_thumbnail(); ?>
			                </div>
			            </div>
			        </div>
			    </div>
			</section>
			<?php endwhile; ?>


<!-- 
================================================== 
    Works Section Start
================================================== -->
<section class="works service-page">
    <div class="container">
    	<?php if ( $soft_all['latest-title'] ): ?>
        <h2 class="subtitle wow fadeInUp animated" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $soft_all['latest-title']; ?></h2>
            <p class="subtitle-des wow fadeInUp animated" data-wow-delay=".5s" data-wow-duration="500ms">
               <?php echo $soft_all['latest-work-content']; ?>
            </p>
        <?php endif; ?>
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


            <div class="col-sm-3">
                 <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                    <div class="img-wrapper">
                        <?php the_post_thumbnail(); ?>
                        <div class="overlay">
                            <div class="buttons">
                                <a rel="gallery" class="fancybox" href="<?php echo $secondimage; ?>"><?php _e('Demo','softall'); ?></a>        
                                <a target="_blank" href="<?php echo $details_link; ?>">Details</a>
                            </div>
                        </div>
                    </div>
                    <figcaption>
                        <h4>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>       
                            </a>
                        </h4>
                        <p>
                            <?php echo $textarea; ?>
                        </p>
                    </figcaption>
                </figure>
            </div>

           
            <?php endwhile;
	            wp_reset_postdata();
	         ?>
           

        </div>
    </div>
</section>
<!-- 
================================================== 
    Clients Section Start
================================================== -->
<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="subtitle text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $soft_all['client-title']; ?></h2>
                <p class="subtitle-des text-center wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s"><?php echo $soft_all['client-content']; ?></p>
                <div id="clients-logo" class="owl-carousel">
                    <?php if ( !dynamic_sidebar('client-sidebar') ) { }?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>