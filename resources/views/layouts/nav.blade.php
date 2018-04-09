        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            <div class="row">
        <div class="col s12 m12 l12">

          <div class="card-panel">

            <h4 class="header2">Login</h4>
            <div class="row">
              <form class="col 12" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="row">

                  <div class="input-field col s12">
                    <input placeholder="email" id="email" name="email" type="email" class="validate" required="" autofocus>

                    <label for="email">E-mail</label>

                          @if ($errors->has('email'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('email') }}</strong>
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
                                  <strong>{{ $errors->first('password') }}</strong>
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
                  <div class="input-field col s12">

                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Log In
                    <i class="material-icons right">send</i>
                  </button>

                  <a class="btn btn-link cyan waves-effect waves-light right" href="{{ route('password.request') }}">
                              Forgot Your Password?
                  </a>
                  </div>
                </div>

              </form> <!-- form close -->
            </div><!-- row close -->
          </div><!-- card-panel close -->
        </div><!--col s12 m12 l6 -->
    </div><!-- row close -->