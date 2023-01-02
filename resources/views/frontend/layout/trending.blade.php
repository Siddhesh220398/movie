<div class="thim-popular-video_home-1">
    <div class="container-fluid">
        <div class="bp-element bp-element-st-list-videos vblog-layout-slider-1">
            <div class="wrap-element">
                <div class="heading-post">
                    <h3 class="title">
                        {{$type}}
                    </h3>
                    <a href="" class="link">
                        See all news
                    </a>
                </div>
                <div class="list-posts">
                    <div class="row isotope-grid">
                        @foreach($movies as $movie)
                            <div class="col-sm-2 col-md-3 col-lg-2 isotope-item Cinema Animation">
                                <div class="post-item">
                                    <div class="pic">
                                        <img src="{{ asset($movie->posters->first()->value('image')) }}" alt="IMG">
                                        <div class="overlay"></div>
                                        <div class="meta-info">
                                            <div class="imdb">
                                                <span class="value">5</span>IMDb
                                            </div>
                                            <div class="label" style="background: #e40914;">
                                                @if(Auth::user())
                                                    @if(count($movie->watchListByUser) == 0 )
                                                        <button class="watchList" title="watchlist"
                                                                data-id="{{$movie->id}}" data-type="add"><i
                                                                class="fa fa-plus text-white"></i></button>
                                                    @else
                                                        <button class="watchList" title="watchlist"
                                                                data-id="{{$movie->id}}" data-type="remove"><i
                                                                class="fa fa-minus text-white"></i></button>
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                        <a href="{{route('singleMovie',['type'=>$movie->type,'name'=>$movie->title])}}"
                                           class="btn-play">
                                        </a>
                                    </div>
                                    <h4 class="title">
                                        <a href="{{route('singleMovie',['type'=>$movie->type,'name'=>$movie->title])}}">
                                            {{$movie->title}}
                                        </a>
                                    </h4>
                                    <div class="info">
                                        Action, Drama
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <a class="content-add mt-5 d-flex justify-content-center">

                    <div class="btn-readmore btn-small shape-round">
                        Show more
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>


