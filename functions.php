<?php
	function register_my_menus(){
		register_nav_menus(
			array(
				'landing-menu' => 'Landing Menu'
			)
		);
	}
	add_action('init', 'register_my_menus');

	function theme_prefix_setup() {

		add_theme_support( 'custom-logo',
			array(
				'height'      => 100,
				'width'       => 400,
				'flex-width' => true,
			)
		);
	}
	add_action( 'after_setup_theme', 'theme_prefix_setup' );

	function back_to_post_category() {
		$cat = get_the_category();
		$cat = $cat[0];
		echo get_category_link($cat->cat_ID);
	}

	pll_register_string('Cookies - treść', 'cookies_text');

	pll_register_string('Formularz - błędna walidacja', 'form_not_valid');
	pll_register_string('Formularz - wysłano poprawnie', 'form_send_success');
	pll_register_string('Formularz - błąd wysyłki', 'form_send_error');

	pll_register_string('Zapisz się - błędna walidacja', 'mail_not_valid');
	pll_register_string('Zapisz się - wysłano poprawnie', 'mail_send_success');
	pll_register_string('Zapisz się - błąd wysyłki', 'mail_send_error');

	pll_register_string('Przycisk - zostaw e-mail', 'button_leave_mail');

	/**
	 * Scripts
	 */
	wp_enqueue_script( 'particles', get_template_directory_uri() . '/js/vendors/particles.min.js' );
?>
