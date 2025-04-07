<section class="footer">
    <div class="padding-global is-large">
        <div class="container-xlarge">
            <div class="spacer-xxxlarge"></div>
            <div class="footer-row">
                <div class="foter_logo-wrap">
                    <img src="{{ asset('home-assets/assets/img/logo-funding-traders-footer.svg')}}" loading="lazy"
                        alt="{{ env('APP_NAME') }}  Logo" class="footer_logo">
                    <div class="f-logo_text">Empowering traders with flexible and reliable funding
                        solutions for success</div>
                </div>
                <div class="footer-main_grid">
                    <div id="w-node-_41072dec-e6ca-1fe3-4f9e-cb8da05c0bee-a05c0be4" class="footer_col">
                        {{-- <div class="footer_label">Site map</div> --}}
                        <a title="FAQ" href="prop-trading-faq.html" class="link-with-line is-footer w-inline-block">
                            <div class="link-text">FAQ</div>
                            <div class="horizontal-link-line"></div>
                        </a>
                        <a href="contact.html" class="link-with-line is-footer w-inline-block">
                            <div title="Contact" class="link-text">Contact us</div>
                            <div class="horizontal-link-line"></div>
                        </a>
                        <a href="trader-funding.html" class="link-with-line is-footer w-inline-block">
                            <div title="Trader Funding" class="link-text">Trader Funding</div>
                            <div class="horizontal-link-line"></div>
                        </a>
                    </div>
                    <div id="w-node-_41072dec-e6ca-1fe3-4f9e-cb8da05c0c01-a05c0be4" class="footer_col">
                        <div class="footer_label">Resources</div>
                        <a href="{{ route('terms')}}" class="link-with-line is-footer w-inline-block">
                            <div title="Terms of use" class="link-text">Terms of use</div>
                            <div class="horizontal-link-line"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="spacer-large is-foter"></div>
            <div>&copy; 2024 {{ env('APP_NAME') }} . All rights reserved.</div>
            <div class="spacer-medium"></div>
        </div>
    </div>
</section>