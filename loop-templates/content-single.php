<?php
/**
 * Single post partial template
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<p class="pt-4 text-uppercase"><?= get_the_date('F, Y', $pos->ID) ?> | <?= get_the_author('display_name'); ?></p>
	<div class="entry-content">
		<?php		the_content();	?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
