<header>
	<div class="home-hero">
		<div class="container-fluid">
			<div class="row h-100">
				<div class="col-lg-6 text-center anibal--team--img pt-5 h-100" style="padding-left:-0px;">
					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/the-anibal-team.png' ) . '" class="img-fluid" width="600" alt="Picture of The Rick Anibal Team">';?>

				</div>
				<div class="col-lg-6 mission anibal--mission" style="padding-right:0px;padding-left:0px;">
					<div class="p-4" style="height:100%;">
						<h1 class="text-center">The Rick Anibal Team</h1>
						<p class="h3 text-uppercase text-center mb-3"><strong>Service - Skill - Results</strong></p>
						<p class="text-center pt-2 pb-2 h3"><em>Your Delaware Real Estate Solution</em></p>
						<p class="text-center h2">302-547-6700</p>
						<p class="text-center pt-4 pb-2">Rick Anibal is a designated REALTOR and is a member of the New Castle County Board of REALTORS and a member of the National Board of REALTORS. Rick is dedicated to making your real-estate experience as smooth as possible.</p>
						<div class="text-center">
							<a href="<?php echo get_home_url(); ?>/about" class="btn btn-lg btn-outline-danger rounded-pill fw-bold px-4 pb-2 text-uppercase">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>