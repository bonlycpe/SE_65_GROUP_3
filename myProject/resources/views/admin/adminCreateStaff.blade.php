@extends('layouts.LayoutAdmin')

@section('content')
<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border border">
                    <h3 class="bg-gray p-4">Create Staff Now</h3>
                    <form method="POST" action="{{ route('createStaff') }}">
                        @csrf
                        <fieldset class="p-4">
                            <input id="name" type="text" placeholder="name*"
                                class="form-control mb-3 @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input id="surname" type="text" placeholder="surname*"
                                class="form-control mb-3 @error('surname') is-invalid @enderror" name="surname"
                                value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <input id="email" type="email" placeholder="Email*"
                                class="form-control mb-3 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input id="username" type="username" placeholder="Username*"
                                class="form-control mb-3 @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required autocomplete="username">

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input id="password" type="password" placeholder="Password*"
                                class="form-control mb-3 @error('password') is-invalid @enderror" name="password"
                                required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input id="password-confirm" type="password" placeholder="Confirm Password*"
                                class="form-control mb-3" name="password_confirmation" required
                                autocomplete="new-password">

                            <div class="container m-0">
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value="MONEY">MONEY</option>
                                    <option value="VERIFY">VERIFY</option>
                                </select>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary font-weight-bold mt-3">Create Now</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection