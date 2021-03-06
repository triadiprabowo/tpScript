<section class="tp-modal-wrapper medium">
	<!-- Add close icon modal -->
	<div class="tp-modal-closeicon hvr-buzz-out" ng-click="closeThisDialog()"><span class="tp-icon fa-times"></span></div>

	<section class="tp-modal-inner">
		<section class="tp-modal-content">
			<h1>Contact Me!</h1>
			
			<span class="tp-modal-separator"></span>
			<form autocomplete="off">
				<!-- Contact Form -->
				<p><span class="tp-icon fa-user"></span> Full Name</p>
				<input type="text" class="tp-txtbox nobg" ng-model="fullname" name="name" placeholder="Your full name" />

				<p><span class="tp-icon fa-envelope-o"></span>  Email</p>
				<input type="text" class="tp-txtbox nobg" ng-model="email" name="email" placeholder="Your email address (e.g. email@email.com)" />

				<p><span class="tp-icon fa-tags"></span>  Subject</p>
				<input type="text" class="tp-txtbox nobg" ng-model="subject" name="subject" placeholder="What this is about?" />

				<p><span class="tp-icon fa-inbox"></span>  Message</p>
				<textarea class="tp-txtarea nobg" ng-model="message" name="message" placeholder="What do you want to say?"></textarea>

				<div class="tp-modal-submit right">
					<a href="javascript:void(0)" class="tp-button" ng-click="submitContact()"><span class="tp-icon fa-paper-plane"></span> Send</a>
				</div>
			</form>
		</section>
	</section>
</section>