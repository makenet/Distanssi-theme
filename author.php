<?php 
get_header(); 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="otsake pieniotsake kartta">
	<div class="container">
    	<img class="mplogo"src="<?php bloginfo('url') ?>/kuvat/mpwhite.png"/>
        <h1><span class="glyphicon glyphicon-pencil"></span> Arviointiblogi</h1>
	</div>
</div>

<div class="container">	
	<div class="row">
		<div class="col-md-9">

            <div class="blogwrap">
            <h2><?php echo $curauth->display_name; ?></h2>
			<?php query_posts( array( 'post_type' => 'arviot', 'showposts' => 5, 'author'=>$curauth->ID ) ); 
				if ( have_posts() ) : while(have_posts()) : the_post(); ?>
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
			<?php endwhile;
			else : ?> 
				<p>Ei arvioita</p>
            <?php endif; ?>
            </div>
			<ul class="pager">
				<li><?php next_posts_link( 'Vanhemmat  &rarr;' ); ?></li>
				<li><?php previous_posts_link( '&larr; Uudemmat' ); ?></li>
			</ul>
			<?php wp_reset_query(); ?>
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
