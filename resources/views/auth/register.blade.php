@extends('layouts.base')
@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <section class="hero is-fullheight is-link is-bold">
      <div class="hero-body">
        <div class="container">
          <div class="columns">
            <div class="column is-8-desktop is-offset-2-desktop">
                <div class="card-body">
                <div class="title">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="subtitle is-2 is-spaced">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="email" class="subtitle is-2 is-spaced">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    {{ $errors->first('email') }}
                                @endif
                            </div>
                        </div>

                  <div class="form-group row">
                            <label for="password" class="subtitle is-2 is-spaced">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="subtitle is-2 is-spaced">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <br />

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button is-info">
                                    {{ __('Register') }}
                                </button>
                            </div>
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
      </div>
    </section>
@endsection
