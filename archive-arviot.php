<?php get_header(); ?>
<div class="otsake pieniotsake kartta">
	<div class="container">
    	<img class="mplogo"src="<?php bloginfo('url') ?>/kuvat/mpwhite.png"/>
		<h1><span class="glyphicon glyphicon-pencil"></span> Arviointiblogi</h1>
	</div>
</div>

<div class="container">	
	<div class="row">
		<div class="col-md-9">
			<div class="">
				<?php while(have_posts()) : the_post(); ?>
					<div class="panel">
						<div class="row">
							<div class="col-xs-3 col-sm-2">
								<?php if ( has_post_thumbnail() ) : // check if the post has a Post Thumbnail assigned to it.?>
									<a class="thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
								<?php else : ?>
									<a class="thumbnail" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('url') ?>/kuvat/facebooklogo.jpg" /></a>
								<?php endif; ?>
							</div>
							<div class="col-xs-9 col-sm-10">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(); ?></p>
								<p class="text-muted"><?php echo get_the_author_link(); ?>, <?php the_time('F j, Y'); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; ?> 
				<ul class="pager">
					<li><?php next_posts_link( 'Vanhemmat  &rarr;' ); ?></li>
					<li><?php previous_posts_link( '&larr; Uudemmat' ); ?></li>
				</ul>
				
				<?php wp_reset_query(); ?>
			</div>
		</div>
		<div class="col-md-3">
        	<h3>Kirjoittajat <span class="glyphicon glyphicon-user"></span></h3>
        	<ul>
				<?php wp_list_authors(); ?>
			</ul>
		</div>
	</div>
</div>
<?php get_footer(); ?>
