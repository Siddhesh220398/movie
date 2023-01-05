@extends('frontend.layout.frontend-auth')
@section('title','Tv-Series')
@push('custom-style')
    <style>
        .item-img img {
            height: 800px !important;
        }

        .bl-video-detail .detail-video .content-detail .comments-area .list-comments .comment-list .comment {

            padding-top: 10px !important;
        }

        .bl-video-detail .detail-video .content-detail .comments-area .list-comments .comment-list .comment .content-comment {

            margin-bottom: 5px !important;
        }

        .bl-video-detail .detail-video .content-detail .comments-area .list-comments .comment-list .comment .avatar {
            width: 60px !important;

        }

        .site-content {
            /*padding-top: 0px !important;*/
        }

    </style>
@endpush
@section('content')
    <div class="content-area" style="transform: none;">

        <div class="page-title">
            <div class="main-top" style="background-image: url(/frontend/assets/images/bg-page-title-01.jpg);">
                <div class="overlay-top-header"></div>
                <div class="content container">
                    <h1>
                       {{$season->movie->title}}
                    </h1>
                    <div class="wrap-breadcrumb">
                        <ul class="breadcrumbs">
                            <li>
                                <a href="javascript:;">
                                    Home
                                </a>
                            </li>
                            <li>
                                <span class="breadcrum-icon">/</span>
                                {{$season->movie->title}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content sidebar-right layout-1" style="transform: none;">
            <div class="container-fluid" style="transform: none;">
                <div class="row" style="transform: none;">

                    <div class="widget-area col-sm-9 col-md-8 col-lg-3 sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static; top: 63px; left: 1266.5px;">
                            <aside class="widget widget_product_categories">
                                <h3 class="widget-title">
                                   Episodes
                                </h3>
                                <ul class="product-categories">
                                    @foreach($season->episodes as $episode)
                                    <li class="cat-item" id="active-{{$episode->id}}" @if($season->episodes->first()->id ==$episode->id) style="    color: rgb(228, 9, 20);" @endif>
                                        <a href="javascript:;" class="episode-change" data-id="{{$episode->id}}">
                                           {{$episode->title}}
                                        </a>

                                    </li>
                                    @endforeach

                                </ul>
                            </aside>

                            <aside class="widget widget_tag_cloud">
                                <h3 class="widget-title">
                                    Movie Genre
                                </h3>
                                <div class="tagcloud">
                                    @foreach($season->movie->movieGenre as $movieGenre)
                                        <a  href="{{route('title',['genre_id[]'=>$movieGenre->genre->id])}}" class="tag-cloud-link"> {{$movieGenre->genre->name}} </a>
                                    @endforeach
                                </div>
                            </aside>

                        </div>
                    </div>
                    <main class="site-main col-lg-9">
                        <div class="wrap-main-content">
                            <div class="products-list">
                                <div class="wrap-element">
                                    <div class="heading-products">
                                        <div class="results" style="font-size: 25px; font-weight: 500;">
                                        <label>   {{$season->movie->title}} / {{$season->title}} / </label>
                                            <label class="episodeName">{{$season->episodes->first()->title}}</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pic col-12 changeEpisode">
                                            @include('frontend.movie.episode',['url'=>$season->episodes->first()->url])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.episode-change').on("click", function (e) {
                var id = $(this).data('id');
                $.ajax({

                    type: "POST",

                    url: "{{route('season.episode')}}",

                    data: {
                        '_token':"{{csrf_token()}}",
                        'id': id,
                    },

                    cache: false,

                    success: function (data) {

                        if (data.status === 'success') {
                        $('.cat-item').css('color','#000000')
                        $('#active-'+id).css('color','#e40914')
                        $('.episodeName').html(data.episode.title)
                        $('.changeEpisode').html("")
                        $('.changeEpisode').html(data.renderData)


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

            $('.likeBtn').on("click", function (e) {
                e.preventDefault()
                var id = $(this).data('id');
                var type = $(this).data('type');
                $.ajax({

                    type: "POST",

                    url: "{{route('movie.like')}}",

                    data: {
                        '_token': $('input[name="_token"]').val(),
                        'id': id,
                        'type': type
                    },

                    pcache: false,

                    success: function (data) {

                        if (data.status === 'success') {


                            location.reload();
                            toastr["success"]("Comment Successfully", "Success");


                        } else if (data.status === 'unauthenticate') {
                            window.location = "{{route('user.login')}}"

                            toastr["error"]("Something went wrong", "Error");

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

            $('.main-communicate-btn').on("click", function (e) {

                e.preventDefault()
                var id = $(this).data('id');
                var message = $('#comment_' + id).val();
                $.ajax({

                    type: "POST",

                    url: "{{route('movie.comment')}}",

                    data: new FormData($('.communicateForm_' + id)[0]),

                    processData: false,

                    contentType: false,

                    success: function (data) {

                        if (data.status === 'success') {


                            location.reload();
                            toastr["success"]("Comment Successfully", "Success");


                        } else if (data.status === 'error') {
                            location.reload();

                            toastr["error"]("Something went wrong", "Error");

                        } else if (data.status === 'unauthenticate') {
                            window.location = "{{route('user.login')}}"

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
            })
        })

        function ShowHideDiv(id, type) {
            if (type == "show") {
                $('.show-comment_' + id).css('display', 'block')
                $('.show_btn_' + id).css('display', 'none')
                $('.hide_btn_' + id).css('display', 'block')
            } else {
                $('.show-comment_' + id).css('display', 'none')
                $('.show_btn_' + id).css('display', 'block')
                $('.hide_btn_' + id).css('display', 'none')

            }
        }
    </script>
@endpush
