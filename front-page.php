<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyecatcher
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section id="about">
            <div class="container">
                <div class="about-text">
                    <h1>Geert Roks</h1>
                    <h3>Maker</h3>
                    <p>Amet cupiditate error voluptas quaerat possimus veniam! Minus blanditiis delectus rerum obcaecati delectus, asperiores cumque quae. Esse rerum delectus explicabo itaque nam ut dolore Atque esse aut possimus mollitia tempora?</p>
                    <div class="btn-wrapper">
                        <a href="/portfolio"> <div class="btn btn-dark">Check out my work</div> </a>
                        <a href="/contact"> <div class="btn btn-light">Get in contact</div> </a>
                    </div>
                </div>
                <div class="about-img">
                    <img src="https://source.unsplash.com/featured/?face,creative,portrait">
                </div>
            </div>
        </section>

        <section id="portfolio">
            <div class="container">
                <div class="gallery gallery-columns-3">
                <?php
			    /* Start the Loop */
                $loop = new WP_Query(
                    array(
                        'post_type' => 'portfolio', // This is the name of your post type - change this as required,
                        'posts_per_page' => 6 // This is the amount of posts per page you want to show
                    )
                );
                /* echo $loop; */
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                    <div class="gallery-item">
                    <?php
				    /*
				     * Include the Post-Type-specific template for the content.
				     * If you want to override this in a child theme, then include a file
				     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				     */
				    get_template_part( 'template-parts/content', get_post_type() );
                    ?>
                    </div>
                <?php
		        endwhile;
                wp_reset_postdata();
		        the_posts_navigation();
		        ?>

                </div>
                <div class="btn-wrapper btn-wrapper-center">
                    <a href="/portfolio"> <div class="btn btn-light">See more</div> </a>
                </div>
            </div>
        </section>


	</main><!-- #main -->

<?php
/* get_sidebar(); */
get_footer();
?>
