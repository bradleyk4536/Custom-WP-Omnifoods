<section id="contact">
<!--	MODAL FORM NOT DISPLAYED UNTIL BUTTON IS SELECTED-->
<div class="modal fade" id="newsletter_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button"  class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

				<h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> <?php echo  get_field('modal_title'); ?></h4>
			</div>
			<div class="modal-body">
				<p><?php echo get_field('modal_message'); ?></p>
				<?php echo get_field('contact_7_code'); ?>
				<hr>
				<p><small><?php echo get_field('statement'); ?></small></p>
			</div>
		</div>
	</div>
</div>
</section>
