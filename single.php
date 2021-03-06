<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="page open">
			<div class="background-image" style="background-image: url('<?php echo get_field( 'preview_photo' )['url'] ?>');"></div>

		<article id="post-<?php the_ID(); ?>">

			<div class="cover">
				<div class="inside">
					<div class="wrapper">
						<p class="category"><?php echo get_the_category_list(', ') ?></p>
						<p class="title">
							<?php echo get_the_title() ?>
						</p>
						<?php
							$subtitle = get_field('preview_subtitle');
							if ( !empty( $subtitle ) ) :
						?>
							<p class="subtitle"><?php echo $subtitle ?></p>
						<?php endif; ?>
						<p class="date"><?php printf( '%1$s, %2$s', get_the_date(), get_the_author() ) ?></p>
					</div>
				</div>
			</div>

			<div class="all">
				<div class="wrapper">
					<div class="content">
						<?php the_content(); ?>
					</div>
					<div class="wnl-post-social">
						<div class="fb-like" data-href="<?php echo get_the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
					</div>
					<div class="content-comments">
						<?php
							if ( comments_open() || get_comments_number() ) {
								comments_template();
							}
						?>
					</div>
				</div><!-- .entry-content -->
				<div class="section back">
					<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
						<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_up/normal.svg" alt="Powrót do góry" />
					</a>
				</div>
			</div>
		</article><!-- #post-## -->

		</div>
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>
