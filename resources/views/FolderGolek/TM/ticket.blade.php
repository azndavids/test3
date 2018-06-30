@extends('layouts.apps')

@section('content')

<br>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">

            <div class="card-header p-3 mb-2 bg-success text-white" align="center">CASE MANAGEMENT TICKETS</div>


            <br>&emsp;&emsp;                USER ID :{{$ticket->user_id}}
            <br><br>&emsp;&emsp;&emsp;&emsp;    Ticket ID   :&emsp;{{$ticket->id}} 
            <br><br>&emsp;&emsp;&emsp;&emsp;    Subject   :{{$ticket->subject}}
            <br><br>&emsp;&emsp;&emsp;&emsp;    Category   :{{$ticket->categoryt}}
            <br><br>&emsp;&emsp;&emsp;&emsp;    Description   :{{$ticket->desct}}  

            <br><br><br>

            <div class="card-footer">
                <ul class="nav nav-tabs" role="tablist">
                    <a href="{{('/home')}}">
                        <b><font color="red">Home</b></font>
                    </a>
                </ul>
            </div>

        </div>
    </div>
</div>

@endsection




