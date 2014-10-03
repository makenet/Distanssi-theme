<?php get_header(); 
$arvioid = 1 ?>

<div class="otsake kartta pieniotsake">
	<div class="container">
    	
        <img class="mplogo"src="<?php bloginfo('url') ?>/kuvat/mpwhite.png"/>
		<h1><span class="glyphicon glyphicon-pencil"></span> Arviointiblogi</</h1>
        
	</div>
</div>

<div class="container">	
	<div class="row">
		<div class="col-md-9 blog-post">
			<?php while(have_posts()) : the_post(); ?>
            	<div  style="border-bottom:1px solid #eee; margin-bttom:20px; padding-bottom:20px;">
					<?php $arvioid = get_the_id(); ?>
                    <h2><?php the_title(); ?></h2>
                    <p class="text-muted"><?php echo get_the_author_link(); ?>, <?php the_time('F j, Y'); ?></p>
                    <p><?php the_content(''); ?></p>
                    <?php if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    } ?>
                 </div>
			<?php endwhile; wp_reset_query(); ?>
			
            <h3><?php the_author(); ?>, muut arviot</h3>
            
			<?php $args = array( 'post_type' => 'arvio', 'author' => get_the_author_id(), 'post__not_in' => array($arvioid) );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
		<div class="col-md-3">
        	<div class="blog-arkisto">
            	<h3>Kirjoittajat <span class="glyphicon glyphicon-user"></span></h3>
				<ul>
                	<li><a href="<?php bloginfo('url') ?>/arviot">Kaikki</a></li>	
					<?php wp_list_authors(); ?>
				</ul>			
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>