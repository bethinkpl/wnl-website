<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, user-scalable=no" />
		<meta http-equiv="Content-Security-Policy" content="script-src 'self' 'unsafe-inline' https://*.vimeocdn.com https://*.facebook.net https://*.facebook.com https://*.google-analytics.com https://*.disqus.com http://*.disqus.com https://*.disquscdn.com">
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
              'image' => 'https://wiecejnizlek.pl/wp-content/themes/wiecejnizlek/assets/hero/wnl-og-image.jpg',
            ];

			echo '<meta name="description" content="Platfroma e-learningowa, praktyczne warsztaty, selekcja materiałów, wspólny plan pracy, systematyzacja wiedzy - to tylko początek! Wejdź na stronę i dowiedz się więcej.">';
          }

          foreach ( $og_data as $key => $value ) {
            printf( '<meta property="og:%1$s" content="%2$s">', $key, $value );
          }
        ?>

        <title><?php wp_title(); ?></title>
		<?php $cssVersion=19; ?>
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

		<!-- Facebook Pixel Code -->
		<script>
		  !function(f,b,e,v,n,t,s)
		  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		  n.queue=[];t=b.createElement(e);t.async=!0;
		  t.src=v;s=b.getElementsByTagName(e)[0];
		  s.parentNode.insertBefore(t,s)}(window, document,'script',
		  'https://connect.facebook.net/en_US/fbevents.js');
		  fbq('init', '1124418247712387');
		  fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		  src="https://www.facebook.com/tr?id=1124418247712387&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
	</head>

    <body <?php body_class() ?>>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.12&autoLogAppEvents=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
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
						<a href="" class="close"><img src="<?php echo get_template_directory_uri() ?>/assets/button/menu/exit.svg" alt="Zamknij menu" /></a>
					</div>

					<div class="menu">
						<div class="mail">
							<!-- <a href="https://platforma.wiecejnizlek.pl" class="button button__primary">
								Platforma
								</a> -->
							<a href="<?php echo site_url('zapisy') ?>" class="button button__primary">
								Zapisz się!
							</a>
							<!-- <a href="<?php echo get_site_url() ?>/zostaw-e-mail" class="button button__primary">
								Zarezerwuj!
							</a> -->
						</div>

						<?php wp_nav_menu( array(
						    'menu' => 'mobile_menu'
						) ); ?>

						<a href="https://facebook.com/wiecejnizlek" title="Profil Więcej niż LEK na Facebooku" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_footer/facebook/normal.svg"></a>
						<a href="https://instagram.com/wiecejnizlek" title="Profil Więcej niż LEK na Instagram" target="_blank" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_footer/instagram/normal.svg"></a>
						<div class="fb-like" data-href="https://facebook.com/wiecejnizlek" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
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
						<!-- <a href="https://www.facebook.com/wiecejnizlek" title="Profil Więcej niż LEK na Facebooku" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/facebook/normal.svg"></a> -->
						<div class="fb-container">
							<div class="fb-like" data-href="https://facebook.com/wiecejnizlek" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
						</div>
					</div>
				</div>

				<div class="bag">
					<div class="mail">
						<!-- <a href="https://platforma.wiecejnizlek.pl" class="button button__primary">
							Platforma
						</a> -->
						<a href="<?php echo site_url('zapisy') ?>" class="button button__primary">
							Zapisz się!
						</a>
						<!-- <a href="<?php echo get_site_url() ?>/zostaw-e-mail" class="button button__primary">
							Zarezerwuj!
						</a> -->
					</div>
					<a href="" class="hamburger"><img src="<?php echo get_template_directory_uri() ?>/assets/button/menu/normal.svg" alt="Menu mobile" /></a>
				</div>
			</div>
		</header>

		<div id="mask"></div>
