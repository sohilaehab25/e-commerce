@extends('admin-layout.app')

@section('content')
<body class="" style="background-color: #edeef5">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="{{ asset('admin/img/undraw_rocket.svg') }}" alt="Image" class="img-fluid h-100 w-100" style="object-fit: cover;">
                            </div>
                            <div class="col-lg-6" style="background-color: #b8bace;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below
                                            and we'll send you a link to reset your password!</p>
                                    </div>
                                    <form method="POST" action="{{ route('password.email') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <label for="email" class="text-gray-900">Email</label>
                                            <x-text-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                                            <x-input-error :messages="$errors->get('email')" class="text-danger" />
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-user btn-block"style="background-color: #E5697F">
                                                <span style="color: #ffffff"> Email Password Reset Link </span>
                                            </button>
                                        </div>
                                    </form>

                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}" style="color: #ACACDD;">{{ __('Create an Account!') }}</a>
                                    </div>

                                    <div class="text-center">
                                        <a class="small text-gray-900" href="{{ route('login') }}"  style="color: #ACACDD;">Already have an account? Login!</a>
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
