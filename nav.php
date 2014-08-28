      <div class="container">
          
      	<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="navlogo" src="<?php bloginfo('url'); ?>/kuvat/LogoGreenSmall.png"/></a>
          
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
          
        <div class="collapse navbar-collapse navHeaderCollapse">
          	 <?php
	           	 wp_nav_menu( array(
	                'menu'              => 'primary',
	                'theme_location'    => 'primary',
	                'depth'             => 2,
	                'menu_class'        => 'nav navbar-nav navbar-right',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>
        </div><!--/.navbar-collapse -->
      </div>