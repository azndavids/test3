@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">  
			<div class="card-header p-3 mb-2 bg-primary text-white sticky" align="center">CASE MANAGEMENT TICKETS</div>

			<p align="justify-content-center">




				{{-- view only current log in user tickets --}}
				@foreach(request()->user()->tickets as $ticket)

				<br><br>&emsp;&emsp;<b class="container-col-xs bg-info text-white">&emsp;&emsp;Ticket ID   :&emsp;{{$ticket->id}}&emsp;&emsp;</b>
				<br><br>&emsp;&emsp;    Subject   :{{$ticket->subject}}
				<br><br>&emsp;&emsp;    Category   :{{$ticket->categoryt}}
				<br><br>&emsp;&emsp;    Description   :{{$ticket->desct}}  
				<br><br>

				@endforeach

			</p>

			

			<div class="form-group row">
				<div class="col-3 hidden">
					<p hidden="">
						
					</p>
				</div>
				<div class="col-4">
					<form method="POST" action="{{action('Hazim_Form\CaseManagement_Controllers@destroy')}}">  <!-- delete -->

						@csrf

						<b> Delete ID: </b>
						<div class="form-group row">
							<div class="col-5">
								<input name="id" class="form-control ">
								<button type="submit" >Delete</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-5">
					<p hidden="">

					</p>
				</div>
			</div>


			<div class="card-body">
				@if (session('status'))
				<div class="alert alert-success">
					{{ session('status') }}
				</div>
				@endif
<hr>
				<p align="center"> No More Tickets to Show</p>
			</div>
		</div>
	</div>
</div>
@endsection





