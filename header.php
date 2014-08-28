<!DOCTYPE html>
<html>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/kuvat/favicon.ico">
    <?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target="#myScrollspy">
  <?php get_template_part( 'nav-static' ); ?>