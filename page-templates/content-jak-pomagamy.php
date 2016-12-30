<div class="page help">
	<div class="wrapper">
		<p class="title">
			Jak pomagamy?
		</p>
		<p class="subtitle">
			Poznaj 5 filarów kursu "Więcej niż LEK"!
		</p>
		<div class="tabhelp">
			<a href="" class="tabhelp-controls__prev"><img src="<?= get_template_directory_uri() ?>/assets/button/navigation_left/normal.svg" alt="Poprzedni" /></a>
			<a href="" class="tabhelp-controls__next"><img src="<?= get_template_directory_uri() ?>/assets/button/navigation_right/normal.svg" alt="Następny" /></a>
			<div class="tabs">
				<div class="select">
					<div class="selected"><?php the_field("help_section_title_1"); ?></div>
					<ul class="tabhelp__menu">
						<li>
							<a href="#" title=""><?php the_field("help_section_title_1"); ?></a>
						</li>
						<li>
							<a href="#" title=""><?php the_field("help_section_title_2"); ?></a>
						</li>
						<li>
							<a href="#" title=""><?php the_field("help_section_title_3"); ?></a>
						</li>
						<li>
							<a href="#" title=""><?php the_field("help_section_title_4"); ?></a>
						</li>
						<li>
							<a href="#" title=""><?php the_field("help_section_title_5"); ?></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="tabhelp__content">
				<div class="tabhelp__content-item">
					<div class="wrapper">
						<p class="head">
							<img src="<?php the_field("help_section_image_1"); ?>" alt="" />
							<span class="title"><?php the_field("help_section_title_1"); ?></span>
							<span class="subtitle"><?php the_field("help_section_subtitle_1"); ?></span>
						</p>
						<div class="down">
							<p class="title"><?php the_field("help_section_title_in_1"); ?></p>
							<div class="wrapper">
									<?php the_field("help_section_description_1"); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="tabhelp__content-item">
					<div class="wrapper">
						<p class="head">
							<img src="<?php the_field("help_section_image_2"); ?>" alt="" />
							<span class="title"><?php the_field("help_section_title_2"); ?></span>
							<span class="subtitle"><?php the_field("help_section_subtitle_2"); ?></span>
						</p>
						<div class="down">
							<p class="title"><?php the_field("help_section_title_in_2"); ?></p>
							<div class="wrapper">
									<?php the_field("help_section_description_2"); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="tabhelp__content-item">
					<div class="wrapper">
						<p class="head">
							<img src="<?php the_field("help_section_image_3"); ?>" alt="" />
							<span class="title"><?php the_field("help_section_title_3"); ?></span>
							<span class="subtitle"><?php the_field("help_section_subtitle_3"); ?></span>
						</p>
						<div class="down">
							<p class="title"><?php the_field("help_section_title_in_3"); ?></p>
							<div class="wrapper">
								<p class="description">
									<?php the_field("help_section_description_3"); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabhelp__content-item">
					<div class="wrapper">
						<p class="head">
							<img src="<?php the_field("help_section_image_4"); ?>" alt="" />
							<span class="title"><?php the_field("help_section_title_4"); ?></span>
							<span class="subtitle"><?php the_field("help_section_subtitle_4"); ?></span>
						</p>
						<div class="down">
							<p class="title"><?php the_field("help_section_title_in_4"); ?></p>
							<div class="wrapper">
								<p class="description">
									<?php the_field("help_section_description_4"); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tabhelp__content-item">
					<div class="wrapper">
						<p class="head">
							<img src="<?php the_field("help_section_image_5"); ?>" alt="" />
							<span class="title"><?php the_field("help_section_title_5"); ?></span>
							<span class="subtitle"><?php the_field("help_section_subtitle_5"); ?></span>
						</p>
						<div class="down">
							<p class="title"><?php the_field("help_section_title_in_5"); ?></p>
							<div class="wrapper">
								<p class="description">
									<?php the_field("help_section_description_5"); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="tabs">
				<ul class="tabhelp__menu__imit">
					<li class="active">
						<a href="#" title=""><?php the_field("help_section_title_1"); ?></a>
					</li>
					<li>
						<a href="#" title=""><?php the_field("help_section_title_2"); ?></a>
					</li>
					<li>
						<a href="#" title=""><?php the_field("help_section_title_3"); ?></a>
					</li>
					<li>
						<a href="#" title=""><?php the_field("help_section_title_4"); ?></a>
					</li>
					<li>
						<a href="#" title=""><?php the_field("help_section_title_5"); ?></a>
					</li>
				</ul>
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
		<a href="#" title="" data-section-target="0">
			<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_up_inverted/normal.svg" alt="Więcej niż LEK" />
		</a>
	</div>
</div>
