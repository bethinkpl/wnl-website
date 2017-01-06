	<?php get_header(); ?>

		<script src="<?= get_template_directory_uri() ?>/js/angular.js"></script>
		<div ng-app="lekApp" id="primary" class="content-area">
			<main id="main" class="site-main page blog" role="main" ng-controller="blogController">
				<div class="wrapper">
					<div class="categories">
						<ul>
							<li ng-repeat="(key, value) in categories | orderBy:'id'">
								<a href="#" title="" ui-sref="category({id: '{{value.id}}'})" ng-class="{active: id_category == value.id}">{{value.name}}</a>
							</li>
						</ul>
					</div>
				</div>

				<div ui-view ng-controller="postsController"></div>

				<div class="wrapper">
					<div class="more">
						<div class="bag">
							<a ng-click="increaseLimit()">wczytaj więcej</a>
						</div>
					</div>
					<div class="last">
						<div class="wrapper">
							<h3 class="wnl-section-heading">Przeczytaj także...</h3>
							<div class="posts">
								<ul class="wnl-blog-recent-posts">
									<?php
										$args = [ 'numberposts' => 3 ];
										$recent_posts = wp_get_recent_posts($args);
										foreach( $recent_posts as $recent ) :
											$value = get_field( 'preview_photo', $recent['ID'] );
									?>
											<li>
												<a href="<?= get_permalink( $recent['ID'] ) ?>">
													<div class="image" style="background-image: url('<?= $value['url'] ?>')"></div>
													<p class="title"><?= $recent['post_title'] ?></p>
												</a>
											</li>
									<?php
										endforeach;
										wp_reset_query();
									?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</main><!-- .site-main -->
		</div><!-- .content-area -->

		<?php get_footer(); ?>
