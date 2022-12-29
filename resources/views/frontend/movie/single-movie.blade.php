@extends('frontend.layout.frontend-auth')
@section('title','Tv-Series')
@push('custom-style')

@endpush
@section('content')

    <div class="content-area">
        <div class="page-title">
            <div class="main-top" style="background-image: {{asset('frontend/assets/images/bg-page-title-04.jpg')}};">
                <div class="overlay-top-header"></div>
                <div class="content container">
                    <h1>
                        Modern warfare (2018)
                    </h1>
                    <div class="description">
                        To start the day in the best way, enjoythe extraordinary buffetbreakfast in the our courtyard
                        caressed
                    </div>
                </div>
            </div>
        </div>
        <div class="site-content layout-1">
            <div class="container">
                <div class="row">
                    <main class="site-main col-12">
                        <div class="wrap-main-content">

                            <div class="bl-video-detail">
                                <div class="player-video">
                                    <div class="bg-video">
                                        <iframe id="Player-1youtube" frameborder="0" allowfullscreen="1"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                title="YouTube video player" width="100%" height="660px"
                                                src="https://www.youtube.com/embed/hNQFjqDvPhA"></iframe>
                                    </div>

                                </div>
                                <div class="detail-video">
                                    <div class="info-detail sticky-sidebar">
                                        <div class="inner-info">
                                            <div class="media-video">
                                                <div class="pic-video">
                                                    <img src="{{asset('frontend/assets/images/product-05.jpg')}}"
                                                         alt="IMG">
                                                </div>
                                                <div class="meta-info">
                                                    <div class="imdb">
                                                        <span class="value">5</span>IMDb
                                                    </div>
                                                    <div class="label">
                                                        HD
                                                    </div>
                                                </div>
                                                <div class="more-info">
<span class="item-info">
Rating:
<i class="ion ion-android-star"></i>
8/10
</span>
                                                    <span class="item-info">
<i class="ion ion-eye"></i>
240 Views
</span>
                                                </div>
                                            </div>
                                            <div class="info-video">
                                                <div class="item-info">
<span class="name-item">
Actors:
</span>
                                                    <span class="value-item">
Julia Toufis
</span>
                                                </div>
                                                <div class="item-info">
<span class="name-item">
Writer:
</span>
                                                    <span class="value-item">
Noah
</span>
                                                </div>
                                                <div class="item-info">
<span class="name-item">
Release Date:
</span>
                                                    <span class="value-item">
May 12, 2018
</span>
                                                </div>
                                                <div class="item-info">
<span class="name-item">
Genres:
</span>
                                                    <span class="value-item">
Action
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
Runtime:
</span>
                                                    <span class="value-item">
