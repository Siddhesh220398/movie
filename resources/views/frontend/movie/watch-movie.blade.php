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
                       {{$movie->title}}
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
                                {{$movie->title}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content sidebar-right layout-1" style="transform: none;">
            <div class="container-fluid" style="transform: none;">
                <div class="row" style="transform: none;">


                    <main class="site-main col-lg-12">
                        <div class="wrap-main-content">
                            <div class="products-list">
                                <div class="wrap-element">
                                    <div class="heading-products">
                                        <div class="results" style="font-size: 25px; font-weight: 500;">
                                        <label>   {{$movie->title}} </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="pic col-12 changeEpisode">
                                            @include('frontend.movie.episode',['url'=>$movie->video_url])
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

                    cache: false,

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
