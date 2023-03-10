<div class="bottom-header element-to-stick">
    @php
        $genres= \App\Model\Genre::get();
        $countries= \App\Model\Country::get();
    @endphp
    <div class="container">
        <div class="wrap-content-header">
            <div class="menu-mobile-effect navbar-toggle">
                <div class="text-menu">
                    Menu
                </div>
                <div class="icon-wrap">
                    <i class="ion-navicon"></i>
                </div>
            </div>
            <nav class="main-navigation">
                <ul class="menu-lists">
                    <li class="menu-item-has-children">
                        <a href="{{url('/')}}">
                            Home
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a>
                            Genre
                        </a>
                        <i class="fas fa-angle-down ml-2" style="color: white !important;"></i>
                        <ul class="sub-menu">
                            @foreach($genres as $genre)
                                <li>
                                    <a href="{{route('title',['genre_id[]'=>$genre->id])}}">
                                        {{$genre->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Country
                        </a>
                        <i class="fas fa-angle-down ml-2" style="color: white !important;"></i>
                        <ul class="sub-menu">
                            @foreach($countries as $country)
                                <li>
                                    <a href="{{route('title',['country_id[]'=>$country->id])}}">
                                        {{$country->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('title',['type[]'=>'movies'])}}">
                            Movies
                        </a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{route('title',['type[]'=>'web-series'])}}">
                            TV Series
                        </a>
                    </li>
                    <li>
                        <a href="{{route('title',['featured[]'=>'topimdb'])}}">
                            Top IMDb
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="menu-right">
                <div class="bp-element bp-element-button">
                    <a href="{{route('watchlist.index')}}" class="btn">
                        <i class="ion ion-upload"></i>
                        WatchList
                    </a>
                </div>

                <div class="bp-element bp-element-button">
                    <a href="{{route('user.profile')}}" class="btn">
                        <i class="fa fa-user"></i>
                        Profile
                    </a>
                </div>

                <div class="bp-element bp-element-button">
                    @if(!Auth::user())
                        <a class="btn" href="{{route('user.login')}}">
                            Login
                        </a>
                    @else
                        <form id="logout-form" action="{{  route('logout') }}" method="POST">
                            @csrf
                            <!-- <span class="btn btn-success btn-sm btn-bold btn-font-md"> -->
                            <button class="btn" type="submit" style="color: white;">
                                Logout
                            </button>
                            <!-- href="{{ url('admin/logout')}}" -->
                            <!-- </span> -->
                        </form>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>
