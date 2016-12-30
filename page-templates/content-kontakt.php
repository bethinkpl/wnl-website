<div class="page contact">
	<div class="wrapper">
		<h1 class="wnl-contact-title">
			<?php the_field( 'contact_head' ); ?>
		</h1>
		<div class="up">
			<div class="wrapper">
				<div class="left">
					<?php the_field( 'contact_content' ) ?>

					<div class="social">
						<p class="head">Obserwuj nas na:</p>
						<div class="icons">
							<a href="" title="" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() . '/assets/button/social_media_contact/facebook/normal.svg' ?>"></a>
							<a href="" title="" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() . '/assets/button/social_media_contact/instagram/normal.svg' ?>"></a>
							<a href="" title="" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() . '/assets/button/social_media_contact/youtube/normal.svg' ?>"></a>
							<a href="" title="" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() . '/assets/button/social_media_contact/linkedin/normal.svg' ?>"></a>
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
