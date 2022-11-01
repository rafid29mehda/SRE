<html>
 <head>
   <title>Profile Page</title>
   <link rel="stylesheet" href="/static/css/rabbi_profile.css">

 </head>
 <body> 
    
    <div class="parent">
	  <img src="/static/img/prof.png" class="imagec">
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
	
	<div id="nav2">
	    <p class="review">
	     <div class="about">
  		   <h2>About</h2>
		   <br>
		   <p class="para">Full Name &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->name}} </p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->email}}</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Phone &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->phone}}</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Address &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->address}}</p>
		   <br> 
		 </div>
		
	    <div class="recent">
		   <h2>Details</h2>
		   <br>
		   <p class="para">Blood Group &nbsp &nbsp; &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->bloodGroup}}</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">NID No. &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->nid}}</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Birth Date &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->birthDate}}</p>
		   <br>
		   <hr width="90%">
		   <br>
		   <p class="para">Gender &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp {{auth()->user()->gender}}</p>
		   <br>
		 </div>
		</p>   
		   
	</div>
	 
  </body>
 </html>