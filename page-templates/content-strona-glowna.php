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
							<a href="<?php echo get_site_url() . '/jak-pomagamy#' . $i ?>" title="Czytaj więcej..." class="more">
								<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_right/normal.svg" alt="Kliknij, aby przeczytać więcej">
							</a>
						</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="section three">
		<div class="image"></div>
		<div class="wrapper">
			<p class="title">Dwa warianty do wyboru</p>
			<div class="courses">
				<div class="item first">
					<div class="line"></div>
					<h3>Kurs stacjonarny</h3>
					<h4>2200zł</h4>
					<p class="metadata">2000zł dla zapisanych na listę mailingową przed 1.04</p>
					<ul class="wnl-front-options-list">
						<li class="wnl-front-options-list-item">Uczestnictwo w 12-tygodniowym kursie internetowym - dostęp do jedynego wirtualnego pokoju nauki do LEK-u, wspierającego łatwe dzielenie się wiedzą (czat, system pytań i odpowiedzi, prywatne wiadomości)</li>
						<li class="wnl-front-options-list-item">Gotowy, zsynchronizowany plan pracy, uwzględniający powtórki i rozwiązywanie pytań - 55 dni lekcyjnych</li>
						<li class="wnl-front-options-list-item">Ponad 12 tysięcy slajdów w estetycznych i funkcjonalnych prezentacjach - z nami nie musisz kupować wszystkich podręczników!</li>
						<li class="wnl-front-options-list-item">Autorskie materiały ułatwiające notowanie, powtórki i systematyzację wiedzy (przesyłka kurierska w cenie)</li>
						<li class="wnl-front-options-list-item">Codzienna porcja wiedzy o efektywnym procesie nauki, która przyda się nie tylko podczas przygotowań do egzaminu!</li>
						<li class="wnl-front-options-list-item">Wspólne, próbne podejście do LEK-u ostatniego dnia kursu</li>
					</ul>
					<span class="wnl-front-options-plus">+</span>
					<ul class="wnl-front-options-list">
						<li class="wnl-front-options-list-item">Uczestnictwo w 6 warsztatach weekendowych w Poznaniu - spotykamy się i pracujemy razem!
							<ul>
								<li>“Jak się uczyć?”- nasz przepis na LEK, czyli wprowadzenie do kursu i metody efektywnej nauki - Ekipa Więcej niż LEK</li>
								<li>Choroby wewnętrzne - dr hab. n. med. Mariusz Puszczewicz, prof. UM</li>
								<li>Choroby dziecięce - dr hab. n. med. Anna Mania</li>
								<li>Stany nagłe - lek. Michał Szemień</li>
								<li>Prawo medyczne - dr n. praw. Radosław Tymiński</li>
								<li>Perspektywy zawodowe, wybór specjalizacji oraz możliwe ścieżki rozwoju po studiach medycznych - Ekipa Więcej niż LEK</li>
							</ul>
						</li>
						<li class="wnl-front-options-list-item">Na warsztatach związanych z zakresem materiału do LEK-u - odpowiedzi na pytania zadawane poprzez platformę, wspólne rozwiązywanie przypadków oraz “godzina z mentorem”</li>
					</ul>
					<div class="select-product">
						<a href="https://platforma.wiecejnizlek.pl/payment/personal-data/wnl-online-onsite" class="button button__primary">
							Wybieram kurs stacjonarny
						</a>
					</div>
				</div>

				<div class="item second">
					<div class="line"></div>
					<h3>Kurs internetowy</h3>
					<h4>1500zł</h4>
					<p class="metadata">1300zł dla zapisanych na listę mailingową przed 1.04</p>
					<ul class="wnl-front-options-list">
						<li class="wnl-front-options-list-item">Uczestnictwo w 12-tygodniowym kursie internetowym - dostęp do jedynego wirtualnego pokoju nauki do LEK-u, wspierającego łatwe dzielenie się wiedzą (czat, system pytań i odpowiedzi, prywatne wiadomości)</li>
						<li class="wnl-front-options-list-item">Gotowy, zsynchronizowany plan pracy, uwzględniający powtórki i rozwiązywanie pytań - 55 dni lekcyjnych</li>
						<li class="wnl-front-options-list-item">Ponad 12 tysięcy slajdów w estetycznych i funkcjonalnych prezentacjach - z nami nie musisz kupować wszystkich podręczników!</li>
						<li class="wnl-front-options-list-item">Autorskie materiały ułatwiające notowanie, powtórki i systematyzację wiedzy (przesyłka kurierska w cenie)</li>
						<li class="wnl-front-options-list-item">Codzienna porcja wiedzy o efektywnym procesie nauki, która przyda się nie tylko podczas przygotowań do egzaminu!</li>
						<li class="wnl-front-options-list-item">Wspólne, próbne podejście do LEK-u ostatniego dnia kursu</li>
					</ul>
					<div class="select-product">
						<a href="https://platforma.wiecejnizlek.pl/payment/personal-data/wnl-online" class="button button__secondary">
							Wybieram kurs stacjonarny
						</a>
					</div>
				</div>
				<div style="height: 1px; clear: both;"></div>
			</div>
		</div>
		<div class="wrapper">
			<div class="cards">
				<div class="card">
					<h4 class="card-title">Refundacja z Izby Lekarskiej</h4>
					<p class="card-content">Jeżeli Twoja Izba Lekarska zapewnia budżet na szkolenia pozastażowe, możesz z niego refundować nasz kurs! <a href="<?php echo site_url('o-kursie/#platnosci-reklamacje-promocje') ?>">Dowiedz się więcej</a></p>
				</div>
				<div class="card">
					<h4 class="card-title">50% zniżki na kolejne edycje</h4>
					<p class="card-content">Uczestnicząc w dowolnym wariancie kursu, otrzymujesz 50% zniżki na Kurs Internetowy w ramach kolejnych edycji!</p>
				</div>
			</div>
			<div class="cards">
				<div class="card">
					<h4 class="card-title">Rezygnacja do 7 dni</h4>
					<p class="card-content">Obawiasz się, że kurs Ci się nie spodoba? Przez pierwsze 7 dni możesz zrezygnować i odzyskać 50% wpłaty bez żadnych wyjaśnień!</p>
				</div>
				<div class="card">
					<h4 class="card-title">Bierzemy odpowiedzialność za wynik</h4>
					<p class="card-content">Jeżeli ukończysz wszystkie nasze lekcje, a mimo to nie zdasz LEK-u - zwracamy 100% wpłaty. Wasz sukces jest dla nas najważniejszy!</p>
				</div>
			</div>
			<p class="text-center metadata inverted">
				Szczegóły dotyczące promocji i procesów reklamacji w Regulaminie
			</p>
		</div>
	</div>

	<div class="section" style="padding: 30px 0;">
		<div class="wrapper">
			<div class="cards">
				<div class="card">
					<a href="<?php echo site_url('o-warsztatach') ?>" title="Czytaj więcej..." class="more">
						<img src="https://wiecejnizlek.pl/wp-content/uploads/2016/12/ilu_kurs_przygotowanieiprzebieg_02.png" alt="Praktyczne warsztaty" class="image big">
					</a>
					<h2 class="card-title">Praktyczne warsztaty</h2>
					<p class="card-content alignleft">
						Warsztaty w ramach naszego kursu do LEK-u, to nie tylko okazja do uzyskania odpowiedzi na najtrudniejsze pytania! Pozwalają również skorzystać z doświadczenia wyjątkowych dydaktyków i specjalistów w dziedzinach chorób wewnętrznych, pediatrii, medycyny ratunkowej oraz prawa medycznego. Przeczytaj więcej na podstronie <a href="<?php echo site_url('o-warsztatach') ?>">O warsztatach</a>.
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
