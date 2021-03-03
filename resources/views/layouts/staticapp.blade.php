<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaysian Association of Aesthetic Dentistry</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/staticapp.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('img/logo.png') }}" alt="" width="100px" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aesthetic Dentistry</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <div class="profile-stat ml-auto">
                    <!-- <a href="#"><i class="fas fa-user fa-lg"></i>&nbsp;&nbsp;Admin</a> -->

                    @if (Route::has('login'))
                    @auth
                    <div class="dropdown">
                        <a href="#" class="btn btn-light text-muted" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}&nbsp;&nbsp;<i class="fas fa-caret-down fa-sm"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @if (Auth::user()->hasAnyRole('admin'))
                            <a class="dropdown-item" href="{{ url('/home') }}">Dashboard</a>
                            @endif
                            <a class="dropdown-item" href="#">My Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" style="color: red;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @else
                    <a href="{{ route('login') }}" class="text-muted"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-outline-success ml-4">Register</a>
                    @endif
                    @endauth
                    @endif

                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
