<?php
/*
Template Name: Home 
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<section class="slider">
  <img src="<?php echo $feat_image; ?>" style="width:100%;" class="img-responsive" />
  <div class="carousel-caption">
    <div class=" container">
      <div class="c-box">
      <h2>We Represent People in Need, not Claim Numbers</h2>
<h3>WE ARE A LEADING LITIGATION PRACTICE FOR INSURANCE BAD FAITH CLAIMS, CATASTROPHIC COLLISION INJURIES, DIMINISHED VALUE & CONSTRUCTION SITE INJURIES</h3>
      </div>
      <a href="javascript:void(0)" class="btn btn-default btn-lg home_why">WHY US?</a> <a href="javascript:void(0)" class="btn btn-default btn-lg home_service">SERVICES</a> </div>
  </div>
</section>
<section class="learn_more">
  <div class="container">
    <div class="row">
      <?php if( have_rows('below_slider') ):  while ( have_rows('below_slider') ) : the_row(); ?>
      <div class="col-sm-4 text-center">
        <h4>
          <?php the_sub_field('title'); ?>
        </h4>
        <p>
          <?php the_sub_field('small_content'); ?>
        </p>
        <a href="<?php the_sub_field('link'); ?>" class="btn btn-default learn_btn">LEARN MORE</a> </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<section class="unique" id="homewhyus">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="unique_1">
<h2 class="text-center">WHY WE’RE UNIQUE</h2>
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
                <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                  <?php the_title(); ?>
                  </a> </h4>
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
        <div class="row">
          <div class="col-sm-12 col-xs-12">

            <a href="<?php echo get_permalink('7'); ?>" class="btn btn-default btn-lg btn-inverse">REVIEWS</a>
<a class="btn btn-default btn-lg home_why" href="<?php echo get_permalink('9'); ?>" ">ABOUT US</a>

          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/<?php the_field('why_us_video'); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="started">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 text-right">
        <h2>READY TO START THE CONVERSATION? </h2>
        <h1>LET’S TALK (206) 257-6556</h1>
      </div>
      <div class="col-sm-4 text-center"> 

<a class="btn btn-default btn-lg home_why" href="<?php echo get_permalink('15'); ?>" ">GET STARTED</a>

 </div>
    </div>
  </div>
</section>
<section class="services" id="homeservice">
  <div class="container">
    <div class="row">
      <h2 class="text-center">SERVICES</h2>
      <?php $i=0; if( have_rows('service_box') ):  while ( have_rows('service_box') ) : the_row(); ?>
      <div class="col-sm-4 servicebox">
        <h4>
          <?php the_sub_field('title'); ?>
        </h4>
        <p>
          <?php $i++; the_sub_field('small_content'); ?>
        </p>
        <a href="<?php the_sub_field('link'); ?>" class="learn_btn">LEARN MORE</a> </div>
      <?php if($i=='3'){ ?>
      <div class="clearfix"></div>
      <?php } ?>
      <?php endwhile; endif; ?>
      <div class="col-sm-4 text-center"> <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/man.png"/> </div>
    </div>
  </div>
</section>
<section class="clients">
  <div class="container">
    <div class="row">
      <?php the_content(); ?>
      <?php
$i=1;
$args = array(
				'post_type'=>'galileotestimonials',
				'posts_per_page' => 1,
				'orderby'=>'ID',
				'order' => 'ASC'
			);
$the_testi = new WP_Query( $args );
while ($the_testi->have_posts()) : $the_testi->the_post();
?>
      <div class="col-sm-6">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/SkYTP2qMVh8" frameborder="0"> </iframe>
        </div>
      </div>
      <div class="col-sm-6">
       
<h3>
<i>
<span>
<img src="http://www.galileolaw.com/wp-content/themes/galileo/img/001.png">
</span>
Through our entire case, Paul Veillon has been nothing short of extraordinary: helpful, informative, communicative, open, supportive, honest, and quick. He has never failed to get back quickly or answer questions. I am glad to know there are people like Paul who care for clients so personally.
<span>”</span>
</i>
</h3>
<div class="col-xs-2">
<img class="img-responsive img-circle wp-post-image" width="96" height="105" alt="02" src="http://www.galileolaw.com/wp-content/uploads/2015/09/02.jpg">
</div>
<div class="col-xs-10">
<p class="review text-left">~ Luke H</p>
</div>



      </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</section>
<section class="videos">
  <div class="container">
    <div class="row">
      <h2 class="text-center">VIDEO LIBRARY</h2>
      <?php if( have_rows('video_section') ):  while ( have_rows('video_section') ) : the_row(); ?>
      <div class="col-sm-6">
        <div class="embed-container">
          <iframe src="https://www.youtube.com/embed/<?php the_sub_field('youtube_id'); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <?php endwhile; endif; ?>
      <div class="col-sm-12 text-center"> 
<a class="btn btn-default btn-lg home_why" href="<?php echo get_permalink('47'); ?>" ">VIEW MORE</a>


</div>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
