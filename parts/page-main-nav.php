<!-- Main Bootstrap Navbar Here -->
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light shadow">
	<div class="container-fluid">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<img src="<?php the_field('navigation_logo', 'option'); ?>" alt="<?php echo the_field('navigation_alt', 'option'); ?>" width="150" />
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
				'menu_class'        => 'navbar-nav me-auto mb-2 mb-lg-0',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>

			<div class="d-flex">
				<a href="https://www.facebook.com/rickanibalderealestate" target="_blank"><i class="fab fa-facebook-square fa-fw fa-2x pt-1 text-danger"></i></a>
				<a href="https://twitter.com/RickAnibal" target="_blank"><i class="fab fa-twitter-square fa-fw fa-2x pt-1 text-danger"></i></a>
				<a href="https://www.youtube.com/user/7luckydeal" target="_blank"><i class="fab fa-youtube-square fa-fw fa-2x pt-1 text-danger"></i></a>
				<a href="http://www.pinterest.com/ranibal/" target="_blank"><i class="fab fa-pinterest-square fa-fw fa-2x pt-1 text-danger me-4"></i></a>
				<a href="<?php echo get_home_url(); ?>/contact" class="btn btn-outline-danger rounded-pill fw-bold px-4 text-uppercase">Hire Us</a>
			</div>
		</div>
	</div>
</nav>
