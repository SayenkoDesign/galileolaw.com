<?php get_header(); ?>

<section class="categories">
<div class="inner_banner">
<img src="/wp-content/themes/galileo/img/03.jpg" style="width:100%;" class="img-responsive" />
<div class="container">
    <div class="container">
        <div class="row">
            <div class="cat_img">
                <div class="col-sm-8 col-xs-8">
                    <h1 class="light">Blog</h1>
                </div>
            </div>
        </div>
    </div>
</div>
</section> 


<section class="blog_post_2">
<div class="container">
<div class="row">
<div class=" col-sm-9 gray-bg">
<div class="row">
<div class="blog">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="col-sm-6 our_blog">
<div class="embed-container blog_image">
<?php if(get_field('youtubevideo')!="") { ?>
<iframe src="http://www.youtube.com/embed/<?php the_field('youtubevideo'); ?>" frameborder="0" style="width:100%; height:210px"> </iframe>
<?php } else if(has_post_thumbnail()) { ?>
<?php the_post_thumbnail(array(390,390),array( 'class' => 'img-responsive' )  ); ?>
<?php } ?>
</div>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_time('F jS, Y') ?></p>
<h5><?php echo get_the_excerpt(); ?></h5>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span>READ MORE ></span></a>
</div>
<?php endwhile; endif; ?>
<div class="clearfix"></div>
</div>
</div>
</div>
<?php get_sidebar(); ?>
</div>
</div>
</div>
</section>
<?php get_footer(); ?>
