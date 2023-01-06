@push('custom-style')
    <style>
        .pagination{
            display: flex!important;
            flex-wrap: wrap!important;
            justify-content: center!important;
            align-items: center!important;
        }
        .pagination .page-item .page-link {
            font-weight: 300 !important;
            font-size: 14px !important;
            line-height: 1.5 !important;
            color: #111 !important;
            display: flex !important;
            justify-content: center !important;
            align-items: center !important;
            width: 39px !important;
            height: 39px !important;
            border-radius: 50% !important;
            border: 1px solid #e1e1e1 !important;
            margin: 5px !important;
            transition: all .2s !important;
        }
        .pagination .page-item .page-link:hover {
            border-color: #e40914!important;
            color: #e40914!important;
        }

        .pagination .page-item.active .page-link{
            background: #e40914 !important;
            border-color: #e40914 !important;
            color: #fff !important;
        }
    </style>
@endpush

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
                        @foreach($watchLists as $watchList)
                        <div class="col-sm-2 col-md-3 col-lg-2 isotope-item Cinema Animation">
                            <div class="post-item">
                                <div class="pic">
                                    <img src="{{ count($watchList->movies->posters) > 0 ? asset($watchList->movies->posters->first()->image) : asset('frontend/assets/images/post-50.jpg') }}" alt="IMG">
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #e40914;">
                                            <button class="watchList" title="watchlist" data-id="{{$watchList->movie_id}}" data-type="remove" ><i class="fa fa-minus text-white"></i></button>
                                        </div>
                                    </div>
                                    <a href="{{route('singleMovie',['type'=>$watchList->movies->type,'name'=>$watchList->movies->title])}}"
                                       class="btn-play">
                                    </a>
                                </div>
                                <h4 class="title">
                                    <a href="{{route('singleMovie',['type'=>$watchList->movies->type,'name'=>$watchList->movies->title])}}">
                                        {{$watchList->movies->title}}
                                    </a>
                                </h4>
                                <div class="info">
                                    @foreach($watchList->movies->movieGenre as $movieGenre)
                                        {{$movieGenre->genre->name}},
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{$watchLists->links()}}
            </div>
        </div>

    </div>
</div>


