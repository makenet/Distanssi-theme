<?php
/*
Template Name: etusivu
*/
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?php bloginfo('url'); ?>/kuvat/favicon.ico">
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <?php wp_head(); ?>
  </head>
  <body>
	<div class="otsake kartta">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-12">
					<img class="mplogo"src="<?php bloginfo('url') ?>/kuvat/mpwhite.png"/>
					<h1><img class="karttalogo" src="<?php bloginfo('url'); ?>/kuvat/LogoWhite.png"/></h1>
					<p>Distanssi - Joustava etäopetus nuorisotyöntekijöiden digitaalisten taitojen vahvistajana</p>
			 		<p><a href="/info" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-info-sign"></span> Lue lisää</a></p>
			 		<div class="some">
			 			<a href="https://www.facebook.com/distanssi"><img src="<?php bloginfo('url') ?>/kuvat/fb.png"/></a>
			 			<a href="https://twitter.com/Distanssi"><img src="<?php bloginfo('url') ?>/kuvat/twtr.png"/></a>
			 		</div>
				</div>	
			 </div>
		</div>
	</div>
	<?php get_template_part( 'nav-static' ); ?>
	<div class="nostot">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="koulutus">
						<span class="glyphicon glyphicon-globe"></span>
						<h2>MOOC-OPINNOT</h2>
						<p>Korvaa AMK-opintoja MOOC-toteutuksena</p> 
					</a>
				</div>
				<div class="col-md-4">
					<a href="blogi">
						<span class="glyphicon glyphicon-pencil"></span>
						<h2>BLOGI</h2>
						<p>Seuraa Distanssin blogia ja pysy ajantasalla hankkeesta</p>
					</a>
				</div>
				<div class="col-md-4">
					<a href="title">
						<span class="glyphicon glyphicon-info-sign"></span>
						<h2>MIKÄ DISTANSSI?</h2>
						<p>Lue mistä hankkeessa on kyse.</p>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="main container">
		<div class="row">
			<!--<div class="col-md-2">
				<ul class="nav nav-pills nav-stacked">
					<?php wp_list_categories('orderby=name&title_li'); ?>
				</ul>
			</div>-->
			<div class="col-md-6">
				<?php query_posts( 'posts_per_page=2' ); ?>
                <?php while(have_posts()) : the_post(); ?>
                	<div class="media etusivu-blog-post">
                        <a class="pull-left thumbnail" href="<?php the_permalink(); ?>">
                        	<?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it.?>
                            	<?php the_post_thumbnail(array( 'class' => 'media-object etusivu-blog-thumbnail' )); ?>
                        	<?php else : ?>
                        		<img class="media-object  etusivu-blog-thumbnail" src="<?php bloginfo('url') ?>/kuvat/facebooklogo.jpg" />
                    		<?php endif; ?>
                       	</a>
                        <div class=media-body etusivu-blog-body">
                        	<h4 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        	<?php the_excerpt(); ?>
                       		<p class="text-muted"><?php the_author(); ?>, <?php the_time('F j, Y'); ?></p>
                        </div>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
			</div>
            <div class="col-md-6">
				<?php $args = array( 'post_type' => 'nostot', 'posts_per_page' => 1 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
					<div class="well"><?php the_content(); ?></div>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
	<?php get_footer(); ?>
	<!--<script type="text/javascript">
		$(window).bind('scroll', function() {
	         if ($(window).scrollTop() > ($('.kartta').outerHeight()+10)) {
	             $('.navbar').addClass('fixed');
	             adminbarHeight = $('#wpadminbar').height();
	             $('.navbar').css('top', adminbarHeigth);
				 $('.nostot').css('margin-top', $('.navbar').height());
	         }
	         else {
	             $('.navbar').removeClass('fixed');
				  $('.nostot').css('margin-top', '0');
	         }
	   	});
	</script>-->
