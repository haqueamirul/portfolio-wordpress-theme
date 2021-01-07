
<style type="text/css">
	#footer{
		background-color: <?php echo get_theme_mod('copyright_bg_color'); ?>;
	}
</style>
<footer id="footer">
    <div class="container">
        <div class="col-md-8">
            <p class="copyright"><?php echo get_theme_mod('copyright_text'); ?> <a href="<?php echo get_theme_mod('company_link'); ?>"><?php echo get_theme_mod('company_name'); ?></a></p>
        </div>
        <div class="col-md-4">
            <!-- Social Media -->
            <ul class="social">
            	<?php if ( get_theme_mod('facebook') ) : ?>
                <li>
                    <a href="<?php echo get_theme_mod('facebook'); ?>" class="Facebook">
                        <i class="ion-social-facebook"></i>
                    </a>
                </li>
                <?php endif;

                if ( get_theme_mod('twiter_url') ) : ?>
                <li>
                    <a href="<?php echo get_theme_mod('twiter_url'); ?>" class="Twitter">
                        <i class="ion-social-twitter"></i>
                    </a>
                </li>
                <?php endif;

                if ( get_theme_mod('linkedin') ) : ?>
                <li>
                    <a href="<?php echo get_theme_mod('linkedin'); ?>" class="Linkedin">
                        <i class="ion-social-linkedin"></i>
                    </a>
                </li>
                <?php endif;

                if ( get_theme_mod('google_url') ) : ?>
                <li>
                    <a href="<?php echo get_theme_mod('google_url'); ?>" class="Google Plus">
                        <i class="ion-social-googleplus"></i>
                    </a>
                </li>
            	<?php endif; ?>
            </ul>
        </div>
    </div>
</footer> <!-- /#footer -->