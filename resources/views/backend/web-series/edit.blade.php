@extends('main')

@section('content')

    @php
        $title = $data['title'];
        $title2 = $data['title2'];
        $module = $data['module'];
        $resourcePath = $data['resourcePath'];
        $resourceRoute = $data['resourceRoute'];
        $url = $data['url'];
        $id = $data['edit']->id;

 $edit = $data['edit'];
$genres=$data['genres'];
    @endphp
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <br>

        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

            <div class="row">

                <div class="col-lg-8">

                    <div class="kt-portlet">

                        <div class="kt-portlet__head">

                            <div class="kt-portlet__head-label">

                                <h3 class="kt-portlet__head-title animate-charcter" style="font-size: 30px!important;">

                                    {{ $title }}

                                </h3>

                            </div>

                        </div>
                        @php

                            $index= route($resourceRoute.'.index');

                        @endphp

                        <form class="kt-form kt-form--label-right edit_form" method="put" action="{{$url}}">

                            @csrf
                            @method('PUT')

                            <div class="kt-portlet__body">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label>Title<span class="requied_field"
                                                          style="color : #e3001b;">*</span></label>
                                        <input type="text" name="title" value="{{$edit->title}}"
                                               placeholder="Enter Title" class="form-control"
                                               required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Movie Trailer Url - youtube or any hosted video<span
                                                class="requied_field"
                                                style="color : #e3001b;">*</span></label>
                                        <input type="url" name="video_trailer_url" value="{{$edit->video_trailer_url}}"
                                               placeholder="Enter Movie Trailer Url"
                                               class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Movie Url<span class="requied_field"
                                                              style="color : #e3001b;">*</span></label>
                                        <input type="url" name="video_url" value="{{$edit->video_url}}"
                                               placeholder="Enter Movie Url"
                                               class="form-control" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Thumbnail - icon image of the movie</label>
                                        <input type="file" name="thumbnail" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Poster - large banner image of the movie</label>
                                        <input type="file" name="image[]" class="form-control" multiple="">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Duration</label>
                                        <input type="time" name="duration" value="{{$edit->duration}}"
                                               placeholder="Enter Duration (Min)"
                                               class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Long Description<span class="requied_field"
                                                                     style="color : #e3001b;">*</span></label>
                                        <textarea type="text" class="form-control" name="description"
                                                  required>{{$edit->description}}</textarea>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Short Description<span class="requied_field"
                                                                      style="color : #e3001b;">*</span></label>
                                        <textarea type="text" class="form-control" name="short_description"
                                                  required>{{$edit->short_description}}</textarea>
                                    </div>
                                    <div class="form-group col-sm-6 ">
                                        <label>Genre<span class="requied_field"
                                                          style="color : #e3001b;">*</span></label>
                                        <select class="form-control selectpicker" name="genre_id[]" required=""
                                                multiple="">
                                            <option value="">Select</option>
                                            @foreach($genres  as $k=>$c)
                                                <option value="{{ $c->id }}"
                                                        @if(in_array($c->id,$edit->genre_id)) selected @endif>{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Cast</label>
                                        <input type="text" name="cast" value="{{$edit->cast}}" placeholder="Enter Cast"
                                               class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Production</label>
                                        <input type="text" name="production" value="{{$edit->production}}"
                                               placeholder="Enter Production"
                                               class="form-control">
                                    </div>

                                    <div class="form-group col-sm-6 ">
                                        <label>Country<span class="requied_field"
                                                            style="color : #e3001b;">*</span></label>
                                        <select class="form-control" name="country_id" required="">
                                            <option value="">Select</option>
                                            @foreach($data['countrys'] as $country)
                                                <option value="{{ $country->id }}"
                                                        @if( $country->id == $edit->country_id) selected @endif>{{ $country->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                        <label>Imdb_rates</label>
                                        <input type="number" name="imdb_rates" value="{{$edit->imdb_rates}}"
                                               placeholder="Enter IMDB Rates"
                                               class="form-control">
                                    </div>

                                    {{--        <div class="form-group col-sm-6 ">--}}
                                    {{--            <label>Type<span class="requied_field" style="color : #e3001b;">*</span></label>--}}
                                    {{--            <select class="form-control" name="type_id" required="">--}}
                                    {{--                <option value="">Select</option>--}}
                                    {{--                @if(!empty($types))--}}
                                    {{--                    @foreach($types as $type)--}}
                                    {{--                        <option value="{{ $type->id }}">{{ $type->name }}</option>--}}
                                    {{--                    @endforeach--}}
                                    {{--                @endif--}}
                                    {{--            </select>--}}
                                    {{--        </div>--}}

                                    <div class="form-group col-sm-6 ">
                                        <label>Year<span class="requied_field" style="color : #e3001b;">*</span></label>
                                        <select class="form-control" name="year_id" required="">
                                            <option value="">Select</option>
                                            @foreach($data['years'] as $year)
                                                <option value="{{ $year->id }}"
                                                        @if( $year->id == $edit->year) selected @endif>{{ $year->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <br>
                                        <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
                                            <input type="checkbox" name="latest" value="1"
                                                   @if($edit->latest) checked @endif> Trending
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="form-group col-sm-6">
                                    </div>
                                    @if($edit->video_trailer_url)
                                        <div class="form-group col-sm-12">
                                            <label>Video Trailer</label>
                                            <br>
                                            <video width="850" height="300" controls>
                                                <source src="{{$edit->video_trailer_url}}" type="video/webm">

                                            </video>
                                        </div>
                                    @endif
                                    @if($edit->video_url)
                                        <div class="form-group col-sm-12">
                                            <label>Movie</label>
                                            <br>
                                            <video width="850" height="300" controls>
                                                <source src="{{$edit->video_url}}" type="video/webm">

                                            </video>
                                        </div>
                                    @endif
                                    @if($edit->thumbnail)
                                        <div class="form-group col-sm-6">
                                            <label>Thumbnail</label>
                                            <br>
                                            <img src="{{url($edit->thumbnail)}}" height="400" width="400" style="border:3px solid black">
                                        </div>
                                    @endif
                                    @if($edit->poster)
                                        <div class="form-group col-sm-6">
                                            <label>Poster</label>
                                            <br>
                                            <img src="{{url($edit->poster)}}" height="400" width="400" style="border:3px solid black">
                                        </div>
                                    @endif
                                </div>
                            </div>


                            <div class="kt-portlet__foot">

                                <div class="kt-form__actions">

                                    <div class="row">

                                        <div class="col-lg-4"></div>

                                        <div class="col-lg-8">

                                            <button type="button" class="btn btn-brand update change_button">Update<i
                                                    class="la la-spinner change_spin d-none"></i></button>

                                            <a href="{{ $index }}">
                                                <button type="button" class="btn btn-secondary">Cancel</button>
                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">

                            <div class="kt-portlet__head-label">

                                <h3 class="kt-portlet__head-title animate-charcter" style="font-size: 30px!important;">

                                    {{ $title2 }}

                                </h3>

                            </div>

                        </div>
                        <div class="kt-portlet__body">
                            <div class="kt-portlet__head kt-portlet__head--lg" style="overflow: auto !important;">
                                <div class="kt-portlet__head-label">
					<span class="kt-portlet__head-icon">
						<i class="kt-menu__link-icon flaticon2-analytics-2"></i>
					</span>
                                    <h3 class="kt-portlet__head-title animate-charcter"
                                        style="font-size: 20px!important;">
                                        Seasons & Episodes
                                    </h3>
                                </div>
                                <div class="kt-portlet__head-toolbar">
                                    <div class="kt-portlet__head-wrapper">
                                        <div class="kt-portlet__head-actions">
                                            <form class="season-add" method="POST"
                                                  action="{{route('web-series.episode')}}">
                                                @csrf
                                                <input type="hidden" name="movie_id" value="{{$edit->id}}">
                                                <button type="submit" class="btn btn-primary create-seasons"
                                                        style="background: #602040;" data-id="{{$edit->id}}"><i
                                                        class="la la-plus"></i>
                                                    Add Season
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <table class="table table-striped table-bordered table-hover table-checkable datatable"
                                       id="datatable_rows">
                                    @csrf
                                    <thead>
                                    <tr>
                                        <th>Seasons</th>
                                        <th>Episodes</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($edit->seasons as $data)
                                        <tr>
                                            <td>{{$data->title}}</td>
                                            <td>{{$data->episodes->count()}}</td>
                                            <td>
                                                <a href="{{route('webseries.episodes',$data->id)}}" type="button"
                                                   class="btn btn-primary">Manage Episodes</a>
                                                <a href="{{route('webseries.episodes',$data->id)}}" type="button"
                                                   class="btn btn-danger">Delete Season</a>

                                            </td>

                                        </tr>
                                    @empty

                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <script>

        $(document).ready(function () {
            $(".update").on("click", function (e) {
                e.preventDefault();
                if ($(".season-add").valid()) {
                    $('.change_button').find('.change_spin').removeClass('d-none');
                    $('.change_button').prop('disabled', true);

                    $.ajax({

                        type: "POST",
                        headers: {
                            'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{route($resourceRoute.'.update', array($resourceRoute=>$id))}}",
                        data: new FormData($('.edit_form')[0]),
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            if (data.status === 'success') {
                                window.location = "{{ $index }}";
                                toastr["success"]("{{$module}} Updated Successfully", "Success");
                            } else if (data.status === 'error') {
                                location.reload();
                                toastr["error"]("Something went wrong", "Error");
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
                } else {
                    e.preventDefault();
                }
            });
        });

    </script>


    <style>
        .animate-charcter {
            background-image: linear-gradient(
                -225deg,
                #231557 0%,
                #44107a 29%,
                #ff1361 67%,
                #fff800 100%
            );
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 2s linear infinite;
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }
    </style>

@stop
