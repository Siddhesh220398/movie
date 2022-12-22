<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.thimpress.com/vividly/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 10:27:47 GMT -->
<head>
    <title>Video 01</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon-1.png')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/libs/bootstrap/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend/assets/fonts/ionicons-2.0.1/css/ionicons.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/libs/slick/slick.css')}}">

    <link rel="stylesheet" type="text/css"
          href="{{asset('frontend/assets/css/libs/magnific-popup/magnific-popup.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}">
    <style>
        .header-slider .item {
            height: 100vh;
            position: relative;
        }

        .header-slider .item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-slider .item .cover {
            padding: 75px 0;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
        }

        .header-slider .item .cover .header-content {
            position: relative;
            padding: 56px;
            overflow: hidden;
        }

        .header-slider .item .cover .header-content .line {
            content: "";
            display: inline-block;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            position: absolute;
            border: 9px solid #fff;
            -webkit-clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
            clip-path: polygon(0 0, 60% 0, 36% 100%, 0 100%);
        }

        .header-slider .item .cover .header-content h2 {
            font-weight: 300;
            font-size: 35px;
            color: #fff;
        }

        .header-slider .item .cover .header-content h1 {
            font-size: 56px;
            font-weight: 600;
            margin: 5px 0 20px;
            word-spacing: 3px;
            color: #fff;
        }

        .header-slider .item .cover .header-content h4 {
            font-size: 24px;
            font-weight: 300;
            line-height: 36px;
            color: #fff;
        }

        .header-slider .owl-item.active h1 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInDown;
            animation-delay: 0.3s;
        }

        .header-slider .owl-item.active h2 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInDown;
            animation-delay: 0.3s;
        }

        .header-slider .owl-item.active h4 {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInUp;
            animation-delay: 0.3s;
        }

        .header-slider .owl-item.active .line {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            animation-name: fadeInLeft;
            animation-delay: 0.3s;
        }

        .header-slider .owl-nav .owl-prev {
            position: absolute;
            left: 15px;
            top: 43%;
            opacity: 0;
            -webkit-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            background: rgba(0, 0, 0, 0.5) !important;
            width: 40px;
            cursor: pointer;
            height: 40px;
            position: absolute;
            display: block;
            z-index: 1000;
            border-radius: 0;
        }

        .header-slider .owl-nav .owl-prev span {
            font-size: 1.6875rem;
            color: #fff;
        }

        .header-slider .owl-nav .owl-prev:focus {
            outline: 0;
        }

        .header-slider .owl-nav .owl-prev:hover {
            background: #000 !important;
        }

        .header-slider .owl-nav .owl-next {
            position: absolute;
            right: 15px;
            top: 43%;
            opacity: 0;
            -webkit-transition: all 0.4s ease-out;
            transition: all 0.4s ease-out;
            background: rgba(0, 0, 0, 0.5) !important;
            width: 40px;
            cursor: pointer;
            height: 40px;
            position: absolute;
            display: block;
            z-index: 1000;
            border-radius: 0;
        }

        .header-slider .owl-nav .owl-next span {
            font-size: 1.6875rem;
            color: #fff;
        }

        .header-slider .owl-nav .owl-next:focus {
            outline: 0;
        }

        .header-slider .owl-nav .owl-next:hover {
            background: #000 !important;
        }

        .header-slider:hover .owl-prev {
            left: 0px;
            opacity: 1;
        }

        .header-slider:hover .owl-next {
            right: 0px;
            opacity: 1;
        }
    </style>
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
        <div class="header-slider">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2019/11/18/02/41/autumn-leaves-4633854_960_720.jpg"
                         alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line"></div>
                                <h2>All Type</h2>
                                <h1>Movie</h1>
                                <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2019/11/18/02/41/autumn-leaves-4633854_960_720.jpg"
                         alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Reimagine Digital Experience with</h2>
                                <h1>Intelligent solutions</h1>
                                <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="https://cdn.pixabay.com/photo/2020/04/16/02/44/dandelion-5048825_960_720.jpg"
                         alt="images not found">
                    <div class="cover">
                        <div class="container">
                            <div class="header-content">
                                <div class="line animated bounceInLeft"></div>
                                <h2>Peimagine Digital Experience with</h2>
                                <h1>Intelligent Solutions</h1>
                                <h4>We help entrepreneurs, start-ups and enterprises shape their ideas into products</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        @include('frontend-layout.trending',['type'=>'Trending'])

        @include('frontend-layout.trending',['type'=>'Latest Movies'])

        @include('frontend-layout.trending',['type'=>'Latest TV Series'])


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




        @include('frontend-layout.footer')
    </div>

    <div id="thim-preloading">
        <div class="custom-image">
            <img src="{{asset('frontend/assets/images/wave.gif')}}" alt="Loading">
        </div>
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="{{asset('frontend/assets/js/libs/bootstrap/popper.js')}}"></script>
<script src="{{asset('frontend/assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="{{asset('frontend/assets/js/libs/slick/slick.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/isotope/isotope.pkgd.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/select2/select2.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/thim-custom.js')}}"></script>
<div id="back-to-top" class="btn-back-to-top">
    <i class="ion ion-ios-arrow-thin-up"></i>
</div>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        mouseDrag:false,
        autoplay:true,
        animateOut: 'slideOutUp',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
</script>
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
