<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>CRAW USER EDITOR</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">

	


</head>
<body>
	<div class="flex-center position-ref full-height">
		<div class="row">
			<form id="form-project" role="form" action="{{action('Hazim_Form\Craw_Controllers@update')}}" autocomplete="off" method="POST">
				{{csrf_field()}}

				<b>
					<p align="center">id:  {{$users->idCraw}} <br><input type='hidden' name='id' value='{{$users->idCraw}}'></p>
					NAME : <input type="text" name="name" value="{{$users->nameCraw}}"> <br><br> 
					EMAIL : <input type="text" name="email" value="{{$users->emailCraw}}"> <br><br> 
					PHONE NUMBER : <input type="number" name="phone" value="{{$users->phoneCraw}}"><br><br> 
					STATUS : <input type="text" name="status" value="{{$users->statusCraw}}"><br><br> 
					<button type="submit">Save</button>
				</form> 

				

				<b>		

					
				</div>

			</br></br></br></br></br></br></br></br></br></br></br></br>

			
			<p>
				<a href="{{action('Hazim_Form\Craw_Controllers@welcomePage')}}">
					<b>BACK</b>
				</a>
			</p>

		</div>	
	</div>


</body>
</html>