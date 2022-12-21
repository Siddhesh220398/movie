@php $edit = $data['edit'];
@endphp
<div class="kt-portlet__body">
    <div class="row">
        <div class="form-group col-sm-3 col-lg-2">
            <label>Name<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" name="name" class="form-control" value="{{$edit->name}}" placeholder="Enter Name" required="">
        </div>
        <div class="form-group col-sm-2">
            <label>Email<span class="requied_field" style="color : #e3001b;">*</span></label>
            <input type="text" class="form-control" value="{{$edit->email}}"  placeholder="Enter Email" name="email" required>
        </div>
        <div class="form-group col-sm-2">
            <label>Password</label>
            <input type="text" value="{{$edit->show_password}}" class="form-control" readonly >
        </div>
        <div class="form-group col-sm-2">
            <label>Change Password</label>
            <input type="text" name="password" class="form-control">
            <span>Enter only if you want to change your password</span>
        </div>
        <div class="form-group col-sm-2">
            <label>Role<span class="requied_field" style="color : #e3001b;">*</span></label>
            <select class="form-control" required name="role">
                <option value="">Select</option>
                <option value="1" @if($edit->role == 1) selected @endif >Admin</option>
                <option value="2" @if($edit->role == 2) selected @endif>User</option>
            </select>
        </div>
        <div class="form-group col-sm-2">
            <label>Phone Number</label>
            <input type="text" name="number" value="{{$edit->number}}" placeholder="Enter Number"class="form-control" >
        </div>
        <div class="form-group col-sm-2 col-lg2">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        @if($edit->image)
            <div class="form-group col-sm-2 col-lg2">
                <img src="{{url($edit->image)}}" height="50" width="50" style="border:3px solid black">
            </div>
        @endif
        <div class="form-group col-sm-3">
            <label>Gender</label>
            <div class="kt-radio-list">
                <label class="kt-radio kt-radio--bold kt-radio--brand">
                    <input type="radio" value="1" name="gender" @if($edit->gender == 1) checked @endif> Male
                    <span></span>
                </label>
                <label class="kt-radio kt-radio--bold kt-radio--brand">
                    <input type="radio" value="2" name="gender" @if($edit->gender == 2) checked @endif> Female
                    <span></span>
                </label>
            </div>
        </div>

    </div>
</div>
