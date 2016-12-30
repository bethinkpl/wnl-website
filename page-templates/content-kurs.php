<div class="page course">
	<div class="wrapper">
		<div class="section one">
			<p class="title">
				<?php the_field("assumptions_title"); ?>
			</p>
			<div class="steps">
				<ul class="">
					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("assumptions_image_1"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("assumptions_description_1"); ?>
						</p>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("assumptions_image_2"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("assumptions_description_2"); ?>
						</p>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("assumptions_image_3"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("assumptions_description_3"); ?>
						</p>
					</li>
				</ul>
			</div>
			<div class="wrapper">
				<p class="description">
					<?php the_field("assumptions_description"); ?>
				</p>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<div class="section two">
			<p class="title">
				<?php the_field("steps_title"); ?>
			</p>
			<div class="boxes">
				<div class="box">
					<div class="inside">
						<?php the_field("step_1"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_2"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_3"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_4"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_5"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_6"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_7"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_8"); ?>
					</div>
				</div>
				<div class="box">
					<div class="inside">
						<?php the_field("step_9"); ?>
					</div>
				</div>
			</div>
			<div class="steps">
				<ul class="">
					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("benefits_image_1"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("benefits_description_1"); ?>
						</p>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("benefits_image_2"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("benefits_description_2"); ?>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<div class="section three">
			<p class="title">
				<?php the_field("course_title"); ?>
			</p>
			<div class="steps">
				<ul class="">
					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("course_step_image_1"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("course_step_title_1"); ?>
						</p>
						<p class="description">
							<?php the_field("course_step_description_1"); ?>
						</p>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("course_step_image_2"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("course_step_title_2"); ?>
						</p>
						<p class="description">
							<?php the_field("course_step_description_2"); ?>
						</p>
					</li>

					<li>
						<div class="image">
							<div class="inside">
								<img src="<?php the_field("course_step_image_3"); ?>" alt="" />
							</div>
						</div>
						<p class="title">
							<?php the_field("course_step_title_3"); ?>
						</p>
						<p class="description">
							<?php the_field("course_step_description_3"); ?>
						</p>
					</li>
				</ul>
			</div>
			<div class="wrapper">
				<div class="graph">
					<img src="<?php the_field("course_graph"); ?>" alt="" />
				</div>
				<p class="description">
					<?php the_field("course_description"); ?>
				</p>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<div class="section five">
			<p class="title">
				<?php the_field( 'preparation_title' ); ?>
			</p>
			<p><?php the_field( 'points_subtitle' ); ?></p>
			<div class="steps">
				<ul class="">
					<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
						<li>
							<div class="image">
								<div class="inside">
									<img src="<?php the_field( sprintf( 'preparation_image_%1$d', $i ) ); ?>">
								</div>
							</div>
							<p class="description">
								<?php the_field( sprintf( 'preparation_description_%1$d', $i) ); ?>
							</p>
						</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="section four">
		<div class="wrapper">
			<div class="wnl-course-workshops">
				<h2><?php the_field("points_title"); ?></h2>
				<ul class="wnl-course-workshops-list">
					<?php for ( $i = 1; $i<=6; $i++ ) : ?>
						<li class="wnl-course-workshops-list-item">
							<div class="wnl-course-workshops-list-number">
								<?php printf( '0%1$d.', $i ); ?>
							</div>
							<div class="wnl-course-workshops-list-content">
								<h3 class="wnl-course-workshops-list-title">
									<?php the_field( sprintf( 'point_title_%1$d', $i ) ); ?>
								</h3>
								<?php the_field( sprintf( 'point_description_%1$d', $i ) ); ?>
							</div>
						</li>
					<?php endfor; ?>
				</ul>
			</div>
		</div>
	</div>

	<div class="section form">
		<div class="wrapper">
			<p class="title">
				<?php the_field("form_title"); ?>
			</p>
			<form action="" method="post" novalidate="novalidate" role="form" data-post-path="<?php echo get_template_directory_uri() . '/page-templates/form.php' ?>" data-event-valid-name="onValidForm" data-event-not-valid-name="onNotValidForm" data-event-send-success-name="onSendSuccessForm" data-event-error-success-name="onSendErrorForm">
                <input type="text" id="name" name="firstname" placeholder="TWOJE IMIĘ" data-validation-custom="true" data-error-message="" data-show-error="false">
                <input type="text" id="email" name="mail" placeholder="TWÓJ E-MAIL" data-validation-custom="true" data-error-message="" data-type-validation="Email" data-show-error="false">
                <textarea id="message" name="message" placeholder="WIADOMOŚĆ" cols="60" rows="5" data-validation-custom="true" data-error-message="" data-show-error="false"></textarea>
                <div class="send">
                	<input type="submit" value="WYŚLIJ">
                </div>
            </form>
		</div>
	</div>
	<div class="section back">
		<a href="#" title="" data-section-target="0">
			<img src="<?php echo get_template_directory_uri() . '/assets/button/arrow_up/normal.svg' ?>" alt="Więcej niż lek" />
		</a>
	</div>
</div>
