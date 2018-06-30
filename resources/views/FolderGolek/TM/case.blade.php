@extends('layouts.apps')

@section('content')



			<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card-header bg-danger mb-3 sticky-test text-white" align="center">(TEAM) TM CASES</div>
        <div class="card-body row">
           @foreach(request()->user()->tickets as $ticket)
            <div class="col-md-3 show-grid" style="padding: 10px">
                <div class="card card-primary">
                    <div class="card-header bg-dark text-white" >
                        <div class="card-title"><b>Ticket ID : {{$ticket->id}}</b></div>
                    </div>
                    <div class="card-body">
                        {{--                    <h5 class="card-title">Category</h5> --}}
                        <p class="card-text"> 

                            <br><b class="container-fluid bg-info text-white">  USER ID : {{$ticket->id}}</b>

                            <br>    NAME:{{$ticket->name}} 

                            <br>    Email:{{$ticket->email}} 

                            <br>    <a href="{{action('Hazim_Form\TM_Controllers@ticket',$ticket->id)}}">More Details</a> 

                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            <br>
			<a href="{{('/home')}}">
				<div align="center">
					<br><br>
					<b><font color="red">Home Page</font></b>
				</div>
			</a>

			<br><br><br>
    </div>
</div>



@endsection