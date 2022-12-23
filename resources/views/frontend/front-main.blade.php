@extends('frontend.layout.frontend-auth')
@section('title',$data['title'])
@section('content')
    <div class="thim-banner_home-1" style="background-image: url(frontend/assets/images/bg-01.jpg);">
        <div class="overlay-area"></div>
        <div class="container">

            <div class="bp-element bp-element-st-list-videos vblog-layout-1">
                <div class="wrap-element">
                    <div class="feature-item">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="video">
                                    <img src="{{asset('frontend/assets/images/bg-featurepost-01.jpg')}}" alt="IMG">
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label">
                                            HDRip
                                        </div>
                                    </div>
                                    <a href="https://www.youtube.com/watch?v=hNQFjqDvPhA&amp;feature=youtu.be"
                                       class="btn-play popup-youtube">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="text">
                                    <h4 class="title">
                                        <a href="#">
                                            MTV Game Awards GraphicPackage The Best Of year 2018
                                        </a>
                                    </h4>
                                    <div class="info">
                                        <span class="item-info">BY <a href="javascript:;">POLLY</a></span>
                                        <span class="item-info">MAY 1, 2018</span>
                                        <span class="item-info">TV show</span>
                                    </div>
                                    <div class="description">
                                        S1 E2 Escorpión/DzecThe one Mayans seek answers from a local crew as the
                                        Galindo you worlds north and south of the border oldcollide.
                                    </div>
                                    <a href="#" class="btn-readmore btn-normal shape-round">
                                        read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bp-element bp-element-st-list-videos vblog-layout-1-1">
                <div class="wrap-element">
                    <div class="normal-items">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="item">
                                    <div class="pic">
                                        <a href="#"><img src="{{asset('frontend/assets/images/png-bg-post-01.png')}}"
                                                         alt="IMG"></a>
                                        <div class="label">
                                            HD
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="single-video.html">
                                            Self-Hosted Video
                                        </a>
                                    </h4>
                                    <div class="info">
                                        FEBRUARY 10, 2018
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="item">
                                    <div class="pic">
                                        <a href="single-video.html"><img src="{{asset('frontend/assets/images/png-bg-post-02.png')}}"
                                                                         alt="IMG"></a>
                                        <div class="label">
                                            CAM
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="single- .html">
                                            Self-Hosted Video
                                        </a>
                                    </h4>
                                    <div class="info">
                                        FEBRUARY 10, 2018
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="item">
                                    <div class="pic">
                                        <a href="single-video.html"><img src="{{asset('frontend/assets/images/png-bg-post-03.png')}}"
                                                                         alt="IMG"></a>
                                        <div class="label">
                                            Trailer
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="single-video.html">
                                            Self-Hosted Video
                                        </a>
                                    </h4>
                                    <div class="info">
                                        FEBRUARY 10, 2018
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="item">
                                    <div class="pic">
                                        <a href="single-video.html"><img src="{{asset('frontend/assets/images/png-bg-post-04.png')}}"
                                                                         alt="IMG"></a>
                                        <div class="label">
                                            HD
                                        </div>
                                    </div>
                                    <h4 class="title">
                                        <a href="single-video.html">
                                            Self-Hosted Video
                                        </a>
                                    </h4>
                                    <div class="info">
                                        FEBRUARY 10, 2018
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    @include('frontend.layout.trending',['type'=>'Trending'])

    @include('frontend.layout.trending',['type'=>'Latest Movies'])

    @include('frontend.layout.trending',['type'=>'Latest TV Series'])


    <div class="thim-ads_home-1">
        <div class="container">

            <div class="bp-element bp-element-call-to-action vblog-layout-1">
                <div class="wrap-element" style="background-image: url('frontend/assets/images/ads-01.jpg');">
                    <div class="overlay"></div>
                    <a href="javascript:;" class="content">
                        <div class="text">
                            GAME SHOW Art line Collection Handmade
                        </div>
                        <div class="btn-readmore btn-small shape-round">
                            read more
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>


@endsection
