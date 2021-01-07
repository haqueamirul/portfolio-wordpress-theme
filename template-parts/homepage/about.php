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