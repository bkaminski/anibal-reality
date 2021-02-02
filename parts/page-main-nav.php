<!-- Main Bootstrap Navbar Here -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<img class="img-fluid" src="<?php the_field('navigation_logo', 'option'); ?>" alt="<?php echo the_field('navigation_alt', 'option'); ?>" width="150" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarMain">
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => '',
				'container_class'   => '',
				'container_id'      => '',
				'menu_class'        => 'navbar-nav ml-auto',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>
			
		</div>
	</div>
</nav>