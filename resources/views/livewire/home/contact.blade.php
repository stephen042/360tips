<div>
    <form id="wf-form-Email-Form" name="wf-form-Email-Form" wire:submit="contact" data-name="Email Form" class="form-2">
        <input type="hidden" name="formaction" value="contactus">
        <input class="text-field w-input" maxlength="256" name="name" data-name="name" placeholder="Your Name"
            type="text" id="name">
        <input class="text-field-2 w-input" maxlength="256" name="email" data-name="email" placeholder="Your Email"
            type="email" id="email" required="">
        <input class="message-field w-input" maxlength="256" name="message" data-name="message" placeholder="Message"
            type="text" id="message" required="">
        <input id="captchatoken" type="hidden" name="captchatoken" value="">
        <input type="submit" data-wait="Please wait..."
            class="button-primary-right-icon form-btn-submit w-button" value="Submit">

    </form>
</div>