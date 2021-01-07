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