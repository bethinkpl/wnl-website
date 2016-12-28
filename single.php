<?php get_header(); ?>
	<div class="page open">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>">

			<div class="content">
				<?php
					// Set variables
					$title = get_the_title();
					$subtitle = get_field('preview_subtitle');
					$date = get_the_date();
					$author = get_the_author();
					$image = get_field('preview_photo');
					$categories = get_the_category();
				?>

				<div class="cover">
					<div class="image" style="background-image: url('<?= $image['url']; ?>');"></div>
					<div class="inside">
						<div class="wrapper">
							<p class="category"><?= get_the_category_list(', ') ?></p>
							<p class="title">
								<?= $title ?>
							</p>
							<?php
								if (!empty($subtitle)) {
									echo '<p class="subtitle">' . $subtitle . '</p>';
								}
							?>
							<p class="date">
								<?= $date . ', ' . $author; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="all">
					<div class="wrapper">

						<?php the_content(); ?>

					</div>
				</div>

				<?php
					$args = array(
					    'tag' => 'featured'
				    );
					$recent_posts = wp_get_recent_posts($args);
					foreach( $recent_posts as $recent ){
						$value = get_field( "preview_photo", $recent["ID"] );
						// echo '<li>
						// 	<a href="' . get_permalink($recent["ID"]) . '">
						// 		<div class="image">
						// 			<img src="'.$value['url'].'" alt="" />
						// 		</div>
						// 		<p class="title">'.$recent["post_title"].'</p>
						// 	</a>
						// </li>';
					}
					wp_reset_query();
				?>

				<!-- <div class="down">
					<div class="back">
						<a href="<?php back_to_post_category(); ?>" title=""><?php pll_e("open_preview_back"); ?></a>
					</div>
				</div> -->
			</div><!-- .entry-content -->

			<div class="wrapper">
				<?php
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				?>
			</div>

		</article><!-- #post-## -->
		<div class="section back">
			<a href="#" title="" data-section-target="0">
				<img src="<?php echo get_template_directory_uri() . '/assets/button/arrow_up/normal.svg' ?>" alt="Więcej niż lek" />
			</a>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
