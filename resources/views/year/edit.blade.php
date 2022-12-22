@php $edit = $data['edit'];
@endphp
<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-3 col-lg-2">
            <label>Name<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="name" class="form-control" value="{{$edit->name}}" placeholder="Enter Name" required="">
        </div>
    </div>
</div>
