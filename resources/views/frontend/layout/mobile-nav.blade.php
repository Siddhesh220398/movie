<nav class="mobile-menu-container mobile-effect">
    @php
        $genres= \App\Model\Genre::get();
        $countries= \App\Model\Country::get();
    @endphp
    <div class="inner-menu">
        <ul class="nav navbar-nav">
            <li class="current-menu-item">
                <a href="{{url('/')}}">
                    Home
                </a>
            </li>
            <li class="menu-item-has-children">
                <a>
                    Genre
                </a>
                <ul class="sub-menu">
                    @foreach($genres as $genre)
                        <li>
                            <a href="{{route('title',$genre->name)}}">
                                {{$genre->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a>
                    Country
                </a>
                <ul class="sub-menu">
                    @foreach($countries as $country)
                        <li>
                            <a href="">
                                {{$country->name}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li>
                <a href="{{route('title','movie')}}">
                    Movies
                </a>
            </li>
            <li>
                <a href="{{route('title','tv-series')}}">
                    Tv Series
                </a>
            </li>
            <li>
                <a href="{{route('title','top-imdb')}}">
                    Top IMDb
                </a>
            </li>
        </ul>
        {{--        <div class="widget-area">--}}
        {{--            <aside class="widget widget_nav_menu">--}}
        {{--                <div class="menu-useful-links-container">--}}
        {{--                    <ul class="menu">--}}
        {{--                        <li class="menu-item">--}}
        {{--                            <a href="about.html">CLIENTS</a>--}}
        {{--                        </li>--}}
        {{--                        <li class="menu-item menu-item-has-children">--}}
        {{--                            <a href="javascript:;">SERVICES</a>--}}
        {{--                            <ul class="sub-menu">--}}
        {{--                                <li class="menu-item">--}}
        {{--                                    <a href="contact.html">--}}
        {{--                                        Menu item--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                                <li class="menu-item">--}}
        {{--                                    <a href="contact.html">--}}
        {{--                                        Menu item--}}
        {{--                                    </a>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                        </li>--}}
        {{--                        <li class="menu-item">--}}
        {{--                            <a href="contact.html">CONTACT US</a>--}}
        {{--                        </li>--}}
        {{--                    </ul>--}}
        {{--                </div>--}}
        {{--            </aside>--}}
        {{--            <aside class="widget widget_text">--}}
        {{--                <div class="textwidget">--}}
        {{--                    <div class="copyright-text">--}}
        {{--                        Copyright 2018 Corporate WordPress Theme by ThimPress. <a href="javascript:;">ThimPress</a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </aside>--}}
        {{--        </div>--}}
    </div>
</nav>
