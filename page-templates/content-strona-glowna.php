<div class="page index">
	<div class="section cover">
		<div class="inside">
			<div class="wrapper">
				<h1 class="wnl-front-title">
					<?php the_field("cover_title"); ?>
				</h1>
				<p class="subtitle">
					<?php the_field("cover_subtitle"); ?>
				</p>
				<p class="metadata inverted">Zapisy trwają! Kurs rusza już 17 czerwca!</p>
				<p class="aligncenter">
					<a href="https://platforma.wiecejnizlek.pl/payment/select-product" class="button button__primary">
						Zapisz się!
					</a>
				</p>
			</div>
		</div>
	</div>

	<div class="section two">
		<div class="wnl-front-video">
			<iframe src="https://player.vimeo.com/video/205572663?byline=0&portrait=0"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="wrapper">
			<!-- <div class="mission lead">
				Traktujemy kurs "Więcej niż LEK" jako okazję do szerzenia idei dzielenia się wiedzą, działania na rzecz powrotu prawdziwego mentoringu w środowisku medycznym oraz poprawy wizerunku lekarzy w polskim społeczeństwie. Wierzymy, że aby osiągnąć te cele, sami musimy stać się tą zmianą. Mamy nadzieję, że zarówno w Waszej, jak i naszej zawodowej codzienności, wszyscy będziemy pamiętać, że aby oczekiwać pomocy, sami musimy być zawsze gotowi udzielić jej drugiej osobie.
			</div> -->
			<h2 class="title"><?php the_field("courses_title"); ?></h2>
			<!-- <p class="subtitle">
				<?php the_field("courses_subtitle"); ?>
			</p> -->
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
						<a href="<?php echo get_site_url() ?>/jak-pomagamy#1" title="Czytaj więcej" class="more">
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
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
						<a href="<?php echo get_site_url() ?>/jak-pomagamy#2" title="Czytaj więcej" class="more">
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
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
						<a href="<?php echo get_site_url() ?>/jak-pomagamy#3" title="Czytaj więcej" class="more">
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
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
						<a href="<?php echo get_site_url() ?>/jak-pomagamy#4" title="Czytaj więcej" class="more">
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
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
						<a href="<?php echo get_site_url() ?>/jak-pomagamy#5" title="Czytaj więcej" class="more">
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej" />
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
			<div class="posts">
				<ul class="wnl-front-blog-list">
					<?php
						$args = [ 'numberposts' => 3 ];
						$recent_posts = wp_get_recent_posts($args);
						foreach( $recent_posts as $recent ) :
							$value = get_field( 'preview_photo', $recent['ID'] );
					?>
							<li>
								<a href="<?php echo get_permalink( $recent['ID'] ) ?>">
									<div class="image" style="background-image: url('<?php echo $value['url'] ?>')"></div>
									<h4 class="wnl-front-blog-list-link"><?php echo $recent['post_title'] ?></h4>
								</a>
							</li>
					<?php
						endforeach;
						wp_reset_query();
					?>
				</ul>
			</div>
		</div>
	</div>

	<div class="section back">
		<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
			<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_up/normal.svg" alt="Przewiń stronę do góry">
		</a>
	</div>
</div>
