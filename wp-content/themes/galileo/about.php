<?php
/*
Template Name: About
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
<section class="about_us">
<div class="container">
<h2 style="text-align: center;">GET TO KNOW GALILEO LAW</h2>
<div class="row">
<div class="col-sm-6">
<?php the_content(); ?>
</div>
<div class="col-sm-6">
<br>
<div class="embed-container">
          <iframe src="https://www.youtube.com/embed/WrgrKzxm6SA" frameborder="0" allowfullscreen></iframe>
        </div>
<br>
<h3>WHY WE’RE UNIQUE</h3>
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<?php
$i=1;
$args = array(
				'post_type'=>'galileowhy',
				'posts_per_page' => 10,
				'orderby'=>'ID',
				'order' => 'ASC'
			);
$the_why = new WP_Query( $args );
while ($the_why->have_posts()) : $the_why->the_post();
?>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
        <?php the_title(); ?>

        </a>
      </h4>
    </div>
    <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse">
      <div class="panel-body">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php $i++; endwhile; wp_reset_postdata(); ?>  
</div>
</div>
</div>
</div>
</div>
</section>

<section class="about_img">
<div class="container">
<div class="row">
<?php if( have_rows('team_member') ):  while ( have_rows('team_member') ) : the_row(); ?>
<div class="col-sm-4">
<img class="img-responsive" src="<?php the_sub_field('pic'); ?>"/>
<h3><?php the_sub_field('name'); ?></h3>
<h4><?php the_sub_field('position'); ?></h4>
<p><?php the_sub_field('info'); ?></p>
</div>
<?php endwhile; endif; ?>
</div>
</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>