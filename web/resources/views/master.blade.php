<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Thesar</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Bootstrap core CSS -->
    <link href="css/bs/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet"-->

    <!-- Custom styles for this template -->
    <link href="css/thesar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="../../assets/js/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url('/') }}" class="navbar-brand">
                <span><img id="icon" src="images/icon-grey.png" alt="Thesar"/></span>
                <span class="hidden-xs">Thesar</span></a>
                
            </div> <!-- navbar-header -->
            

            
            <div class="collapse navbar-collapse" >
                

                <ul class="nav navbar-nav navbar-right">
                    @if (Route::has('login')) 
                    <li><a class="btn" href="{{ url('/about') }}">Reth nesh</a></li>
                    @if (Auth::check())
                        <li><a class="btn" href="{{ url('/logout') }}">Logout</a></li>
                    @else
                        <li>
                        <a id="prelogin" class="btn" data-toggle="popover" title="asdf">Login</a>
                        </li>
                    @endif
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
            </div> <!-- navbar-collapse -->
        </div>
    </nav>


    <div class="container ">

      <div class="starter-template raleway">
        @yield('content')
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bs/bootstrap.min.js"></script>
    <script src="js/bs/tooltip.js"></script>
    <script src="js/bs/popover.js"></script>
    <script src="js/thesar.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--script src="../../assets/js/ie10-viewport-bug-workaround.js"></script-->
  
    <div id="login_title" style="display: none">
    <a class="btn login_show">Login</a> ose <a class="btn login_show">regjistrohu</a>
    </div>

    <div id="login_form" style="display: none">
    <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <table  class="table-condensed" style="text-align: center;">
        <tr><td><input type="email" name="email" placeholder="Emaili" value="{{ old('email') }}"></td></tr>
        <tr><td><input type="password" name="password" placeholder="Fjalëkalimi" id="password"></td></tr>
        <tr><td><input type="checkbox" name="remember"> Më kujto</td></tr>
        <tr><td><button type="submit">Login</button></td></tr>
        </table>
    </form>
    </div>

    <div id="register_form" style="display: none">
    <form method="POST" action="/auth/register">
        {!! csrf_field() !!}
        <table  class="table-condensed" style="text-align: center;">
        <tr><td><input type="text" name="name" placeholder="Emri" value="{{ old('name') }}"></td></tr>
        <tr><td><input type="email" name="email" placeholder="Emaili" value="{{ old('email') }}"></td></tr>
        <tr><td><input type="password" name="password" placeholder="Fjalëkalimi"></td></tr>
        <tr><td><input type="password" placeholder="Fjalëkalimi sërisht" name="password_confirmation"></td></tr>
        <tr><td><button type="submit">Regjistrohu</button></td></tr>
        </table>
    </form>
    </div>

  </body>
</html>
