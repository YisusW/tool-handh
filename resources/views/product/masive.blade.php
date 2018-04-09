@extends('layouts.app')

@section('content')

    <div class="col 12">
      <div class="card ">
        <div class="card-content">
          <span class="card-title center">Carga Masiva de Productos</span>

          @if( isset( $message ) )
            <div class="card-panel teal accent-4">{{ $message }}</div>
          @endif

            <form class="col 12" method="POST" action="{{ url('register-product-masive') }}"  enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">

                  <div class="input-field col s12">

                    <div class="file-field input-field">
                      <div class="btn blue lighten-1 waves-effect waves-light">
                        <span>File</span>
                        <input type="file" name="file_doc">
                      </div>
                      <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" >
                      </div>
                    </div>
                        @if ($errors->has('code'))
                            <span >
                                <strong class="red-text text-darken-2">{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                  </div>
                </div>

                <div class="row">

                    <div class="input-field col s6">
                        <button type="submit" class="btn blue lighten-1 waves-effect waves-light right">
                                    Register<i class="material-icons right">send</i>
                        </button>
                    </div>
                    <div class="input-field col s6">
                        <button type="reset" class="btn blue lighten-1 waves-effect waves-light">
                                    Cancelar<i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>

            </form>
        </div>
      </div>
    </div>

@endsection