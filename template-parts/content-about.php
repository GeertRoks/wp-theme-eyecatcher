<?php
/**
 * Template part for displaying page content in page-template-about.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyecatcher
 */

?>

<article id="about-main" <?php post_class(); ?>>
    <section class="about-biography">
        <div class="about-biography-left">
        	<header class="about-biography--header entry-header">
                <h1 class="section__title section__title--about"> <?php the_title(); ?> </h1> 
                <p class="section__subtitle section__subtitle--about"><?php /*the_secondary_title();*/ ?></p>
        	</header><!-- .entry-header -->

        	<div class="about-biography--content entry-content">
        		<?php the_content(); ?>
        	</div><!-- .entry-content -->

        	<?php if ( get_edit_post_link() ) : ?>
        		<footer class="entry-footer">
        			<?php
        			edit_post_link(
        				sprintf(
        					wp_kses(
        						/* translators: %s: Name of current post. Only visible to screen readers */
        						__( 'Edit <span class="screen-reader-text">%s</span>', 'eyecatcher' ),
        						array(
        							'span' => array(
        								'class' => array(),
        							),
        						)
        					),
        					wp_kses_post( get_the_title() )
        				),
        				'<span class="edit-link">',
        				'</span>'
        			);
        			?>
        		</footer><!-- .entry-footer -->
        	<?php endif; ?>
        </div>
    	<?php eyecatcher_post_thumbnail(); ?>
    </section>
</article><!-- #about-main -->
