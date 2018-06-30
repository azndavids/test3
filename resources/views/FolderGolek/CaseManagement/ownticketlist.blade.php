@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
			<div class="mt-0 card-header p-3 mb-2 bg-info text-white sticky" align="center">o0o CASE MANAGEMENT TICKETS o0o</div>
			<p align="justify-content-center">
				@foreach(request()->user()->tickets as $ticket)
				<br><br>&emsp;&emsp;<b class="container-col-xs bg-info text-white">&emsp;&emsp;Ticket ID   :&emsp;{{$ticket->id}}&emsp;&emsp;</b>
				<br><br>&emsp;&emsp;    Subject   :{{$ticket->subject}}
				<br><br>&emsp;&emsp;    Category   :{{$ticket->categoryt}}
				<br><br>&emsp;&emsp;    Description   :{{$ticket->desct}}  
				<br><br>&emsp;&emsp;    Priority   :{{$ticket->priority}}
				<br><br>&emsp;&emsp;    Updated At  :{{$ticket->updated_at}}
				<br><br><b>&emsp;&emsp;    Status   :{{$ticket->status}}</b>
				<br><br>

			</p>

			
			
			<p class="container-col-xs">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<a href="{{action('Hazim_Form\CaseManagement_Controllers@editor', $ticket->id)}}"><button>Edit</button></a>
			
			{{-- &nbsp;&nbsp;<button onclick="{{action('Hazim_Form\CaseManagement_Controllers@editor', $ticket->id)}}" name="status" type="submit">Edit</button> --}}
			
			{{-- &nbsp;&nbsp;<button formaction="{{action('Hazim_Form\CaseManagement_Controllers@editor')}}" name="status" type="submit">Edit</button> --}}
			</p>

			<form method="POST" action="">  

				@csrf

                &nbsp;<input type="hidden" name="id" value="{{$ticket->id}}">
                &nbsp;&nbsp;&nbsp;&nbsp;<button formaction="{{action('Hazim_Form\CaseManagement_Controllers@update')}}" name="status" type="submit" value="Cancelled">Cancelled</button>

            </form>

           {{--  <form method="POST" action="">  

				@csrf
                &nbsp;&nbsp;&nbsp;&nbsp;<button formaction="{{action('Hazim_Form\CaseManagement_Controllers@editor', $ticket->id)}}" name="status" type="submit">Edit</button>

            </form> --}}

			<p>



				@endforeach


			</p>
			<br>
			<br>
			<br>
			<a href="{{('/home')}}">
				<div align="center">
					<br><br>
					<hr>
					<b><font color="red">Home Page</font></b>
				</div>
			</a>
			<br>
			<br>
			<br>
		</div>
	</div>
</div>

@endsection