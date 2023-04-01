@extends('layouts.MainLayout')

@section('content')
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Login Now</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset class="p-4">
                            <input id="username" type="username" placeholder="Username"
                                class="form-control mb-3 @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input id="password" type="password" placeholder="Password"
                                class="form-control mb-3 @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <!--div class="loggedin-forgot">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="pt-3 pb-2">Keep me logged in</label>
              </div>-->
                            <!--<div class="flex items-center justify-end mt-4 align-middle "
                                style="display: flex;justify-content: center;align-items:center;">
                                <a href="{{ route('auth.google') }}">
                                    <img
                                        src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" />
                                </a>
                            </div>-->
                            <div style="display: flex;justify-content: center;align-items:center;">
                                <button type="submit" class="btn btn-primary font-weight-bold mt-3">Log in</button>
                            </div>

                            <br>
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                            @endif
                            <!--<a class="mt-3 d-block text-primary" href="#!">Forget Password?</a>-->
                            <a class="mt-3 d-inline-block text-primary" href="{{ route('register') }}">Register Now</a>


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection