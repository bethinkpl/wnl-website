<div class="page contact">
	<div class="wrapper">
		<p class="title">
			<?php the_field("contact_title"); ?>
		</p>
		<div class="up">
			<div class="wrapper">
				<div class="left">
					<img src="<?php the_field("contact_image"); ?>" alt="" />
				</div>
				<div class="right">
					<p class="head award"><?php the_field("contact_name_1"); ?></p>
					<p class=""><?php the_field("contact_mail"); ?></p>
					<p class=""><?php the_field("contact_phone"); ?></p><br /><br /><br />
					<p class="award"><?php the_field("contact_name_2"); ?></p><br /><br />
					<p class=""><?php the_field("contact_address"); ?></p>
					<p class=""><?php the_field("contact_nip"); ?></p><br /><br /><br />

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
			</div>
		</div>
	</div>
</div>