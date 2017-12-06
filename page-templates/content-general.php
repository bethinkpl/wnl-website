<div class="page general">
	<div class="wrapper">
		<div class="wrapper">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<h1 class="wnl-page-title"><?php the_title() ?></h1>
				<?php the_content() ?>
			<?php endwhile; endif; ?>
			<?php #get_template_part( 'page-templates/content', 'recirculation' ); ?>
		</div>
	</div>
	<div class="section back">
		<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
			<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_up/normal.svg" alt="Powrót do góry" />
		</a>
	</div>
</div>
