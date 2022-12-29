@php $edit = $data['edit'];
@endphp
<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-4">
            <label>Title<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="title" value="{{$edit->title}}" placeholder="Enter Title" class="form-control"
                   required>
        </div>
        <div class="form-group col-sm-4">
            <label>Url<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="url" value="{{$edit->url}}" placeholder="Enter Url" class="form-control" required>
        </div>

        <div class="form-group col-sm-4">
            <label>Thumbnail</label>
            <input type="file" name="thumbnail" class="form-control">
        </div>
        @if($edit->url)
        <div class="form-group col-sm-6">
            <video width="850" height="300" controls>
                <source src="{{$edit->url}}" type="video/webm">

            </video>
        </div>
        @endif
        @if($edit->thumbnail)
            <div class="form-group col-sm-6">
                <img src="{{url($edit->thumbnail)}}" height="400" width="400" style="border:3px solid black">
            </div>
        @endif
    </div>
</div>
