<?php
/*
Template Name: Contact
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>

<section class="contact_us" >

<div class="inner_banner">
<img src="<?php echo $feat_image; ?>" style="width:100%;" class="img-responsive" />
    <div class="container">
        <div class="row">

</div>
</div>
</div>


<div class="container">
<div class="row">
 
      <div class="contact_us_map">
        <div class="col-sm-3 contact_page_mark"> <i class="fa fa-map-marker"></i>
          <p>1218 3rd Ave Ste 1000<br>
            Seattle, WA&nbsp; 98101-3290</p>
           </div>

        <div class="col-sm-3 contact_page_mark"> <i class="fa fa-phone"></i>
          <p>Office: (206) 257-6556<br>
            Fax: (206) 673-8247</p>
        </div>
        <div class="col-sm-3 contact_page_mark"> <i class="fa fa-clock-o"></i>
          <p>we care, give us<br>
            a call anytime </p>
        </div>

 <div class="col-sm-3 contact_page_mark"><i class="fa fa-hand-o-right"></i>



          <p><a href="https://www.facebook.com/galileolaw" target="_blank">Follow on Facebook</a><br>
            <a href="https://twitter.com/galileolaw" target="_blank">Follow on Twitter</a></p>
        </div>


        <div class="clearfix"></div>
<div class="col-sm-6">
<img class="img-responsive" style="width:100%;" src="http://www.galileolaw.com/wp-content/uploads/2015/09/Northern-Life-Tower.jpg" width="560px"/>
<br>
<br>

</div>
<div class="col-sm-6">
<div id="map"></div>
  <script>
var map;
function initMap() {

		var myLatLng = {lat: 47.6077381, lng: -122.335473};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: myLatLng,
	scrollwheel:false,
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
  });
}
</script> 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcTn1puyltbO32uN7LLVN3ocBcJpfmYZ4&callback=initMap" async defer></script>
</div>

<div class="clearfix"></div>


      </div>
    </div>
  </div>
</section>
<section class="blog_post_2">
  <div class="blog-c">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
