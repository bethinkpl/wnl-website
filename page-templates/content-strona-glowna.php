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
				<p class="metadata inverted">
					Ostatnie wolne miejsca! Kurs rusza 6 listopada!
				</p>
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
			<h2 class="title"><?php the_field("courses_title"); ?></h2>
			<div class="pillars">
				<ul class="pillars-list">
					<?php for ($i = 1; $i <= 5; $i++) : ?>
						<li>
							<div class="image">
								<div class="inside">
									<img src="<?php the_field("courses_section_image_" . $i); ?>" alt="<?php the_field("courses_section_title_" . $i); ?>">
								</div>
							</div>
							<p class="title"><?php the_field("courses_section_title_" . $i); ?></p>
							<p class="description"><?php the_field("courses_section_description_" . $i); ?></p>
							<a href="<?php echo get_site_url() . '/o-zalozeniach#' . $i ?>" title="Czytaj więcej..." class="more">
								<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej">
							</a>
						</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>

	<?php get_template_part( 'page-templates/content', 'products' ); ?>

	<div class="section" style="padding: 30px 0;">
		<div class="wrapper">
			<div class="cards">
				<div class="card">
					<a href="<?php echo site_url('o-warsztatach') ?>" title="Czytaj więcej..." class="more">
						<img src="https://wiecejnizlek.pl/wp-content/uploads/2016/12/ilu_kurs_przygotowanieiprzebieg_02.png" alt="Praktyczne warsztaty" class="image big">
					</a>
					<h2 class="card-title">Praktyczne warsztaty</h2>
					<p class="card-content alignleft">
						Warsztaty w ramach naszego kursu do LEK-u to okazja do nabycia wyjątkowej wiedzy potrzebnej zaraz po egzaminie - podczas pierwszych kroków na ścieżce zawodowej oraz w trakcie nauki na specjalizacji. Pozwalają również skorzystać z doświadczenia praktyków i lepiej zaplanować swój start. Przeczytaj więcej na podstronie <a href="<?php echo site_url('o-warsztatach') ?>">O warsztatach</a>.
					</p>
					<p class="alignleft">
						<a href="<?php echo site_url('o-warsztatach') ?>" title="Czytaj więcej..." class="more">
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej">
						</a>
					</p>
				</div>
				<div class="card">
					<a href="<?php echo site_url('o-kursie#qanda') ?>" title="Czytaj więcej..." class="more">
						<img src="https://wiecejnizlek.pl/wp-content/uploads/2016/12/ilu_kurs_przygotowanieiprzebieg_01.png" alt="Najczęście zadawane pytania" class="image big">
					</a>
					<h2 class="card-title">Masz wątpliwości?</h2>
					<p class="card-content alignleft">
						Na podstronie <a href="<?php echo site_url('o-kursie#qanda') ?>">O kursie</a> odpowiadamy na wszystkie pytania dotyczące kursu. Od dat i planu zajęć, przez opis metodyki i materiałów, po misję, która motywuje nas do działania - wszystko w jednym miejscu. :) Jeżeli nie rozwiejemy Twoich wątpliwości, napisz do nas, a na pewno dodamy odpowiedź do strony!
					</p>
					<p class="alignleft">
						<a href="<?php echo site_url('o-kursie#qanda') ?>" title="Czytaj więcej..." class="more">
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej">
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="section">
		<div class="wrapper">
			<?php // get_template_part( 'page-templates/content', 'recirculation' ); ?>
		</div>
	</div> -->

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

	<div class="section five">
		<div class="wrapper">
			<p class="title">
				Partnerzy
			</p>
			<div class="cards">
				<div class="card">
					<a href="http://prawalekarza.pl" target="_blank">
						<img src="http://prawalekarzy.pl/res/lay/logo.png"/>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="section back">
		<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
			<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_up/normal.svg" alt="Przewiń stronę do góry">
		</a>
	</div>
</div>
