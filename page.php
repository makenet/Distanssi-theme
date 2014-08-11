<?php get_header(); ?>

	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default panel-body">
				<?php while(have_posts()) : the_post(); ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_content(''); ?></p>
				<?php endwhile; wp_reset_query(); ?>
			</div>
		</div>
		<div class="col-md-3">
		</div>
	</div>
		
<?php get_footer(); ?>