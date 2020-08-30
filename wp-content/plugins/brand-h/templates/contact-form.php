<a href="/wp-admin/edit.php?post_type=testimonial"><?php _e('Goto Result through Admin page','brand-h-form'); ?> </a>
<form id="brandh-form-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">

	<div class="field-container">
		<input type="text" class="field-input" placeholder="Your Name" id="name" name="name" required>
		<small class="field-msg error" data-error="invalidName">Your Name is Required</small>
	</div>

	<div class="field-container">
		<input type="email" class="field-input" placeholder="Your Email" id="email" name="email" required>
		<small class="field-msg error" data-error="invalidEmail">The Email address is not valid</small>
	</div>

	<div class="field-container">
		<input type="text" class="field-input" placeholder="Your Phone" id="phone" name="phone" >
		<small class="field-msg error" data-error="invalidPhone">The Phone is not valid</small>
	</div>

	<div class="field-container">
		<input type="text" class="field-input" placeholder="Your Care Point" id="care" name="care" >
		<small class="field-msg error" data-error="invalidCare">The Care is not valid</small>
	</div>

	<div class="field-container">
		<textarea name="message" id="message" class="field-input" placeholder="Your Message" required></textarea>
		<small class="field-msg error" data-error="invalidMessage">A Message is Required</small>
	</div>
	<!-- Medical Report (end) -->

	<!-- Question 1 (start) -->
	<div class="field-container mb-10">
		<div class="w-full">
			<label class="block font-bold mb-1 mb-0 pr-4" for="message">
				<img class="inline pr-2" src="<?php bloginfo('template_url') ?>/img/check.svg" alt="">
				Major questions to doctors: <span class="text-red-500">*</span>
			</label>
		</div>
		<div class="w-full p-10">
			<textarea name="message" id="message" class="field-input border border-gray-500 w-full px-4" placeholder="Your Message" rows="3" required></textarea>
			<small class="field-msg error" data-error="invalidMessage">A Message is Required</small>
		</div>
	</div>
	<!-- Question 1 (end) -->

	<!-- Question 2 (start) -->
	<div class="field-container mb-10">
		<div class="w-full">
			<label class="block font-bold mb-1 mb-0 pr-4" for="message2">
				<img class="inline pr-2" src="<?php bloginfo('template_url') ?>/img/check.svg" alt="">
				Is there any aspect regarding the patient that Doctors need to take note of? <span class="text-red-500">*</span>
			</label>
		</div>
		<div class="w-full p-10">
			<textarea name="message2" id="message2" class="field-input border border-gray-500 w-full px-4" placeholder="Your Message2" rows="3" required></textarea>
			<small class="field-msg error" data-error="invalidMessage">A Message2 is Required</small>
		</div>
	</div>
	<!-- Question 2 (end) -->

	<!-- Consent (start) -->
	<div class="text-right p-10">
		<span>Consent to collect personal data</span>
		<input type="checkbox">
	</div>
	<!-- Consent (end) -->

	<!-- Submit (start) -->
	<div class="field-container flex items-center text-center">
		<div class="w-full">
			<button type="stubmit" class="applyBtn bg-brand p-5 text-white font-normal w-1/2 mx-auto mt-10" style="border-radius:10px; font-size:18px">Apply</button>
		</div>
		<small class="field-msg js-form-submission">Submission in process, please wait&hellip;</small>
		<small class="field-msg success js-form-success">Successfully submitted.</small>
		<small class="field-msg error js-form-error">There was a problem with the Contact Form, please try again!</small>
	</div>

	<input type="hidden" name="action" value="submit_testimonial">
	<input type="hidden" name="nonce" value="<?php echo wp_create_nonce("testimonial-nonce") ?>">

</form>