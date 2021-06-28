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
                        <div class="btn btn-dark">Check out my work</div>
                        <div class="btn btn-light">Get in contact</div>
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
		if ( have_posts() ) :

            $count = 0;
			/* Start the Loop */
			while ( have_posts() && $count < 6 ) :
                ?>
            <div class="gallery-item">
                <?php
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );
                ?>
                    </div>
                <?php
                $count++;
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

                </div>
<div class="btn-wrapper btn-wrapper-center">
                <div class="btn btn-light">See more</div>
</div>
            </div>
        </section>


	</main><!-- #main -->

<?php
/* get_sidebar(); */
get_footer();
?>
