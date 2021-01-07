<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softall
 */

?>

    <?php get_template_part( 'template-parts/footer/top', 'footer' ); ?>
        <!--
        ==================================================
        Footer Section Start
        ================================================== -->
        <?php get_template_part( 'template-parts/footer/footer', 'socialicon' ); ?>

          <?php wp_footer(); ?>  
    </body>
</html>
