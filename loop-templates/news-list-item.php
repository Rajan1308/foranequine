<?php 
$author_id=$the_query->post_author;
?>
<div class="col-md-4 mb-4">
    <div class="news-box">
        <div class="img-box">
            <a href="<?php the_permalink(); ?>"><img src="<?= get_the_post_thumbnail_url( $the_query->ID )?>" alt="" class="img-fluid"></a>
        </div>
        <span class="d-block mb-2 text-uppercase"><?= get_the_date('F, Y', $the_query->ID) ?> | <?php the_author_meta( 'user_nicename' , $author_id ); ?></span>
        <h3><?= get_the_title($the_query->ID); ?></h3>
    </div>
</div>