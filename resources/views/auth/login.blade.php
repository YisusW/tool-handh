@extends('layouts.app')

@section('content')

    <div class="col 12">
      <div class="card ">
        <div class="card-content">
          <span class="card-title center">Login</span>


              <form class="col 12" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">

                  <div class="input-field col s12">
                    <input placeholder="email" id="email" name="email" type="email" class="validate" required="" autofocus>

                    <label for="email">E-mail</label>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong class="red-text text-darken-2">{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                  </div>
                </div>
                <div class="row">

                  <div class="input-field col s12">

                    <input id="password" type="password" name="password" class="validate" required="">

                    <label for="password">Password</label>

                    @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong class="red-text text-darken-2">{{ $errors->first('password') }}</strong>
                              </span>
                    @endif

                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <p>
                          <label>
                            <input type="checkbox" class="filled-in" name="remember" {{ old('remember') ? 'checked' : '' }} />
                            <span>Remember Me</span>
                          </label>
                    </p>
                  </div>
                </div>

                <div class="row">

                  <div class="input-field col s6">

                    <button class="btn blue lighten-1 waves-effect waves-light right" type="submit" name="action">Log In
                      <i class="material-icons right">send</i>
                    </button>

                  </div>

                  <div class="input-field col s6">
                    <a class="btn btn-link blue lighten-1 waves-effect waves-light" href="{{ route('password.request') }}">
                                Forgot Your Password?
                    </a>
                  </div>

                </div>

              </form> <!-- form close -->

        </div>

      </div>
    </div>


@endsection
