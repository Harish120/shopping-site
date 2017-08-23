@extends('admin.main')
@section('content') 
<form class="form-horizontal" action="{{url('admin/saveuser')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="name" class="col-sm-2 comtrol-label">User's Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
		</div>
	</div>

	<div class="form-group">
		<label for="email" class="col-sm-2 comtrol-label">Email</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" name="email" placeholder="Email">
		</div>
	</div>

	<div class="form-group">
		<label for="password" class="col-sm-2 comtrol-label">Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="password" name="password">
		</div>
	</div>

	<div class="form-group">
		<label for="role" class="col-sm-2 comtrol-label">Role</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="role" name="role" placeholder="Role">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
	
</form>
@endsection