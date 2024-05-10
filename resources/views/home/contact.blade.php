<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" data-wf-page="647ae04ed1e08695681f7e9c"
    data-wf-site="647ae04ed1e08695681f7e4e">

{{-- heead tag start --}}
@include('includes.home-head')
{{-- heead tag end --}}


<body>
    <div class="page-wrapper">
        <div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="small"
            data-w-id="54f4eddd-9c06-6454-1245-b303e07fb54b" role="banner" data-duration="400" id="Navbar">
            @include('includes.home-nav')
            <div class="bg-nav"></div>
        </div>
        <main data-w-id="3f1e8c66-dc14-e31c-04fc-9dd7679fff7a" class="main-wrapper">
            <section class="steps_section">
                <div class="padding-global is-off">
                    <div class="steps-bg">
                        <div class="container-large">
                            <div class="steps-block">
                                <div class="spacer-xlarge is-3">
                                    <div class="container-regular">
                                        <div class="contact-wrap-content">
                                            <div class="contact-content-left">
                                                <div class="margin-bottom-24">
                                                    <h1 class="contact-h1">Contact Us</h1>
                                                    <div class="footer-email">
                                                        <div class="text-block-12">support@360xtips.click</div>
                                                    </div>
                                                    <div class="gradient-divider"></div>
                                                </div>
                                            </div>
                                            <div class="form-block-2 w-form">
                                                <form id="wf-form-Email-Form" name="wf-form-Email-Form"
                                                    data-name="Email Form" class="form-2">
                                                    <input type="hidden" name="formaction" value="contactus">
                                                    <input class="text-field w-input" maxlength="256" name="name"
                                                        data-name="name" placeholder="Your Name" type="text"
                                                        id="name">
                                                    <input class="text-field-2 w-input" maxlength="256" name="email"
                                                        data-name="email" placeholder="Your Email" type="email"
                                                        id="email" required="">
                                                    <input class="message-field w-input" maxlength="256" name="message"
                                                        data-name="message" placeholder="Message" type="text"
                                                        id="message" required="">
                                                    <input id="captchatoken" type="hidden" name="captchatoken"
                                                        value="">
                                                    <input type="submit" data-wait="Please wait..."
                                                        class="button-primary-right-icon form-btn-submit w-button"
                                                        value="Submit">

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('includes.home-footer')
        </main>
    </div>
</body>

@include('includes.home-script')

<script>
    $(document).ready(function() {
        $('#wf-form-Email-Form').submit(function(event) {
            event.preventDefault(); // Prevent default form submission
            // Your code to handle form submission
            // For now, let's just display an alert
            alert('Thanks For Contacting us!');
        });
    });
</script>

</html>
