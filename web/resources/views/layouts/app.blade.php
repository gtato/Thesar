<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="css/thesar.css" rel="stylesheet">
    <!-- <link href="css/bs/bootstrap.css" rel="stylesheet">  -->

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <span><img id="icon" src="images/icon-grey.png" alt="Thesar"/></span>
                        <span class="hidden-xs">{{ config('app.name', 'Laravel') }}</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="btn" href="{{ url('/about') }}">Reth nesh</a></li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="visible-xs" ><a href="{{ url('/login') }}">Login</a></li>
                            <li class="visible-xs" ><a href="{{ url('/register') }}">Register</a></li>
                            <li class="dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Ndihmo<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="">
                                   <li> <form>
                                    <div style="width:190px">

        <span href="#" class="btn login_show" onclick="$('#loginForm').show(); $('#registerForm').hide();">Login</span> ose 
        <span class="btn login_show" onclick="$('#loginForm').hide(); $('#registerForm').show();" >regjistrohu</span>
                            </div></form></li>

                                    <li id="loginForm">
        <form method="POST" action="/login">
            {!! csrf_field() !!}
            <table  class="table-condensed" style="text-align: center; width: 100%">
            <tr><td><input type="email" name="email" placeholder="Emaili" value="{{ old('email') }}"></td></tr>
            <tr><td><input type="password" name="password" placeholder="Fjalëkalimi" id="password"></td></tr>
            <tr><td><input type="checkbox" name="remember"> Më kujto</td></tr>
            <tr><td><button type="submit">Login</button></td></tr>
            </table>
        </form>

                                    </li>
                                    <li id="registerForm" style="display: none;">
        <form method="POST" action="/register">
            {!! csrf_field() !!}
            <table  class="table-condensed" style="text-align: center;width: 100%;">
            <tr><td><input type="text" name="name" placeholder="Emri" value="{{ old('name') }}"></td></tr>
            <tr><td><input type="email" name="email" placeholder="Emaili" value="{{ old('email') }}"></td></tr>
            <tr><td><input type="password" name="password" placeholder="Fjalëkalimi"></td></tr>
            <tr><td><input type="password" placeholder="Fjalëkalimi sërisht" name="password_confirmation"></td></tr>
            <tr><td><button type="submit">Regjistrohu</button></td></tr>
            </table>
        </form>
                                    </li>

                                </ul>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>

              <form class="navbar-form">
                <div class="form-group" style="display:inline;">
                  <div class="input-group" style="display:table;">
                    
                    <input class="form-control" name="search" placeholder="Kërko" autocomplete="off" autofocus="autofocus" type="text">
                    <span class="input-group-addon" style="width:1%;"><span class="glyphicon glyphicon-search"></span></span>
                  </div>
                </div>
              </form>    


                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>




</body>
</html>
