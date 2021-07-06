<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyecatcher
 */

get_header();
?>

	<main id="primary" class="site-main">
<div class="container">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
                <h1><?php single_cat_title() ?></h1>
				<?php
				/* the_archive_title( '<h1 class="page-title">', '</h1>' ); */
				/* the_archive_description( '<div class="archive-description">', '</div>' ); */
				?>
			</header><!-- .page-header -->
<div class="gallery gallery-columns-3-responsive">

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
?>
<div class="gallery-item card">
<?php

				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'card' );
?>
</div>
<?php

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

</div>
</div>
	</main><!-- #main -->

<?php
/* get_sidebar(); */
get_footer();
