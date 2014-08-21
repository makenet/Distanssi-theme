		</div>
		<div class="container">
			<ul class="logolista">
				<li>
					<img src="<?php bloginfo('url'); ?>/kuvat/alametropolia.png" />
				</li>
				<li>
					<img src="<?php bloginfo('url'); ?>/kuvat/alahumak.jpg" />
				</li>
				<li>
					<img src="<?php bloginfo('url'); ?>/kuvat/alaverke.png" />
				</li>
			</ul>
			<ul class="logolista">

				<li>
					<img src="<?php bloginfo('url'); ?>/kuvat/alaely.png" />
				</li>
				<li>
					<img src="<?php bloginfo('url'); ?>/kuvat/alaesr.png" />
				</li>

			</ul>
		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer' ); ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	   	<script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
		<?php wp_footer(); ?>
			
	</body>
</html>
