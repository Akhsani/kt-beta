@extends('layouts.app')

@section('content')

<section class="imageblock switchable feature-large height-100">
    <div class="imageblock__content col-md-6 col-sm-4 pos-right">
        <div class="background-image-holder" style="background: url(&quot;{{ asset('images/event_festival.jpg') }}&quot;); opacity: 1;">
            <img alt="image" src="{{ asset('images/event_festival.jpg') }}">
        </div>
    </div>
    <div class="container pos-vertical-center">
        <div class="row">
            <div class="col-md-5 col-sm-7">
                <h2>Ready to join the party?</h2>
                <p class="lead">Create a Kliktalent account to connect with talents or post your talents</p>
                <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Name">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <button type="submit" class="btn btn--primary type--uppercase">Create Account</button>
                        </div>
                        <div class="col-xs-12">
                            <span class="type--fine-print">By signing up, you agree to the
                                <a href="#">Terms of Service</a>
                            </span>
                        </div>
                    </div>
                    <!--end row-->
                </form>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection
