<div class="page index">
	<div class="section cover">
		<div class="inside">
			<div class="wrapper">
				<h1 class="wnl-front-title">
					<span class="rwd-line">Sprawdzony kurs przygotowujący do </span>
					<span class="rwd-line">Lekarskiego Egzaminu Końcowego</span>
				</h1>
				<p class="subtitle">
					<span>Platforma e-learningowa</span>
					<span class="line"></span>
					<span>Praktyczne warsztaty</span>
					<span class="line"></span>
					<span>Wyjątkowa atmosfera</span>
				</p>
				<p class="metadata inverted">
					Zapisy na 4. edycję trwają do 22 października! Co 4 lekarz uczy się razem z nami!
				</p>
				<p class="aligncenter">
					<a href="<?php echo site_url('zapisy') ?>" class="button button__primary">
						Zapisz się!
					</a>
					<!-- <a href="https://wiecejnizlek.pl/zostaw-e-mail" class="button button__primary">
						Zarezerwuj!
					</a> -->
				</p>
			</div>
		</div>
		<div class="white-shadow bottom"></div>
	</div>

	<div class="section two">
		<div class="wnl-front-video">
			<iframe src="https://player.vimeo.com/video/205572663?byline=0&portrait=0"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<div class="wrapper">
			<h2 class="title">Dlaczego nasz kurs działa?</h2>
			<h3 class="subtitle">O 5 filarach kursu najlepiej opowiedzą sami uczestnicy! W końcu co 4 lekarz w kraju uczy się do LEK-u razem z nami!</h3>
			<div class="pillars">
				<ul class="pillars-list">
					<?php for ($i = 1; $i <= 5; $i++) : ?>
						<li>
							<div class="image">
								<div class="inside">
									<img src="<?php echo get_template_directory_uri() . '/assets/ilustracje/ilu2_pillar' . $i . '.png' ?>" alt="<?php the_field("courses_section_title_" . $i); ?>">
								</div>
							</div>
							<p class="title"><?php the_field("courses_section_title_" . $i); ?></p>
							<p class="description"><?php the_field("courses_section_description_" . $i); ?></p>
							<a href="<?php echo get_site_url() . '/o-zalozeniach#' . $i ?>" title="Czytaj więcej..." class="more">
								Czytaj więcej
								<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej">
							</a>
						</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
		<div class="wrapper">
			<a href="https://facebook.com/wiecejnizlek/reviews" class="button button__secondary more-reviews" target="_blank">
				Sprawdź więcej recenzji
			</a>
		</div>
		<div class="wrapper" style="margin-top: 60px;">
			<h2 class="title">Skąd wiemy, że nasz kurs działa?</h2>
			<h3 class="subtitle">⭐️ Kurs uzyskał akredytację Kuratorium Oświaty oraz Wielkopolskiej Izby Lekarskiej! ⭐️</h3>
			<h3 class="subtitle">Jako jedyni zbieramy i publikujemy wyniki naszych kursantów!</h3>
			<div class="cards">
				<div class="card">
					<h2 class="card-title">Średnie wyniki i zdawalność</h2>
					<p class="card-content alignleft">
						Kończący kurs zdają LEK średnio <strong>o 5-6 punktów procentowych wyżej</strong>, niż reszta kraju! Jednocześnie <strong>tylko 2-3% z nich nie zdaje</strong> egzaminu, w kraju to około 15%.
					</p>
					<img src="<?php echo get_template_directory_uri() ?>/assets/chart-1.png" alt="Średnie wyniki i zdawalność" class="image full-width">
				</div>
				<div class="card">
					<h2 class="card-title">Wyniki powyżej 70% i 80%</h2>
					<p class="card-content alignleft">
						Wyników <strong>powyżej 70% i powyżej 80%</strong> jest niemal <strong>dwukrotnie więcej</strong> wśród naszych absolwentów, niż wśród pozostałych zdających!
					</p>
					<img src="<?php echo get_template_directory_uri() ?>/assets/chart-2.png" alt="Wyniki powyżej 70% i 80%" class="image full-width">
				</div>
			</div>
		</div>

		<div class="wrapper" style="margin-top: 60px;">
			<h2 class="title">Nowy album map myśli</h2>
			<h3 class="subtitle">Poznaj najefektywniejszy sposób notowania i powtarzania!</h3>
			<div class="cards align-center">
				<div class="card">
					<a href="<?php echo get_site_url() ?>/album">
						<img src="https://wiecejnizlek.pl/wp-content/uploads/2018/09/map6-1.jpg" class="image full-width" alt="Mapa myśli - Choroby śródmiąższowe płuc">
					</a>
				</div>
				<div class="card alignleft">
					<div class="card-content">
						<div>
							Efektywna nauka wymaga systematyzacji wiedzy. W tym pomoże Ci album map myśli, który stworzyliśmy specjalnie dla kursu do LEK-u.
						</div>
						<p>
							Ponad <strong>150 map</strong>, <strong>400 rysunków</strong> i <strong>300 nagrań</strong> audio stworzy w Twojej głowie liczne skojarzenia, które zostaną Ci w pamięci na długie lata!
						</p>
						<div>
							<strong>
								Spróbuj i sprawdź jak łatwo przywołać w pamięci skojarzenie z nagrania poniżej!
							</strong>
						</div>
						<p>
							<iframe width="100%" height="160" src="https://clyp.it/mbzky4s2/widget" frameborder="0"></iframe>
						</p>
						<p>
							<a href="<?php echo get_site_url() ?>/album" class="button button__secondary">
								Przeczytaj więcej
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php get_template_part( 'page-templates/content', 'products' ); ?>

	<div class="section" style="padding: 30px 0;">
		<div class="wrapper">
			<div class="cards">
				<div class="card">
					<a href="<?php echo site_url('o-warsztatach') ?>" title="Czytaj więcej..." class="more">
						<img src="https://wiecejnizlek.pl/wp-content/uploads/2018/03/ilu2_workshops2.png" alt="Praktyczne warsztaty" class="image big">
					</a>
					<h2 class="card-title">Praktyczne warsztaty</h2>
					<p class="card-content alignleft">
						Warsztaty w ramach naszego kursu do LEK-u to okazja do nabycia wyjątkowej wiedzy potrzebnej zaraz po egzaminie - podczas pierwszych kroków na ścieżce zawodowej oraz w trakcie nauki na specjalizacji. Pozwalają również skorzystać z doświadczenia praktyków i lepiej zaplanować swój start. Przeczytaj więcej na podstronie <a href="<?php echo site_url('o-warsztatach') ?>">O warsztatach</a>.
					</p>
					<p class="alignleft">
						<a href="<?php echo site_url('o-warsztatach') ?>" title="Czytaj więcej..." class="more">
							Czytaj więcej
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej">
						</a>
					</p>
				</div>
				<div class="card">
					<a href="<?php echo site_url('o-kursie#qanda') ?>" title="Czytaj więcej..." class="more">
						<img src="https://wiecejnizlek.pl/wp-content/uploads/2018/03/ilu2_workshops1.png" alt="Najczęście zadawane pytania" class="image big">
					</a>
					<h2 class="card-title">Masz wątpliwości?</h2>
					<p class="card-content alignleft">
						Na podstronie <a href="<?php echo site_url('faw') ?>">FAQ</a> odpowiadamy na wszystkie pytania dotyczące kursu. Od dat i planu zajęć, przez opis metodyki i materiałów, po misję, która motywuje nas do działania - wszystko w jednym miejscu. 🙂 Jeżeli nie rozwiejemy Twoich wątpliwości, napisz do nas, a na pewno dodamy odpowiedź do strony!
					</p>
					<p class="alignleft">
						<a href="<?php echo site_url('o-kursie#qanda') ?>" title="Czytaj więcej..." class="more">
							Czytaj więcej
							<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej">
						</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="wrapper">
			<?php get_template_part( 'page-templates/content', 'recirculation' ); ?>
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

	<div class="section five">
		<div class="wrapper">
			<p class="title">
				Partnerzy
			</p>
			<div class="cards">
				<div class="card">
					<a href="http://prawalekarza.pl" target="_blank">
						<img src="<?php echo get_template_directory_uri() ?>/assets/partners/prawalekarza.png"/>
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
