@extends('members.main')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" action="{{url('members/updateprofile')}}" method="post">
{{csrf_field()}}
	<div class="form-group">
		<label for="name" class="col-sm-2 comtrol-label">Name</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" name="name" value="{{$profile->name}}">
		</div>
	</div>

	<div class="form-group">
		<label for="price" class="col-sm-2 comtrol-label">Email</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="email" name="email" value="{{$profile->email}}">
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-sm-2 comtrol-label">New Password</label>
		<div class="col-sm-10">
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Save</button>
		</div>
	</div>
</form>
@endsection