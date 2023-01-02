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
    </style>
@endpush
@section('content')
    <div class="content-area">
        <div class="page-title">
            <div class="main-top" style="background-image: {{asset('frontend/assets/images/bg-page-title-04.jpg')}};">
                <div class="overlay-top-header"></div>
                <div class="content container">
                    <h1>
                        {{$movie->title}} ({{$movie->year}})
                    </h1>
                    <div class="description">
                        {{$movie->short_description}}
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content layout-1">
            <div class="container-fluid">
                <div class="row">
                    <main class="site-main col-12">
                        <div class="wrap-main-content">
                            <div class="bl-video-detail">
                                <div class="player-video">
                                    <div class="bg-video">
                                        <iframe id="Player-1youtube" frameborder="0" allowfullscreen="1"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                title="YouTube video player" width="100%" height="660px"
                                                src="{{$movie->video_trailer_url}}"></iframe>
                                    </div>
                                </div>
                                <div class="detail-video">
                                    <div class="info-detail sticky-sidebar">
                                        <div class="inner-info">
                                            <div class="media-video">
                                                <div class="pic-video">
                                                    <img src="{{asset($movie->posters->first()->value('image'))}}"
                                                         alt="IMG">
                                                </div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">{{$movie->imdb_rates}}</span>IMDb
                                                    </div>
                                                    <div class="label">
                                                        HD
                                                    </div>
                                                </div>
                                                <div class="more-info">
                                    <span class="item-info">
                                    Rating:
                                    <i class="ion ion-android-star"></i>
                                   {{$movie->imdb_rates}}
                                    </span>
                                                    <span class="item-info">
                                    <i class="ion ion-thumbsup"></i>
                                        {{$movie->movieRates->count()}} Likes
                                    </span>
                                                    <span class="item-info">
                                    <i class="ion ion-thumbsdown"></i>
                                        {{$movie->movieRateDisLikes->count()}} Likes
                                    </span>
                                                </div>
                                            </div>
                                            <div class="info-video">
                                                <div class="item-info">
                                    <span class="name-item">
                                    Cast:
                                    </span>
                                                    <span class="value-item">
                                    {{$movie->cast}}
                                    </span>
                                                </div>
                                                <div class="item-info">
                                    <span class="name-item">
                                    Production:
                                    </span>
                                                    <span class="value-item">
                                    {{$movie->production}}
                                    </span>
                                                </div>

                                                <div class="item-info">
                                    <span class="name-item">
                                    Genres:
                                    </span>
                                                    <span class="value-item">
                                    @foreach($movie->movieGenre as $movieGenre)
                                                            {{$movieGenre->genre->name}},
                                                        @endforeach
                                    </span>
                                                </div>
                                                <div class="item-info">
                                    <span class="name-item">
                                    Country:
                                    </span>
                                                    <span class="value-item">
                                    USA
                                    </span>
                                                </div>
                                                <div class="item-info">
                                    <span class="name-item">
                                    Duration:
                                    </span>
                                                    <span class="value-item">
                                    {{$movie->duration}}
                                    </span>
                                                </div>
                                                <div class="item-info">
                                    <span class="name-item">
                                    Language:
                                    </span>
                                                    <span class="value-item">
                                    English
                                    </span>
                                                </div>
                                                <div class="item-info">
                                    <span class="name-item">
                                    Type:
                                    </span>
                                                    <span class="value-item">
                                    {{$movie->type}}
                                    </span>
                                                </div>

                                            </div>
                                            <a href="javascript:;" class="btn-watch btn-normal shape-round">
                                                watch video
                                            </a>
                                            <div class="d-flex">
                                                <button class="btn-watch btn-normal shape-round likeBtn" data-id="{{$movie->id}}"  data-type="like" style="width:45px!important;">
                                                    <i class="fa fa-thumbs-up" ></i>
                                                </button>
                                                <button class="btn-watch btn-normal shape-round likeBtn" data-id="{{$movie->id}}" data-type="dislike" style="width:45px!important;">
                                                    <i class="fa fa-thumbs-down"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-detail">
                                        <div class="field-detail">
                                            <h3 class="title-field">
                                                Movie Story
                                            </h3>
                                            <div class="content-field">
                                                <p>
                                                    {{$movie->description}}
                                                </p>

                                            </div>
                                        </div>
                                        <div class="field-detail">
                                            <h3 class="title-field">
                                                Video & Photo
                                            </h3>
                                            <div class="content-field">
                                                <div class="slide-images js-call-slick-col" data-numofshow="1"
                                                     data-numofscroll="1" data-loopslide="1" data-autoscroll="0"
                                                     data-speedauto="6000"
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
                                                        @foreach($movie->posters as $poster)
                                                            <div class="item-slick">
                                                                <div class="item-img">
                                                                    <img
                                                                        src="{{asset($poster->image)}}"
                                                                        alt="IMG">
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        @include('frontend.movie.comment')
                                        <div class="form-comment">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">
                                                    LEAVE A COMMENT
                                                    <small>
                                                        <a href="javascript:;" style="display:none;">Cancel Reply</a>
                                                    </small>
                                                </h3>

                                                <form class="comment-form communicateForm_0">
                                                    @method('POST')
                                                    @csrf
                                                    <div class="comment-message">
                                                        <p class="comment-form-comment">
                                                            <textarea placeholder="Enter your comment *" id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea>
                                                        </p>
                                                        <input type="hidden" name="movie_id" value="{{$movie->id}}" class="form-control">

                                                    </div>
                                                    <p class="form-submit">
                                                        <button type="submit" id="submit" class="submit main-communicate-btn" data-id="0">
                                                            submit comment
                                                        </button>

                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="related-blog">
                                            <h3 class="related-title">
                                                You May Also Like
                                            </h3>
                                            <div class="wrap-element">
                                                <div class="list-posts">
                                                    <div class="slide-posts js-call-slick-col" data-numofshow="3"
                                                         data-numofscroll="1" data-loopslide="1" data-autoscroll="0"
                                                         data-speedauto="6000"
                                                         data-responsive="[3, 1], [3, 1], [2, 1], [2, 1], [1, 1]">
                                                        <div class="wrap-arrow-slick">
                                                            <div class="arow-slick prev-slick">
                                                                <i class="ion ion-chevron-left"></i>
                                                            </div>
                                                            <div class="arow-slick next-slick">
                                                                <i class="ion ion-chevron-right"></i>
                                                            </div>
                                                        </div>
                                                        <div class="slide-slick">
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-01.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #e40914;">
                                                                                Hot
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-02.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #ff6c00;">
                                                                                Trend
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-03.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #e40914;">
                                                                                NEW
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-04.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #e40914;">
                                                                                HDRip
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-01.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #e40914;">
                                                                                Hot
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-02.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #ff6c00;">
                                                                                Trend
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-03.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #e40914;">
                                                                                NEW
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="item-slick">
                                                                <div class="post-item">
                                                                    <div class="pic">
                                                                        <img
                                                                            src="{{asset('frontend/assets/images/post-04.jpg')}}"
                                                                            alt="IMG">
                                                                        <div class="overlay"></div>
                                                                        <div class="meta-info">
                                                                            <div class="imdb">
                                                                                <span class="value">5</span>IMDb
                                                                            </div>
                                                                            <div class="label"
                                                                                 style="background: #e40914;">
                                                                                HDRip
                                                                            </div>
                                                                        </div>
                                                                        <a href="https://www.youtube.com/watch?v=NEqtQYxzQaE"
                                                                           class="btn-play popup-youtube"></a>
                                                                    </div>
                                                                    <h4 class="title">
                                                                        <a href="single-video.html">
                                                                            How To Make a Pimple Disappear With Makeup
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
                        'type':type
                    },

                    pcache: false,

                    success: function (data) {

                        if (data.status === 'success') {


                            location.reload();
                            toastr["success"]("Comment Successfully", "Success");


                        }  else if (data.status === 'unauthenticate') {
                            window.location ="{{route('user.login')}}"

                            toastr["error"]("Something went wrong", "Error");

                        }else if (data.status === 'error') {
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

                        }
                        else if (data.status === 'unauthenticate') {
                           window.location ="{{route('user.login')}}"

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
