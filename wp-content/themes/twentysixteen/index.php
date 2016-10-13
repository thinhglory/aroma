<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php /*if ( have_posts() ) : */?><!--

			<?php /*if ( is_home() && ! is_front_page() ) : */?>
				<header>
					<h1 class="page-title screen-reader-text"><?php /*single_post_title(); */?></h1>
				</header>
			<?php /*endif; */?>

			--><?php
/*			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		*/?>

        <!--SLIDER-->
            <div class="slider">
                <?php echo do_shortcode('[rev_slider alias="aroma"]');?>
            </div>
        <!--ABOUT US-->
            <div id="about_us">
                    <div class="content_about_us">
                        <div class="container">
                            <div class="title_iteam_page">
                                <h1>About Us</h1>
                                <div class="pattern">
                                    <img src="<?php echo get_template_directory_uri();?>/images/divider-gold-01.png" alt="">
                                </div>
                                <div class="about_us_text_info">
                                    <p class="bold">
                                        Eating is not merely a material pleasure. Eating well gives a spectacular joy to life and contributes immensely to<br> good will and happly companionship. It isofgreat importance to the marale.<br> Welcome to Aroma Restaurant!
                                    </p>
                                </div>
                            </div>

                            <div class="cnt_about_us">
                                <div class="col-md-6">
                                    <div class="images_about_us">
                                        <img
                                            src="<?php echo get_template_directory_uri(); ?>/images/aroma-FINAL1(2).jpg"
                                            alt="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="introduction_about_us">
                                        <p>
                                            Cuisine here is a way of life, with a pulsating food scene that is constanly
                                            evoling where traditional recipes experience contemporary movements..
                                            <i class="bold">Aroma Restaurant</i> is known to be one of the highest
                                            standard restaurant in
                                            Hue,
                                            the poetic and charming ancient capital of VietNam. Located right in the
                                            heart
                                            of city, <i class="bold">Aroma Restaurant</i> boasts romantic wide street
                                            views and provides a
                                            convenient parking lot for both individual guests and groups. We do not just
                                            bring you very best of Hue cuisine, but draws upon flavors from across the
                                            nation to devise a menu that combines the best of all the regions in Viet
                                            Nam.
                                        </p>
                                        <button>View Gallery</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--OPENING HOURS-->
            <div id="opening_hours">
                    <div class="bg_opening_hours">
                        <div class="container content_opening_hours">
                            <div class="title_iteam_page title_opening">
                                <h1>OPENING HOURS</h1>
                                <div class="pattern">
                                    <img src="<?php echo get_template_directory_uri();?>/images/divider-white-01.png" alt="">
                                </div>
                            </div>

                            <div class="content_opening_hours">
                                <h3>Call For Reservations</h3>
                                <h2>Monday to Sunday</h2>

                                <div class="hours">6:00 - 22:00</div>
                                <h4>RESERVATION NUMBER: +84 543 935 138</h4>
                            </div>
                        </div>
                    </div>
                </div>
        <!--MENU-->
            <div id="menu_restaurant">
                    <div class="bg_menu_restaurant">
                        <div class="content_menu_restaurant">
                            <div class="container">
                                <div class="title_iteam_page menu_text_info">
                                    <h1>Menu</h1>
                                    <div class="pattern">
                                        <img src="<?php echo get_template_directory_uri();?>/images/divider-gold-01.png"
                                             alt="">
                                    </div>
                                    <p class="bold">
                                        With the highest quality foods prepared with passion by our skillful chefs and
                                        the serivce that is second to<br> none, Aroma would be an ideal choice for you,
                                        whether you are looking for a perfect place to round off a <br> romantic candlelit
                                        dinner, an intimate family celebration or a high quality meal for large group.
                                    </p>
                                </div>

                                <div class="ctn_menu_restaurant">
                                    <div class="col-md-10 col-md-offset-1">
                                        <?php echo do_shortcode("[rm-menu display='tabs']"); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--Reservation-->
            <div id="reservation">
                    <div class="bg_reservation">
                        <div class="content_reservation">
                            <div class="container">
                                <div class="title_iteam_page">
                                    <h1>Reservation</h1>
                                    <div class="pattern">
                                        <img src="<?php echo get_template_directory_uri();?>/images/divider-gold-01.png"
                                             alt="">
                                    </div>

                                    <p>Reservation made less than 3 hours prior to arrival must be confirmed by calling
                                        our restaurant on +84 543 935 138</p>
                                </div>

                                <div class="ctn_reservation">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="bg_cnt_reservation">
                                            <div class="col-md-7 form_rev">
                                                <?php echo do_shortcode('[contact-form-7 id="52" title="Reservation"]');?>
                                            </div>

                                            <div class="col-md-4 col-md-offset-1 info_res">
                                                <div class="info_restaurant_reservation">
                                                    <h3 class="font_pattaya color_text">Welcome to Aroma</h3>
                                                    <div class="make_a_reservation">MAKE A RESERVATION</div>
                                                    <h3 class="font_pattaya color_text">Open Hours</h3>
                                                    <h3 class="date_text font_pattaya">Monday to Sunday</h3>
                                                    <div class="hours font_pattaya color_text">6:00 – 22:00</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--Gallery-->
                <div id="gallery_aroma">
                    <div class="gallery_aroma">
                        <div class="container">
                            <div class="title_iteam_page">
                                <h1>Gallery</h1>
                                <div class="pattern">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/divider-gold-01.png"
                                         alt="">
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="content_gallery_aroma">
                            <?php echo do_shortcode('[robo-gallery id="53"]'); ?>
                        </div>
                    </div>
                </div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
