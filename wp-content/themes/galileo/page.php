<?php get_header(); ?>
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


<section class="blog_post">
<div class="container">
<div class="row">
<div class="col-sm-12">
<?php the_content();?>
</div> 
</div>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
