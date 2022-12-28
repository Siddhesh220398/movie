<div class="top-header">
    <div class="container">
        <div class="wrap-content-header">
            <div class="header-logo">
                <a href="" class="logo">
                    <img src="{{asset('frontend/assets/images/logo-header-05.png')}}" alt="IMG">
                </a>
                <a href="index-2.html" class="mobile-logo">
                    <img src="{{asset('frontend/assets/images/logo-header-05.png')}}" alt="IMG">
                </a>
                <a href="index-2.html" class="sticky-logo">
                    <img src="{{asset('frontend/assets/images/logo-header-05.png')}}" alt="IMG">
                </a>
            </div>
            <div class="right-logo">
                <div class="widget_thim_layout_builder">
                    <div class="wpb_wrapper">

                        <div class="bp-element bp-element-st-search-videos vblog-layout-header-1">
                            <div class="wrap-element">
                                <form class="search-form">
{{--                                    <label class="wrap-select2" data-style="vblog-search">--}}
{{--                                        <select>--}}
{{--                                            <option>Movies</option>--}}
{{--                                            <option>Videos</option>--}}
{{--                                            <option>Categories</option>--}}
{{--                                            <option>Popular</option>--}}
{{--                                        </select>--}}
{{--                                    </label>--}}
                                    <input type="search" class="search-field" name="search"
                                           placeholder="Seach for a Movie..."/>
                                    <button class="btn-search">
                                        <i class="ion ion-android-search"></i>
                                    </button>
                                </form>
                                <ul class="list-search-videos">
                                </ul>
                            </div>
                        </div>


                        <div class="bp-element bp-element-social-links vblog-layout-header-1">
                            <div class="wrap-element">
                                <a href="{{setWebsite('facebook_url')}}" class="social-item">
                                    <i class="ion ion-social-facebook"></i>
                                </a>
                                <a href="{{setWebsite('twitter_url')}}" class="social-item">
                                    <i class="ion ion-social-twitter"></i>
                                </a>

                                <a href="{{setWebsite('youtube_url')}}" class="social-item">
                                    <i class="ion ion-social-youtube"></i>
                                </a>
                                <a href="{{setWebsite('website_email')}}" class="social-item">
                                    <i class="ion ion-social-googleplus"></i>
                                </a>
                                <a href="{{setWebsite('instagram_url')}}" class="social-item">
                                    <i class="ion ion-social-instagram-outline"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
