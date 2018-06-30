<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>TADAAA CREATE</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">

	


</head>
<body>
	<div class="flex-center position-ref full-height">
		<div class="row">
			<form id="form-project" role="form" action="{{action('Hazim_Form\Users_Controllers@store')}}" autocomplete="off" method="POST">
				{{csrf_field()}}

				<b>NAME : <input type="text" name="name"> <br><br> 
					EMAIL : <input type="text" name="email"requo> <br><br> 
					PHONE NUMBER : <input type="number" name="phone"><br><br> 
					ADDRESS : <input type="text" name="address"><br><br> 
					<button type="submit">Save</button>
				</form> 

			</br></br></br></br>

			

			<a href="{{('/')}}">
				<b>BACK</b>
			</a>
		</div>	
	</div>


</body>
</html>