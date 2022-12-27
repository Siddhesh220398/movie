@extends('frontend.layout.frontend-auth')
@section('title','Movies')
@push('custom-style')
    <style>

        .dropdown.bootstrap-select.show-tick.form-control {
            margin: 5px !important;
            background-color: red !important;
        }

        button.btn.dropdown-toggle.btn-light.bs-placeholder {
            background-color: red !important;
            color: white !important;
            border:none !important;
        }
    </style>
@endpush
@section('content')

<div class="thim-popular-video_home-1">
    <div class="container-fluid">
        <div class="bp-element bp-element-st-list-videos vblog-layout-slider-1">

            <div class="list-posts">

                  <div class="new d-flex justify-flex-start" style="margin-bottom: 2%;">
                    <select name="" class="form-control selectpicker" multiple="" title="All" >
                        <option value="movies">Movies</option>
                        <option value="tv-series">TV Series</option>
                    </select>
                    <select name="" class="form-control selectpicker" multiple="" title="Genre">
                        <option value="action">Action</option>
                        <option value="kids">Kids</option>
                    </select>
                    <select name="" class="form-control selectpicker" multiple="" title="Country">
                        <option value="india">India</option>
                        <option value="canada">Canada</option>
                        <option value="china">China</option>
                        <option value="japan">Japan</option>
                    </select>
                    <select name="" class="form-control selectpicker" multiple="" title="Quality">
                        <option value="hd">HD</option>
                        <option value="sd">SD</option>
                        <option value="ts">TS</option>
                    </select>
                    <select name="" class="form-control selectpicker" multiple="" title="Year">
                        <option value="">2022</option>
                        <option value="">2021</option>
                        <option value="">2020</option>
                        <option value="">2019</option>
                    </select>
                    <select name="" class="form-control selectpicker" multiple="" title="Sort">
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

@endsection
@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
@endpush
