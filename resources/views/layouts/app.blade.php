<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAA////ACrM9QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACIiIiIiIiIAIAAAAAAAAgAgAQAAAAACACABEQAAAAIAIAAREAAAAgAgAAEREAACACAAABERAAIAIAERERERAgAgABEREAACACAAARERAAIAIAABEREQAgAgAAARERECACAAAAAAAAIAIiIiIiIiIgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA" rel="icon" type="image/x-icon" />
    <link href="{{ URL::asset('libs/materialize/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="white" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" href="{{ url('/') }}" class="brand-logo"><img class="logo" src="{{ URL::asset('img/logo.png') }}"></a>
        <ul class="right hide-on-med-and-down">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
                <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
            @else
                <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
                <li><a href="{{ url('/gallery') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>
                <li><a href="{{ url('/blog') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i> Blog</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
            @endif
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a></li>
                <li><a href="{{ url('/gallery') }}"><i class="fa fa-picture-o" aria-hidden="true"></i> Gallery</a></li>
                <li><a href="{{ url('/blog') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i> Blog</a></li>
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
            @endif
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

@yield('content')

<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ URL::asset('libs/materialize/js/materialize.js') }}"></script>
<script src="{{ URL::asset('js/init.js') }}"></script>

</body>
</html>
