@php $edit = $data['edit'];
$genres=$data['genres'];
@endphp
<style>
    .table thead  tr  th{
        color: #602040 !important;
        background:#f3d8e5;

    }
</style>
<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-6">
            <label>Title<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="title" value="{{$edit->title}}" placeholder="Enter Title" class="form-control"
                   required>
        </div>
        <div class="form-group col-sm-6">
            <label>Thumbnail - icon image of the movie</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Movie Trailer Url - youtube or any hosted video
                <span class="requied_field" style="color : #e3001b;">*</span>
            </label>
            <input type="text" name="video_trailer_url" value="{{$edit->video_trailer_url}}" placeholder="Enter Movie Trailer Url"
                   class="form-control" required>
        </div>
        <div class="form-group col-sm-6">
            <label>Movie Url<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="video_url" value="{{$edit->video_url}}" placeholder="Enter Movie Url"
                   class="form-control" required>
        </div>
        <div class="form-group col-sm-6">
            <label>Poster - large banner image of the movie</label>
            <input type="file" name="image[]" class="form-control" multiple="">
        </div>
        <div class="form-group col-sm-6">
            <label>Duration</label>
            <input type="time" name="duration" value="{{$edit->duration}}" placeholder="Enter Duration (Min)"
                   class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Long Description<span class="requied_field" style="color : #e3001b;">*</span></label>
            <textarea type="text" class="form-control" name="description" required>{{$edit->description}}</textarea>
        </div>
        <div class="form-group col-sm-6">
            <label>Short Description<span class="requied_field" style="color : #e3001b;">*</span></label>
            <textarea type="text" class="form-control" name="short_description"
                      required>{{$edit->short_description}}</textarea>
        </div>
        <div class="form-group col-sm-6 ">
            <label>Genre<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control selectpicker" name="genre_id[]" required="" multiple="">
                <option value="">Select</option>
                @foreach($genres  as $k=>$c)
                    <option value="{{ $c->id }}"
                            @if(in_array($c->id,$edit->genre_id)) selected @endif>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-6">
            <label>Cast</label>
            <input type="text" name="cast" value="{{$edit->cast}}" placeholder="Enter Cast" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Production</label>
            <input type="text" name="production" value="{{$edit->production}}" placeholder="Enter Production"
                   class="form-control">
        </div>

        <div class="form-group col-sm-6 ">
            <label>Country<span class="requied_field" style="color : #e3001b;">*</span></label>
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
            <input type="number" name="imdb_rates" value="{{$edit->imdb_rates}}" placeholder="Enter IMDB Rates"
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
                <input type="checkbox" name="latest" value="1" @if($edit->latest) checked @endif> Trending
                <span></span>
            </label>
        </div>
        <div class="form-group col-sm-6">
        </div>
        @if($edit->video_trailer_url)
            <div class="form-group col-sm-12">
                <label>Movie Trailer</label>
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
        @if($edit->posters)
            @foreach($edit->posters as $posters)
            <div class="form-group col-sm-2">
                <img src="{{url($posters->image)}}" height="400" width="400" style="border:3px solid black">
            </div>
            @endforeach
        @endif

    </div>

</div>
