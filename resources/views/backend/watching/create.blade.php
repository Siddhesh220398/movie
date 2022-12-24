<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-2 col-lg-2">
            <label>Movie<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="movie_id" required="">
                <option value="">Select</option>
                @foreach($movies  as $k=>$c)
                    <option value="{{ $c->id }}">Selected{{ $c->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-2 col-lg-2">
            <label>User<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" name="user_id" required="">
                <option value="">Select</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-sm-2">
            <label>Duration</label>
            <input type="time" name="duration" placeholder="Enter Duration (Min)" class="form-control">
        </div>
    </div>
</div>
