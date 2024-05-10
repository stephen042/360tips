<div class="card-body">
    <form class="login100-form validate-form" wire:submit.throttle.1000.prevent="login" method="post">
        <span class="login100-form-title">
            New Password
        </span>

        @error('password')
            <em class="text-danger">{{ $message }}</em>
        @enderror
        <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
            <input class="input100" type="password" wire:model="password" name="password" required
                placeholder="New Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
            </span>
        </div>

        @error('password_confirmation')
            <em class="text-danger">{{ $message }}</em>
        @enderror
        <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
            <input class="input100" wire:model="password_confirmation" type="password" name="password_confirmation"
                required placeholder="Confirm Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
                <i class="zmdi zmdi-lock" aria-hidden="true"></i>
            </span>
        </div>

        <div class="container-login100-form-btn">
            <button class="login100-form-btn btn-primary" type="submit">
                Confirm
                <x-spinner />
            </button>
        </div>
    </form>
</div>
