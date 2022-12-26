@extends('frontend.layout.frontend-auth')
@section('title','Movies')
@section('content')
    <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.thimpress.com/vividly/list-videos.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 10:30:32 GMT -->

<body class="responsive home-2 list-videos-page">
<div class="thim-popular-video_home-1">
    <div class="container-fluid">
        <div class="bp-element bp-element-st-list-videos vblog-layout-slider-1">

            <div class="list-posts">
                <div class="new d-flex justify-flex-start" style="width: 100%; margin-left: 2%;margin-right: 2%; margin-bottom: 2%;">
                    <select name="" class="form-control selectpicker" >
                        <option value="">All</option>
                        <option value="movies">Movies</option>
                        <option value="tv-series">TV Series</option>
                    </select>
                    <select name="" class="form-control selectpicker">
                        <option value="">Genre</option>
                        <option value="action">Action</option>
                        <option value="kids">Kids</option>
                    </select>
                    <select name="" class="form-control selectpicker" multiple>
                        <option value="">Country</option>
                        <option value="india">India</option>
                        <option value="canada">Canada</option>
                        <option value="china">China</option>
                        <option value="japan">Japan</option>
                    </select>
                    <select name="" class="form-control selectpicker">
                        <option value="">Quality</option>
                        <option value="hd">HD</option>
                        <option value="sd">SD</option>
                        <option value="ts">TS</option>
                    </select>
                    <select name="" class="form-control selectpicker">
                        <option value="">Year</option>
                        <option value="">2022</option>
                        <option value="">2021</option>
                        <option value="">2020</option>
                        <option value="">2019</option>
                    </select>
                    <select name="" class="form-control selectpicker">
                        <option value="">Sort</option>
                        <option value="">Default</option>
                        <option value="">Latest Update</option>
                        <option value="">iMDb</option>
                    </select>
                </div>

                <div class="row isotope-grid">
                    <div class="col-sm-2 col-md-3 col-lg-2 isotope-item Cinema Animation">
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
                    <div class="col-sm-2 col-md-3 col-lg-2 isotope-item Cinema Animation">
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

<script src="{{asset('frontend/assets/js/libs/jquery/jquery.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/bootstrap/popper.js')}}"></script>
<script src="{{asset('frontend/assets/js/libs/bootstrap/bootstrap.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/slick/slick.min.js')}}"></script>

<script src="{{asset('frontend/assets/js/libs/isotope/isotope.pkgd.min.js')}}"></script>

{{--<script src="{{asset('frontend/assets/js/libs/select2/select2.min.js')}}"></script>--}}

<script src="{{asset('frontend/assets/js/thim-custom.js')}}"></script>
<div id="back-to-top" class="btn-back-to-top">
    <i class="ion ion-ios-arrow-thin-up"></i>
</div>
<script>(function () {
        var js = "window['__CF$cv$params']={r:'77cfed7c2ec8f30f',m:'0wFtCqRMiaCRWUEpvlf1JF2bhXjqYY0SYXX3VA7SXGw-1671618473-0-AbIiwJ/teNmKtt0tZi7Lcxo0hvAPjHNrsOtoT9BI4qvQBDIvzYB53pG/tks9jWJ2yZg3elgNCOU/fwlO1liPMWlEaeqdNTVqUZK95lKOOg+GvPtMZeXuHlVdXBGFtNbbf4WYGc4HtACAdGg9Hb9Tg7k=',s:[0x5575226344,0xbeae55cbc9],u:'/cdn-cgi/challenge-platform/h/g'};var _cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../cdn-cgi/challenge-platform/h/g/scripts/cb/invisiblef5f7.js?cb=77cfed7c2ec8f30f',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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

<!-- Mirrored from html.thimpress.com/vividly/list-videos.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Dec 2022 10:30:32 GMT -->
</html>
@endsection
