<?php get_header(); ?>

	<div class="">
		<main id="main" class="site-main page blog" role="main">
			<div class="wrapper">
				<h1 class="wnl-page-title no-shadow">Blog</h1>
				<div class="categories">
					<ul class="wnl-blog-categories-list">
						<li><a href="<?= get_site_url() ?>/blog">Wszystkie</a></li>
						<?
							wp_list_categories( [
								'hide_empty' => false,
								'title_li' => '',
								'exclude' => [ 1 ],
							] );
						?>
					</ul>
				</div>
			</div>

			<?
				if ( have_posts() ) : while ( have_posts() ) : the_post();
				$image = get_field( 'preview_photo' );
				$categories = get_categories();
				$categoryNames = [];
				foreach ( $categories as $category ) {
					$categoryNames[] = $category->cat_name;
				}
			?>

				<div class="wnl-blog-listing-article" style="background-image: url('<?= $image['url'] ?>');">
			    <a href="<?= esc_url( get_permalink() ) ?>" title="<?= get_the_title() ?>" class="wnl-blog-listing-link">
			      <div class="wnl-blog-listing-article-inside">
							<p class="metadata"><?= implode( ', ', $categoryNames ) ?></p>
			        <h2 class="wnl-blog-listing-title"><? the_title() ?></h2>
			        <p class="metadata"><? the_date( 'j F Y' ) ?>, <? the_author() ?></p>
			      </div>
			    </a>
			  </div>

			<? endwhile; else : ?>

				<h2>Pierwszy wpis już wkrótce!</h2>

			<? endif; ?>

			<div class="section back">
				<a href="#" title="" class="wnl-scroll-top" data-section-target="0">
					<img src="<?= get_template_directory_uri() ?>/assets/button/arrow_up/normal.svg" alt="Przewiń stronę" />
				</a>
			</div>
		</main>
	</div>

<?php get_footer(); ?>
