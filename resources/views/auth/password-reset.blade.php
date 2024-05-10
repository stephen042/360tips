<!doctype html>
<html lang="en" dir="ltr">

<head>

    @include('includes.user-head')

</head>

<body class="login-img">

    <!-- BACKGROUND-IMAGE -->
    <div>
        <!-- GLOBAL-LOADER -->
        @include('includes.loader')
        <!-- /GLOBAL-LOADER -->


        <!-- PAGE -->
        <div class="page login-page">
            <div>
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <a href="/">
                            <img src="{{ asset('home-assets/assets/img/logo-funding-traders.svg') }}" class="header-brand-img" alt="">
                        </a>
                    </div>
                </div>
                <center>
                    @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show w-50 bg-dark" role="alert">
                        <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                        <span class="alert-inner--text"><strong>error!</strong>
                            {{ session('error') }}
                        </span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show w-50 bg-dark" role="alert">
                            <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                            <span class="alert-inner--text"><strong>Success!</strong>
                                {{ session('success') }}
                            </span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    @endif
                </center>
                <div class="container-login100">
                    <div class="wrap-login100 p-0">
                        <div class="card-body">
                            <div class="card-body">
                                <form class="login100-form validate-form password-reset-form"
                                    action="{{ route('password_reset_post', [$user_token->email, $user_token->token]) }}"
                                    method="post">
                                    @csrf
                                    <span class="login100-form-title">
                                        New Password
                                    </span>
                                    @error('password')
                                        <em class="text-danger">{{ $message }}</em>
                                    @enderror
                                    <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                        <input class="input100" type="password" wire:model="password" name="password"
                                            required placeholder="New Password">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    @error('password_confirmation')
                                        <em class="text-danger">{{ $message }}</em>
                                    @enderror
                                    <div class="wrap-input100 validate-input" data-bs-validate="Password is required">
                                        <input class="input100" wire:model="password_confirmation" type="password"
                                            name="password_confirmation" required placeholder="Confirm Password">
                                        <span class="focus-input100"></span>
                                        <span class="symbol-input100">
                                            <i class="zmdi zmdi-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>

                                    <div class="container-login100-form-btn">
                                        <button class="login100-form-btn btn-primary" type="submit">
                                            Confirm
                                        </button>
                                    </div>
                                </form>
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
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    @include('includes.user-scripts')

    <script>
        $(document).ready(function() {
            $('.password-reset-form').on( 'submit', function() {
                // Change button text to "Submitted, please wait" and disable it
                $('button[type="submit"]').text('Submitted, please wait...').prop('disabled', true);
            });

        });
    </script>

</body>

</html>
