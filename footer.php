<footer class="footer">
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-4 text-uppercase">
				<img class="img-fluid" src="<?php echo the_field('remax_logo_one_footer', 'option'); ?>" alt="" />
				<p>RE/MAX 1ST CHOICE</p>
				<address>100 S BROAD ST<br />MIDDLETOWN, DE 19709</address>
				<p><a class="tel" href="tel:302-378-8700">302-378-8700</a></p>
			</div>
			<div class="col-md-4">
				<div class="row text-center">
					<div class="col">
						<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/eeo-lender.png' ) . '" width="80" alt="Equal Housing Opportunity Logo" class="img-fluid">'; ?>

					</div>
					<div class="col">
						<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/remax-logo-balloon.png' ) . '" width="80" alt="ReMax Balloon Logo" class="img-fluid">'; ?>
					</div>
					<div class="col">
						<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/realtor-icon.png' ) . '" width="80" alt="Realtor Official Logo Icon">'; ?>

					</div>
				</div>
				<div class="col text-center pt-5">
					<?php $uploads = wp_upload_dir(); echo '<img src="' . esc_url( $uploads['baseurl'] . '/mls-logo.png' ) . '" width="120" alt="MLS Official Icon">'; ?>

				</div>
			</div>
			<div class="col-md-4">

			</div>
		</div>
	</div>
	<div class="col text-center pt-2">
		<p><small>Copyright &copy; <?php echo date('Y'); ?> The Anibal Team | <a class="tel" href="<?php echo get_home_url(); ?>/privacy-policy">Privacy Policy</a></small></p>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
