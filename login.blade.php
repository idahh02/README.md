@extends('master.layout')

@section('login')
<br>
<br>
<br>

<div class="container login-container">
    <div class="row">
        <!-- Left side (Logo) -->
        <div class="col-md-6 login-logo-container">
            <img src="assets/img/bludd.png"  alt="Logo" class="login-logo" width="350" height="350">
        </div>

        <!-- Right side (Login Form) -->
        <div class="col-md-6 login-form-container d-flex align-items-center">
            <div class="card w-100">
                <div class="card-header text-center">{{ __('Staff Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{ route('login') }">
                        @csrf

                        <br><br>
                        <!-- Your login form fields here -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 text-center">
                                <button onclick="document.location='/home'" type="submit" class="btn btn-primary">LOGIN
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
    }

    .login-container {
        margin-top: 50px;
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }

    .login-logo-container {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #3490dc; /* Adjust the background color for the left side */
        padding: 30px;
        min-height: 400px; /* Set a minimum height for the left side */
        box-shadow: 0 0 8px rgba(0, 0, 0, 0.1)
    }

    .login-logo {
        max-width: 100%;
        height: auto;
    }

    .login-form-container {
        background-color: #fff;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    .card {
        border: none;
    }

    .card-header {
        background-color: #3490dc;
        color: #fff;
        font-weight: bold;
    }

    .btn-primary {
        background-color: #3490dc;
        border-color: #3490dc;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #2779bd;
        border-color: #2779bd;
    }
</style>

@endsection
