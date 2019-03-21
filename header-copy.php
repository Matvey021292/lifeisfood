<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cooked
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--  <div class="fixed-simple-list">
            <?php echo do_shortcode('[wp-favorite-posts]') ?>    
        </div> -->

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cooked'); ?></a>

    <header id="masthead" class="site-header">
        <!-- 	<div class="site-branding">
				<?php
        the_custom_logo();
        if (is_front_page() && is_home()) :
            ?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
        else :
            ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
        endif;
        $cooked_description = get_bloginfo('description', 'display');
        if ($cooked_description || is_customize_preview()) :
            ?>
				<p class="site-description"><?php echo $cooked_description; ?></p>
			<?php endif; ?>
		</div> -->

        <!-- <nav class="navbar navbar-expand-md navbar-light bg-light  justify-content-end" role="navigation">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand text-uppercase" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
				<?php
        wp_nav_menu(array(
            'theme_location' => 'menu-1',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker(),
        ));
        ?>
          </nav> -->

        <br>
        <hr>
        <?php include 'carousel.php'; ?>
        <hr>
    </header>

    <div class="mainMenu d-flex align-items-center justify-content-between">
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true"></i>
        </div>
        <div class="logo-area">
            <a href="index.html"><?php include "logo.php" ?></a>
        </div>
        <!-- Nav -->
        <div class="sonarNav wow fadeInUp" data-wow-delay="1s">
            <nav>
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about-me.html">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <div class="logo-area">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php
                                include "logo.php"
                                ?>
                            </a>
                        </div>

                        <div class="menu-content-area d-flex align-items-center">
                            <div class="header-social-area d-flex align-items-center">
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                   data-original-title="Pinterest"><i class="fa fa-pinterest"
                                                                      aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                   data-original-title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                   data-original-title="Instagram"><i class="fa fa-instagram"
                                                                      aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                   data-original-title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" data-toggle="tooltip" data-placement="bottom" title=""
                                   data-original-title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>

                            <span class="navbar-toggler-icon" id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div id="content" class="site-content">
        <div class="grids d-flex justify-content-between">
            <div class="grid1"></div>
            <div class="grid2"></div>
            <div class="grid3"></div>
            <div class="grid4"></div>
            <div class="grid5"></div>
            <div class="grid6"></div>
            <div class="grid7"></div>
            <div class="grid8"></div>
            <div class="grid9"></div>
        </div>