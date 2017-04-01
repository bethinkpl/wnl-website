<div class="page about">
	<div class="wrapper">
		<p class="title" style="padding-top: 80px;">
			<?php the_field("about_head"); ?>
		</p>
		<div class="up">
			<div class="wrapper">
				<div class="expandable folded">
					<div class="cloud">
						<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_down/normal.svg" alt="Zobacz więcej">
					</div>
					<h2 class="alignleft"><?php the_field("about_title"); ?></h2>
					<p class="subtitle"><?php the_field("about_subtitle"); ?></p>
					<p class="description">
						<?php the_field("about_description"); ?>
					</p>
					<div class="wnl-about-signature">
						<img src="<?php echo get_template_directory_uri() ?>/assets/signature.png" alt="Podpis - Dariusz Chrapek" title="Podpis Darka :)">
					</div>
				</div>
			</div>
		</div>

		<div>
			<h2 class="wnl-page-title">Ekipa "Więcej niż LEK"</h2>

			<div class="cards" style="margin-top: 50px;">
				<div class="card with-shadow">
					<img src="https://wiecejnizlek.pl/wp-content/uploads/2017/04/12524378_10154016132373555_8454049314635508052_n.jpg" alt="lek. Dariusz Ireneusz Chrapek" class="image">
					<p class="card-title">lek. Dariusz Ireneusz Chrapek<br>(ps. Prezes)</p>
					<p class="card-content">Młody lekarz w trakcie specjalizacji z medycyny rodzinnej. Zdecydował się na założenie firmy edukacyjnej co pozwoliło mu na połączenie swoich dwóch wielkich pasji - medycyny i nauczania. W wolnych chwilach głównie czyta książki, medytuje i gra w gry planszowe. :)</p>
				</div>
				<div class="card with-shadow">
					<img src="https://wiecejnizlek.pl/wp-content/uploads/2017/04/seljor2.jpg" alt="Adam Karmiński" class="image">
					<p class="card-title">Adam Karmiński</p>
					<p class="card-content">Dzięki doświadczeniu, które zdobył jako programista i project manager, ogarnia teraz technologię dla "Więcej niż LEK". Od wielu lat marzy o zmianach w systemie edukacji nastawionych na rozwój potencjału ludzkiego. Wychowany w poznańskim akademiku Uniwersytetu Medycznego, od zawsze miał słabość do medycyny. :)</p>
				</div>
				<div class="card with-shadow">
					<img src="https://scontent.fwaw3-1.fna.fbcdn.net/v/t31.0-8/10550126_1469472899987537_7973644516435015689_o.jpg?oh=44845152f927294fc5900259bf0df28a&oe=59575436" alt="Kuba Karmiński" class="image">
					<p class="card-title">Kuba Karmiński</p>
					<p class="card-content">Kocha technologię, kocha bluesa, kocha psy. Jako pierwszy full-time'owy członek ekipy, włożył całe serce w to, żeby platforma i strona były szybkie, bezpieczne oraz niezawodne.</p>
				</div>
			</div>
		</div>
		<div class="section back">
			<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
				<img src="<?php echo get_template_directory_uri() . '/assets/button/arrow_up/normal.svg' ?>" alt="Więcej niż lek" />
			</a>
		</div>
	</div>
</div>
