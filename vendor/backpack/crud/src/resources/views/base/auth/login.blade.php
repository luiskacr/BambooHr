@extends(backpack_view('layouts.plain'))

@section('content')
<!--
<div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-4">
        <h3 class="text-center mb-4">{{ trans('backpack::base.login') }}</h3>
        <div class="card">
            <div class="card-body">
                <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('backpack.auth.login') }}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="control-label" for="{{ $username }}">{{ config('backpack.base.authentication_column_name') }}</label>

                        <div>
                            <input type="text" class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }}" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">

                            @if ($errors->has($username))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first($username) }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="password">{{ trans('backpack::base.password') }}</label>

                        <div>
                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">

                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div>
                            <button type="submit" class="btn btn-block btn-primary">
                                {{ trans('backpack::base.login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @if (backpack_users_have_email() && config('backpack.base.setup_password_recovery_routes', true))
        <div class="text-center"><a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a></div>
        @endif
        @if (config('backpack.base.registration_open'))
        <div class="text-center"><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></div>
        @endif
    </div>
</div>
-->
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

<div id="particles-js" style="top: 0;right: 0;"></div>
<div class="container">

    <div class="login-container-wrapper clearfix">
        <div class="logo">
            <img src="{{URL::asset('/images/isotipo.png')}}" alt="isotipo" height="50">
        </div>

        <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('backpack.auth.login') }}">
            {!! csrf_field() !!}
            <div class="form-group relative">
                <div class="form-group">
                    <label class="control-label" for="{{ $username }}">{{ config('backpack.base.authentication_column_name') }}</label>

                    <div>
                        <input type="text" class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }}" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}">

                        @if ($errors->has($username))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first($username) }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-group relative password">
                <label class="control-label" for="password">{{ trans('backpack::base.password') }}</label>

                <div>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">

                    @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">
                    {{ trans('backpack::base.login') }}
                </button>
            </div>
            <div class="checkbox pull-left">
                <label><input type="checkbox"> Remember</label>
            </div>
        </form>
        @if (backpack_users_have_email() && config('backpack.base.setup_password_recovery_routes', true))
        <div class="text-center"><a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a></div>
        @endif
        @if (config('backpack.base.registration_open'))
        <div class="text-center"><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></div>
        @endif
    </div>

</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>

@endsection
