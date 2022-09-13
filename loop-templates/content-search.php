<?php
/**
 * Search results partial template
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class('bg-gray p-3 mb-3'); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header ">

		<?php
		the_title(
			sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h5>'
		);
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">

				<?php foranequine_posted_on(); ?>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">

		<?php the_excerpt(); ?>

	</div><!-- .entry-summary -->

	<div class="entry-footer">

		<?php foranequine_entry_footer(); ?>

	</div><!-- .entry-footer -->

</article><!-- #post-## -->
