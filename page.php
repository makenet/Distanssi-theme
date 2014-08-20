<?php get_header(); ?>
<?php while(have_posts()) : the_post(); ?>
<div class="">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default panel-body">
				<p><?php the_content(''); ?></p>
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>