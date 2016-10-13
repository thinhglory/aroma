<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

    <!--LINK FONT-->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pattaya" rel="stylesheet">
    <!--LINK CSS BOOTSTRAP-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri() ?>/bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet"
          href="<?php echo get_template_directory_uri() ?>/font-awesome-4.6.3/css/font-awesome.min.css">
    <!--LINK JS JQUERY, BOOTSTRAP AND JS PAGE-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="site-header-main">
                <div class="container_template">
                    <section class="navigation">
                        <div class="nav-container">
                            <div class="col-md-2 logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
                            </div>
                            <nav class="col-md-7 menu_desktop">
                                <div class="menu_english">
                                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                                    <ul class="nav-list">
                                        <li>
                                            <a href="#home">Home</a>
                                        </li>
                                        <li>
                                            <a href="#about_us">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#menu">Menu</a>
                                        </li>
                                        <li>
                                            <a href="#reservation">Reservation</a>
                                        </li>
                                        <li>
                                            <a href="#special_event">Special Events</a>
                                        </li>
                                        <li>
                                            <a href="#gallery">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="col-md-3 contact_desktop">
                                <div class="body_contact_desktop">
                                    <div class="icon_tripadvispr">
                                        <!--<i class="fa fa-tripadvisor" aria-hidden="true"
                                           onclick="window.open('https://www.tripadvisor.com/Restaurant_Review-g293926-d3241378-Reviews-Aroma_Restaurant_Hue-Hue_Thua_Thien_Hue_Province.html-m24177')"></i>-->
                                        <a target="_blank"
                                           href="https://www.tripadvisor.co.uk/Restaurant_Review-g293926-d3241378-Reviews-Aroma_Restaurant_Hue-Hue_Thua_Thien_Hue_Province.html">
                                            <img
                                                src="<?php echo get_template_directory_uri(); ?>/images/tripadvisor_logo.png"/></a>
                                        <!--<div id="TA_socialButtonIcon482" class="TA_socialButtonIcon">
                                            <ul id="bOIvN0" class="TA_links sqQi8RKKZ">
                                                <li id="2NIL0wgnl" class="yLCMeu9d">
                                                    <a target="_blank"
                                                       href="https://www.tripadvisor.co.uk/Restaurant_Review-g293926-d3241378-Reviews-Aroma_Restaurant_Hue-Hue_Thua_Thien_Hue_Province.html">
                                                        <img src="<?php /*echo get_template_directory_uri(); */?>/images/tripadvisor_logo.png"/></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <script
                                            src="https://www.jscache.com/wejs?wtype=socialButtonIcon&amp;uniq=482&amp;locationId=3241378&amp;color=white&amp;size=med&amp;lang=en_UK&amp;display_version=2"></script>-->
                                    </div>

                                    <div class="icon_face">
                                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    </div>
                                    <div class="multilanguage_header">
                                        <i class="fa fa-globe" aria-hidden="true"></i>
                                        <div class="language_mul">
                                            <?php pll_the_languages(array('dropdown' => 1)); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


            </div><!-- .site-header-main -->

            <?php if (get_header_image()) : ?>
                <?php
                /**
                 * Filter the default twentysixteen custom header sizes attribute.
                 *
                 * @since Twenty Sixteen 1.0
                 *
                 * @param string $custom_header_sizes sizes attribute
                 * for Custom Header. Default '(max-width: 709px) 85vw,
                 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
                 */
                $custom_header_sizes = apply_filters('twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px');
                ?>
                <div class="header-image">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <img src="<?php header_image(); ?>"
                             srcset="<?php echo esc_attr(wp_get_attachment_image_srcset(get_custom_header()->attachment_id)); ?>"
                             sizes="<?php echo esc_attr($custom_header_sizes); ?>"
                             width="<?php echo esc_attr(get_custom_header()->width); ?>"
                             height="<?php echo esc_attr(get_custom_header()->height); ?>"
                             alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                    </a>
                </div><!-- .header-image -->
            <?php endif; // End header image check. ?>
        </header><!-- .site-header -->

		<div id="content" class="site-content">
