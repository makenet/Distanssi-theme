		</div>
		<div class="footer">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar( 'footer' ); ?>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="container logo-container">
        	<div class="row">
             	<div class="col-sm-1">
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="<?php bloginfo('url'); ?>/kuvat/alametropolia.png" />
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="<?php bloginfo('url'); ?>/kuvat/alahumak.jpg" />
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="<?php bloginfo('url'); ?>/kuvat/alaverke.png" />
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="<?php bloginfo('url'); ?>/kuvat/alaely.png" />
                </div>
                <div class="col-xs-4 col-sm-2">
                    <img src="<?php bloginfo('url'); ?>/kuvat/alaesr.png" />
                </div>
                <div class="col-sm-1">
                </div>
            </div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	   	<script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
	   	<script src="<?php bloginfo('template_directory'); ?>/scripts.js"></script>
		<?php wp_footer(); ?>
			
	</body>
</html>
