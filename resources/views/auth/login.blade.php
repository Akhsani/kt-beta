@extends('layouts.app')

@section('content')

<section class="height-100 imagebg text-center" data-overlay="4">
    <div class="background-image-holder" style="background: url(&quot;{{ asset('images/cover.jpg') }}&quot;); opacity: 1;">
        <img alt="background" src="{{ asset('images/cover.jpg') }}">
    </div>
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-sm-7 col-md-5">
                <h2>Login to continue</h2>
                <p class="lead">
                    Welcome back, sign in with your existing Kliktalent account credentials
                </p>
                <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-sm-12 text-left">
                            <div class="input-checkbox">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="checkbox"></label>
                            </div>
                            <span>Remember Me</span>
                        </div>
                        <div class="col-sm-12">
                            <button class="btn btn--primary type--uppercase" type="submit">Login</button>
                        </div>
                    </div>
                    <!--end of row-->
                </form>
                <span class="type--fine-print block">Dont have an account yet?
                    <a href="{{ route('register') }}">Create account</a>
                </span>
                <span class="type--fine-print block">Forgot your username or password?
                    <a href="{{ route('password.request') }}">Recover account</a>
                </span>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection
