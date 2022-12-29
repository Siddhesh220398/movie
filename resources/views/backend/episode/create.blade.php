<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-2">
            <label>Title<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="title"  placeholder="Enter Title" class="form-control" required>
            <input type="hidden" name="season_id"  value="{{$id}}">
        </div>
        <div class="form-group col-sm-2">
            <label>Url<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="url"  placeholder="Enter Url" class="form-control" required>
        </div>
        <div class="form-group col-sm-2">
            <label>Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
    </div>
</div>
