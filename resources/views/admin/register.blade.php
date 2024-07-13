@extends('admin-layout.app')

@section('content')
<body class="" style="background-color: #edeef5">

    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="background-image: url('{{ asset('admin/img/loginregister.jpg') }}'); background-size: cover;">
                                <!-- Image placeholder -->
                            </div>
                            <div class="col-lg-6" style="background-color: #b8bace; border-radius: 10px;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('register.store') }}">
                                        @csrf

                                        <!-- First Name -->
                                        <div class="form-group">
                                            <label for="first_name" style="color: #ffffff">First Name</label>
                                            <x-text-input id="first_name" class="form-control form-control-user" type="text" name="first_name" :value="old('first_name')" required autofocus autocomplete="first_name" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('first_name')" class="text-danger" />
                                        </div>

                                        <!-- Last Name -->
                                        <div class="form-group">
                                            <label for="last_name" style="color: #ffffff">Last Name</label>
                                            <x-text-input id="last_name" class="form-control form-control-user" type="text" name="last_name" :value="old('last_name')" required autocomplete="last_name" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('last_name')" class="text-danger" />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="form-group">
                                            <label for="email" style="color: #ffffff">Email</label>
                                            <x-text-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autocomplete="email" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('email')" class="text-danger" />
                                        </div>

                                        <!-- Password -->
                                        <div class="form-group">
                                            <label for="password" style="color: #ffffff">Password</label>
                                            <x-text-input id="password" class="form-control form-control-user" type="password" name="password" required autocomplete="new-password" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('password')" class="text-danger" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <label for="password_confirmation" style="color: #ffffff">Confirm Password</label>
                                            <x-text-input id="password_confirmation" class="form-control form-control-user" type="password" name="password_confirmation" required autocomplete="new-password" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger" />
                                        </div>

                                        <!-- Terms and Conditions Checkbox -->
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="custom-control-input" id="terms" type="checkbox" name="terms" required>
                                            <label class="custom-control-label" for="terms" style="color: #ffffff;">I agree to the terms and conditions</label>
                                            <x-input-error :messages="$errors->get('terms')" class="text-danger" />
                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-user btn-block" style="background-color: #E5697F">
                                                <span style="color: #ffffff"> Register</span> 
                                             </button>
                                        </div>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}" style="color: #ffffff;">Already have an account? Login!</a>
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
