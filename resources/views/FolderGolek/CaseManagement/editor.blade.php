


@extends('layouts.app')

@section('content')


<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card card-default"> 

			<form id="form-project" role="form" action="{{action('Hazim_Form\CaseManagement_Controllers@update2')}}" autocomplete="on" method="POST">
				{{csrf_field()}}

				<b>
					
					
					<p class="card-header" align="justify-content-center">Ticket ID:  {{$ticket->id}} </p>
					<br><br>
					<p align="justify-content-center">

						<input type="hidden" name="id" value="{{$ticket->id}}">
						<input type="hidden" name="status" value="{{$ticket->status}}">
						SUBJECT &emsp;&emsp;&emsp;:&emsp;&emsp; <input type="text" name="subject" value="{{$ticket->subject}}"> <br><br> 
						CATEORY &emsp;&emsp;&emsp;:&emsp;&emsp; <input type="text" name="categoryt" value="{{$ticket->categoryt}}"> <br><br> 
						DESCRIPTION :&emsp;&emsp; <input type="text" name="desct" value="{{$ticket->desct}}"><br><br> 
						PRIORITY :&emsp;&emsp; <input type="text" name="priority" value="{{$ticket->priority}}"><br><br> 
						STATUS&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp;  {{$ticket->status}}<br><br> 
						<button type="submit">Save</button>
					</p>
				</b>		
			</form> 




		</br></br></br></br></br></br></br></br></br></br></br></br>


		<p>
			<a href="{{action('Hazim_Form\CaseManagement_Controllers@ticketlist')}}">
				<b>BACK</b>
			</a>
		</p>
	</div>
</div>
</div>

@endsection