<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-2">
            <label>Title<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="title" value="{{$data['edit']->title}}"  placeholder="Enter Title" class="form-control" required>
        </div>
        <div class="form-group col-sm-2">
            <label>Image</label>
            <input type="file" name="image"  class="form-control">
        </div>

        <div class="form-group col-sm-3">
            <label>Url</label>
            <input type="text" name="url" value="{{$data['edit']->url}}" placeholder="Enter url" class="form-control">
        </div>
        <div class="form-group col-sm-2">
            <label>Description</label>
            <input type="text" name="description" value="{{$data['edit']->description}}" placeholder="Enter Description" class="form-control">
        </div>

    </div>
</div>
