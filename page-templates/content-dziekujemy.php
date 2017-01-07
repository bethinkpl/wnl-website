<div class="page thank-you">
	<div class="wrapper">
		<? if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<? the_content() ?>
		<? endwhile; endif; ?>
		<div class="aligncenter">
			<a href="<?= get_site_url() ?>" class="button button__primary">Przejdź na stronę główną</a>
		</div>
	</div>
</div>
