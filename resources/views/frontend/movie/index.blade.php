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
        .btn-fliter:hover {
            background: #b30710;
            color: #ffffff;

        }
        .btn-fliter {
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
    </style>
@endpush
@section('content')

<div class="thim-popular-video_home-1">
    <div class="container-fluid">
        <div class="bp-element bp-element-st-list-videos vblog-layout-slider-1">

            <div class="list-posts">
                @php
                    $genres = \App\Model\Genre::get();
                    $countrys = \App\Model\Country::get();
                    $years = \App\Model\Year::get();
                @endphp
                <form method="get" action="" >
                    <div class="new d-flex justify-flex-start" style="margin-bottom: 2%;">
                        <select name="type[]" class="form-control selectpicker" multiple="" title="All" >
                            <option value="movies" @if(in_array("movies", $type)) selected @endif>Movies</option>
                            <option value="tv-series" @if(in_array("tv-series", $type)) selected @endif>TV Series</option>
                        </select>

                        <select name="genre_id[]" class="form-control selectpicker" multiple="" title="Genre">
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}"  @if(in_array($genre->id, $genre_id)) selected @endif>{{$genre->name}}</option>
                            @endforeach
                        </select>
                        <select name="country_id[]" class="form-control selectpicker" multiple="" title="Country">
                            @foreach($countrys as $country)
                                <option value="{{$country->id}}" @if(in_array($country->id, $country_id)) selected @endif>{{$country->name}}</option>
                            @endforeach
                        </select>


                        <select name="year_id[]" class="form-control selectpicker" multiple="" title="Year">
                            @foreach($years as $year)
                                <option value="{{$year->id}}" @if(in_array($year->id, $year_id)) selected @endif>{{$year->name}}</option>
                            @endforeach
                        </select>
                        <select name="featured" class="form-control selectpicker" multiple="" title="Sort">
                            <option value="" @if($featured == "default") selected @endif>Default</option>
                            <option value="featured" @if($featured == "featured") selected @endif>Featured Update</option>
                            <option value="topimdb"  @if($featured == "topimdb") selected @endif>iMDb</option>
                        </select>
                        <button type="submit" class="btn btn-fliter"><i class="fa fa-filter"></i>  Filter</button>
                    </div>
                </form>
                <div class="row isotope-grid">
                    @forelse($movies as $movie)
                    <div class="col-sm-2 col-md-3 col-lg-2 isotope-item Cinema Animation">
                        <div class="post-item">
                            <div class="pic">
                                <img src="{{ asset($movie->posters->first()->value('image')) }}" alt="IMG">
                                <div class="overlay"></div>
                                <div class="meta-info">
                                    <div class="imdb">
                                        <span class="value">5</span>IMDb
                                    </div>
                                    <div class="label" style="background: #e40914;">
                                        @if(Auth::user())
                                            @if(count($movie->watchListByUser->where('user_id',Auth::user()->id)) == 0 )
                                                <button class="watchList" title="watchlist"
                                                        data-id="{{$movie->id}}" data-type="add"><i
                                                        class="fa fa-plus text-white"></i></button>
                                            @else
                                                <button class="watchList" title="watchlist"
                                                        data-id="{{$movie->id}}" data-type="remove"><i
                                                        class="fa fa-minus text-white"></i></button>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                                <a href="{{route('singleMovie',['type'=>$movie->type,'name'=>$movie->title])}}"
                                   class="btn-play">
                                </a>
                            </div>
                            <h4 class="title">
                                <a href="{{route('singleMovie',['type'=>$movie->type,'name'=>$movie->title])}}">
                                    {{$movie->title}}
                                </a>
                            </h4>
                            <div class="info">
                                @foreach($movie->movieGenre as $movieGenre)
                                    {{$movieGenre->genre->name}},
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
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
