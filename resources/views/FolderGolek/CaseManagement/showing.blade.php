@extends('layouts.app')

@section('content')


<p>


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header p-3 mb-2 bg-info text-white" align="center">CASE MANAGEMENT TICKETS</div>

                @if(request()->user()->role == 'worker' || request()->user()->role == 'admin')
                @foreach($users as $user)

                
                <p>
                    <br>                USER ID :{{$user->id}}

                    &emsp;&emsp;   NAME    :{{$user->name}} 

                    @foreach($user->tickets as $ticket)

                    <br><br>&emsp;&emsp;    Ticket ID   :&emsp;{{$ticket->id}} 
                    <br><br>&emsp;&emsp;    Subject   :{{$ticket->subject}}
                    <br><br>&emsp;&emsp;    Category   :{{$ticket->categoryt}}
                    <br><br>&emsp;&emsp;    Description   :{{$ticket->desct}}  

                </p>
                @endforeach
                @endforeach
                @endif


                


                <div class="card-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <div>

                            <a href="{{('/home')}}">
                                <b><font color="red">Home</b></font>
                            </a>
                        </ul>
                    </div>

                    <div class="card-body" align="center">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif

                        No More Tickets to Show
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </div>


    </p>
    @endsection




