<?php
/*
Template Name: etusivu
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<title>Distanssi-hanke | Joustava etäopetus nuorisotyöntekijöiden digitaalisten taitojen vahvistajana.</title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/cover.css" rel="stylesheet">
    <?php wp_head(); ?>
  </head>
  

 <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">


          <div class="inner cover">
            <img src="<?php bloginfo('url')?>/kuvat/comingsoon.jpg"/>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Distanssi-hanke 2014.</p>
              </p>
            </div>
          </div>

        </div>

      </div>

    </div>

    	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   	<script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
  </body>
</html>
