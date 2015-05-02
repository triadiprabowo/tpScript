<?php 
if($_GET['res'] == 'allrequired') { ?>
	<section class="tp-modal-wrapper medium">
		<!-- Add close icon modal -->
		<div class="tp-modal-closeicon hvr-buzz-out" ng-click="closeThisDialog()"><span class="tp-icon fa-times"></span></div>

		<section class="tp-modal-inner">
			<section class="tp-modal-content">
				<h1><span class="tp-icon fa-warning"></span> Error</h1>
				
				<span class="tp-modal-separator"></span>

				<!-- Contact Form -->
				<p style="text-align: center;">All fields are required and cannot be left empty</p>

				<div class="tp-modal-submit right">
					<a href="javascript:void(0)" class="tp-button" ng-click="closeThisDialog()"><span class="tp-icon fa-check"></span> OK</a>
				</div>
			</section>
		</section>
	</section>
<?php
} // End if res == allrequired
?>

<?php 
if($_GET['res'] == 'invalidemail') { ?>
	<section class="tp-modal-wrapper medium">
		<!-- Add close icon modal -->
		<div class="tp-modal-closeicon hvr-buzz-out" ng-click="closeThisDialog()"><span class="tp-icon fa-times"></span></div>

		<section class="tp-modal-inner">
			<section class="tp-modal-content">
				<h1><span class="tp-icon fa-warning"></span> Error</h1>
				
				<span class="tp-modal-separator"></span>

				<!-- Contact Form -->
				<p style="text-align: center;">You input invalid email address or email format, please try again.</p>

				<div class="tp-modal-submit right">
					<a href="javascript:void(0)" class="tp-button" ng-click="closeThisDialog()"><span class="tp-icon fa-check"></span> OK</a>
				</div>
			</section>
		</section>
	</section>
<?php
} // End if res == invalidemail
?>
