<?php
/*
Template Name: Video
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<?php /*?><section class="categories" <?php if ( has_post_thumbnail() ) { ?>style="background-image:url(<?php echo $feat_image; ?>)"<?php } ?>><?php */?>
<section class="categories" >
<div class="inner_banner">
<img src="<?php echo $feat_image; ?>" style="width:100%;" class="img-responsive" />
    <div class="container">
        <div class="row">
            <div class="cat_img">
                <div class="col-sm-8 col-xs-8">
                    <h1 class="<?php the_field('heading_color') ?>"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>

</section> 
<section class="overview">
<div class="our_word_3">
<div class="row">
<?php the_content(); ?>
</div>
</div>
</section>
<section class="videos">
<div class="container">
<div class="row">
<?php
$args = array(
				'post_type'=>'galileovideo',
				'posts_per_page' => -1,
				'orderby'=>'ID',
				'order' => 'DESC'
			);
$the_video = new WP_Query( $args );
while ($the_video->have_posts()) : $the_video->the_post();
?>
<div class="col-sm-6">
<div class="embed-container">
 <?php the_content(); ?>
</div>
</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>