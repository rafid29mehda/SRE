<x-app-layout>

    <div class="overview">
        <div class="title">
            <h2 class="section--title">Overview</h2>
            <select name="date" id="date" class="dropdown">
                <option value="today">Today</option>
                <option value="lastweek">Last Week</option>
                <option value="lastmonth">Last Month</option>
                <option value="lastyear">Last Year</option>
                <option value="alltime">All Time</option>
            </select>
        </div>
        <div class="cards">
            <div class="card card-1">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Total Guards</h5>
                        <h1>42</h1>
                    </div>
                    <i class="ri-user-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>65%</span>
                    <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>10</span>
                    <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                </div>
            </div>
            <div class="card card-2">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Lost Form</h5>
                        <h1>145</h1>
                    </div>
                    <i class="ri-user-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>82%</span>
                    <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>230</span>
                    <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>45</span>
                </div>
            </div>
            <div class="card card-3">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Schedule</h5>
                        <h1>28</h1>
                    </div>
                    <i class="ri-calendar-2-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>27%</span>
                    <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>31</span>
                    <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>23</span>
                </div>
            </div>
            <div class="card card-4">
                <div class="card--data">
                    <div class="card--content">
                        <h5 class="card--title">Gate Form</h5>
                        <h1>15</h1>
                    </div>
                    <i class="ri-user-line card--icon--lg"></i>
                </div>
                <div class="card--stats">
                    <span><i class="ri-bar-chart-fill card--icon stat--icon"></i>8%</span>
                    <span><i class="ri-arrow-up-s-fill card--icon up--arrow"></i>11</span>
                    <span><i class="ri-arrow-down-s-fill card--icon down--arrow"></i>2</span>
                </div>
            </div>
        </div>
    </div>
    <div class="doctors">
        <div class="title">
            <h2 class="section--title">Guards</h2>
            <div class="doctors--right--btns">
                <select name="date" id="date" class="dropdown doctor--filter">
                    <option>Filter</option>
                    <option value="free">Free</option>
                    <option value="scheduled">Scheduled</option>
                </select>
                <button class="add"><i class="ri-add-line"></i><a href="{{ route('register') }}">add Guard</a></button>
            </div>
        </div>
        <div class="doctors--cards">
            @foreach($guards as $guard)
            <a href="#" class="doctor--card">
                <div class="img--box--cover">
                    <div class="img--box">
                        <img src="static/assets/images/1.png" alt="">
                    </div>
                </div>
                <p class="free">{{$guard['id']}}</p>
                <p class="free">{{$guard['name']}}</p>
            </a>
            @endforeach
            <!-- <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="static/assets/images/1.png" alt="">
                            </div>
                        </div>
                        <p class="free">Free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="static/assets/images/2.jpg" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="/static/assets/images/3.png" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="/static/assets/images/4.png" alt="">
                            </div>
                        </div>
                        <p class="free">Free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="/static/assets/images/5.png" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="/static/assets/images/6.png" alt="">
                            </div>
                        </div>
                        <p class="free">Free</p>
                    </a>
                    <a href="#" class="doctor--card">
                        <div class="img--box--cover">
                            <div class="img--box">
                                <img src="/static/assets/images/7.png" alt="">
                            </div>
                        </div>
                        <p class="scheduled">Scheduled</p>
                    </a> -->
        </div>
    </div>
    <div class="recent--patients">
        <div class="title">
            <h2 class="section--title">Schedule Details</h2>
            <button class="add"><i class="ri-add-line"></i><a href="{{route('shedule.create')}}">Add Shecdule</a></button>
        </div>
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Time</th>
                        <th>Settings</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shedules as $shedule)
                    <td>{{$shedule->user['name']}}</td>
                    <td>{{$shedule['date']}}</td>
                    <td>{{$shedule->location->name}}</td>
                    <td>{{$shedule['time_from']}} - {{$shedule['time_to']}}</td>
                    <td>
                        <form action="{{route('shedule.destroy', ['shedule'=>$shedule])}}" method="post">
                            <button type="submit">
                                <i class="ri-delete-bin-line delete"></i>
                            </button>
                            @method('delete')
                            @csrf
                            {{-- <input class="btn btn-default" type="submit" value="Delete" /> --}}
                        </form>
                    </td>
                    {{-- <td><a href="{{route('shedule.destroy', ['shedule'=>$shedule])}}"><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></a></td> --}}
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
