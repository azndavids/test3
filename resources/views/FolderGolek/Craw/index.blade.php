<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CRAW VIEW</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('Golek/PageDesign/pagedeco.css')}}" rel="stylesheet" type="text/css">

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
	        <div class="row">




	        	<div class="panel-heading">
					<b>CRAW DATA VIEW</b>
					<br><br><br>
					<div class="clearfix"></div>
				</div>
				
				<div class="panel-body">

						<b>		

							@foreach($users as $user)

								
										<br><br>		USER ID : {{$user->idCraw}}
										<br>&emsp;&emsp;	NAME    :   {{$user->nameCraw}} 
										<br>&emsp;&emsp;	Phone Number:	{{$user->phoneCraw}}  
										<br>&emsp;&emsp;	Email:	{{$user->emailCraw}}  
										<br>&emsp;&emsp;	Status:	{{$user->statusCraw}}

										<br><br>

										 <div class="links">

			                      <!--   <a href="{{action('Hazim_Form\Craw_Controllers@show', $user->id)}}">
			                            <b>Edit & Update User Info</b>
			                        </a>

			                         <a href="{{action('Hazim_Form\Craw_Controllers@welcomePage')}}">
			                            <b>Delete User</b>
			                        </a>
 -->
										<br><br>
							</div>
								
							@endforeach

							
							</div>

							<div class="links">
			                    

			                    <br><br><br><br>

			                        <a href="{{action('Hazim_Form\Craw_Controllers@welcomePage')}}">
			                            <b>View User</b>
			                        </a>

			                   
			                    
			                      
			                    
			                </div>




	        </div>	
        </div>


    </body>
</html>






