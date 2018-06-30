
@extends('layouts.app')

@section('content')





<div class="row justify-content-center">
  <div class="col-md-8">
     <div class="card card-default">
        <div class="card-header p-3 mb-2 bg-danger text-white sticky" align="center">CASE MANAGEMENT USERS</div>

        @if(request()->user()->role == 'admin' || request()->user()->role == 'worker')
        @foreach($users as $user)
        <p align="center">

           <br>			<b class="container-fluid bg-info text-white">	USER ID : {{$user->id}}</b>

           <br>&emsp;&emsp;	NAME    :   {{$user->name}} 

           <br>&emsp;&emsp;	Email:	{{$user->email}}  

           @endforeach
           @endif
           <div class="card-body">
               @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
              </div>
              @endif
              
              <br><br><br><br>
              <hr>
              <p align="center"> No More Users to Show</p>
              <br><br><br>
          </div>
      </div>
  </div>
</div>

@endsection




