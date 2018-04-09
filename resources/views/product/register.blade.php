@extends('layouts.app')

@section('content')

    <div class="col 12">
      <div class="card ">
        <div class="card-content">
          <span class="card-title center">Register</span>

            <form class="col 12" method="POST" action="{{ url('register-product') }}">
                {{ csrf_field() }}
                <div class="row">

                  <div class="input-field col s12">
                        <input id="code" type="text" class="validate" name="code" value="{{ old('code') }}" required autofocus>

                        <label for="code" >Code</label>
                        @if ($errors->has('code'))
                            <span >
                                <strong class="red-text text-darken-2">{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                  </div>
                </div>

                <div class="row">

                  <div class="input-field col s12">
                        <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>

                        <label for="name" >Description</label>
                        @if ($errors->has('name'))
                            <span >
                                <strong class="red-text text-darken-2">{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                  </div>
                </div>

                <div class="row">

                  <div class="input-field col s12">
                        <input id="price" type="text" class="validate" name="price" value="{{ old('price') }}" required>
                        <label for="price">Price</label>

                            @if ($errors->has('price'))
                                <span >
                                    <strong class="red-text text-darken-2">{{ $errors->first('price') }}</strong>
                                </span>
                            @endif
                  </div>
                </div>

                <div class="row">

                  <div class="input-field col s12">
                        <input id="quantity" type="text" class="validate" name="quantity" value="{{ old('quantity') }}" required>
                        <label for="quantity">Quantity</label>

                            @if ($errors->has('quantity'))
                                <span >
                                    <strong class="red-text text-darken-2">{{ $errors->first('quantity') }}</strong>
                                </span>
                            @endif
                  </div>
                </div>

                <div class="row">

				  <div class="input-field col s12">
				    <select name="status" required="">
				      <option value="" disabled selected>Choose your option</option>
				      <option value="1">Yes</option>
				      <option value="2">No</option>

				    </select>
				    <label>Status (Availability)</label>
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