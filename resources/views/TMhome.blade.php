@extends('layouts.apps')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default">
			<div class="card-header bg-warning mb-3 sticky" align="center">(TEAM) SEARCH TM CASES</div>
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

				<form method="POST" action="{{action('Hazim_Form\TM_Controllers@usercase')}}"> 

					@csrf

					SEARCH TICKET WITH TICKET ID:
					<input type="id" name="id" class="form-control">
					<button type="submit" >Search</button>
					<!-- into another blade file form only -->
				</form>




				<a href="{{('/')}}">
					<div align="center">
						<br><br>
						<hr>
						<b><font color="red">Welcome Page</font></b>
					</div>
				</a>
			</div>
		</div>
		<br>
	</div>
</div>


{{-- <br>
<center>
	<div class="card-header bg-danger mb-3 sticky-test" align="center" style="width: 300px">(TEAM) TM CASES</div>
	<div class="card-body">
		<div class="row">
			<div class="grid-container" style="padding-right: 250px">

				@foreach($users as $user)
				<div class="grid-item col-md-11">
					@foreach($user->tickets as $ticket)
					<div class="card card-primary">
						<div class="card-header bg-dark text-white">
							<div class="card-title" style="font-size: 15px; height: 10px;"><b>Ticket ID : {{$ticket->id}}</b></div>
						</div>
						<div class="card-body">
							<h5 class="card-title">Priority :  <b>{{$ticket->priority}}</b></h5>
							<p class="card-text"> 

								<br><b class="container-fluid bg-info text-white">	USER ID : {{$user->id}}</b>

								<br>	NAME:{{$user->name}} 

								<br>	Email:{{$user->email}} 

								<br>    <a href="{{action('Hazim_Form\TM_Controllers@ticket',$ticket->id)}}">More Details</a> 

							</p>
						</div>
					</div>
					<br>
					@endforeach
					END OF CASE FOR {{$user->name}} !
					<hr>
				</div>
				@endforeach	
			</div>
		</div>
	</div>
</center>

<br><br>
<br><br>

<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card-header bg-danger mb-3 sticky-test text-white" align="center">(TEAM) TM CASES</div>
		<div class="card-body row">
			@foreach($users as $user)
			@foreach($user->tickets as $ticket)
			<div class="col p-3 mb-2">
				<div class="card card-primary">
					<div class="card-header bg-dark text-white" >
						<div class="card-title"><b>Ticket ID : {{$ticket->id}}</b></div>
					</div>
					<div class="card-body">
						{{-- 					<h5 class="card-title">Category</h5>
						<p class="card-text"> 

							<br><b class="container-fluid bg-info text-white">	USER ID : {{$user->id}}</b>

							<br>	NAME:{{$user->name}} 

							<br>	Email:{{$user->email}} 

							<br>    <a href="{{action('Hazim_Form\TM_Controllers@ticket',$ticket->id)}}">More Details</a> 

						</p>
					</div>
				</div>
			</div>
			@endforeach
			@endforeach	
		</div>
	</div>
</div>

<br><br><br><br>
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card-header bg-danger mb-3 text-white" align="center">(TEAM) TM CASES</div>
		<div class="card-body row">
			@foreach($users as $user)
			@foreach($user->tickets as $ticket)
			<div class="col-md-3 show-grid" style="padding: 10px">
				<div class="card card-primary">
					<div class="card-header bg-dark text-white" >
						<div class="card-title"><b>Ticket ID : {{$ticket->id}}</b></div>
					</div>
					<div class="card-body">
						{{-- 					<h5 class="card-title">Category</h5>
						<p class="card-text"> 

							<br><b class="container-fluid bg-info text-white">	USER ID : {{$user->id}}</b>

							<br>	NAME:{{$user->name}} 

							<br>	Email:{{$user->email}} 

							<br>    <a href="{{action('Hazim_Form\TM_Controllers@ticket',$ticket->id)}}">More Details</a> 

						</p>
					</div>
				</div>
			</div>
			@endforeach
			<br>
			@endforeach	
		</div>
	</div>
</div> --}}










@endsection