<?php if( $success !== FALSE ): ?>
<div class="alert success animated fadeIn">
	<p><?php echo $success; ?></p>
</div>
<?php endif; ?>

<div class="one_full">

	<?php echo validation_errors(); ?>

	<section class="title">
		<h4><?php
		if( $title )
		{
			echo 'Edit Lesson: ' . $course_title . ', ' . $title;
		}
		else
		{
			echo 'New Lesson';
		}
		?></h4>
	</section>

	<section class="item">
		<div class="content">

			<?php echo form_open_multipart(uri_string(), 'id="selfstudy-form" data-mode="'.$this->method.'"') ?>
				<?php echo form_hidden('lessonid', empty($lessonid) ? "" : $lessonid) ?>

				<div class="tabs">

					<ul class="tab-menu">
						<li><a href="#lesson-details"><span>Lesson Details</span></a></li>
						<li><a href="#lesson-content"><span>Lesson Content</span></a></li>
					</ul>

					<div class="form_inputs" id="lesson-details">
						<fieldset>
							<ul>
								<li>
									<label for="title"><?php echo lang('selfstudy:title'); ?> <span>*</span></label>
									<div class="input"><?php echo form_input('title', set_value('title', $title), 'class="width-15"'); ?></div>
								</li>
								<li>
									<label for="slug"><?php echo lang('selfstudy:slug'); ?> <span>*</span></label>
									<div class="input"><?php echo site_url() . 'selfstudy/' . $course_slug . '/ ' . form_input('slug', set_value('slug', $slug), 'class="width-15 disabled"'); ?></div>
								</li>
							</ul>
						</fieldset>
					</div><!-- /#course-details -->

					<div class="form_inputs ui-tabs-hide" id="lesson-content">
						<fieldset>
							<ul>
								<li>
									<label for="title"><?php echo lang('selfstudy:title'); ?></label>
									<div class="input"><?php echo form_textarea(array('id' => 'content', 'name' => 'content', 'value' => set_value('content', $content), 'rows' => 20, 'class' => 'wysiwyg-advanced')) ?></div>
								</li>
							</ul>
						</fieldset>
					</div><!-- /#course-lessons -->

				</div>

				<div class="buttons align-right padding-top">
					<?php echo form_button( array( 'name' => 'btnAction', 'value' => 'save', 'type' => 'submit', 'content' => 'Save', 'class' => 'btn blue') ); ?>
					<?php echo form_button( array( 'name' => 'btnAction', 'value' => 'save_exit', 'type' => 'submit', 'content' => 'Save &amp; Exit', 'class' => 'btn blue') ); ?>
					<a href="admin/selfstudy/edit/<?php echo $course_slug; ?>#course-lessons" class="btn gray cancel">Cancel</a>
				</div><!-- /.buttons -->


			<?php echo form_close() ?>

		</div>
	</section>

</div>






