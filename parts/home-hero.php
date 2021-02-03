<header>
	<div class="home-hero">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 anibal--team--img pt-5">
					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/the-anibal-team.png' ) . '" class="img-fluid" alt="Picture of The Rick Anibal Team">';?>

				</div>
				<div class="col-md-6 anibal--mission" style="padding-right:-0px;">
					<div class="p-4" style="background-color: #e3f2fd;height:100%;">
						<h1 class="text-center">The Rick Anibal Team</h1>
						<p class="h4 text-uppercase text-center mb-3"><strong>Service - Skill - Results</strong></p>
						<div class="row text-center mb-3 p-3" style="background:#fff;border:2px solid #ccc;">
							<div class="col-md">
								<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/remax-logo-balloon.jpg' ) . '" class="img-fluid mb-2" width="120" alt="">';?>

							</div>
							<div class="col-md">
								<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/equal_housing_logo.jpg' ) . '" class="img-fluid mt-2 mb-2" width="140" alt="">';?>

							</div>
							<div class="col-md-4">
								<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/web_R_blue.jpg' ) . '" class="img-fluid mb-2" width="140" alt="">';?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>