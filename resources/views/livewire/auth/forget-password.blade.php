<div class="col col-login mx-auto">
    <form class="card shadow-none" wire:submit.throttle.1000.prevent="resetPassword" method="post">
        <div class="card-body">
            <div class="text-center">
                <span class="login100-form-title">
                    Forgot Password
                </span>
                <p class="text-muted">Enter the email address registered on your account</p>
            </div>
            <div class="pt-3" id="forgot">
                @error('email')
                    <em class="text-danger">{{ $message }}</em>
                @enderror
                <div class="form-group">
                    <label class="form-label">E-Mail</label>
                    <input class="form-control" wire:model.blur="email" placeholder="Enter Your Email" type="email">
                </div>
                <div class="submit">
                    <button class="login100-form-btn btn-primary" type="submit">
                        Submit
                        <x-spinner />
                    </button>
                </div>
                <div class="text-center mt-4">
                    <p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1" href="login">Send me Back</a></p>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center my-3">
                <a href="javascript:void(0);" class="social-login  text-center me-4">
                    <i class="fa fa-google"></i>
                </a>
                <a href="javascript:void(0);" class="social-login  text-center me-4">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="javascript:void(0);" class="social-login  text-center">
                    <i class="fa fa-twitter"></i>
                </a>
            </div>
        </div>
    </form>
</div>
