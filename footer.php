		<footer>
			<div class="wrapper">
				<div class="left">
					<div class="logo">
						<a href="strona-glowna" title="Przejdź na stronę główną">
							<img src="<?php echo get_template_directory_uri() ?>/assets/logo/footer/normal.svg" alt="Logotyp Więcej niż LEK" />
						</a>
					</div>

					<div class="menu">
						<?php wp_nav_menu( [ 'theme_location' => 'landing-menu' ] ) ?>
					</div>

					<div class="down off-1440 off-1280 off-1024">
						<ul class="wnl-footer-legal">
							<li><a href="<?php echo site_url('/cennik'); ?>" title="Cennik">Cennik</a></li>
							<li><a href="<?php echo site_url('/documents/RegulaminSerwisuWiecejnizlekPl.pdf'); ?>" title="Regulamin" target="_blank">Regulamin</a></li>
							<li><a href="<?php echo site_url('/documents/RegulaminPromocjiStudyBuddy.pdf'); ?>" title="Regulamin promocji" target="_blank">Regulamin promocji</a></li>
							<li><a href="<?php echo site_url('/polityka-prywatnosci'); ?>" title="Polityka Prywatności">Polityka Prywatności</a></li>
							<li><a href="<?php echo site_url('/sitemap.xml'); ?>" title="Mapa strony">Mapa strony</a></li>
						</ul>
					</div>
				</div>
				<div class="right">
					<div class="l">
						<p class="head">na blogu</p>
						<ul class="wnl-footer-recent-posts">
							<?php
								$recent_posts = wp_get_recent_posts( [ 'numberposts' => 4 ] );
								foreach( $recent_posts as $recent ) :
							?>
								<li><a href="<?php echo esc_url( get_permalink( $recent['ID'] ) ) ?>"><?php echo $recent["post_title"] ?></a></li>
							<?php endforeach; wp_reset_query(); ?>
						</ul>
					</div>
					<div class="r">
						<div class="social">
							<p class="head">Social Media</p>
							<div class="icons">
								<div class="fb-like" data-href="https://facebook.com/wiecejnizlek" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="false" data-colorscheme="dark" data-width="250"></div>

								<a href="https://www.facebook.com/wiecejnizlek" target="_blank" title="Profil Więcej niż LEK na Facebooku" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_footer/facebook/normal.svg"></a>
							</div>
						</div>
						<p class="head">Kontakt</p>
						<p>info@wiecejnizlek.pl</p>
						<p>+48 722 100 867</p>
						<p class="head">Dane firmy</p>
						<p>
							bethink sp. z o.o.<br>
							ul. Henryka Sienkiewicza 8/1<br>
							60-817 Poznań<br>
							NIP: 781-194-37-56<br>
							KRS: 0000668811
						</p>
					</div>
				</div>
				<div class="down off-768 off-640 off-320">
					<ul class="wnl-footer-legal">
						<li><a href="<?php echo site_url('/cennik'); ?>" title="Cennik">Cennik</a></li>
						<li><a href="<?php echo site_url('/documents/RegulaminSerwisuWiecejnizlekPl.pdf'); ?>" title="Regulamin" target="_blank">Regulamin</a></li>
						<li><a href="<?php echo site_url('/documents/RegulaminPromocjiStudyBuddy.pdf'); ?>" title="Regulamin promocji" target="_blank">Regulamin promocji</a></li>
						<li><a href="<?php echo site_url('/polityka-prywatnosci'); ?>" title="Polityka Prywatności">Polityka Prywatności</a></li>
						<li><a href="<?php echo site_url('/sitemap.xml'); ?>" title="Mapa strony">Mapa strony</a></li>
					</ul>
				</div>
			</div>
		</footer>

		<div id="statement">
			<p class="name"></p>
			<a href="#" class="close"></a>
		</div>
		<div id="regulations">
			<div class="inside">
				<div class="in">
					<p class="title">Musimy zapytać…</p>
					<p class="subtitle">
						Czy wyrażasz zgode na przetwarzanie Twoich danych przez bethink s.c. w celu dostarczania informacji handlowych, czyli informacji o rozpoczęciu kursu, nowych wpisach na blogu, oraz aktualności dotyczących kursu “Więcej niż LEK”?
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

		<script src="<?php echo get_template_directory_uri() ?>/js/vendors/validation.form.js"></script>
		<script src="<?php echo get_template_directory_uri() ?>/js/vendors/tabtab.min.js"></script>
		<script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
		<script type="text/javascript">
			var page;

			var statementFormNotValid = '<?php pll_e("form_not_valid"); ?>';
			var statementFormSendSuccess = '<?php pll_e("form_send_success"); ?>';
			var statementFormSendError = '<?php pll_e("form_send_error"); ?>';

			var statementMailNotValid = '<?php pll_e("mail_not_valid"); ?>';
			var statementMailSendSuccess = '<?php pll_e("mail_send_success"); ?>';
			var statementMailSendError = '<?php pll_e("mail_send_error"); ?>';

		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-91640583-1', 'auto');
		  ga('send', 'pageview');
    </script>

	<!-- <div class="platform-links metadata">
		<a class="platform-links-item" href="https://platforma.wiecejnizlek.pl/">Zaloguj się na platformie</a>
	</div> -->

    <?php wp_footer(); ?>
	</body>
</html>
