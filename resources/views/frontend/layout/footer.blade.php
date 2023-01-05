<footer class="site-footer layout-1">
    <div class="footer-sidebars">
        <div class="container">
            <div class="thim-3-col">
                <aside class="widget widget_thim_layout_builder">
                    <div class="wpb_single_image">
                        <img src="{{asset(setWebsite('logo') ?? 'frontend/assets/images/logo-header-05.png') }}" alt="logo"/>
                    </div>
                    <div class="wpb_text_column">
                        <p>
                            Lommodo ligula eget dolor. Aenean massa.Cum sociis que penatibus et magnis dis
                            parturient montes lorem, nascetur ridiculusmus. Donec quam felis, ultricies nec
                            massa.Cum sociis ...
                        </p>
                    </div>
                    <form class="yikes-easy-mc-form layout-footer">
                        <label>
                            <input type="email" name="Email" placeholder="Email">
                        </label>
                        <button type="submit">SUBSCRIBE</button>
                    </form>
                    <div class="bp-element bp-element-social-links vblog-layout-footer">
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
                </aside>
                <aside class="widget widget_thim_layout_builder">

                    <div class="bp-element bp-element-posts vblog-layout-list-footer">
                        <div class="wrap-element">
                            <div class="heading-post">
                                <h3 class="title">
                                    Latest Posts
                                </h3>
                            </div>
                            <div class="list-posts">
                                <div class="item">
                                    <div class="pic">
                                        <a href="single-blog.html">
                                            <img src="{{asset('frontend/assets/images/png-post-01.png')}}" alt="IMG">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">
                                            <a href="single-blog.html">
                                                5 Skin Care Rituals You Should Be Doing Before Bed
                                            </a>
                                        </h4>
                                        <div class="date">
                                            August 11, 2018
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pic">
                                        <a href="single-blog.html">
                                            <img src="{{asset('frontend/assets/images/png-post-02.png')}}" alt="IMG">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">
                                            <a href="single-blog.html">
                                                Fashion Outfit Ideas to Try From Instagram This Week
                                            </a>
                                        </h4>
                                        <div class="date">
                                            August 11, 2018
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="pic">
                                        <a href="single-blog.html">
                                            <img src="{{asset('frontend/assets/images/png-post-03.png')}}" alt="IMG">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <h4 class="title">
                                            <a href="single-blog.html">
                                                7 Soaps to Supercharge Your Daily Skincare Routine
                                            </a>
                                        </h4>
                                        <div class="date">
                                            August 11, 2018
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
                <aside class="widget widget_thim_layout_builder">

                    <div class="bp-element bp-element-categories layout-list-1">
                        <div class="wrap-element">
                            <h3 class="title">
                                POPULAR CATEGORY
                            </h3>
                            <ul class="list-categories">
                                <li class="cat-item">
                                    <a href="javascript:;">Fragrances</a>
                                    <span class="count">15</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Hair Care</a>
                                    <span class="count">12</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Make Up</a>
                                    <span class="count">6</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Outfits</a>
                                    <span class="count">9</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Skin Care</a>
                                    <span class="count">10</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Style</a>
                                    <span class="count">8</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Fashion</a>
                                    <span class="count">5</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Lifestyle</a>
                                    <span class="count">2</span>
                                </li>
                                <li class="cat-item">
                                    <a href="javascript:;">Wellness</a>
                                    <span class="count">3</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="thim-1-col">
                <div class="copyright-text">
                    Copyright {{\Carbon\Carbon::now()->format('Y')}}@ <a
                        href="">{{ setWebsite('website_name') ?? env('APP_NAME') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
