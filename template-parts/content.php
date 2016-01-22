<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BakeryStore
 */

?>

<div class="blog-post spacing">
		<?php
			if ( is_single() ) {
				the_title( '<h2 class="spacing">', '</h2>' );
			} else {
				the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<p class="summary">
			<?php
			$categories = get_the_category();

			if ( ! empty( $categories ) ) {
    		foreach( $categories as $category ) {
      		echo $category->name;
    		}
			}?>
			<span class="date"><?php bakerystore_posted_on(); ?></span></p>
		<?php
		endif; ?>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bakerystore' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
