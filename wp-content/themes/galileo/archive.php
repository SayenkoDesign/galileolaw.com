<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  

<section class="categories">
<div class="inner_banner">
<img src="/wp-content/themes/galileo/img/03.jpg" style="width:100%;" class="img-responsive" />
<div class="container">
<div class="row">
<div class="cat_img">
<div class="col-sm-8 col-xs-8">
<?php /* If this is a category archive */ if (is_category()) { ?>
		<h1 class="light">Category : <?php single_cat_title(); ?></h1>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h1 class="light">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1 class="light">Archive for <?php the_time('F jS, Y'); ?></h1>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1 class="light">Archive for <?php the_time('F, Y'); ?></h1>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1 class="light">Archive for <?php the_time('Y'); ?></h1>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1 class="light">Author Archive</h1>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		

<div class="col-sm-8 col-xs-8">
<h1 class="light">Blog</h1>

 	  <?php } ?>
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

<?php while (have_posts()) : the_post(); ?>
<div class="col-sm-6">
<div class="embed-container">
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
