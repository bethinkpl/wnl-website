<div class="page contact">
	<div class="wrapper">
		<h1 class="wnl-page-title no-shadow">
			<?php the_field( 'contact_head' ); ?>
		</h1>
		<div class="up">
			<div class="wrapper">
				<div class="left">
					<?php the_field( 'contact_content' ) ?>

					<div class="social">
						<p class="head">Odwiedź nas:</p>
						<div class="wnl-contact-data">
							<div><strong>bethink sp. z o.o.</strong></div>
							<div>ul. Henryka Sienkiewicza 8/1</div>
							<div>60-817 Poznań</div>
						</div>
					</div>
					<div class="social">
						<p class="head">Obserwuj nas na:</p>
						<div class="icons">
							<a href="https://facebook.com/wiecejnizlek" title="Fanpage Więcej niż LEK na Facebooku" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_contact/facebook/normal.svg"></a>
							<a href="https://instagram.com/wiecejnizlek" title="Instagram Więcej niż LEK" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_contact/instagram/normal.svg"></a>
							<a href="https://www.linkedin.com/company/bethink.pl/" title="LinkedIn Bethink" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_contact/linkedin/normal.svg"></a>
						</div>
					</div>
				</div>
				<div class="right off-640 off-320">
					<img src="<?php the_field( 'contact_image' ); ?>" class="wnl-contact-image">
				</div>
			</div>
		</div>
	</div>
</div>
