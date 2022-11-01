<html>
 <head>
   <title>Home</title>
   <link rel="stylesheet" href="/static/css/rabbi_index.css">
 </head>
 <body> 
    
    <div class="parent">
	  <img src="/static/img/prof.png" class="imagec">
	  <p class="name">{{auth()->user()->name}}</p>
	  <p class="id"> ID:{{auth()->user()->id}} </p>
	  <div class="hov">
		<ul class="list">
	    <li><a href="{{url('/')}}">HOME</a></li>
	    <li><a href="{{url('/guard/dashboard')}}">DASHBOARD</a></li>
		<li><a href="{{url('/guard/shedule')}}">SCHEDULE</a></li>
		<li><a href="{{url('/guard/profile')}}">PROFILE</a></li>
		<li>
		<form method="POST" action="{{ route('logout') }}">
			@csrf

			<x-responsive-nav-link :href="route('logout')"
					onclick="event.preventDefault();
								this.closest('form').submit();">
				{{ __('Log Out') }}
			</x-responsive-nav-link>
		</form>
	</li>
	  </ul>
	</div>
	</div>
	  <div id="nav2">
	   <p class="review">
	   
		<a href="profile.html"><img src="/static/img/profile.png" class="profile"></a>
        <a href="/static/Guard Schedule/schedule.html"><img src="/static/img/schedule.png" class="schedule"></a>
        <a href=""><img src="/static/img/notices.png" class="notice"></a>
		
        <a href="./Scanner.html"><img src="/static/img/scanner.png" class="scanner"></a>
        <a><img src="/static/img/settings.png" class="settings"></a>
        <a><img src="/static/img/folders.png" class="home"></a>		
	   </p>
	  </div>
	 
  </body>
 </html>