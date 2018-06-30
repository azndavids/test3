@extends('layouts.app')

@section('content')


<p>
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card card-default">
				<div class="card-header p-3 mb-2 bg-success text-white sticky" align="center">CASE MANAGEMENT TICKETS</div>

<div class="col-md-121"></div>
				<div class="col-md-8"></div>
				
<br>
			
					<form id="form-project" role="form" action="{{action('Hazim_Form\CaseManagement_Controllers@store')}}" autocomplete="off" method="POST">
						{{csrf_field()}}
						
						
						<b> &#160;CATEGORY : 
							
							<select name="categoryt"k class="form-control btn-success" style="width: 10em;">
						        <option value="Travel">Travel</option>
						        <option value="Accomodation">Accomodation</option>
						        <option value="Food">Food</option>
						        <option value="Events">Events</option>
						        <option value="Problems">Problems</option>
						        
						    </select>
						 <br>

						&#160;SUBJECT : <br>&#160;&#160;<textarea name="subject" cols="60" rows="8" required=""></textarea><br><br> 
						&#160;DESCRIPTION : <input type="text" name="desct" required=""><br><br> 
						&#160;PRIORITY : <select name="priority" class="form-control btn-success" style="width: 10em;">
						        <option value="Very High">Very High</option>
						        <option value="High">High</option>
						        <option value="Medium">Medium</option>
						        <option value="Low">Low</option>
						        <option value="No Rush">No Rush</option>
						        
						    </select><br>

						&emsp;&#160;&#160;<button type="submit">Save</button>
					</form> 

			<div class="card-body">
				<br><br><br><br>
              <hr>
					<a href="{{('/home')}}">
						<b><p align="center"><font color="red">Home</p></b></font>
					</a>
				
			</div>

			
		</div>
	</div>
</div>
</p>
@endsection