60 min
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
Short
</span>
                                                </div>
                                            </div>
                                            <a href="javascript:;" class="btn-watch btn-normal shape-round">
                                                watch video
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content-detail">
                                        <div class="field-detail">
                                            <h3 class="title-field">
                                                Movie Story
                                            </h3>
                                            <div class="content-field">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                    aliquip ex ea commodo consequat.Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                                    culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                                    inventore veritatis et quasi architecto beatae vitae
                                                </p>
                                                <p>
                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                    fugit, sed quia magni dolores eos qui ratione voluptatem sequi
                                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                    amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                                    tempora incidunt ut labore et dolore magnam aliquam quaerat
                                                    voluptatem.
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
                                                        <div class="item-slick">
                                                            <div class="item-img">
                                                                <img
                                                                    src="{{asset('frontend/assets/images/video-detail-02.jpg')}}"
                                                                    alt="IMG">
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="item-img">
                                                                <img
                                                                    src="{{asset('frontend/assets/images/video-detail-02.jpg')}}"
                                                                    alt="IMG">
                                                            </div>
                                                        </div>
                                                        <div class="item-slick">
                                                            <div class="item-img">
                                                                <img
                                                                    src="{{asset('frontend/assets/images/video-detail-02.jpg')}}"
                                                                    alt="IMG">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>
                                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                    fugit, sed quia magni dolores eos qui ratione voluptatem sequi
                                                    nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit
                                                    amet, consectetur, adipisci velit, sed quia non numquam eius modi
                                                    tempora incidunt ut labore et dolore magnam aliquam quaerat
                                                    voluptatem.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="entry-tag-share">
                                            <div class="tags-links">
                                                <span class="name-field">Tags:</span>
                                                <a href="javascript:;" class="tag-item">film maker,</a>
                                                <a href="javascript:;" class="tag-item">film studio</a>
                                            </div>
                                            <div class="share-video">
                                                <span class="name-field">SHARE:</span>
                                                <a href="javascript:;" class="share-item">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a href="javascript:;" class="share-item">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="javascript:;" class="share-item">
                                                    <i class="fa fa-pinterest-p"></i>
                                                </a>
                                                <a href="javascript:;" class="share-item">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="author-blog">
                                            <div class="pic-author">
                                                <div class="ava-author">
                                                    <a href="javascript:;"><img
                                                            src="{{asset('frontend/assets/images/ava-02.jpg')}}" alt="
                                                            IMG"></a>
                                                </div>
                                                <div class="socials-author">
                                                    <a href="javascript:;" class="item-social">
                                                        <i class="ion ion-social-facebook"></i>
                                                    </a>
                                                    <a href="javascript:;" class="item-social">
                                                        <i class="ion ion-social-twitter"></i>
                                                    </a>
                                                    <a href="javascript:;" class="item-social">
                                                        <i class="ion ion-social-googleplus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="text-author">
                                                <div class="name-author">
                                                    <a href="javascript:;">
                                                        Michael Mikado
                                                    </a>
                                                </div>
                                                <div class="info-aothor">
                                                    Front-end dev
                                                </div>
                                                <div class="content-author">
                                                    If you are a newbie to managing a WordPress website, then tions! You
                                                    are here at the right track with us be we are going to introduce you
                                                    one of the most basic knowledge when owning a WordPress page: how to
                                                    find your site
                                                </div>
                                            </div>
                                        </div>

                                        <div class="navigate-blog">
                                            <div class="navi-item prev-blog">
                                                <a href="javascript:;" class="navi-arrow">
                                                    <i class="ion ion-ios-arrow-thin-left"></i>
                                                </a>
                                                <div class="navi-text">
                                                    <div class="name-navi">
                                                        PREVIOUS
                                                    </div>
                                                    <div class="title-navi">
                                                        <a href="javascript:;">
                                                            Exploring the New York
                                                        </a>
                                                    </div>
                                                    <div class="info-navi">
                                                        October 15, 2018
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navi-item next-blog">
                                                <div class="navi-text">
                                                    <div class="name-navi">
                                                        Next
                                                    </div>
                                                    <div class="title-navi">
                                                        <a href="javascript:;">
                                                            Exploring the New York
                                                        </a>
                                                    </div>
                                                    <div class="info-navi">
                                                        October 15, 2018
                                                    </div>
                                                </div>
                                                <a href="javascript:;" class="navi-arrow">
                                                    <i class="ion ion-ios-arrow-thin-right"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="comments-area">
                                            <div class="list-comments">
                                                <h3 class="comments-title">
                                                    2 comments
                                                </h3>
                                                <ul class="comment-list">
                                                    <li class="comment">
                                                        <img class="avatar"
                                                             src="{{asset('frontend/assets/images/ava-01.jpg')}}"
                                                             alt="IMG">
                                                        <div class="content-comment">
                                                            <div class="author">
<span class="author-name">
Edugate
</span>
                                                                <span class="comment-extra-info">
November 11, 2016 at 9:10 AM
</span>
                                                                <span class="link-reply-edit">
<a href="javascript:;" class="comment-reply-link">
Reply
</a>
</span>
                                                            </div>
                                                            <div class="message">
                                                                <p>
                                                                    So far, the conversion increase is more due to plain
                                                                    blunt force, but the quality of boss conversions and
                                                                    subsequent leads can be increased
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <ul class="children">
                                                            <li class="comment">
                                                                <img class="avatar"
                                                                     src="{{asset('frontend/assets/images/ava-01.jpg')}}"
                                                                     alt="IMG">
                                                                <div class="content-comment">
                                                                    <div class="author">
<span class="author-name">
Edugate
</span>
                                                                        <span class="comment-extra-info">
November 11, 2016 at 9:10 AM
</span>
                                                                        <span class="link-reply-edit">
<a href="javascript:;" class="comment-reply-link">
Reply
</a>
</span>
                                                                    </div>
                                                                    <div class="message">
                                                                        <p>
                                                                            So far, the conversion increase is more due
                                                                            to plain blunt force, but the quality of
                                                                            boss conversions and subsequent leads can be
                                                                            increased
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="form-comment">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">
                                                    LEAVE A COMMENT
                                                    <small>
                                                        <a href="javascript:;" style="display:none;">Cancel Reply</a>
                                                    </small>
                                                </h3>
                                                <form class="comment-form" novalidate="">
                                                    <p class="comment-notes">
                                                        <span
                                                            id="email-notes">Your email address will not be published.</span>
                                                        Required fields are marked <span class="required">*</span>
                                                    </p>
                                                    <div class="comment-meta">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="comment-form-author">
                                                                    <input placeholder="Your Name *" id="author"
                                                                           name="author" type="text" value="" size="30"
                                                                           aria-required="true">
                                                                </p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p class="comment-form-email">
                                                                    <input placeholder="Email *" id="email" name="email"
                                                                           type="text" value="" size="30"
                                                                           aria-required="true">
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-message">
                                                        <p class="comment-form-comment">
                                                            <textarea placeholder="Enter your comment *" id="comment"
                                                                      name="comment" cols="45" rows="8"
                                                                      aria-required="true"></textarea>
                                                        </p>
                                                    </div>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit"
                                                               value="submit comment">
                                                        <input type="hidden" name="comment_post_ID" value="362"
                                                               id="comment_post_ID">
                                                        <input type="hidden" name="comment_parent" id="comment_parent"
                                                               value="0">
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
