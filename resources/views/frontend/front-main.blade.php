@extends('frontend.layout.frontend-auth')
@section('title',$data['title'])
@push('custom-style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    <style>
        .body-slider {
            margin: 0%;
            padding: 0%;
            width: 100%;
            height: 80vh;
            overflow: hidden;
            background: #0f0f0f;
        }

        .image-slider {
            z-index: 0;
            margin: 0 auto;
            padding: 0;
            width: 100%;
            height: 100vh;
        }

        .image-slide {
            height: 100vh;
            margin: 0 auto;
            /*box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.7);*/
        }

        .slick-slide.slick-center {
            transform: scale(1.2);
            transition: transform .8s 1.4s cubic-bezier(.84, 0, .08, .99);
        }

        .slick-slide {
            transition: transform .7s cubic-bezier(.84, 0, .08, .99);
        }

        .slider-control {
            margin: 0%;
            position: absolute;
            z-index: 2;
            bottom: 4%;
            left: 15%;
            transform: translate(-50%, -50%);
            display: flex;
        }

        .slide-button {
            color: #fff;
            background: none;
            padding: 24px;
            border: 1px solid rgba(255, 255, 255, .3);
            font-size: 16px;
            border-radius: 50%;
            margin: .4em;
            display: inline-block;
        }

        .slide-button:focus {
            outline: none;
        }

        .body-slider .block-1 {
            z-index: 1;
            position: absolute;
            height: 80vh;
            width: 5%;
            left: 0%;
            background: #0f0f0f;
        }

        .body-slider .block-2 {
            z-index: 1;
            position: absolute;
            height: 80vh;
            width: 25%;
            left: 25%;
            background: #0f0f0f;
        }

        .body-slider .block-3 {
            z-index: 1;
            position: absolute;
            height: 80vh;
            width: 5%;
            right: 0%;
            background: #0f0f0f;
        }

        .body-slider .overlay {
            z-index: 1;
            position: absolute;
            height: 80vh;
            width: 20%;
            left: 5%;
            background: rgba(0, 0, 0, .65);
        }

        .text-slider-wrapper {
            z-index: 2;
            position: absolute;
            width: 100%;
            top: 30%;
            margin-left: 2%;
        }

        .box-slider-wrapper {
            z-index: 2;
            position: absolute;
            width: 100%;
            top: 30%;
        }

        .text-slider {
            margin: 0%;
            padding: 0%;
            height: 100vh;
        }

        .box-slider {
            margin: 0%;
            padding: 0%;
            height: 100vh;
        }


        /*.text-slide h1 {*/
        /*    color: #fff;*/
        /*    font-size: 64px;*/
        /*    font-family: "Cinzel";*/
        /*    font-weight: lighter;*/
        /*    text-transform: uppercase;*/
        /*    padding-left: 10%;*/
        /*}*/
        .item-content {
            padding: 0.7rem;
            /*height: 73px;*/
            background-color: #fff;
            color: #111;
            /*position: absolute;*/
            /*bottom: -20px;*/
            right: 56px;
            z-index: 2;
            /*opacity: 0;*/
            display: flex;
            justify-content: flex-start;
            align-items: normal;
            width: 20%;
            transition: all .2s ease 0s;
        }

        .item-content .movie-thumbnail {
            padding-bottom: 0px;
            width: 50px;
            flex-shrink: 0;
            margin-right: 0.75rem;
        }

        .movie-thumbnail {
            position: relative;
            width: 100%;
            padding-bottom: 148%;
            overflow: hidden;
            display: block;
        }

        movie-thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .item-content .movie-name {
            display: block;
            color: #111;
            font-size: 1.1em;
            line-height: 1.3;
            font-weight: 600;
            margin-bottom: 0.3rem;
            width: 160px;
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            text-align: left;
        }

        .info-split {
            display: flex;
            align-items: center;
            /*justify-content: space-between;*/
            font-size: 1em;
        }

        .info-split > div {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-shrink: 0;
            line-height: 20px;
        }

        .info-split .is-rated i {
            color: #f04f24;
        }

        .dot {
            margin: 0 5% 0 5%;
            width: 3px;
            height: 3px;
            border-radius: 50%;
            background: #aaa;
            display: inline-block;
        }

        @media (max-width: 990px) {
            .block-2, .overlay {
                display: none;
            }

            .block-1 {
                width: 50%;
            }

            .block-3 {
                width: 12%;
            }

            .slide-slick {
                display: none !important;
            }

            .text-slide h1 {
                font-size: 30px !important;
            }

            .text-slider-wrapper {
                position: absolute;
                top: 50% !important;
            }

            .slider-control {
                left: 22.5%;
            }


        }

    </style>
@endpush
@section('content')
    <div class="body-slider">
        <div class="text-slider-wrapper">
            <div class="text-slider">
                {{--                <div class="text-slide">--}}
                {{--                    <div class="item-content">--}}
                {{--                        <div class="movie-thumbnail">--}}
                {{--                            <a href="/series/watch-wednesday-90553"><img--}}
                {{--                                    src="https://img.goku.to/xxrz/250x400/576/9b/70/9b70e344f895fd9ed9cbac46d95b21a2/9b70e344f895fd9ed9cbac46d95b21a2.jpg"--}}
                {{--                                    alt="Wednesday"></a>--}}
                {{--                        </div>--}}
                {{--                        <div class="movie-info">--}}
                {{--                            <a href="/series/watch-wednesday-90553" class="movie-name" title="Wednesday">Wednesday</a>--}}
                {{--                            <div class="info-split">--}}
                {{--                                <div class="is-rated"><i class="fas fa-star mr-1"></i>8.4--}}
                {{--                                </div>--}}
                {{--                                <div class="dot"></div>--}}
                {{--                                <div>2022</div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="text-slide">--}}
                {{--                    <div class="item-content">--}}
                {{--                        <div class="movie-thumbnail">--}}
                {{--                            <a href="/series/watch-wednesday-90553"><img--}}
                {{--                                    src="https://img.goku.to/xxrz/250x400/576/9b/70/9b70e344f895fd9ed9cbac46d95b21a2/9b70e344f895fd9ed9cbac46d95b21a2.jpg"--}}
                {{--                                    alt="Wednesday"></a>--}}
                {{--                        </div>--}}
                {{--                        <div class="movie-info">--}}
                {{--                            <a href="/series/watch-wednesday-90553" class="movie-name" title="Wednesday">Wednesday</a>--}}
                {{--                            <div class="info-split">--}}
                {{--                                <div class="is-rated"><i class="fas fa-star mr-1"></i>8.4--}}
                {{--                                </div>--}}
                {{--                                <div class="dot"></div>--}}
                {{--                                <div>2022</div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div class="text-slide">--}}
                {{--                    <div class="item-content">--}}
                {{--                        <div class="movie-thumbnail">--}}
                {{--                            <a href="/series/watch-wednesday-90553"><img--}}
                {{--                                    src="https://img.goku.to/xxrz/250x400/576/9b/70/9b70e344f895fd9ed9cbac46d95b21a2/9b70e344f895fd9ed9cbac46d95b21a2.jpg"--}}
                {{--                                    alt="Wednesday"></a>--}}
                {{--                        </div>--}}
                {{--                        <div class="movie-info">--}}
                {{--                            <a href="/series/watch-wednesday-90553" class="movie-name" title="Wednesday">Wednesday</a>--}}
                {{--                            <div class="info-split">--}}
                {{--                                <div class="is-rated"><i class="fas fa-star mr-1"></i>8.4--}}
                {{--                                </div>--}}
                {{--                                <div class="dot"></div>--}}
                {{--                                <div>2022</div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>

        </div>

        <div class="slider-control">
            <div class="prev">
                <button type="button" class="slide-button">
                    <ion-icon name="arrow-back"></ion-icon>
                </button>
            </div>
            <div class="next">
                <button type="button" class="slide-button">
                    <ion-icon name="arrow-forward"></ion-icon>
                </button>
            </div>
        </div>

        {{--        <div class="blocks">--}}
        {{--            <div class="block-1"></div>--}}
        {{--            <div class="block-2"></div>--}}
        {{--            <div class="block-3"></div>--}}
        {{--        </div>--}}

        {{--        <div class="overlay"></div>--}}
        @php
            $img = 'https://images.unsplash.com/photo-1519011985187-444d62641929?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2452&q=80';
        @endphp
        <div class="image-slider">
            @php
                $banners= \App\Model\Banner::limit(20)->get();
            @endphp
            @foreach($banners as $banner)

                {{--              @dd($banner->$banner)--}}
                <a href="http://localhost" class="image-slide" id="three"
                   style="background: url({{$banner->image}}) no-repeat 50% 50%; background-size: cover;">

                </a>
            @endforeach
        </div>
    </div>


    @include('frontend.layout.trending',['type'=>'Trending','movies'=>$data['trending_movie']])

    @include('frontend.layout.trending',['type'=>'Latest Movies','movies'=>$data['latest']])

    @include('frontend.layout.trending',['type'=>'Trending Web Series','movies'=>$data['trending_web']])

@endsection
@push('custom-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></s
    cript>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script>

        var sickPrimary = {
            autoplay: true,
            autoplaySpeed: 2400,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1800,
            cssEase: 'cubic-bezier(.84, 0, .08, .99)',
            asNavFor: '.text-slider',
            centerMode: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next')
        }


        var sickSecondary = {
            autoplay: true,
            autoplaySpeed: 2400,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 1800,
            cssEase: 'cubic-bezier(.84, 0, .08, .99)',
            asNavFor: '.image-slider',
            prevArrow: $('.prev'),
            nextArrow: $('.next')
        }

        $('.image-slider').slick(sickPrimary);
        $('.text-slider').slick(sickSecondary);


    </script>
    <script>
        $(function () {
            $('.selectpicker').selectpicker();
        });
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: true,
            mouseDrag: false,
            autoplay: true,
            animateOut: 'slideOutUp',
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    </script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('.watchList').on("click", function (e) {
            e.preventDefault()
            var id = $(this).data('id');
            var type = $(this).data('type');
            $.ajax({

                type: "POST",

                url: "{{route('movie.watchList')}}",

                data: {
                    '_token': $('input[name="_token"]').val(),
                    'id': id,
                    'type': type,
                },

                pcache: false,

                success: function (data) {

                    if (data.status === 'success') {


                        location.reload();
                        toastr["success"]("Comment Successfully", "Success");


                    } else if (data.status === 'error') {
                        location.reload();

                        toastr["error"]("Something went wrong", "Error");

                    } else if (data.status === 'type_code') {

                        toastr["error"]("Duplicate code!", "Error");

                        $('.change_button').prop('disabled', false);

                        $('.change_button').find('.change_spin').addClass('d-none');
                    } else if (data.status === 'email_exists') {
                        toastr["error"]("Duplicate Email!", "Error");
                        // location.reload();
                        $('.change_button').prop('disabled', false);
                        $('.change_button').find('.change_spin').addClass('d-none');
                    }

                },
                error: function (data) {
                    console.log(data.status)
                    if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors.errors, function (key, value) {
                            console.log(key + " " + value);
                            $('#' + key).addClass('is-invalid');
                            $('#' + key).parent().append('<div id="' + key + '-error" class="error invalid-feedback ">' + value + '</div>');
                        });

                    }

                }

            });
        });
    });
</script>
@endpush
