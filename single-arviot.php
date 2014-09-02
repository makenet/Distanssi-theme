<?php get_header(); ?>
<div class="otsake kartta pieniotsake">
	<div class="container">
		<h1>Arviot</h1>
        <p>Opiskelijat arvioivat oppimisympäristöjä opintojakson aikana</p>
        <p><a href="<?php bloginfo('url') ?>/arviot" class="btn btn-primary btn-lg" role="button">Näytä kaikki arviot</a></p>
	</div>
</div>

<div class="container">	
	<div class="row">
		<div class="col-md-9">
			<?php while(have_posts()) : the_post(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="text-muted"><?php the_author(); ?>, <?php the_time('F j, Y'); ?></p>
				<p><?php the_content(''); ?></p>
				<?php if ( comments_open() || get_comments_number() ) {
					comments_template();
				} ?>
			<?php endwhile; wp_reset_query(); ?>
			
            <h3>Opiskelijan <?php the_author(); ?> arviot</h3>
            <div class="list-group">
			<?php $args = array( 'post_type' => 'arvio', 'author' => get_the_author_id() );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="list-group-item">
					<?php the_title(); ?>
				</a>
			<?php endwhile; wp_reset_query(); ?>	
			</div>
		</div>
		<div class="col-md-3">
        	
        	<div class="list-group">
        	<?php $args = array( 'post_type' => 'arvio', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="list-group-item">
					<?php the_title(); ?>
				</a>
			<?php endwhile; wp_reset_query(); ?>
            </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>