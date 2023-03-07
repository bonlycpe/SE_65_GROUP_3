@extends('layouts.MainLayout')

@section('content')
<section class="login py-5 border-top-1">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-8 align-item-center">
        <div class="border border">
          <h3 class="bg-gray p-4">Register Now</h3>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <fieldset class="p-4">
            <input id="firstname" type="text" placeholder="firstname*" class="form-control mb-3 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

            @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="lastname" type="text" placeholder="lastname*" class="form-control mb-3 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input id="email" type="email" placeholder="Email*" class="form-control mb-3 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="username" type="username" placeholder="Username*" class="form-control mb-3 @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password" type="password" placeholder="Password*" class="form-control mb-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input id="password-confirm" type="password" placeholder="Confirm Password*" class="form-control mb-3" name="password_confirmation" required autocomplete="new-password">
              <button type="submit" class="btn btn-primary font-weight-bold mt-3">Register Now</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
