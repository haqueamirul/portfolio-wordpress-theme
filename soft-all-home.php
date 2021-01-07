<?php 
/*
Template Name: Soft-all Homepage
*/

get_header(); ?>
        
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <?php if ( $soft_all['slider-title'] || $soft_all['slider-description'] ): ?>
            
        
        <section id="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow <?php global $soft_all; echo $soft_all['slider-animate'];
                                ?>" data-wow-delay=".3s">
                            
                            <!-- Slider -->
                            <section class="cd-intro">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span><?php global $soft_all; echo $soft_all['slider-title'];
                                ?></span><br>
                                <span class="cd-words-wrapper">
                                    <?php  if( is_array($soft_all['slider-service-name'])) { 
                                            $x = 0;
                                        ?>

                                        <?php foreach($soft_all['slider-service-name'] as $single) {
                                            $x++; 
                                            ?>

                                    <b class="<?php if($x == 1){ echo 'is-visible';}?>"><?php echo $single; ?></b>


                                <?php } ?>
                            <?php } ?>

                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    <?php echo $soft_all['slider-description']; ?>
                                </h2>
                                <?php if ( $soft_all['slider-button-name'] ) : ?>
                                <a class="btn-lines dark light wow fadeInUp animated smooth-scroll btn btn-default btn-green" data-wow-delay=".9s" href="#works" data-section="#works"><?php echo $soft_all['slider-button-name']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <?php endif ?>
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <?php if ( $soft_all['about-title'] || $soft_all['about-content'] ): ?>
                
            
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow <?php echo $soft_all['about-animate']; ?>" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                <?php echo $soft_all['about-title']; ?>
                                </h2>
                                <p>
                                    <?php echo $soft_all['about-content']; ?>
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <img src="<?php echo $soft_all['about-image']['url']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            <?php endif ?>
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="works" class="works">
                <div class="container">
                    <?php if ( $soft_all['latest-title'] ): ?>
                    <div class="section-heading">
                        <h1 class="title wow <?php echo $soft_all['latest-work-animate']; ?>" data-wow-delay=".3s"><?php echo $soft_all['latest-title']; ?></h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            <?php echo $soft_all['latest-work-content']; ?>
                        </p>
                    </div>
                    <?php endif ?>
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
            </section> <!-- #works -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <?php 
                $services = new WP_Query(array(
                    'post_type'      => 'service',
                    'posts_per_page' => 6
                ));

                while ( $services->have_posts() ) : $services->the_post(); 

                $service_group_meta = get_post_meta( get_the_ID(), '_softall_services_group_meta', true);
            ?>
            <section id="feature">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s"><?php the_title(); ?></h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            <?php the_content(); ?>
                        </p>
                    </div>
                    <div class="row">

                        <?php  if( is_array($service_group_meta)) { 

                               foreach($service_group_meta as $single) { ?>

                        <div class="col-md-4 col-lg-4 col-xs-12">
                            <div class="media wow <?php echo $single['_softall_animate_name']; ?> animated" data-wow-duration="500ms" data-wow-delay="300ms">
                                <div class="media-left">
                                    <div class="icon">
                                        <i class="ion-ios-flask-outline"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $single['_softall_service_title']; ?></h4>
                                    <p><?php echo $single['_softall_service_description']; ?></p>
                                </div>
                            </div>
                        </div>

                        <?php } } ?>
                        
                    </div>
                </div>
            </section> <!-- /#feature -->
        <?php endwhile; ?>
                            
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
<?php get_footer(); ?>           