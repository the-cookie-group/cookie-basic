<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cookiebasic
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main frontpage-main">
        <!-- Video section -->
        <section class="first-video">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-12">
                        <!-- Video ratio 1:1 for mobile devices -->
                        <video id="main-video-mobile" class="hidein__desktop" preload="auto" loop autoplay muted playsinline>
                            <source src="<?php echo get_template_directory_uri() ?>/resources/video/video.mp4" type="video/mp4">
                        </video>
                        <!-- Video other ratio for computer desktop screens -->
                        <video id="main-video-desktop" class="hidein__phone" preload="auto" loop autoplay muted playsinline>
                            <source src="<?php echo get_template_directory_uri() ?>/resources/video/video-desktop.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </section>
        <!-- Second section -->
        <section class="second-section section-min-height">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 second-text-description">
                        <div class="text">
                            <?php
                            // query for the about page
                            $your_query = new WP_Query('pagename=description');
                            // "loop" through query (even though it's just one page) 
                            while ($your_query->have_posts()) : $your_query->the_post();
                                the_content();
                            endwhile;
                            // reset post data (important!)
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="photo"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Third section -->
        <section class="third-section">
            <div class="container-fluid p-0">
                <div class="row no-gutters spanlist">
                    <?php
					wp_nav_menu(array(
						'theme_location' => 'menu-2',
                        'menu_id'        => 'ck-menu-2',
                        'theme_class'    => 'ck-menu-2-class'
					));
					?>
                </div>
            </div>
        </section>
        <!-- Fourth section -->
        <section class="fourth-section space-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <?php
                        // query for the about page
                        $your_query = new WP_Query('pagename=content');
                        // "loop" through query (even though it's just one page) 
                        while ($your_query->have_posts()) : $your_query->the_post();
                            the_content();
                        endwhile;
                        // reset post data (important!)
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fifth section (Informations) -->
        <section class="fifth-section">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-12 col-md-6 fifth-text">
                        <div class="space-padding section-content">
                            <?php
                            // query for the about page
                            $your_query = new WP_Query('pagename=informations');
                            // "loop" through query (even though it's just one page) 
                            while ($your_query->have_posts()) : $your_query->the_post();
                                the_content();
                            endwhile;
                            // reset post data (important!)
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="photo section-min-height"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
get_sidebar();
get_footer();
