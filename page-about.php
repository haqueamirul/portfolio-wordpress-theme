<?php 
/*
Template Name: About
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
                    <h2><?php _e('About Company','softall'); ?></h2>
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
</section>

<!-- 
================================================== 
    Company Description Section Start
================================================== -->
<?php if ( $soft_all['company-title'] ): ?>
	

<?php global $soft_all; ?>
<section class="company-description">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-delay=".3s" >
                <img src="<?php echo $soft_all['company-image']['url']; ?>" alt="" class="img-responsive">
            </div>
            <div class="col-md-6">
                <div class="block">
                    <h3 class="subtitle wow fadeInUp" data-wow-delay=".3s" data-wow-duration="500ms"><?php echo $soft_all['company-title']; ?></h3>
                    <p  class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration="500ms">
                        <?php echo $soft_all['company-content']; ?></p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>

<!-- 
================================================== 
    Company Feature Section Start
================================================== -->
<section class="about-feature clearfix">
    <div class="container-fluid">
        <div class="row">
            <?php if ( !dynamic_sidebar('about-sidebar') ) {
            	echo 'Sidebar Not active';
            }?>
        </div>
    </div>
</section>


<!-- 
================================================== 
    Team Section Start
================================================== -->
<section id="team">
    <div class="container">
        <div class="row">
            <h2 class="subtitle text-center"><?php _e('Meet The Team','softall'); ?></h2>

            <?php
            	$ourteam = new WP_query(array(
            		'post_type' => 'team',
            		'posts_per_page' => 4
            	));

            	while ( $ourteam->have_posts() ) : $ourteam->the_post(); 

            	$designation = get_post_meta( get_the_ID(), '_softall_designation', true);
            	$facebook = get_post_meta( get_the_ID(), '_softall_facebook_link', true);
            	$twitter = get_post_meta( get_the_ID(), '_softall_twitter_link', true);
            	$linkedin = get_post_meta( get_the_ID(), '_softall_linkedin_link', true);
            	$google = get_post_meta( get_the_ID(), '_softall_google_link', true);
            ?>

            <div class="col-md-3">
                <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                    <div class="team-img">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <h3 class="team_name"><?php the_title(); ?></h3>
                    <p class="team_designation"><?php echo $designation; ?></p>
                    <p class="team_text"><?php the_content(); ?> </p>
                    <p class="social-icons">
                    	<?php if ( $facebook ): ?>
                        <a href="<?php echo $facebook; ?>" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                        <?php endif; 

                        	if ( $twitter ) : 
                        ?>
                        <a href="<?php echo $twitter; ?>" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                       <?php endif;

                       	if( $linkedin ) :
                       ?>
                        <a href="<?php echo $linkedin; ?>" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
	                    <?php endif;
	                    	if( $google ) :
	                    ?>
                        <a href="<?php echo $google; ?>" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                    	<?php endif; ?>
                    </p>
                </div>
            </div>

        	<?php endwhile; ?>

           
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


<?php  get_footer(); ?>