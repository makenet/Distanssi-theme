<?php get_header(); ?>
<div class="otsake pieniotsake kartta">
	<div class="container">
		<h1>Blogi <span class="glyphicon glyphicon-pencil"></span></h1>
	</div>
</div>
<?php $pid = 1 ?>
<div class="container">	
	<div class="row">
		<div class="col-md-9">
        	<div class="blog-post" id="main-content">
            	<?php while(have_posts()) : the_post(); ?>
                	<?php $pid = get_the_ID(); ?>
                    		<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                           	<p class="text-muted"><?php the_author(); ?>, <span style="text-transform:capitalize;"><?php the_time('F j, Y'); ?></span></p>
                            <p><?php the_content(''); ?></p>
                            <?php if ( comments_open() || get_comments_number() ) {
                                comments_template();
                            } ?>
				<?php endwhile; wp_reset_query(); ?>
            </div>
		</div> 
		<div class="col-md-3">
			<?php query_posts('posts_per_page=5'); while(have_posts()) : the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="list-group-item <?php if(get_the_ID() == $pid) : echo "active"; endif; ?>">
					<h4 class="list-group-item-heading"><?php the_title(); ?></h4>
                    <p class="list-group-item-text"><?php the_author(); ?>, <span style="text-transform:capitalize;"><?php the_time('F j, Y'); ?></span></p>
                </a>
			<?php endwhile; wp_reset_query(); ?>
            <div class="blog-arkisto">
            	<h3>Arkisto <span class="glyphicon glyphicon-calendar"></span></h3>
				<a href="<?php bloginfo('url') ?>/2014">Kaikki</a>
				<?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12 ) ); ?>			
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>