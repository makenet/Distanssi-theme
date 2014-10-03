<?php get_header(); ?>
<div class="otsake pieniotsake kartta">
	<div class="container">
		<h1><span class="glyphicon glyphicon-pencil"></span> Blogi</h1>
	</div>
</div>

<div class="container">	
	<div class="row">
		<div class="col-md-9">
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
				'posts_per_page' => 8,
				'paged' => $paged
				);
				query_posts($query_string . $args);
			?>
            <div class="blogwrap">
			<?php while(have_posts()) : the_post(); ?>
				<div class="row blogrow">
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
                        <p class="text-muted"><?php the_author(); ?>, <?php the_time('F j, Y'); ?></p>
                    </div>
				</div>
			<?php endwhile; ?> 
            </div>
			<ul class="pager">
				<li><?php next_posts_link( 'Vanhemmat  &rarr;' ); ?></li>
				<li><?php previous_posts_link( '&larr; Uudemmat' ); ?></li>
			</ul>
			<?php wp_reset_query(); ?>
		</div>
		<div class="col-md-3">
        	<div class="blog-arkisto">
            	<h3>Arkisto <span class="glyphicon glyphicon-calendar"></span></h3>
				<a href="<?php bloginfo('url') ?>/2014">Kaikki</a>
				<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>			
			</div>
        </div>
	</div>
</div>
<?php get_footer(); ?>
