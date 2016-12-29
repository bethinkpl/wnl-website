		<footer>
			<div class="wrapper">
				<div class="left">
					<div class="logo">
						<a href="strona-glowna" title="Przejdź na stronę główną">
							<img src="<?= get_template_directory_uri() ?>/assets/logo/footer/normal.svg" alt="Logotyp Więcej niż LEK" />
						</a>
					</div>

					<div class="menu">
						<?php wp_nav_menu( [ 'theme_location' => 'landing-menu' ] ) ?>
					</div>

					<div class="down off-1440 off-1280 off-1024">
						<ul>
							<li>
								<a href="" title="">Regulamin</a>
							</li>
							<li>
								<a href="" title="">Polityka prywatności</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="right">
					<div class="l">
						<p class="head">na blogu</p>
						<ul>
							<?php
								$recent_posts = wp_get_recent_posts( [ 'numberposts' => 4 ] );
								foreach( $recent_posts as $recent ) :
							?>
								<li><a href="<?= esc_url( get_permalink( $recent['ID'] ) ) ?>"><?= $recent["post_title"] ?></a></li>
							<?php endforeach; wp_reset_query(); ?>
						</ul>
					</div>
					<div class="r">
						<div class="social">
							<p class="head">Obserwuj nas na:</p>
							<div class="icons">
								<a href="" title="" target="_blank" class="fb"><img src="<?= get_template_directory_uri() ?>/assets/button/social_media_footer/facebook/normal.svg"></a>
								<a href="" title="" target="_blank" class="fb"><img src="<?= get_template_directory_uri() ?>/assets/button/social_media_footer/instagram/normal.svg"></a>
								<a href="" title="" target="_blank" class="fb"><img src="<?= get_template_directory_uri() ?>/assets/button/social_media_footer/youtube/normal.svg"></a>
								<a href="" title="" target="_blank" class="fb"><img src="<?= get_template_directory_uri() ?>/assets/button/social_media_footer/linkedin/normal.svg"></a>
							</div>
						</div>

						<p class="head">kontakt</p>
						<p class="">info@wiecejnizlek.pl</p>
						<p class="">600 500 700</p><br />

						<p class="award">Bethink s.c.</p><br />
						<p class="">27 Grudnia 7/9, Poznań</p>
						<p class="">NIP: 900 700 78 78</p>
					</div>
				</div>
				<div class="down off-768 off-640 off-320">
					<ul>
						<li>
							<a href="" title="">Regulamin</a><span class="line">|</span>
						</li>
						<li>
							<a href="" title="">Polityka prywatności</a>
						</li>
					</ul>
				</div>
			</div>
		</footer>

		<script src="<?= get_template_directory_uri() ?>/js/vendors/validation.form.js"></script>
		<script src="<?= get_template_directory_uri() ?>/js/vendors/tabtab.min.js"></script>
		<script src="<?= get_template_directory_uri() ?>/js/script.js"></script>
		<script type="text/javascript">
			var page;

			var statementFormNotValid = '<?php pll_e("form_not_valid"); ?>';
    	var statementFormSendSuccess = '<?php pll_e("form_send_success"); ?>';
    	var statementFormSendError = '<?php pll_e("form_send_error"); ?>';

    	var statementMailNotValid = '<?php pll_e("mail_not_valid"); ?>';
    	var statementMailSendSuccess = '<?php pll_e("mail_send_success"); ?>';
    	var statementMailSendError = '<?php pll_e("mail_send_error"); ?>';
    </script>

    <?php wp_footer(); ?>
	</body>
</html>
