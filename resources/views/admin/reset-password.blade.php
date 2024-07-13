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
                            <div class="col-lg-6 d-none d-lg-block bg-password-image">
                                <img src="{{ asset('admin/img/undraw_rocket.svg') }}" alt="Image" class="img-fluid" style="max-height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-lg-6" style="background-color: #b8bace;">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{ __('Reset Password') }}</h1>
                                    </div>
                                    <form method="POST" action="{{ route('password.update') }}">
                                        @csrf
                                        @method('PUT')

                                        <input type="hidden" name="token" value="{{ $token }}">

                                        <div class="form-group">
                                            <label for="email" style="color: #2c2a2a"> Email </label>
                                            <x-text-input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('email')" class="text-danger" />
                                        </div>

                                        <div class="form-group">
                                            <label for="password" style="color: #ACACDD">Password</label>
                                            <x-text-input id="password" class="form-control form-control-user" type="password" name="password" required autocomplete="new-password" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('password')" class="text-danger" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="form-group">
                                            <label for="password_confirmation" style="color: #ACACDD">Confirm Password</label>
                                            <x-text-input id="password_confirmation" class="form-control form-control-user" type="password" name="password_confirmation" required autocomplete="new-password" style="color: #ACACDD;" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger" />
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-user btn-block"style="background-color: #E5697F">
                                                <span style="color: #ACACDD"> Reset password </span>
                                            </button>
                                        </div>
                                    </form>
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
