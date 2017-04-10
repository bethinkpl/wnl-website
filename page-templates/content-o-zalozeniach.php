<div class="page help">
	<div class="content">
		<div class="wrapper">
			<h1 class="wnl-page-title no-shadow">Jak pomagamy?</h1>
			<p class="wnl-page-subtitle">Poznaj 5 filarów kursu "Więcej niż LEK"!</p>
			<div class="tabhelp">
				<a href="" class="tabhelp-controls__prev"><img src="<?php echo get_template_directory_uri() ?>/assets/button/navigation_left/normal.svg" alt="Poprzedni"></a>
				<a href="" class="tabhelp-controls__next"><img src="<?php echo get_template_directory_uri() ?>/assets/button/navigation_right/normal.svg" alt="Następny"></a>
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
					<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
					<div class="tabhelp__content-item">
						<div class="wrapper">
							<div class="wrapper">
								<p class="head">
									<img src="<?php the_field( sprintf( 'help_section_image_%1$d', $i ) ); ?>" alt="" />
									<span class="title"><?php the_field( sprintf( 'help_section_title_%1$d', $i ) ) ?></span>
									<span class="subtitle"><?php the_field( sprintf( 'help_section_subtitle_%1$d', $i ) ) ?></span>
								</p>
							</div>
							<div class="down">
								<div class="wrapper">
									<h3>
										<?php the_field( sprintf( 'help_section_title_in_%1$d', $i ) ) ?>
									</h3>
										<?php the_field( sprintf( 'help_section_description_%1$d', $i ) ) ?>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>

				</div>
			</div>
		</div>
	</div>
</div>
