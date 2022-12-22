<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.thimpress.com/vividly/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 10:27:47 GMT -->
<head>
    <title>Video 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon-1.png')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/libs/bootstrap/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/fonts/ionicons-2.0.1/css/ionicons.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/libs/slick/slick.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/libs/magnific-popup/magnific-popup.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">

</head>

<body class="responsive home-1">
<div id="wrapper-container">

    <header class="site-header sticky-header layout-1">
        <div class="header-container">
         @include('frontend-layout.top-header')
         @include('frontend-layout.bottom-header')
        </div>
    </header>

    @include('frontend-layout.mobile-nav')


    <div id="main-content" style="background: #1e1e1e;">

        @yield('content')

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


        <div class="thim-popular-video_home-1">
            <div class="container">

                <div class="bp-element bp-element-st-list-videos vblog-layout-slider-1">
                    <div class="wrap-element">
                        <div class="heading-post">
                            <h3 class="title">
                                popular videos
                            </h3>
                            <a href="list-videos-2.html" class="link">
                                See all news
                            </a>
                        </div>
                        <div class="list-posts">
                            <div class="slide-posts js-call-slick-col" data-numofshow="4" data-numofscroll="1"
                                 data-loopslide="1" data-autoscroll="0" data-speedauto="6000"
                                 data-responsive="[4, 1], [4, 1], [3, 1], [2, 1], [1, 1]">
                                <div class="wrap-arrow-slick">
                                    <div class="arow-slick prev-slick">
                                        <i class="ion ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="arow-slick next-slick">
                                        <i class="ion ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="slide-slick">
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-01.jpg')}}" alt="IMG">
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #e40914;">
                                                        Hot
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="javascript:;">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-02.jpg')}}" alt="IMG">
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #ff6c00;">
                                                        Trend
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="single-video.html">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-03.jpg')}}" alt="IMG">
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #e40914;">
                                                        NEW
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="single-video.html">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-04.jpg')}}" alt="IMG">
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #e40914;">
                                                        HDRip
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="single-video.html">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-05.jpg')}}" alt="IMG">
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #e40914;">
                                                        Hot
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="single-video.html">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-01.jpg')}}" alt="IMG">
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #ff6c00;">
                                                        Trend
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="single-video.html">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-02.jpg')}}" alt="IMG"}>
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #e40914;">
                                                        NEW
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="single-video.html">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="pic">
                                                <img src="{{asset('frontend/assets/images/post-03.jpg')}}" alt="IMG">
                                                <div class="overlay"></div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label" style="background: #e40914;">
                                                        HDRip
                                                    </div>
                                                </div>
                                                <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                   class="btn-play popup-youtube">
                                                </a>
                                            </div>
                                            <h4 class="title">
                                                <a href="single-video.html">
                                                    How To Make a Pimple Disappear With Makeup
                                                </a>
                                            </h4>
                                            <div class="info">
                                                Action, Drama
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="thim-ads_home-1">
            <div class="container">

                <div class="bp-element bp-element-call-to-action vblog-layout-1">
                    <div class="wrap-element" style="background-image: url(frontend/assets/images/ads-01.jpg);">
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


        <div class="thim-trending-categories_home-1">
            <div class="container">

                <div class="bp-element bp-element-st-list-categories vblog-layout-slider-1">
                    <div class="wrap-element">
                        <div class="heading-post">
                            <div class="text">
                                <h3 class="title">
                                    TRENDING CATEGORIES
                                </h3>
                                <div class="description">
                                    It is a long established fact that a reader
                                </div>
                            </div>
                        </div>
                        <div class="list-posts">
                            <div class="slide-posts js-call-slick-col" data-numofshow="3" data-numofscroll="1"
                                 data-loopslide="1" data-autoscroll="0" data-speedauto="6000"
                                 data-responsive="[3, 1], [3, 1], [2, 1], [2, 1], [1, 1]">
                                <div class="wrap-arrow-slick">
                                    <div class="arow-slick prev-slick">
                                        <i class="ion ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="arow-slick next-slick">
                                        <i class="ion ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="slide-slick">
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <img src="{{asset('frontend/assets/images/post-05.jpg')}}" alt="IMG">
                                            <div class="overlay"></div>
                                            <a href="blog.html" class="content">
                                                <span class="title">Game</span> 250 Movies
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <img src="{{asset('frontend/assets/images/post-06.jpg')}}" alt="IMG">
                                            <div class="overlay"></div>
                                            <a href="blog.html" class="content">
                                                <span class="title">Animation</span> 380 Movies
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <img src="{{asset('frontend/assets/images/post-07.jpg')}}" alt="IMG">
                                            <div class="overlay"></div>
                                            <a href="blog.html" class="content">
                                                <span class="title">Life Style</span> 180 Movies
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <img src="{{asset('frontend/assets/images/post-05.jpg')}}" alt="IMG">
                                            <div class="overlay"></div>
                                            <a href="blog.html" class="content">
                                                <span class="title">Game</span> 250 Movies
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <img src="{{asset('frontend/assets/images/post-06.jpg')}}" alt="IMG">
                                            <div class="overlay"></div>
                                            <a href="blog.html" class="content">
                                                <span class="title">Animation</span> 380 Movies
                                            </a>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <img src="{{asset('frontend/assets/images/post-07.jpg')}}" alt="IMG">
                                            <div class="overlay"></div>
                                            <a href="blog.html" class="content">
                                                <span class="title">Life Style</span> 180 Movies
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="thim-latest-video_home-1">
            <div class="container">

                <div class="bp-element bp-element-st-list-videos vblog-layout-grid-1">
                    <div class="wrap-element">
                        <div class="heading-post">
                            <div class="wrap-title">
                                <h3 class="title">
                                    LATEST VIDEOS
                                </h3>
                                <a href="javascript:;" class="link">
                                    See all news
                                </a>
                            </div>
                            <div class="categories">
                                <ul>
                                    <li class="current-cat">
                                        <a href="javascript:;">
                                            CINEMA
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            MUSIC
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            SPORT
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            TECH
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            FASHION
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            ANIMATION
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="grid-posts grid-isotope">
                            <div class="grid-sizer"></div>
                            <div class="grid-item size_2x2">
                                <div class="post-item feature-item">
                                    <a href="single-video.html"><img src="{{asset('frontend/assets/images/bg-featurepost-02.jpg')}}"
                                                                     alt="IMG"></a>
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #ff6c00;">
                                            NEW
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="single-video.html">
                                                MTV Game Awards Graphic Package The Best Of year 2018
                                            </a>
                                        </h4>
                                        <div class="info">
                                            <span>BY POLLY</span>
                                            <span>MAY 1, 2018</span>
                                        </div>
                                        <div class="description">
                                            S1 E2 Escorpión/DzecThe one Mayans seek answers from a local crew as the
                                            Galindo you worlds north and south of the border.
                                        </div>
                                        <a href="single-video.html" class="btn-readmore btn-small shape-round">
                                            read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item ">
                                <div class="post-item">
                                    <a href="javascript:;"><img src="{{asset('frontend/assets/images/post-08.jpg')}}" alt="IMG"></a>
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #ff6c00;">
                                            Trend
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="single-video.html">
                                                The City Truck
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item ">
                                <div class="post-item">
                                    <a href="single-video.html"><img src="{{asset('frontend/assets/images/post-09.jpg')}}" alt="IMG"></a>
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #e40914;">
                                            Hot
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="single-video.html">
                                                The City Truck
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item ">
                                <div class="post-item">
                                    <a href="single-video.html"><img src="{{asset('frontend/assets/images/post-10.jpg')}}" alt="IMG"></a>
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #e40914;">
                                            HD
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="single-video.html">
                                                The City Truck
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item ">
                                <div class="post-item">
                                    <a href="single-video.html"><img src="{{asset('frontend/assets/images/post-11.jpg')}}" alt="IMG"></a>
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #e40914;">
                                            Hot
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="single-video.html">
                                                The City Truck
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item ">
                                <div class="post-item">
                                    <a href="single-video.html"><img src="{{asset('frontend/assets/images/post-12.jpg')}}" alt="IMG"></a>
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #e40914;">
                                            HD
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="single-video.html">
                                                The City Truck
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="grid-item ">
                                <div class="post-item">
                                    <a href="javascript:;"><img src="{{asset('frontend/assets/images/post-13.jpg')}}" alt="IMG"></a>
                                    <div class="overlay"></div>
                                    <div class="meta-info">
                                        <div class="imdb">
                                            <span class="value">5</span>IMDb
                                        </div>
                                        <div class="label" style="background: #e40914;">
                                            Hot
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">
                                            <a href="single-video.html">
                                                The City Truck
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="thim-ads_home-1">
            <div class="container">

                <div class="bp-element bp-element-call-to-action vblog-layout-2">
                    <div class="wrap-element" style="background-image: url(frontend/assets/images/ads-01.jpg);">
                        <div class="overlay"></div>
                        <a href="javascript:;" class="content">
                            <div class="text">
                                GAME SHOW Art line Collection Handmade
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>


        <div class="thim-news-feed_home-1">
            <div class="container">

                <div class="bp-element bp-element-posts vblog-layout-slider-3">
                    <div class="wrap-element">
                        <div class="heading-post">
                            <h3 class="title">
                                News Feed
                            </h3>
                            <div class="description">
                                It is a long established fact that a reader
                            </div>
                        </div>
                        <div class="list-posts">
                            <div class="slide-posts js-call-slick-col" data-numofshow="1" data-numofscroll="1"
                                 data-loopslide="1" data-autoscroll="0" data-speedauto="6000"
                                 data-responsive="[1, 1], [1, 1], [1, 1], [1, 1], [1, 1]">
                                <div class="wrap-arrow-slick">
                                    <div class="arow-slick prev-slick">
                                        <i class="ion ion-ios-arrow-left"></i>
                                    </div>
                                    <div class="arow-slick next-slick">
                                        <i class="ion ion-ios-arrow-right"></i>
                                    </div>
                                </div>
                                <div class="slide-slick">
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="feature-item">
                                                        <a href="single-blog.html"><img
                                                                src="{{asset('frontend/assets/images/bg-featurepost-03.jpg')}}" alt="IMG"></a>
                                                        <div class="overlay"></div>
                                                        <div class="content">
                                                            <h4 class="title">
                                                                <a href="single-blog.html">
                                                                    6 Products Designed to Make Trend Ombré Makeup
                                                                    Simple
                                                                </a>
                                                            </h4>
                                                            <div class="info">
                                                                <span class="item-info">BY <a
                                                                        href="javascript:;">POLLY</a></span>
                                                                <span class="item-info">MAY 1, 2018</span>
                                                                <span class="item-info">Animation</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="item">
                                                        <div class="pic">
                                                            <a href="single-blog.html"><img
                                                                    src="{{asset('frontend/assets/images/post-14.jpg')}}" alt="IMG"></a>
                                                        </div>
                                                        <div class="text">
                                                            <div class="info">
                                                                MAY 1, 2018
                                                            </div>
                                                            <h4 class="title">
                                                                <a href="single-blog.html">
                                                                    The Dark Tower Trailer
                                                                </a>
                                                            </h4>
                                                            <div class="description">
                                                                To start the day in the best way, enjoythe extraordinary
                                                                buffetbreakfast in the our courtyard caressed at auctor.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="pic">
                                                            <a href="#"><img
                                                                    src="{{asset('frontend/assets/images/post-15.jpg')}}" alt="IMG"></a>
                                                        </div>
                                                        <div class="text">
                                                            <div class="info">
                                                                MAY 1, 2018
                                                            </div>
                                                            <h4 class="title">
                                                                <a href="single-blog.html">
                                                                    The Dark Tower Trailer
                                                                </a>
                                                            </h4>
                                                            <div class="description">
                                                                To start the day in the best way, enjoythe extraordinary
                                                                buffetbreakfast in the our courtyard caressed at auctor.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-slick">
                                        <div class="post-item">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="feature-item">
                                                        <a href="single-blog.html"><img
                                                                src="{{asset('frontend/assets/images/bg-featurepost-03.jpg')}}" alt="IMG"></a>
                                                        <div class="overlay"></div>
                                                        <div class="content">
                                                            <h4 class="title">
                                                                <a href="single-blog.html">
                                                                    6 Products Designed to Make Trend Ombré Makeup
                                                                    Simple
                                                                </a>
                                                            </h4>
                                                            <div class="info">
                                                                <span class="item-info">BY <a
                                                                        href="javascript:;">POLLY</a></span>
                                                                <span class="item-info">MAY 1, 2018</span>
                                                                <span class="item-info">Animation</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="item">
                                                        <div class="pic">
                                                            <a href="single-blog.html"><img
                                                                    src="{{asset('frontend/assets/images/post-14.jpg')}}" alt="IMG"></a>
                                                        </div>
                                                        <div class="text">
                                                            <div class="info">
                                                                MAY 1, 2018
                                                            </div>
                                                            <h4 class="title">
                                                                <a href="single-blog.html">
                                                                    The Dark Tower Trailer
                                                                </a>
                                                            </h4>
                                                            <div class="description">
                                                                To start the day in the best way, enjoythe extraordinary
                                                                buffetbreakfast in the our courtyard caressed at auctor.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="pic">
                                                            <a href="single-blog.html"><img
                                                                    src="{{asset('frontend/assets/images/post-15.jpg')}}" alt="IMG"></a>
                                                        </div>
                                                        <div class="text">
                                                            <div class="info">
                                                                MAY 1, 2018
                                                            </div>
                                                            <h4 class="title">
                                                                <a href="single-blog.html">
                                                                    The Dark Tower Trailer
                                                                </a>
                                                            </h4>
                                                            <div class="description">
                                                                To start the day in the best way, enjoythe extraordinary
                                                                buffetbreakfast in the our courtyard caressed at auctor.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="thim-preloading">
        <div class="custom-image">
            <img src="{{asset('frontend/assets/images/wave.gif')}}" alt="Loading">
        </div>
    </div>
