<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>

        <link href="https://fonts.googleapis.com/css?family=PT+Serif|Rubik|Poppins:300,400,500,600&amp;subset=latin-ext" rel="stylesheet">

        <script src="<?= get_template_directory_uri() ?>/js/vendors/jquery-3.1.1.min.js"></script>
        <script src="<?= get_template_directory_uri() ?>/js/vendors/jquery.easing.js"></script>
        <script src="<?= get_template_directory_uri() ?>/js/vendors/jquery.cookie.js"></script>
        <script src="<?= get_template_directory_uri() ?>/js/vendors/modernizr-custom.js"></script>
			  <script src="<?= get_template_directory_uri() ?>/js/vendors/velocity.min.js"></script>
  			<script src="<?= get_template_directory_uri() ?>/js/vendors/angular.min.js"></script>
        <script src="<?= get_template_directory_uri() ?>/js/vendors/angular-ui-router.min.js"></script>
        <script type="text/javascript">
          var pageUrl = "<?= get_site_url() ?>";
          var templateUrl = "<?= get_template_directory_uri() ?>";
        </script>
    </head>

    <body>
      <?php if (is_front_page()) : ?>
        <div class="wnl-front-particles" id="particles-js"></div>
      <?php endif;?>
    	<div id="statement">
			<p class="name"></p>
			<a href="#" class="close"></a>
		</div>
		<div id="cookies">
			<p>
				Nasza strona internetowa używa plików cookies (tzw. ciasteczka) w celach statystycznych oraz funkcjonalnych. Dzięki nim możemy indywidualnie dostosować stronę do twoich potrzeb. Każdy może zaakceptować pliki cookies albo ma możliwość wyłączenia ich w przeglądarce, dzięki czemu nie będą zbierane żadne informacje.
			</p>
			<a href="#" class="close"></a>
		</div>
		<div id="regulations">
			<div class="inside">
				<div class="in">
					<p class="title">Musimy zapytać…</p>
					<p class="subtitle">
						Czy wyrażasz zgode na przetwarzanie Twoich danych przez Bethink sp. z o.o. w celu dostarczania informacji handlowych, czyli informacji o rozpoczęciu kursu, nowych wpisach na blogu, oraz aktualności dotyczących kursu “Więcej niż LEK”?
					</p>
					<div class="accept">
						<a href="#" title="">
							WYRAŻAM ZGODĘ
						</a>
					</div>
					<div class="close">
						<a href="#" title="">
							Nie, dziękuję.
						</a>
					</div>
				</div>
			</div>
		</div>
		<header>
			<!-- menu mobile -->
			<div class="sidebar">
				<div class="wrapper">
					<div class="logo">
						<a href="<?= get_site_url() ?>/strona-glowna" title="Wróć do strony głównej">
							<img src="<?= get_template_directory_uri() ?>/assets/logo/main/white.png" alt="Logotyp Więcej niż LEK" />
						</a>
					</div>

					<div class="bag">
						<div class="mail">
							<a href="<?= get_site_url() ?>/zostaw-e-mail" title="">
								<?php pll_e("button_leave_mail"); ?>
							</a>
						</div>

						<a href="" class="close"><img src="<?= get_template_directory_uri() ?>/assets/button/menu/exit.svg" alt="Zamknij menu" /></a>
					</div>

					<div class="menu">
						<?php wp_nav_menu( array(
						    'menu' => 'mobile_menu'
						) ); ?>
						<a href="" title="" target="_blank" class="fb"><img src="<?= get_template_directory_uri() ?>/assets/button/social_media_footer/facebook/normal.svg"></a>
						<div class="mail">
							<a href="<?= get_site_url() ?>/zostaw-e-mail" title="">
								<?php pll_e("button_leave_mail"); ?>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="wrapper">
				<div class="logo">
					<a href="<?= get_site_url() ?>/strona-glowna" title="Wróć do strony głównej">
						<img src="<?= get_template_directory_uri() ?>/assets/logo/main/normal.svg" alt="Logotyp Więcej niż LEK" />
					</a>
				</div>

				<!-- menu desktop -->
				<div class="desktop">
					<div class="bag">
						<?php wp_nav_menu(array('theme_location'=>'landing-menu')); ?>
						<a href="" title="" target="_blank" class="fb"><img src="<?= get_template_directory_uri() ?>/assets/button/facebook/normal.svg"></a>
					</div>
				</div>

				<div class="bag">
					<div class="mail">
						<a href="<?= get_site_url() ?>/zostaw-e-mail" title="">
							<?php pll_e("button_leave_mail"); ?>
						</a>
					</div>
					<a href="" class="hamburger"><img src="<?= get_template_directory_uri() ?>/assets/button/menu/normal.svg" alt="Menu mobile" /></a>
				</div>
			</div>
		</header>

		<div id="mask">

		</div>
