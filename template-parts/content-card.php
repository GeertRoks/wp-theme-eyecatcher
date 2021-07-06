<?php
/**
 * Template part for displaying cards in a gallery
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Eyecatcher
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php eyecatcher_post_thumbnail(); ?>

    <div class="card-content">

	<header class="card-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'portfolio' === get_post_type() ) :
			?>
			<div class="card-date">
				<?php
				eyecatcher_posted_on();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php

		if ( is_singular() ) :
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'eyecatcher' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		/* wp_link_pages( */
			/* array( */
				/* 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eyecatcher' ), */
				/* 'after'  => '</div>', */
			/* ) */
		/* ); */
        else :
            the_excerpt();
        endif;
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?
        /* php eyecatcher_entry_footer(); */ 
?>
	</footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
