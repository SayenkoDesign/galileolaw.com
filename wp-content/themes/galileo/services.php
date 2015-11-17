<?php
/*
Template Name: Services
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
</section> 





<section class="overview">
<div class="container">
<div class="row">

<div class="col-sm-12">
<?php the_content();?>

</div>

</div>
</div>
</section>

<div>
<!--========================TAB-START==============================-->

<section class="our_word">
<div class="container">

<div class="row">



<?php the_field('service_cta'); ?>
&nbsp;
</div>
<div class="row">

<div class="col-sm-4">
  <!-- Nav tabs -->
  
  <ul class="nav nav-tabs g_nav" role="tablist">
  <?php $i=1;if( have_rows('service_content') ):  while ( have_rows('service_content') ) : the_row(); ?>

    <li role="presentation" <?php if($i=='1') {?>class="active"<?php } ?>><a href="#TAB-<?php echo $i; ?>" aria-controls="TAB-<?php echo $i; ?>" role="tab" data-toggle="tab"><?php the_sub_field('title') ?> <i class="fa fa-angle-right"></i></a></li>
  <?php $i++; endwhile; endif; ?>
  </ul>
</div>  

  <!-- Tab panes -->
  <div class="col-sm-8">
  <div class="tab-content">
  <?php $i=1;if( have_rows('service_content') ):  while ( have_rows('service_content') ) : the_row(); ?>
    <div role="tabpanel" class="tab-pane  <?php if($i=='1') {?>active<?php } ?>" id="TAB-<?php echo $i; ?>">
		<?php the_sub_field('content') ?>
    </div>
    <?php $i++; endwhile; endif; ?>    
  </div>
  </div>

</div>
<div class="clearfix"></div>
<!--========================TAB-END==============================-->
</div>
</div>



</section>


<?php endwhile; endif; ?>
<?php get_footer(); ?>
