<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}" media="screen,projection"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('/datatable/css/datatables.min.css') }}"/>

      <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

</head>
<body >


      <nav class="blue lighten-1" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" class="brand-logo" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">

                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else

              <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">My Profile</a></li>

                <li class="divider"></li>
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

              <ul id="dropdown0" class="dropdown-content">

                <li><a href="{{ url('module-one-index') }}">Register</a></li>
                <li><a href="{{ url('module-serverals-product') }}">Load</a></li>
                <li><a href="{{ url('query-products') }}">See Products</a></li>
              </ul>


                <!-- See the other items menu not drop down -->
                <li><a href="{{ url('query-products') }}" >BETA</a> </li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown0">Products<i class="material-icons right">arrow_drop_down</i></a></li>

                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                @endguest
          </ul>
        </div>
      </nav>

        <div class="container">
        <!-- Page Content goes here -->
            @yield('content')
        </div>

        <footer class="page-footer blue lighten-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">En esta  parte  espero que me den ideas para colocar informacion porque la verdad no se que decir  al respecto.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">LOL</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Caja</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Charro</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Pereza</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Ñoño</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 GTL THIS IS FREE
            <a class="grey-text text-lighten-4 right" href="#!">More Boxes</a>
            </div>
          </div>
        </footer>
    <!-- Scripts -->


    <script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>



<script type="text/javascript" src="{{ asset('/datatable/js/datatables.min.js') }}"></script>

    <script  type="text/javascript" charset="utf-8" async defer>
      $(document).ready(function() {

        $(".dropdown-trigger").dropdown();


        $("table").DataTable();
        $('select').formSelect();
      });
    </script>
</body>
</html>
