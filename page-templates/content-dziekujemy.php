<div class="page thank-you">
	<div class="wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<?php the_content() ?>
		<?php endwhile; endif; ?>
		<div class="aligncenter">
			<a href="<?php echo get_site_url() ?>" class="button button__primary">Przejdź na stronę główną</a>
		</div>
	</div>
</div>
