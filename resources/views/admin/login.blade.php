@extends('admin-layout.app')

@section('content')
<body class="" style="background-color: #edeef5">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-register-image" style="background-image: url('{{ asset('admin/img/loginregister.jpg') }}'); background-size: cover;">
                                <!-- Image placeholder -->
                            </div>
                            <div class="col-lg-6" style="background-color: #b8bace; border-radius: 10px;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email" style="color: #ffffff"> Email </label>
                                            <x-text-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('email')" class="text-danger" />
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style="color: #ffffff" >Password</label>
                                            <x-text-input id="password" class="form-control form-control-user" type="password" name="password" required autocomplete="current-password" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('password')" class="text-danger" />
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" id="remember_me" type="checkbox" name="remember">
                                                <label class="custom-control-label" for="remember_me" style="color: #ffffff;">{{ __('Remember me') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-user btn-block" style="background-color: #E5697F">
                                               <span style="color: #ffffff"> LogIn</span> 
                                            </button>
                                        </div>
                                        <div class="flex items-center justify-end mt-4">
                                            <a class="ml-1 btn btn-primary" href="{{ url('auth/facebook') }}" style="margin-top: 0px !important;background: blue;color: #ffffff;padding: 5px;border-radius:7px;" id="btn-fblogin">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with Facebook
                                            </a>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                            <a class="small" href="{{ route('password.request') }}" style="color: #ffffff;">{{ __('Forgot your password?') }}</a>
                                        @endif
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}" style="color: #ffffff;">{{ __('Create an Account!') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
@endsection