</div>

<script src="{{asset('frontend/assets/js/libs/jquery/jquery.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/bootstrap/popper.js')}}"></script>
<script src="{{asset('frontend/assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/slick/slick.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/isotope/isotope.pkgd.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/select2/select2.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/thim-custom.js')}}"></script>
<div id="back-to-top" class="btn-back-to-top">
    <i class="ion ion-ios-arrow-thin-up"></i>
</div>
<script>(function () {
        var js = "window['__CF$cv$params']={r:'77cfed556b0231e2',m:'_djJCe0FD2r.J.3aguOFEeU9QN4xTQ3i.3htRhqeS.4-1671618466-0-ASc6eSVqyI+fDRJYXxIbaKkuIQI7iNpS72MR4dx4zY+o1w3oW2no2KisgjdvK8jitBTrXK2ufKiYmLz4jq+8dkceBAfCsZsnSC5Igiakn6v47qq9RXldO3JryEaRwe4T3g==',s:[0x8cf5b97e57,0x3f220a2d43],u:'/cdn-cgi/challenge-platform/h/g'};var now=Date.now()/1000,offset=14400,ts=''+(Math.floor(now)-Math.floor(now%offset)),_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../cdn-cgi/challenge-platform/h/g/scripts/alpha/invisible5615.js?ts='+ts,document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.nonce = '';
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }

        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function () {
            };
            document.onreadystatechange = function (e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();</script>
</body>
<!-- Mirrored from html.thimpress.com/vividly/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 10:28:11 GMT -->
</html>
