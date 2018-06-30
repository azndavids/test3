<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TADAAA DELETE</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">


</head>
<body>
	<div class="flex-center position-ref full-height">
		<div class="row">

			<div class="panel-heading">
				<b>USER TEST DATA DELETE</b>
				<br>
				<div class="clearfix"></div>
			</div>

			<div class="panel-body">

				<b>		

					@foreach($users as $user)


					<br><br>		USER ID : {{$user->id}}
					<br>&emsp;&emsp;	NAME    :   {{$user->name}} 
					<br>&emsp;&emsp;	Phone Number:	{{$user->phone}}  
					<br>&emsp;&emsp;	Email:	{{$user->email}}  
					<br>&emsp;&emsp;	Address:	{{$user->address}}

					<br><br>

					@endforeach
				</div>
				

				@method('DELETE')
				

				<br><br><br><br>

				<form method="POST" action="{{action('Hazim_Form\Users_Controllers@destroy')}}">  <!-- delete -->


					@csrf
					

					Delete ID:
					<input name="id" class="form-control">
					<button type="submit" >Delete</button>
				</form>

			</br></br>



			<a href="{{('/')}}">
				<b>BACK</b>
			</a>
		</div>	
	</div>


</body>
</html>


