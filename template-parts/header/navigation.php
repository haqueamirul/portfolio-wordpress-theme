<nav class="collapse navbar-collapse navbar-right" role="navigation">
            

    <?php
       	wp_nav_menu( array(
		    'theme_location'    => 'primary',
		    'depth'             => 2,
		    'container'         => 'div',
		    'container_class'   => 'main-menu',
		    'menu_class'        => 'nav navbar-nav navbar-right',
		    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		    'walker'            => new WP_Bootstrap_Navwalker())
		);
       ?>

</nav>