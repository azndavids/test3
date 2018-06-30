<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TADAAA VIEW</title>

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
					<b>USER TEST DATA VIEW</b>
					<br><br><br>
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
									
							
								
							@endforeach

							
							</div>

							<div class="links">
			                    

			                    <br><br><br><br>

			                        <a href="{{action('Hazim_Form\Users_Controllers@welcomepage')}}">
			                            <b>BACK</b>
			                        </a>
			                   
			                    
			                      
			                    
			                </div>




	        </div>	
        </div>


    </body>
</html>






