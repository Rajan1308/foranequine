<?php
/**
 * Partial template for content in page.php
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

		<?php
		the_content();
		foranequine_link_pages();
		?>

	</div><!-- .entry-content -->

	<div class="entry-footer">

		<?php foranequine_edit_post_link(); ?>

	</div><!-- .entry-footer -->

</article><!-- #post-## -->
