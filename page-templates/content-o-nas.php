<div class="page about">
	<div class="wrapper">
		<p class="title">
			<?php the_field("about_head"); ?>
		</p>
		<div class="up">
			<div class="wrapper">
				<p class="title"><?php the_field("about_title"); ?></p>
				<p class="subtitle"><?php the_field("about_subtitle"); ?></p>
				<p class="description">
					<?php the_field("about_description"); ?>
				</p>
			</div>
		</div>
		<div class="who">
			<p class="title"><?php the_field("team_title"); ?></p>
			<img src="<?php the_field("team_image"); ?>" alt="" />

			<div class="team">
				<div class="person">
					<p class="subtitle"><?php the_field("person_name_1"); ?></p>
					<p class="description">
						<?php the_field("person_description_1"); ?>
					</p>
				</div>

				<div class="person">
					<p class="subtitle"><?php the_field("person_name_2"); ?></p>
					<p class="description">
						<?php the_field("person_description_2"); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="mail">
		<div class="wrapper">
			<div class="signin">
				<p class="title">
					<?php the_field("subscribe_title"); ?>
				</p>
				<p class="subtitle">
					<?php the_field("subscribe_subtitle"); ?>
				</p>
				<div class="input">
					<?php
						if( function_exists( 'mc4wp_show_form' ) ) {
						    mc4wp_show_form();
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="section back">
		<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
			<img src="<?php echo get_template_directory_uri() . '/assets/button/arrow_up_inverted/normal.svg' ?>" alt="Więcej niż lek" />
		</a>
	</div>
</div>
