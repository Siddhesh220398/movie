<div class="kt-portlet__body">
	<div class="row">
		<div class="form-group col-sm-3">
			<label>Name<span class="requied_field" style="color : #e3001b;">*</span></label>
			<input type="text" name="name" placeholder="Enter Name" class="form-control" required>
		</div>
		<div class="form-group col-sm-3">
			<label>Email<span class="requied_field" style="color : #e3001b;">*</span></label>
			<input type="text" class="form-control" placeholder="Enter Email" name="email" required>
		</div>
		<div class="form-group col-sm-3">
			<label>Password<span class="requied_field" style="color : #e3001b;">*</span></label>
			<input type="text" class="form-control" placeholder="Enter Password" name="password" required>
		</div>
		<div class="form-group col-sm-3">
			<label>Role<span class="requied_field" style="color : #e3001b;">*</span></label>
			<select class="form-control" required name="role">
				<option value="">Select</option>
				<option value="1">Admin</option>
				<option value="2">User</option>
			</select>
		</div>
		<div class="form-group col-sm-3">
			<label>Image</label>
			<input type="file" name="image" class="form-control">
		</div>
	</div>
</div>
