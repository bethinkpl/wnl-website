<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<?php
					if (is_page(array('strona-glowna'))) {
						echo '<script>page = "index";</script>';
						get_template_part( 'page-templates/content', 'strona-glowna' );
					}
					else if (is_page(array('o-zalozeniach'))) {
						echo '<script>page = "help";</script>';
						get_template_part( 'page-templates/content', 'o-zalozeniach' );
					}
					else if (is_page(array('o-kursie'))) {
						get_template_part( 'page-templates/content', 'o-kursie' );
					}
					else if (is_page(array('o-warsztatach'))) {
						get_template_part( 'page-templates/content', 'o-warsztatach' );
					}
					else if (is_page(array('promocje'))) {
						get_template_part( 'page-templates/content', 'promocje' );
					}
					else if (is_page(array('o-nas'))) {
						echo '<script>page = "o-nas";</script>';
						get_template_part( 'page-templates/content', 'o-nas' );
					}
					else if (is_page(array('blog'))) {
						get_template_part( 'page-templates/content', 'blog' );
					}
					else if (is_page(array('kontakt'))) {
						get_template_part( 'page-templates/content', 'kontakt' );
					}
					else if (is_page(array('zostaw-e-mail'))) {
						get_template_part( 'page-templates/content', 'zostaw-e-mail' );
					}
					else if ( is_page( [ 'dziekujemy' ] ) ) {
						get_template_part( 'page-templates/content', 'dziekujemy' );
					}
					else if ( is_page( [ 'album' ] ) ) {
						get_template_part( 'page-templates/content', 'album' );
					}
					else if ( is_page( [ 'plan-kursu' ] ) ) {
						get_template_part( 'page-templates/content', 'plan-kursu' );
					}
					else if ( is_page( [ 'potwierdz-email' ] ) ) {
						get_template_part( 'page-templates/content', 'potwierdz-email' );
					} else {
						get_template_part( 'page-templates/content', 'general' );
					}
				?>

			</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
