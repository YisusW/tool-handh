@extends('layouts.app')

@section('content')

    <div class="col 12">
      <div class="card ">
        <div class="card-content">
          <span class="card-title center">Register</span>

            <form class="col 12" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="row">

                  <div class="input-field col s12">
                        <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>

                        <label for="name" >Name</label>
                        @if ($errors->has('name'))
                            <span >
                                <strong class="red-text text-darken-2">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                  </div>
                </div>

                <div class="row">

                  <div class="input-field col s12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        <label for="email">Email</label>

                            @if ($errors->has('email'))
                                <span >
                                    <strong class="red-text text-darken-2">{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                  </div>
                </div>

                <div class="row">

                  <div class="input-field col s12">
                        <input id="password" type="password" class="form-control" name="password" required>
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

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        <label for="password-confirm" >Confirm Password</label>

                  </div>
                </div>

                <div class="row">

                    <div class="input-field col s12">
                        <button type="submit" class="btn blue lighten-1 waves-effect waves-light right">
                                    Register<i class="material-icons right">send</i>
                        </button>
                    </div>

                </div>

            </form>
        </div>
      </div>
    </div>
@endsection
