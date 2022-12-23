<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-2">
            <label>Title<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="title"  placeholder="Enter Title" class="form-control" required>
        </div>
        <div class="form-group col-sm-2 col-lg-2">
            <label>Genre<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="genre_id" required="">
                <option value="">Select</option>
                @if(!empty($genres))
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}" >Selected{{ $genre->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-sm-3">
            <label>Cast</label>
            <input type="text" name="cast"  placeholder="Enter Cast" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Production</label>
            <input type="text" name="production"  placeholder="Enter Production" class="form-control">
        </div>
        <div class="form-group col-sm-3">
            <label>Description<span class="requied_field" style="color : #e3001b;">*</span></label>
            <textarea type="text" class="form-control" placeholder="Enter Email" name="description" required></textarea>
        </div>
        <div class="form-group col-sm-2 col-lg-2">
            <label>Country<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="country_id" required="">
                <option value="">Select</option>
                @if(!empty($countrys))
                    @foreach($countrys as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-sm-2">
            <label>Duration</label>
            <input type="number" name="duration" placeholder="Enter Duration (Min)" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Imdb_rates</label>
            <input type="text" name="imdb_rates	" placeholder="Enter IMDB Rates" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Video</label>
            <input type="file" name="video" class="form-control">
        </div>
        <div class="form-group col-sm-2 col-lg-2">
            <label>Type<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="type_id" required="">
                <option value="">Select</option>
                @if(!empty($types))
                    @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group col-sm-2">
            <label>Quality</label>
            <select class="form-control" name="quality_ids">
                <option value="">Select</option>
                <option value="1">HD</option>
                <option value="2">HDRip</option>
                <option value="3">SD</option>
                <option value="4">CAM</option>
                <option value="5">TS</option>
            </select>
        </div>
        <div class="form-group col-sm-2 col-lg-2">
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
        <div class="form-group col-sm-2">
            <br>
            <label class="kt-checkbox kt-checkbox--bold kt-checkbox--brand">
                <input type="checkbox" name="latest" value="1"> Latest
                <span></span>
            </label>
        </div>
    </div>
</div>
