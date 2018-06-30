@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
  <div class="col-md-8">
     <div class="card card-default">  




        {{-- if user role = admin, then  --}}
        @if(request()->user()->role == 'admin')
        <div class="mt-0 card-header p-3 mb-2 bg-primary text-white sticky" align="center">o0o CASE MANAGEMENT TICKETS o0o</div>
        <p align="justify-content-center">
            {{-- view all ticket from all users if user has ticket --}}
            @foreach($users as $user)
            <br>
            @if(count($user->tickets))
            <b class="container-fluid bg-warning">&#160;USER ID :{{$user->id}}  &emsp;&emsp;   NAME    :{{$user->name}} </b>
            @foreach($user->tickets as $ticket)

            <br><br>&emsp;&emsp;    Ticket ID   :{{$ticket->id}}
            <br><br>&emsp;&emsp;    Subject   :{{$ticket->subject}}
            <br><br>&emsp;&emsp;    Category   :{{$ticket->categoryt}}
            <br><br>&emsp;&emsp;    Description   :{{$ticket->desct}}  
            <br><br>&emsp;&emsp;    Priority   :{{$ticket->priority}}
            <br><br><b>&emsp;&emsp;    Status   :{{$ticket->status}}</b>  
            <br><br>

            @endforeach
            @endif
            @endforeach



            {{-- if user role = worker, then  --}}
            @elseif(request()->user()->role == 'worker')
            <div class="mt-0 card-header p-3 mb-2 bg-success text-white sticky" align="center">o0o CASE MANAGEMENT TICKETS o0o</div>
            <p align="justify-content-center">
                {{-- view all ticket from all users if user have ticket --}}
                @foreach($users as $user)
                <br>
                @if(count($user->tickets))
                <b class="container-fluid bg-success text-white">&#160;USER ID :{{$user->id}}  &emsp;&emsp;   NAME    :{{$user->name}} </b>
                @foreach($user->tickets as $ticket)

                <br><br>&emsp;&emsp;    Ticket ID   :{{$ticket->id}}
                <br><br>&emsp;&emsp;    Subject   :{{$ticket->subject}}
                <br><br>&emsp;&emsp;    Category   :{{$ticket->categoryt}}
                <br><br>&emsp;&emsp;    Description   :{{$ticket->desct}}  
                <br><br>&emsp;&emsp;    Priority   :{{$ticket->priority}}
                <br><br>&emsp;&emsp;    Updated At  :{{$ticket->updated_at}}
                <br><br><b>&emsp;&emsp;    Status   :{{$ticket->status}}</b>  
                <br><br>

            </p>

            <form method="POST" action="{{action('Hazim_Form\CaseManagement_Controllers@update')}}">  

                @csrf
                &nbsp;<input type="hidden" name="id" value="{{$ticket->id}}">
                &nbsp;<button name="status" type="submit" value="Solved">Solved</button>

{{--                 <input type="hidden" name="id" value="{{$ticket->id}}">
                <button name="status" type="submit" value="Cancelled">Cancelled</button> --}}

                <input type="hidden" name="id" value="{{$ticket->id}}">
                <button name="status" type="submit" value="Fowarded">Fowarded</button>
            </form>

        {{-- 

        JAVASCRIPT USE IF NO PAGE RELOADING REQUIRED

        USE PHP TAGS WHEN RELOAD NECESSARY OR DATABASE UPDATE REQUIRED

        --}}

        <p>
            @endforeach
            @endif
            @endforeach




            {{-- if other than admin or worker--}} 
            @else
            {{-- view only current log in user tickets --}}
            <div class="mt-0 card-header p-3 mb-2 bg-info text-white sticky" align="center">o0o CASE MANAGEMENT TICKETS o0o</div>
            
            @endif


              

              <center> No More Tickets to Show </center>
              <br><br>
              <a href="{{('/home')}}">
                <div align="center">
                    <br><br>
                    <hr>
                    <b><font color="red">Home Page</font></b>
                </div>
            </a>
            <br><br><br>
        </div>
    </div>
</div>

</p>
@endsection




