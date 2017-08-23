@extends('admin.main')
@section('add')
<a href="{{url('admin/newuser')}}">
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary">Add User</button>
		</div>
	</div>
</a>


@endsection
@section('content')
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>S.N</th>
				<th>User's Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $key=>$user)
			<tr>
				<td>{{++$key}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->role}}</td>
				<td>
					<a href="{{url('admin/edituser/'.$user->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
					<a href="{{url('admin/deleteuser/'.$user->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
		<tfoot></tfoot>
		
	</table>
@endsection