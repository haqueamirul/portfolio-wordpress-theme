<?php 
/*
Template Name: Contact
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
                    <h2><?php _e('Contact','softall'); ?></h2>
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
</section><!--/#page-header-->


<!-- 
================================================== 
    Contact Section Start
================================================== -->
<section id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="block">
                    <h2 class="subtitle wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $soft_all['contact-us-title']; ?></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <?php echo $soft_all['contact-us-content']; ?>
                    </p>
                    <div class="contact-form">
                        <?php echo do_shortcode('[contact-form-7 id="248" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="map-area">
                    <h2 class="subtitle  wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".3s"><?php echo $soft_all['find-us-title']; ?></h2>
                    <p class="subtitle-des wow fadeInDown" data-wow-duration="500ms" data-wow-delay=".5s">
                        <?php echo $soft_all['fiend-us-content']; ?>
                        
                    </p>
                    <div class="map">
                        <?php echo $soft_all['contact-map']; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row address-details">
        	<?php if ( $soft_all['address-one'] ): ?>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <i class="ion-ios-location-outline"></i>
                    <h5><?php echo $soft_all['address-one']; ?></h5>
                </div>
            </div>
            <?php endif; 
            	if( $soft_all['address-two'] ) : 
            ?>
            <div class="col-md-3">
                <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                    <i class="ion-ios-location-outline"></i>
                    <h5><?php echo $soft_all['address-two']; ?></h5>
                </div>
            </div>
        	<?php endif; 
        		if( $soft_all['contact-email'] ) : 
        	?>
            <div class="col-md-3">
                <div class="email wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".7s">
                    <i class="ion-ios-email-outline"></i>
                    <p><?php echo $soft_all['contact-email']; ?></p>
                </div>
            </div>
            <?php endif;
            	if( $soft_all['contact-phone'] ) : 
            ?>
            <div class="col-md-3">
                <div class="phone wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".9s">
                    <i class="ion-ios-telephone-outline"></i>
                    <p><?php echo $soft_all['contact-phone']; ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>