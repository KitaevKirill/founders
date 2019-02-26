@extends('layouts.app')

@section('content')

    <div >
        <div style="float: left; height: 94vh; width: 50vw; margin-right: 0px" >
            <img src="/storage/background/login.png" style="float: right; height: 94vh ">
        </div>

        <div  style="display:table; float: right; width: 50vw; height: 94vh; vertical-align: middle; ">
            <div  style="display: table-cell; vertical-align: middle">
                <div class="card">
                    <div ><img src="/storage/logo/Founders.png" style="float: left; height: 5vh "></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div style="padding-left: 15px; margin-bottom: 15px">
                                <label for="email" style="margin-bottom: 1px"
                                       >{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                           name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div style="padding-left: 15px; margin-bottom: 15px">
                                <label for="password" style="margin-bottom: 1px">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                           name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div style="padding-left: 15px; margin-bottom: 5px">
                                <div >
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div style="padding-left: 15px; margin-bottom: 15px">
                                <div >
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


