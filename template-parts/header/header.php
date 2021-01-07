<style type="text/css">
	header{
		background-color: <?php echo get_theme_mod('header-background'); ?> !important;
	}
	.main-menu .navbar-nav li a{
		color: <?php echo get_theme_mod('menu-background'); ?> !important;
	}
	.main-menu .navbar-nav li a:hover{
		color: <?php echo get_theme_mod('hover-color'); ?> !important;
	}
	.navbar-nav .dropdown-menu, .navbar-nav .dropdown.megamenu ul.dropdown-menu {
	background: <?php echo get_theme_mod('dropdown-background'); ?>;
	
}
</style>

<header id="top-bar" class="navbar-fixed-top animated-header">
    <div class="container">
    	<!-- /logo -->
        <?php get_template_part( 'template-parts/header/logo' ); ?>
        <!-- /main nav -->
        <?php get_template_part( 'template-parts/header/navigation' ); ?>
    </div>
</header>