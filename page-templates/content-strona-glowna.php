<div class="page index">
	<div class="section cover">
		<div class="inside">
			<div class="wrapper">
				<p class="title">
					<?php the_field("cover_title"); ?>
				</p>
				<p class="subtitle">
					<?php the_field("cover_subtitle"); ?>
				</p>
				<div class="wnl-front-cover-scroll">
					<a href="#" title="" class="wnl-scroll-top" data-section-target=".two">
						<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_down_inverted/normal.svg" alt="Przewiń stronę" />
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="section two">
		<div class="wrapper">
			<h1><?php the_field("courses_title"); ?></h1>
			<p class="subtitle">
				<?php the_field("courses_subtitle"); ?>
			</p>
			<div class="pillars">
				<ul class="pillars-list">
					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("courses_section_image_1"); ?>" alt="">
							</div>
						</div>
						<p class="title">
							<?php the_field("courses_section_title_1"); ?>
						</p>
						<p class="description">
							<?php the_field("courses_section_description_1"); ?>
						</p>
						<a href="<?= get_site_url() ?>/jak-pomagamy#1" title="Czytaj więcej" class="more">
							<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
						</a>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("courses_section_image_2"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("courses_section_title_2"); ?>
						</p>
						<p class="description">
							<?php the_field("courses_section_description_2"); ?>
						</p>
						<a href="<?= get_site_url() ?>/jak-pomagamy#2" title="Czytaj więcej" class="more">
							<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
						</a>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("courses_section_image_3"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("courses_section_title_3"); ?>
						</p>
						<p class="description">
							<?php the_field("courses_section_description_3"); ?>
						</p>
						<a href="<?= get_site_url() ?>/jak-pomagamy#3" title="Czytaj więcej" class="more">
							<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
						</a>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("courses_section_image_4"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("courses_section_title_4"); ?>
						</p>
						<p class="description">
							<?php the_field("courses_section_description_4"); ?>
						</p>
						<a href="<?= get_site_url() ?>/jak-pomagamy#4" title="Czytaj więcej" class="more">
							<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
						</a>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("courses_section_image_5"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("courses_section_title_5"); ?>
						</p>
						<p class="description">
							<?php the_field("courses_section_description_5"); ?>
						</p>
						<a href="<?= get_site_url() ?>/jak-pomagamy#5" title="Czytaj więcej" class="more">
							<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="section three">
		<div class="image"></div>
		<div class="wrapper">
			<p class="title">
				<?php the_field("variant_head"); ?>
			</p>
			<div class="courses">
				<div class="item first">
					<div class="line"></div>
					<p class="title">
						<?php the_field("variant_title_1"); ?>
					</p>
					<ul class="wnl-front-options-list">
						<?php the_field("variant_lists_1"); ?>
					</ul>
				</div>

				<div class="item second">
					<div class="line"></div>
					<p class="title">
						<?php the_field("variant_title_2"); ?>
					</p>
					<ul class="wnl-front-options-list">
						<?php the_field("variant_lists_2"); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="section four">
		<div class="wrapper">
			<div class="signin">
				<p class="title">
					<?php the_field("subscribe_title_2"); ?>
				</p>
				<p class="subtitle">
					<?php the_field("subscribe_subtitle_2"); ?>
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

	<div class="section five">
		<div class="wrapper">
			<p class="title">
				<?php the_field("blog_title"); ?>
			</p>
			<p class="subtitle">
				<?php the_field("blog_subtitle"); ?>
			</p>
			<div class="posts">
				<ul class="wnl-front-blog-list">
					<?php
						$args = array(
							'numberposts' => 3
						);
						$recent_posts = wp_get_recent_posts($args);
						foreach( $recent_posts as $recent ){
							$value = get_field( "preview_photo", $recent["ID"] );
							echo '<li>
								<a href="' . get_permalink($recent["ID"]) . '">
									<div class="image">
										<img src="'.$value['url'].'" alt="" />
									</div>
									<p class="title">'.$recent["post_title"].'</p>
								</a>
							</li>';
						}
						wp_reset_query();
					?>
				</ul>
			</div>
		</div>
	</div>

	<div class="section back">
		<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
			<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_up/normal.svg" alt="Przewiń stronę do góry">
		</a>
	</div>
</div>
