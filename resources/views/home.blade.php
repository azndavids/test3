
    @extends('layouts.app')

    @section('content')

    <!--     <div class="row justify-content-center">
         
                <div class="card card-default">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            
            </div> -->

            

            <br>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">


                        @if(request()->user()->role == 'admin')
                        <div class="card-header  bg-warning mb-3 sticky" align="center">(ADMIN) CASE MANAGEMENT TICKETS</div>
                        <div class="card-body">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{action('Hazim_Form\CaseManagement_Controllers@showing')}}"> 

                                @csrf

                                SEARCH TICKET WITH USER ID:
                                <input type="id" name="id" class="form-control">
                                <button type="submit">Search</button>
                                <!-- into another blade file form only -->
                            </form>

                            <br><br>

                            <form method="POST" action="{{action('Hazim_Form\CaseManagement_Controllers@showing2')}}"> 

                                @csrf

                                SEARCH TICKET WITH TICKET ID:
                                <input type="id" name="id" class="form-control">
                                <button type="submit" >Search</button>
                                <!-- into another blade file form only -->
                            </form>



                            @elseif(request()->user()->role == 'worker')
                            <div class="card-header  bg-success mb-3 sticky" align="center">(WORKER) CASE MANAGEMENT TICKETS</div>
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <form method="POST" action="{{action('Hazim_Form\CaseManagement_Controllers@showing')}}"> 

                                    @csrf

                                    SEARCH TICKET WITH USER ID:
                                    <input type="id" name="id" class="form-control">
                                    <button type="submit" >Search</button>
                                    <!-- into another blade file form only -->
                                </form>

                                <br><br>

                                <form method="POST" action="{{action('Hazim_Form\CaseManagement_Controllers@showing2')}}"> 

                                    @csrf

                                    SEARCH TICKET WITH TICKET ID:
                                    <input type="id" name="id" class="form-control">
                                    <button type="submit" >Search</button>
                                    <!-- into another blade file form only -->
                                </form>


                                @else
                                <div class="card-header  bg-primary mb-3 sticky" align="center">(STAFF) CASE MANAGEMENT TICKETS</div>

                                <p align="center">
                                    <a class="navbar-brand" href="#">
                                        <img src="/donut.jpg" width="300" height="300" class="d-inline-block align-top" alt="">
                                    </a>
                                </p>




                                  {{--   <div class="card-body">
                                        @if (session('status'))
                                        <div class="alert alert-primary">
                                            {{ session('status') }}
                                        </div>
                                        @endif


                                        <form method="POST" action="{{action('Hazim_Form\CaseManagement_Controllers@showing')}}"> 

                                            @csrf

                                            SEARCH TICKET WITH TICKET ID:
                                            <input type="id" name="id" class="form-control">
                                            <button type="submit" >Search</button>
                                            <!-- into another blade file form only -->
                                        </form>
                                    {{-- </div> --}}






                                    @endif

                                    <a href="{{('/')}}">
                                        <div align="center">
                                            <br><br>
                                            <hr>
                                            <b><font color="red">Welcome Page</font></b>
                                        </div>
                                    </a>
                                </ul>


                            </ul>
                        </div>

                    </div>
                </div>
            </div>


            @endsection
     


