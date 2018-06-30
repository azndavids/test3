












@if(request()->user()->role == 'admin')
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style="width:200px;right:0;" id="mySidebar">
	<button class="w3-bar-item w3-button w3-medium w3-hide-large" onclick="w3_close()">HIDE &piv;</button>
	<a class="w3-bar-item w3-button w3-yellow">ADMIN <br><b>{{ Auth::user()->name }}</b>  <b>{{ Auth::user()->id }}</b></a>
	<a href="{{('/home')}}" class="w3-bar-item w3-button">Search</a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@index')}}" class="w3-bar-item w3-button">View Users</a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@ticketlist')}}" class="w3-bar-item w3-button">View Ticket & Status</a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@createticket')}}" class="w3-bar-item w3-button">Add</a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@ownticketlist')}}" class="w3-bar-item w3-button">Edit </a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@deleteticket')}}" class="w3-bar-item w3-button">Delete </a>
</div>

<div class="w3-main" style="margin-right:200px">
	<div class="w3-teal">
		<button class="w3-button w3-teal w3-medium w3-hide-large w3-right" onclick="w3_open()">&#9776;</button>
	</div>
</div>

@elseif(request()->user()->role == 'worker')
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style="width:200px;right:0;" id="mySidebar">
	<button class="w3-bar-item w3-button w3-medium w3-hide-large" onclick="w3_close()">HIDE &piv;</button>
	<a class="w3-bar-item w3-button w3-green">WORKER <br><b>{{ Auth::user()->name }}</b>  <b>{{ Auth::user()->id }}</b></a>
	<a href="{{('/home')}}" class="w3-bar-item w3-button">Search</a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@index')}}" class="w3-bar-item w3-button">View Users</a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@ticketlist')}}" class="w3-bar-item w3-button">Status of Tickets </a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@createticket')}}" class="w3-bar-item w3-button">Add </a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@ownticketlist')}}" class="w3-bar-item w3-button">Edit </a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@deleteticket')}}" class="w3-bar-item w3-button">Delete </a>
</div>

<div class="w3-main" style="margin-right:200px">
	<div class="w3-teal">
		<button class="w3-button w3-teal w3-medium w3-hide-large w3-right" onclick="w3_open()">&#9776;</button>
	</div>
</div>

@else
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style="width:200px;right:0;" id="mySidebar">
	<button class="w3-bar-item w3-button w3-medium w3-hide-large" onclick="w3_close()">HIDE &piv;</button>
	<a class="w3-bar-item w3-button w3-blue">STAFF <br><b>{{ Auth::user()->name }}</b>  <b>{{ Auth::user()->id }}</b></a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@ownticketlist')}}" class="w3-bar-item w3-button">View Tickets</a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@createticket')}}" class="w3-bar-item w3-button">Add </a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@ownticketlist')}}" class="w3-bar-item w3-button">Edit </a>
	<a href="{{action('Hazim_Form\CaseManagement_Controllers@deleteticket')}}" class="w3-bar-item w3-button">Delete </a>
</div>

<div class="w3-main" style="margin-right:200px">
	<div class="w3-teal">
		<button class="w3-button w3-teal w3-medium w3-hide-large w3-right" onclick="w3_open()">&#9776;</button>
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