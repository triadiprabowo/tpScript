<?php 
if($_GET['res'] == 'contact') { ?>
	<section class="tp-modal-wrapper medium">
		<!-- Add close icon modal -->
		<div class="tp-modal-closeicon hvr-buzz-out" ng-click="refreshClose(0)"><span class="tp-icon fa-times"></span></div>

		<section class="tp-modal-inner">
			<section class="tp-modal-content">
				<h1><span class="tp-icon fa-check-circle"></span> Sucess</h1>
				
				<span class="tp-modal-separator"></span>

				<!-- Contact Form -->
				<p style="text-align: center;">Thank you for contacting me and I will return to you as soon as possible.</p>

				<div class="tp-modal-submit right">
					<a href="javascript:void(0)" class="tp-button" ng-click="refreshClose(0)"><span class="tp-icon fa-check"></span> OK</a>
				</div>
			</section>
		</section>
	</section>
<?php
} // End if res == contact
?>
