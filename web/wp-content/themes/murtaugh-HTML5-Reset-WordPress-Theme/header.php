<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="<?php echo of_get_option('meta_headid'); ?>" data-template-set="html5-reset-wordpress-theme">

  <meta charset="<?php bloginfo('charset'); ?>">



  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <!--[if IE ]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <![endif]-->

  <?php if (is_search()) echo '<meta name="robots" content="noindex, nofollow" />'; ?>

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <!--Google will often use this as its description of your page/site. Make it good.-->

  <?php if (true == of_get_option('meta_author')) echo '<meta name="author" content="'.of_get_option("meta_author").'" />'; ?>

  <?php if (true == of_get_option('meta_google')) echo '<meta name="google-site-verification" content="'.of_get_option("meta_google").'" />'; ?>

  <meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">

<?php if (true == of_get_option('meta_viewport')) {
  echo '<meta name="viewport" content="'.of_get_option("meta_viewport").'" />';
  echo '<!--  Mobile Viewport Fix
    j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag
    device-width : Occupy full width of the screen in its current orientation
    initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
    maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width
    -->';
} ?>

<?php if (true == of_get_option('head_favicon')) {
  echo '<link rel="shortcut icon" href="'.of_get_option("head_favicon").'" />';
  echo '<!-- This is the traditional favicon.
    - size: 16x16 or 32x32
    - transparency is OK
    - see wikipedia for info on browser support: http://mky.be/favicon/ -->';
} ?>

<?php if (true == of_get_option('head_apple_touch_icon')) {
  echo '<link rel="apple-touch-icon" href="'.of_get_option("head_apple_touch_icon").'">';
  echo '<!-- The is the icon for iOS Web Clip.
    - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4 retina display (IMHO, just go ahead and use the biggest one)
    - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
    - Transparency is not recommended (iOS will put a black BG behind the icon) -->';
} ?>

  <!-- concatenate and minify for production -->

  <!-- This is an un-minified, complete version of Modernizr.
     Before you move to production, you should generate a custom build that only has the detects you need. -->
  <script src="<?php echo get_template_directory_uri(); ?>/_/js/modernizr-2.6.2.dev.js"></script>

  <!-- Application-specific meta tags -->
<?php if (true == of_get_option('meta_app_win_name')) {
  echo '<!-- Windows 8 -->';
  echo '<meta name="application-name" content="'.of_get_option("meta_app_win_name").'" /> ';
  echo '<meta name="msapplication-TileColor" content="'.of_get_option("meta_app_win_color").'" /> ';
  echo '<meta name="msapplication-TileImage" content="'.of_get_option("meta_app_win_image").'" />';
} ?>

<?php if (true == of_get_option('meta_app_twt_card')) {
  echo '<!-- Twitter -->';
  echo '<meta name="twitter:card" content="'.of_get_option("meta_app_twt_card").'" />';
  echo '<meta name="twitter:site" content="'.of_get_option("meta_app_twt_site").'" />';
  echo '<meta name="twitter:title" content="'.of_get_option("meta_app_twt_title").'">';
  echo '<meta name="twitter:description" content="'.of_get_option("meta_app_twt_description").'" />';
  echo '<meta name="twitter:url" content="'.of_get_option("meta_app_twt_url").'" />';
} ?>

<?php if (true == of_get_option('meta_app_fb_title')) {
  echo '<!-- Facebook -->';
  echo '<meta property="og:title" content="'.of_get_option("meta_app_fb_title").'" />';
  echo '<meta property="og:description" content="'.of_get_option("meta_app_fb_description").'" />';
  echo '<meta property="og:url" content="'.of_get_option("meta_app_fb_url").'" />';
  echo '<meta property="og:image" content="'.of_get_option("meta_app_fb_image").'" />';
} ?>

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bs-3/css/bootstrap.css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/app/components/jquery/jquery.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/bs-3/js/bootstrap.js"></script>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

  <!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

  <header id="header" role="header">
    <div class="container">
        <div class="brand">Business Casual</div>
        <div class="address-bar">The Plaza | 5483 Start Bootstrap Ave. | Beverly Hills, California 26892 | 555.519.2013</div>
    </div>


    <div class="navbar-wrapper">
    <div class="navbar navbar-default">
<div class="container">
        <div class="navbar-header">
          <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
        <!--<a class="navbar-brand" href="#">Lasihuolto.com</a>-->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="http://www.bootply.com" target="ext">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>

    </div>
</div>
</div><!-- /navbar wrapper -->


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://lorempixel.com/1500/600/abstract/1">
      <div class="container">
        <div class="carousel-caption">
          <h1>Bootstrap 3 Carousel Layout</h1>
          <pThis is an example layout with carousel that uses the Bootstrap 3 styles.</small></p>
          <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Learn More</a>
        </p></div>
      </div>
    </div>

    <div class="item">
      <img src="http://lorempixel.com/1500/600/abstract/1">
      <div class="container">
        <div class="carousel-caption">
          <h1>Changes to the Grid</h1>
          <p>Bootstrap 3 still features a 12-column grid, but many of the CSS class names have completely changed.</p>
          <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p>
        </div>
      </div>
    </div>

    <div class="item">
      <img src="http://placehold.it/1500X600">
      <div class="container">
        <div class="carousel-caption">
          <h1>Percentage-based sizing</h1>
          <p>With "mobile-first" there is now only one percentage-based grid.</p>
          <p><a class="btn btn-large btn-danger" href="#">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>
</div>
<!-- /.carousel -->
</header>
