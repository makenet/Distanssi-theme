<?php get_header(); ?>
<div class="kartta">
	<div class="container">
		<h1><img class="karttalogo" src="<?php bloginfo('url'); ?>/kuvat/LogoWhite.png"/></h1>
		<p>Joustava etÃ¤opetus nuorisotyÃ¶ntekijÃ¶iden digitaalisten taitojen vahivastajana</p>
		 <p><a class="btn btn-primary btn-lg" role="button">Lue lisÃ¤Ã¤</a></p>
	</div>
</div>
<div class="container">
	<?php
		query_posts('posts_per_page=1');
			while(have_posts()) : the_post(); ?>
			
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>

			
		<?php endwhile; wp_reset_query(); ?>
		
		<div class="panel panel-default panel-body">
			<div class="row">
				<div class="col-md-2">
					<ul class="nav nav-pills nav-stacked">
						<?php wp_list_categories('orderby=name&title_li'); ?>
					</ul>
				</div>
				<div class="col-md-10">
					<?php while(have_posts()) : the_post(); ?>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
						<p class="text-muted"><?php the_author(); ?>, <?php the_time('F j, Y'); ?></p>
					<?php endwhile; wp_reset_query(); ?>

				</div>
			</div>
		
		</div>
<?php get_footer(); ?>