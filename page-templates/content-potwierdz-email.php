<div class="page thank-you">
	<div class="wrapper">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<?php the_content() ?>
		<?php endwhile; endif; ?>
	</div>
</div>
