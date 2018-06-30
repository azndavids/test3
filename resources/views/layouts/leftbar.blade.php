



@if(request()->user()->role == 'teamadmin')
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;left:0;" id="mySidebar">
	<button class="w3-bar-item w3-button w3-medium w3-hide-large" onclick="w3_close()">HIDE &piv;</button>
	<a class="w3-bar-item w3-button w3-yellow">TEAM ADMIN <br><b>{{ Auth::user()->name }}</b>  <b>{{ Auth::user()->id }}</b></a>
	<a href="{{('/home')}}" class="w3-bar-item w3-button">Home</a>
	<a href="{{action('Hazim_Form\TM_Controllers@case')}}" class="w3-bar-item w3-button">View All My Case</a>
	<a href="{{action('Hazim_Form\TM_Controllers@everyonecase')}}" class="w3-bar-item w3-button">View All Case </a>
	<a href="{{action('Hazim_Form\TM_Controllers@createcase')}}" class="w3-bar-item w3-button">Add </a>
	<a href="#" class="w3-bar-item w3-button">Edit </a>
	<a href="#" class="w3-bar-item w3-button">Delete </a>
</div>

<div class="w3-main" style="margin-right:200px">
	<div class="w3-teal">
		<button class="w3-button w3-teal w3-medium w3-hide-large w3-left" onclick="w3_open()">&#9776;</button>
	</div>
</div>


@elseif(request()->user()->role == 'team')
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;left:0;" id="mySidebar">
	<button class="w3-bar-item w3-button w3-medium w3-hide-large" onclick="w3_close()">HIDE &piv;</button>
	<a class="w3-bar-item w3-button w3-red">TEAM <br><b>{{ Auth::user()->name }}</b>  <b>{{ Auth::user()->id }}</b></a>
	<a href="{{('/home')}}" class="w3-bar-item w3-button">Home</a>
	<a href="{{action('Hazim_Form\TM_Controllers@case')}}" class="w3-bar-item w3-button">View All My Case</a>
	<a href="{{action('Hazim_Form\TM_Controllers@everyonecase')}}" class="w3-bar-item w3-button">View All Case </a>
	<a href="{{action('Hazim_Form\TM_Controllers@createcase')}}" class="w3-bar-item w3-button">Add </a>
	<a href="#" class="w3-bar-item w3-button">Edit </a>
	<a href="#" class="w3-bar-item w3-button">Delete </a>
</div>

<div class="w3-main" style="margin-right:200px">
	<div class="w3-teal">
		<button class="w3-button w3-teal w3-medium w3-hide-large w3-left" onclick="w3_open()">&#9776;</button>
	</div>
</div>


@else
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;left:0;" id="mySidebar">
	<button class="w3-bar-item w3-button w3-medium w3-hide-large" onclick="w3_close()">HIDE &piv;</button>
	<a class="w3-bar-item w3-button w3-red">STAFF <br><b>{{ Auth::user()->name }}</b>  <b>{{ Auth::user()->id }}</b></a>
	<a href="#" class="w3-bar-item w3-button">View Tickets</a>
	<a href="#" class="w3-bar-item w3-button">Add </a>
	<a href="#" class="w3-bar-item w3-button">Edit </a>
	<a href="#" class="w3-bar-item w3-button">Delete </a>
</div>

<div class="w3-main" style="margin-right:200px">
	<div class="w3-teal">
		<button class="w3-button w3-teal w3-medium w3-hide-large w3-left" onclick="w3_open()">&#9776;</button>
	</div>
</div>


@endif

<script>
	function w3_open() {
		document.getElementById("mySidebar").style.display = "block";
	}
	function w3_close() {
		document.getElementById("mySidebar").style.display = "none";
	}
</script>