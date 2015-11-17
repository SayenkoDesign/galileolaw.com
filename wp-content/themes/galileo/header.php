<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="http://www.galileolaw.com/wp-content/uploads/2015/11/Galileo-icon.png" type="image/x-icon" />

    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/custom.css" rel="stylesheet">
    <?php wp_head(); ?>



</head>
<body>
<header id="wrap" class="navbar-fixed-top shrink">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 hidden-xs">
                <div class="logo">
                    <a href="<?php echo get_option('home'); ?>/"> <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png"/></a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="phone-icon"><a href="tel:2062576556"><i class="fa fa-phone fa-3x"></i></a></div>
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand visible-xs" href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png"/></a> </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="col-xs-12 nav navbar-nav">
                            <li>
                                <a href="<?php echo get_permalink('15'); ?>" class="btn btn-default btn-lg visible-xs">CONTACT US</a>
                            </li>
                            <?php wp_nav_menu( array( 'container' => '', 'menu_class' => '', 'theme_location' => 'Mainmenu','items_wrap'=> '%3$s', ) ); ?>
                            <li class="contact_btn hidden-xs contact_home"><a href="tel:206-257-6556"> <h4 class="hidden-sm">206.257.6556</h4>
                                    <a href="<?php echo get_option('home'); ?>/?page_id=15" class="btn btn-default btn-lg">CONTACT US</a>
                            </li>
                            <li class="hidden-xs hidden-sm"><a href="javascript:void(0)"><i class="fa fa-map-marker map"></i></a>
                                <ul class="map_hover">
                                    <li><a href="<?php echo get_permalink('15'); ?>" class="ace_tse">1218 3rd Ave Ste 1000<br/> Seattle, WA  98101</a></li>
                                    <li><a href="<?php echo get_permalink('15'); ?>">Map Us ></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-69472795-1', 'auto');
        ga('send', 'pageview');

    </script>

</header>
