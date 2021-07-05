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
        	<header class="entry-header">
        		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</header><!-- .entry-header -->

        	<div class="entry-content">
        		<?php
        		the_content();
        
        		wp_link_pages(
        			array(
        				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eyecatcher' ),
        				'after'  => '</div>',
        			)
        		);
        		?>
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
</article><!-- #post-<?php the_ID(); ?> -->