<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.thimpress.com/vividly/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 10:27:47 GMT -->
<head>
    <title>{{setWebsite('website_name')}} | @yield('title')</title>
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
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <style>
        .content-add .btn-readmore {
            font-weight: 500;
            font-size: 14px;
            line-height: 1.5;
            color: #fff;
            text-transform: uppercase;
            white-space: nowrap;
            background: #e40914;
            padding: 0 39px;
            transition: all .2s;
        }

        .content-add .btn-readmore:hover {
            background: #b30710;
        }

        .sub-menu {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-wrap: wrap;
            width: 400px !important;
            padding: 2rem !important;
        }

        .sub-menu li {
            width: 33.33% !important;
            flex-shrink: 0;
        }

        .sub-menu li a {
            font-weight: 400;
            padding: 0.2rem 0.6rem;
            font-size: .9em;
            line-height: 0.1 !important;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden
        }



        @media screen and (min-width: 1024px) and (max-height: 1310px) {
            .menu-mobile-effect.navbar-toggle {
                display: none !important;
            }
            .sub-menu li a {
                display: block;
            }
        }
    </style>


    @stack('custom-style')

</head>

<body class="responsive home-2  ">
<div id="wrapper-container">

    <header class="site-header sticky-header layout-1">
        <div class="header-container">

            @include('frontend.layout.top-header')
            @include('frontend.layout.bottom-header')
        </div>
    </header>

    @include('frontend.layout.mobile-nav')

    <div id="main-content" >

        @yield('content')

        @include('frontend.layout.footer')
    </div>

    {{--    <div id="thim-preloading">--}}
    {{--        <div class="custom-image">--}}
    {{--            <img src="{{asset('frontend/assets/images/wave.gif')}}" alt="Loading">--}}
    {{--        </div>--}}
    {{--    </div>--}}
</div>


<script src="{{asset('frontend/assets/js/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/js/libs/bootstrap/popper.js')}}"></script>
<script src="{{asset('frontend/assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="{{asset('frontend/assets/js/libs/slick/slick.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/isotope/isotope.pkgd.min.js')}}"></script>

{{--<script src="{{asset('frontend/assets/js/libs/select2/select2.min.js')}}"></script>--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<script src="{{asset('frontend/assets/js/thim-custom.js')}}"></script>
<div id="back-to-top" class="btn-back-to-top">
    <i class="ion ion-ios-arrow-thin-up"></i>
</div>
@stack('custom-scripts')

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
