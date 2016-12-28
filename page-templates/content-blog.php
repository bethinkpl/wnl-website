<div class="wrapper specify">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
			// Set variables
			$title = get_the_title();

			$image = get_field('preview_photo');

			$i = (!empty($image)) ? 'white' : '';
		?>

		<div class="content" style="background-image: url('<?php echo $image['url']; ?>');">
			<a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo $title; ?>" class="title <?php echo $i; ?>">
				<div class="inside">
					<?php echo $title; ?>
				</div>
			</a>
		</div><!-- .entry-content -->

	</article><!-- #post-## -->
</div>