<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="categories">
<div class="inner_banner">
<img src="http://www.galileolaw.com/wp-content/uploads/2015/11/151031-blog-tacoma-narrows-mid-res.jpg" style="width:100%;"class="img-responsive" />

<div class="container">
<div class="row">
<div class="cat_img">
<div class="col-sm-8 col-xs-8">
<h1 class="<?php the_field('heading_color') ?>"><?php the_title(); ?></h1>
</div>
</div>
</div>
</div></div>
</section> 


<section class="blog_post_2">
<div class="container">
<div class="row">
<div class="col-sm-8 gray-bg">
<div class="row">
<div class="blog_commant">
<?php if(get_field('youtubevideo')!="") { ?>
<iframe src="http://www.youtube.com/embed/<?php the_field('youtubevideo'); ?>" frameborder="0" width="100%" height="350px"> </iframe>
<?php } else if(has_post_thumbnail()) { ?>
<?php the_post_thumbnail('large',array( 'class' => 'img-responsive' )  ); ?>
<?php } ?>
<div class="col-sm-12" style="height:30px;"></div>

<?php the_content();?>

<div class="col-sm-12" style="height:80px;"></div>

<?php comments_template(); ?>
</div>
</div>
</div>
<?php get_sidebar(); ?>  
</div>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
