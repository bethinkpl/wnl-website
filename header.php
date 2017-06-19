<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />

		<?php
          if ( is_single() ) {
            $post = get_post();
            $image = get_field( 'preview_photo', $post->ID );
			$url = get_permalink( $post->ID );

			if ( has_tag('http', $post) ) {
				$url = str_replace('https:', 'http:', $url);
			}

            $og_data = [
              'url' => $url,
              'type' => 'article',
              'title' => sprintf( '%1$s - Więcej niż LEK', $post->post_title ),
              'description' => $post->post_excerpt,
              'image' => esc_url( $image['sizes']['large'] ),
            ];

			echo '<meta name="description" content="' . $og_data['description'] . '">';
          } else {
            $og_data = [
              'url' => get_site_url(),
              'type' => 'website',
              'title' => 'Więcej niż LEK - Unikalny kurs przygotowujący do LEK-u',
              'description' => 'Platfroma e-learningowa, praktyczne warsztaty, selekcja materiałów, wspólny plan pracy, systematyzacja wiedzy - to tylko początek! Wejdź na stronę i dowiedz się więcej.',
              'image' => esc_url( sprintf( '%1$s/assets/fb_og_mainpage.png', get_template_directory_uri() ) ),
            ];

			echo '<meta name="description" content="Platfroma e-learningowa, praktyczne warsztaty, selekcja materiałów, wspólny plan pracy, systematyzacja wiedzy - to tylko początek! Wejdź na stronę i dowiedz się więcej.">';
          }

          foreach ( $og_data as $key => $value ) {
            printf( '<meta property="og:%1$s" content="%2$s">', $key, $value );
          }
        ?>

        <title><?php wp_title(); ?></title>
		<?php $cssVersion=3; ?>
        <link rel="stylesheet" href="<?php echo sprintf('%s/style.%d.css', get_stylesheet_directory_uri(), $cssVersion) ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/assets/favicon.png" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>

        <link href="https://fonts.googleapis.com/css?family=PT+Serif400:700|Rubik|Poppins:400,500&amp;subset=latin-ext" rel="stylesheet">

        <script src="<?php echo get_template_directory_uri() ?>/js/vendors/jquery-3.1.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/vendors/jquery.easing.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/vendors/jquery.cookie.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/vendors/modernizr-custom.js"></script>
	  	<script src="<?php echo get_template_directory_uri() ?>/js/vendors/velocity.min.js"></script>

		<script type="text/javascript">
			var pageUrl = "<?php echo get_site_url() ?>";
			var templateUrl = "<?php echo get_template_directory_uri() ?>";
		</script>
	</head>

    <body <?php body_class() ?>>
      <?php if ( is_front_page() ) : ?>
        <div class="wnl-front-particles" id="particles-js"></div>
        <div class="wnl-front-overlay"></div>
      <?php elseif ( is_single() ) : ?>
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
      <?php endif;?>
		<header>
			<!-- menu mobile -->
			<div class="sidebar">
				<div class="wrapper">
					<div class="logo">
						<a href="<?php echo get_site_url() ?>/strona-glowna" title="Wróć do strony głównej">
							<img src="<?php echo get_template_directory_uri() ?>/assets/logo/main/white.png" alt="Logotyp Więcej niż LEK" />
						</a>
					</div>

					<div class="bag">
						<div class="mail">
							<a href="https://platforma.wiecejnizlek.pl" class="button button__primary">
								Platforma
							</a>
						</div>

						<a href="" class="close"><img src="<?php echo get_template_directory_uri() ?>/assets/button/menu/exit.svg" alt="Zamknij menu" /></a>
					</div>

					<div class="menu">
						<?php wp_nav_menu( array(
						    'menu' => 'mobile_menu'
						) ); ?>
						<a href="https://www.facebook.com/wiecejnizlek" title="Profil Więcej niż LEK na Facebooku" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_footer/facebook/normal.svg"></a>
						<div class="mail">
							<a href="https://platforma.wiecejnizlek.pl" class="button button__primary">
								Platforma
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="wrapper">
				<div class="logo">
					<a href="<?php echo get_site_url() ?>/strona-glowna" title="Wróć do strony głównej">
						<img src="<?php echo get_template_directory_uri() ?>/assets/logo/main/normal.svg" alt="Logotyp Więcej niż LEK" />
					</a>
				</div>

				<!-- menu desktop -->
				<div class="desktop">
					<div class="bag">
						<?php wp_nav_menu(array('theme_location'=>'landing-menu')); ?>
						<a href="https://www.facebook.com/wiecejnizlek" title="Profil Więcej niż LEK na Facebooku" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/facebook/normal.svg"></a>
					</div>
				</div>

				<div class="bag">
					<div class="mail">
						<a href="https://platforma.wiecejnizlek.pl" class="button button__primary">
							Platforma
						</a>
					</div>
					<a href="" class="hamburger"><img src="<?php echo get_template_directory_uri() ?>/assets/button/menu/normal.svg" alt="Menu mobile" /></a>
				</div>
			</div>
		</header>

		<div id="mask"></div>
