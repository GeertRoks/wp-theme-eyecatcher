<?php
/**
 * The template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyecatcher
 */

get_header();
/* get_sidebar(); */
?>

	<main id="primary" class="site-main">
        <div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'about' );

		endwhile; // End of the loop.
		?>

        </div>
	</main><!-- #main -->

<?php
get_footer();
