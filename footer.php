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
								<a href="https://www.facebook.com/wiecejnizlek" title="Profil Więcej niż LEK na Facebooku" class="fb"><img src="<?php echo get_template_directory_uri() ?>/assets/button/social_media_footer/facebook/normal.svg"></a>
							</div>
						</div>

						<p class="head">Kontakt</p>
						<p>info@wiecejnizlek.pl</p>
					</div>
				</div>
				<div class="down off-768 off-640 off-320">
					<ul class="wnl-footer-legal">
						<a href="<?php echo get_site_url() ?>/regulamin" title="Regulamin strony">Regulamin</a><span class="line">|</span>
						<a href="http://www.guideme24.pl/privacy-policy/677" class="guide-embed guide-color-2 guide-branded guide-button-policy" title="Polityka Prywatności" onclick="TINY.box.show({iframe:'http://www.guideme24.pl/privacy-policy/677',boxid:'frameless',width:760,height:450,fixed:false}); return false;">Polityka Prywatności</a>

            <script type="text/javascript">
            (function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0];
              s.src = "http://www.guideme24.pl/privacy-policy/client.js"; tag.parentNode.insertBefore(s,tag);};
              if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}
              else{w.onload = loader;}})(window, document);
            </script>
					</ul>
				</div>
			</div>
		</footer>

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
    </script>

    <?php wp_footer(); ?>
	</body>
</html>
