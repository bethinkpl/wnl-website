<div class="page mail">
	<div class="wrapper">
		<div class="signin">
			<p class="title">
				<?php the_field("subscribe_title"); ?>
			</p>
			<p class="subtitle">
				<?php the_field("subscribe_subtitle"); ?>
			</p>
			<div class="input">
				<?php
					if( function_exists( 'mc4wp_show_form' ) ) {
					    mc4wp_show_form();
					}
				?>
			</div>
		</div>
	</div>
	<div class="">
		<p class="wnl-email-info">
			12-tygodniowy kurs do wrześniowego LEK-u startuje już 17 czerwca! Zapisy wystartują 1 kwietnia, wtedy podamy cenę oraz kadrę wykładowców.
		</p>
	</div>
</div>
