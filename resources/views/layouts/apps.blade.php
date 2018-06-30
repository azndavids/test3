<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'TM') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    
</head>
<body>
    <div id="app">
        <nav class="sticky-top navbar navbar-light" style="background-color: #660066;">
            <div class="row">
               <!--  <div class="col">
                    <p class="p-3 mb-2 text-dark"> 1 of 3</p>
                </div> -->
                
                <div class="p-3 mb-2 ">
                    <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('', 'Case Reassignment') }}
                    </a>
                </div>

                <div class="p-3 mb-2">
                    <a class="navbar-brand" href="#">
                        <img src="/Ticket.png" width="50" height="35" class="d-inline-block align-top" alt="">
                    </a>
                </div>

                <div class="p-3 mb-2"></div>
                <div class="p-3 mb-2"></div>
                <div class="p-3 mb-2"></div>
                <div class="p-3 mb-2"></div>
                <div class="p-3 mb-2"></div>
                <div class="p-3 mb-2"></div>
                <div class="p-3 mb-2"></div>


                <div class="p-3 mb-2">
                    <a class="navbar-brand" href="#">
                        <img src="/Ticket.png" width="50" height="35" class="d-inline-block align-top" alt="">
                    </a>
                </div>

                <div class="p-3 mb-2">
                    <a class="navbar-brand text-white" href="#">
                    @if(Auth::user())
                       <b> {{ Auth::user()->name }}  </b>
                       @endif
                    </a>
                </div>

                <div class="p-3 mb-2">
                    <a class="navbar-brand text-white" href="#">
                        @if(Auth::user())
                        <b>{{ Auth::user()->id }}</b>
                       @endif
                    </a>
                </div>

                <div class="p-3 mb-2">
                    <a class="navbar-brand" href="#">
                        <img src="/Ticket.png" width="50" height="35" class="d-inline-block align-top" alt="">
                    </a>
                </div>
            </div>


        <button class="navbar-toggler w3-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest
                    <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else
                    <li class="nav-item dropdown" >
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                            <!-- <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Chao
                        </a> -->

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </nav>
</button>

<main class="py-4"></main>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @guest

            @else
            
                @if(request()->user()->role == 'admin')
                    @include('layouts.sidebar') 
                    @include('layouts.rightbar')  

                @elseif(request()->user()->role == 'worker')
                    @include('layouts.sidebar3')
                    @include('layouts.rightbar')  

                @else
                    <!-- @include('layouts.sidebar2')                  -->
                    @include('layouts.leftbar')  
                @endif
                
            @endguest

        </div>

        <div class="col-md-9">
            @yield('content')
        </div>

    </div>
</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
