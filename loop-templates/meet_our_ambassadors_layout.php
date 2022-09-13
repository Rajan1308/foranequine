<?php
/**
 * Hero setup
 *
 * @package foranequine
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$pageID = get_the_ID();

$socical_media_profile = get_field('socical_media_profile');

?>

<div class="col-lg-4 col-md-6 mb-4">
  <div class="equine-mbassadors-box">
    <a href="<?php the_permalink(); ?>"><img src="<?= get_the_post_thumbnail_url( $the_query->ID )?>" alt="<?= get_the_title($the_query->ID); ?>"></a>
    <?php if($socical_media_profile):?>
      <div class="social-media-overlay">
        <div class="follow">
          <?php if($socical_media_profile['smp_facebook_link']):?><a href="<?= $socical_media_profile['smp_facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
          <?php if($socical_media_profile['smp_twitter_link']):?><a href="<?= $socical_media_profile['smp_twitter_link'] ?>"><i class="fab fa-twitter"></i></a><?php endif; ?>
          <?php if($socical_media_profile['smp_instagram_link']):?><a href="<?= $socical_media_profile['smp_instagram_link'] ?>"><i class="fab fa-instagram"></i></a><?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    <div class="content">
      <h5><?= get_the_title($the_query->ID); ?></h5>
      <p class="m-0"><?php the_field('am_sub_title') ?></p>
    </div>
  </div>
</div>
