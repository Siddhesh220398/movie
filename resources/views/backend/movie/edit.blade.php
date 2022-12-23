@php $edit = $data['edit'];
@endphp
<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-2">
            <label>Title<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="title" value="{{$edit->title}}" placeholder="Enter Title" class="form-control" required>
        </div>

        <div class="form-group col-sm-2 col-lg-2">
            <label>Genre<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="genre_id" required="">
                <option value="">Select</option>
                    @foreach($data['genres'] as $genre)
                        <option value="{{ $genre->id }}" @if($genre->id == $edit->genre_id) Selected @endif>{{ $genre->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group col-sm-3">
            <label>Cast</label>
            <input type="text" name="cast" value="{{$edit->cast}}" placeholder="Enter Cast" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Production</label>
            <input type="text" name="production" value="{{$edit->production}}" placeholder="Enter Production" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Description<span class="requied_field" style="color : #e3001b;">*</span></label>
            <textarea type="text" class="form-control" placeholder="Enter Email" name="description" required>{{$edit->description}}</textarea>
        </div>
        <div class="form-group col-sm-2 col-lg-2">
            <label>Country<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="country_id" required="">
                <option value="">Select</option>
                    @foreach($data['countrys'] as $country)
                        <option value="{{ $country->id }}" @if($country->id == $edit->country_id) Selected @endif>{{ $country->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group col-sm-2">
            <label>Duration</label>
            <input type="number" name="duration"  value="{{$edit->duration}}" placeholder="Enter Duration (Min)" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Imdb_rates</label>
            <input type="text" name="imdb_rates"  value="{{$edit->imdb_rates}}" placeholder="Enter IMDB Rates" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Video</label>
            <input type="file" name="video" class="form-control">
        </div>
        @if($edit->video)
            <div class="form-group col-sm-2 col-lg2">
                <img src="{{url($edit->video)}}" height="50" width="50" style="border:3px solid #e3001b">
            </div>
        @endif
        <div class="form-group col-sm-2 col-lg-2">
            <label>Type<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="type_id" required="">
                <option value="">Select</option>
                    @foreach($data['types'] as $type)
                        <option value="{{ $type->id }}" @if($type->id == $edit->id) Selected @endif >{{ $type->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group col-sm-2">
            <label>Quality</label>
            <select class="form-control" name="quality_ids">
                <option value="">Select</option>
                <option value="1" @if($edit->quality_ids == 1) Selected @endif>HD</option>
                <option value="2" @if($edit->quality_ids == 2) Selected @endif>HDRip</option>
                <option value="3" @if($edit->quality_ids == 3) Selected @endif>SD</option>
                <option value="4" @if($edit->quality_ids == 4) Selected @endif>CAM</option>
                <option value="5" @if($edit->quality_ids == 5) Selected @endif>TS</option>
            </select>
        </div>
        <div class="form-group col-sm-2 col-lg-2">
            <label>Year<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="year_id" required="">
                <option value="">Select</option>
                    @foreach($data['years'] as $year)
                        <option value="{{ $year->id }}" @if($year->id == $edit->year_id) selected @endif >{{ $year->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group col-sm-2">
            <br>
            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
                <input type="checkbox" name="latest" value="1" @if($edit->latest == 1) checked @endif> Latest
                <span></span>
            </label>
        </div>
    </div>
</div>
