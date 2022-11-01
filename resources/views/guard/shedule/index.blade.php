<html>
 <head>
   <title>Schedule Page</title>
   <link rel="stylesheet" href="/static/css/rabbi_schedule.css">
	
 </head>
 <body> 
	<div class="bg">
	<img src="/static/img/fahim.jpg" class="imagec1">
	<div class="user">
		<h1>Gaurd Schedule</h1>
	</div>
	<div class="user1">
		<h3>{{auth()->user()->name}}</h3>
	</div>
	<div class="nav2">

	</div>
	
	
			<div class="user3">
				<h3>Today's Schedule</h3>
			</div>
		<!-- <div class="user2">
			<h3>Database</h3>
		</div> -->
	
		<table class="tb1">
			<tr bgcolor="#e2dede">
				<td bgcolor="#4FBA6A">ID</td>
				<td bgcolor="#4FBA6A">Name</td>
				<td bgcolor="#4FBA6A">Location</td>
				<td bgcolor="#4FBA6A">Time</td>
			</tr>
			@foreach ($shedules as $shedule)
			<tr bgcolor="#e2dede">
				<td bgcolor="#CDCED2">{{auth()->user()->id}}</td>
				<td>{{auth()->user()->name}}</td>
				<td>{{$shedule->location->name}}</td>
				<td>{{$shedule->time_from}} - {{$shedule->time_to}}</td>
					
			</tr>
			@endforeach
			
		</table>
	
	
	
    <div class="parent">
	  <img src="/static/img/fahim.jpg" class="imagec">
	  <p class="name">{{auth()->user()->name}}</p>
	  <p class="id"> ID:{{auth()->user()->id}} </p>
	  <ul class="list">
	    <a href="{{url('/')}}"><li>HOME</li></a>
	    <a href="{{url('/guard/dashboard')}}"><li>DASHBOARD</li></a>
	    <a href="{{url('/guard/shedule')}}"><li>SCHEDULE</li></a>
		<a href="{{url('/guard/profile')}}"><li>PROFILE</li></a>
	    <form method="POST" action="{{ route('logout') }}">
			@csrf

			<x-responsive-nav-link :href="route('logout')"
					onclick="event.preventDefault();
								this.closest('form').submit();">
				{{ __('Log Out') }}
			</x-responsive-nav-link>
		</form>
	  </ul>
	</div>
	<div id="nav">
	  <ul class="cbs">
	   <li><a href="">HOME</a></li>
	   <li><a href="">Profile</a></li>
	   <li><a href="">Schedule</a></li>
	   <li><a href="#">Notices</a></li>
	   <li><a href="">Scanner</a></li>
	  </ul>
	</div>   
</div>	                                     
</div> 
  </body>
 </html>