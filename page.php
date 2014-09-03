<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
<div class="otsake kartta pieniotsake">
	<div class="container">
		<img class="mplogo"src="<?php bloginfo('url') ?>/kuvat/mpwhite.png"/>
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p><?php the_content(''); ?></p>
		</div>
	</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>