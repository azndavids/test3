<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TADAAA</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">


</head>
<body>
    <div class="flex-center position-ref full-height">

            <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
                @endif -->

                <div class="content">
                    <div class="title m-b-md">
                        GOLEK 2 


                    </div>

                    <div class="links">

                        <a href="{{action('Hazim_Form\Users_Controllers@index')}}">
                            <b>View User</b>
                        </a>

                        <a href="{{action('Hazim_Form\Users_Controllers@create')}}">
                            <b>Create User</b>
                        </a>

                        <a href="{{action('Hazim_Form\Users_Controllers@editing')}}">
                            <b>Edit & Update User</b>
                        </a>

                        

                        <a href="{{action('Hazim_Form\Users_Controllers@deleting')}}">
                            <b>Delete User</b>
                        </a>

                        <a href="{{('/')}}">
                                <b><font color="red">BACK</b></font>
                        </a>

                      


                     




                        </div>
                    </div>
                </div>
            </body>
            </html>
