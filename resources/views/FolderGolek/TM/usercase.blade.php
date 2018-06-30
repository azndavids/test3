@extends('layouts.apps')

@section('content')


<p>


	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header p-3 mb-2 bg-info text-white" align="center">CASE MANAGEMENT TICKETS</div>

				<center>
					<b class="container-col-xs bg-primary text-warning">USER ID :{{$ticket->user->id}}

						&emsp;&emsp;   NAME    :{{$ticket->user->name}}

						&emsp;&emsp;&emsp;&emsp;Ticket ID   :&emsp;{{$ticket->id}}&emsp;&emsp;</b>
					</center>
					<br><br>&emsp;&emsp;    Subject   :{{$ticket->subject}}
					<br><br>&emsp;&emsp;    Category   :{{$ticket->categoryt}}
					<br><br>&emsp;&emsp;    Description   :{{$ticket->desct}}  
					<br><br>&emsp;&emsp;    Priority   :{{$ticket->priority}}
					<br><br>&emsp;&emsp;    Updated At  :{{$ticket->updated_at}}
					<br><br><b>&emsp;&emsp;    Status   :{{$ticket->status}}</b>
					<br><br>






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




