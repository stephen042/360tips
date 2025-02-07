<div class="card-body">
    <form class="login100-form validate-form" wire:submit.throttle.1000.prevent="login" method="post">
        <span class="login100-form-title">
            Login
        </span>

        @error('email')
            <em class="text-danger">{{ $message }}</em>
        @enderror
        <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
            <input class="input100" wire:model="email" type="text" name="email" placeholder="Email">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="zmdi zmdi-email" aria-hidden="true"></i>
            </span>
        </div>


        @error('password')
            <em class="text-danger">{{ $message }}</em>
        @enderror
        <div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
            <input class="input100" wire:model="password" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
            </span>
        </div>
        <div class="text-end pt-1">
            <p class="mb-0"><a href="forgot-password" class="text-primary ms-1">Forgot
                    Password?</a></p>
        </div>
        <div class="container-login100-form-btn">
            <button class="login100-form-btn btn-primary" type="submit">
                Login
                <x-spinner />
            </button>
        </div>
        <div class="text-center pt-3">
            <p class="text-dark mb-0">Not a member?<a href="register" class="text-primary ms-1">Create an Account</a>
            </p>
        </div>
    </form>
</div>
