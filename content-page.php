<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php
			// Set variables
			$title = get_the_title();
			$description = get_the_content();
			$option_title = get_field('preview_title');
			$subtitle = get_field('preview_subtitle');
			$option_description = get_field('preview_description');
			// $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			// $product_image1 = $featured_image[0];
			$option_image = get_field('preview_photo');
			// Output
		?>

		<div class="">
			<p><?php echo $title; ?></p>
			<p><?php echo $description; ?></p>
			<p><?php echo $option_title; ?></p>
			<p><?php echo $subtitle; ?></p>
			<p><?php echo $option_description; ?></p>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
