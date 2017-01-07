<div class="page thank-you">
	<div class="wrapper">
		<? if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<? the_content() ?>
		<? endwhile; endif; ?>
	</div>
</div>
