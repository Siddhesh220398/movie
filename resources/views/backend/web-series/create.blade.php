<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-6">
            <label>Title<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="title"  placeholder="Enter Title" class="form-control" required>
        </div>
        <div class="form-group col-sm-6">
            <label>Movie Trailer Url - youtube or any hosted video<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="url" name="video_trailer_url"  placeholder="Enter Movie Trailer Url" class="form-control" required>
        </div>
        <div class="form-group col-sm-6">
            <label>Movie Url<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="url" name="video_url"  placeholder="Enter Movie Url" class="form-control" required>
        </div>
        <div class="form-group col-sm-6">
            <label>Thumbnail - icon image of the movie</label>
            <input type="file" name="thumbnail" class="form-control" required>
        </div>
        <div class="form-group col-sm-6">
            <label>Poster - large banner image of the movie</label>
            <input type="file" name="image[]" class="form-control" multiple="" required>
        </div>
        <div class="form-group col-sm-6">
            <label>Duration</label>
            <input type="time" name="duration" placeholder="Enter Duration (Min)" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Long Description<span class="requied_field" style="color : #e3001b;">*</span></label>
            <textarea type="text" class="form-control"  name="description" required></textarea>
        </div>
        <div class="form-group col-sm-6">
            <label>Short Description<span class="requied_field" style="color : #e3001b;">*</span></label>
            <textarea type="text" class="form-control"  name="short_description" required></textarea>
        </div>
        <div class="form-group col-sm-6 ">
            <label>Genre<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control selectpicker" name="genre_id[]" required="" multiple="">
                <option value="">Select</option>
                    @foreach($genres  as $k=>$c)
                        <option value="{{ $c->id }}" >{{ $c->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group col-sm-6">
            <label>Cast</label>
            <input type="text" name="cast"  placeholder="Enter Cast" class="form-control">
        </div>
        <div class="form-group col-sm-6">
            <label>Production</label>
            <input type="text" name="production"  placeholder="Enter Production" class="form-control">
        </div>

        <div class="form-group col-sm-6 ">
            <label>Country<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="country_id" required="">
                <option value="">Select</option>
                    @foreach($countrys as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
            </select>
        </div>

        <div class="form-group col-sm-6">
            <label>Imdb_rates</label>
            <input type="text" name="imdb_rates" placeholder="Enter IMDB Rates" class="form-control">
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
                @if(!empty($years))
                    @foreach($years as $year)
                        <option value="{{ $year->id }}">{{ $year->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-sm-6">
            <br>
            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
                <input type="checkbox" name="latest" value="1"> Latest
                <span></span>
            </label>
        </div>
    </div>
</div>
