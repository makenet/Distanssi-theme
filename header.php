<!DOCTYPE html>
<html>
  <head>
  	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="fb:app_id" content="950895894924436">
    <meta property="og:image" content="http://distanssi.metropolia.fi/kuvat/facebooklogo.jpg" />
   	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/kuvat/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target="#myScrollspy">
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '950895894924436',
      xfbml      : true,
      version    : 'v2.1'
    });
  };
</script>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <?php get_template_part( 'nav-static' ); ?>