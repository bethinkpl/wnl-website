<?php get_header(); ?>

	<div class="">
		<main id="main" class="site-main page blog" role="main">
			<div class="wrapper">
				<h1 class="wnl-page-title no-shadow">Blog</h1>
				<div class="categories">
					<ul class="wnl-blog-categories-list">
						<li><a href="<?php echo get_site_url() ?>/blog">Wszystkie</a></li>
						<?php
							wp_list_categories( [
								'hide_empty' => false,
								'title_li' => '',
								'exclude' => [ 1 ],
							] );
						?>
					</ul>
				</div>
			</div>

			<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				$image = get_field( 'preview_photo' );
			?>

				<div class="wnl-blog-listing-article" style="background-image: url('<?php echo $image !== false ? $image['url'] : '' ?>');">
			    <a href="<?php echo esc_url( get_permalink() ) ?>" title="<?php echo get_the_title() ?>" class="wnl-blog-listing-link">
			      <div class="wnl-blog-listing-article-inside">
							<?php
								$categories = get_the_category();
								if ( !empty ( $categories ) ) :
									$categoryNames = [];
									foreach ( $categories as $category ) {
										$categoryNames[] = $category->cat_name;
									}
							?>
								<p class="metadata"><?php echo implode( ', ', $categoryNames ) ?></p>
							<?php endif; ?>
			        <h2 class="wnl-blog-listing-title"><?php the_title() ?></h2>
			        <p class="metadata"><?php echo get_the_date( 'j F Y' ) ?>, <?php the_author() ?></p>
			      </div>
			    </a>
			  </div>

			<?php
				$image = $categories = null;
				endwhile; else :
			?>

				<h2>Pierwszy wpis już wkrótce!</h2>

			<?php endif; ?>

			<div class="section back">
				<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
					<img src="<?php echo get_template_directory_uri() ?>/assets/button/arrow_up/normal.svg" alt="Przewiń stronę" />
				</a>
			</div>
		</main>
	</div>

<?php get_footer(); ?>
