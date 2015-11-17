<?php 
global $post; 
if($post->ID!='15') { ?>
<section class="started_3">
<div class="container">
<div class="row">
<div class="col-sm-7 col-sm-offset-1">
<h2>READY TO START THE CONVERSATION? </h2>
<h1>WE'RE HERE (206) 257-6556</h1>
</div>
<div class="col-sm-3">
<a class="btn btn-default btn-lg home_why" href="<?php echo get_permalink('15'); ?>">CONTACT US</a>

</div>
</div>
</div>
</section>
<?php } ?>


<footer>
<div class="container">
<div class="row">
<h4 class="text-center">SERVING SEATTLE, TACOMA, BELLEVUE, REDMOND, AND THE GREATER PUGET SOUND</h4><br>
<div class="col-sm-7">
<div class="row">
<div class="col-sm-4">
    
<strong>NORTHERN LIFE TOWER</strong><br>
<h5>1218 3RD AVE STE 1000<br>
SEATTLE, WA  98101-3290</h5>
</div>
<div class="col-sm-4">
      <strong>OFFICE:</strong>
      (206) 257-6556<br>
      <strong>FAX:</strong>
      (206) 673-8247<br>
   
  
      <a href="mailto:info@galileolaw.com">INFO@GALILEOLAW.COM</a>
   
</div>
<div class="col-sm-4">
<a href="<?php echo get_option('home'); ?>/"><img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/black_logo.jpg"/></a>
</div>
</div>
</div>
<div class="col-sm-5">
<div class="row">
<div class="col-sm-4 height">


 <a href="https://www.facebook.com/galileolaw" target="_blank">FACEBOOK</a><br>
<a href="https://twitter.com/galileolaw" target="_blank">TWITTER</a><br>
<a href="http://www.avvo.com/attorneys/98101-wa-paul-veillon-34206.html?utm_campaign=avvo_rating&utm_content=1217583&utm_medium=avvo_badge&utm_source=avvo" target="_blank">AVVO REVIEWS</a>
</div>
<div class="col-sm-8">
<h5>LEARN ABOUT EVOLUTION OF LAW.<br>
TIPS, TACTICS AND MUCH MORE</h5>
<div class="input-group" style="width:100%;">
	<?php echo do_shortcode('[gravityform id=2 title=false description=false ajax=false tabindex=49]'); ?>
    </div><!-- /input-group -->
</div>
</div>
</div>
<div class="clearfix"></div>
<p class="text-center copy_right">© 2015 <?php bloginfo('name'); ?>. All Rights Reserved.  <span><a href="http://www.sayenkodesign.com/">SEATTLE WEB DESIGN</a></span> BY SAYENKO DESIGN. </p>
</div>
</div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
    
    <script>
$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
       $('#wrap').addClass('navbar-fixed-top');
    }
    else {
       $('#wrap').removeClass('navbar-fixed-top');
    }
});


    </script>
  <?php if(is_home() || is_front_page()){ ?>  
  <script>
  	$(".home_why").click(function() {
		$('html, body').animate({
			scrollTop: $("#homewhyus").offset().top -70
		}, 2000);
	});
	$(".home_service").click(function() {
		$('html, body').animate({
			scrollTop: $("#homeservice").offset().top -70
		}, 2000);
	});
 </script>
<?php } ?>



<script>
jQuery(function ($) {
    var $active = $('#accordion .panel-collapse.in').prev().addClass('active');
    $('#accordion .panel-heading').not($active).find('a').prepend('<i class="fa fa-plus common_sign"></i>');
    $('#accordion').on('show.bs.collapse', function (e) {
		$(e.target).prev().addClass('active').find('.fa').toggleClass('fa-plus fa-minus');
        $('#accordion .panel-heading.active').removeClass('active').find('.fa').toggleClass('fa-plus fa-minus');
    });
	
	$('.collapse').on('shown.bs.collapse', function(){
		$(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");}).on('hidden.bs.collapse', function(){
		$(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
	});
	
	
	
});
</script>
<script>
 $(document).ready(function () {
    $("li").click(function () {
        $(this).find("ul").toggle();
		//$('li > ul').not($(this).children("ul").toggle()).hide();
    });
});
</script>

<script>
$(window).on("scroll touchmove", function () {
    $('#wrap').toggleClass('shrink', $(document).scrollTop() > 10);
});
</script> 

    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/gmap.js"></script>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">
		stLight.options({
			publisher: "336c8463-bd61-4ca3-911e-be8aead2e32b", 
			doNotHash: true, 
			doNotCopy: true, 
			hashAddressBar: true
		});
	</script>
		<?php wp_footer(); ?>

<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=10312539;
var sc_invisible=1;
var sc_security="8be27afc";
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="web analytics"
href="http://statcounter.com/" target="_blank"><img class="statcounter"
src="http://c.statcounter.com/10312539/0/8be27afc/1/" alt="web
analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

</body>
</html>
